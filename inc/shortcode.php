<?php
/**
 * @return mixed
 */
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
class WPIG_ShortCode {

	public $options, $style, $image_per_request, $orderby, $order, $post_id, $enable_infinite_scroll, $select_attachment_size, $end_content_text;

	public function __construct() {
		add_shortcode( 'wpig', array( $this, 'wpig_shortcode_init' ) );
	}

	/**
	 * @param $atts
	 */
	public function wpig_shortcode_init( $atts ) {
		$atts    = shortcode_atts( array( 'id' => '' ), $atts );
		$post_id = $atts['id'];
		$this->set_settings( $post_id );

		$attachment_ids = get_post_meta( $post_id, WPIG_IMAGES, true );
		// print_r( $attachment_ids );
		// exit;
		$paged = isset( $_GET['gallery'] ) ? sanitize_text_field( $_GET['gallery'] ) : 1;
		// $paged = ( get_query_var( 'gallery' ) ) ? get_query_var( 'gallery' ) : 1;
		// echo $paged;
		$args        = array(
			// 'post_in'  => array_values( $attachment_ids ),
			'post__in'       => array_values( $attachment_ids ),
			// 'per_page' => $this->image_per_request,
			'posts_per_page' => $this->style == 'style-3' ? -1 : $this->image_per_request,
			'orderby'        => $this->orderby, // title
			'order'          => $this->order, // 'DESC'
			'paged'          => $paged,
		);
		$attachments = wpig_get_attachment_images( $args );
		if ( $this->style == 'style-1' || $this->style == 'style-2' ) {
			$attachments_html = $this->wpig_prepare_attachment_html( $attachments );
		}

		if ( $this->style == 'style-3' ) {
			// Enqueue Only Scripts that will load on Footer

			$attachments_html = $this->wpig_prepare_attachment_html_new( $attachments );
		}

		$wrap_attachment = $this->wpig_wrap_attachment_html( $attachments_html );
		return $wrap_attachment;
	}

	/**
	 * @param $post_id
	 */
	public function set_settings( $post_id ) {
		$this->post_id = $post_id;
		$this->options = array();

		include_once WPIGDIR . 'admin/options-array.php';
		if ( isset( $options ) ) {
			foreach ( $options as $key => $option ) {
				$id = $option['id'];
				if ( metadata_exists( 'post', $this->post_id, $id ) ) {

					$this->{$id}          = get_post_meta( $this->post_id, $id, true );
					$this->options[ $id ] = get_post_meta( $this->post_id, $id, true );
				} else {
					$this->{$id}          = $option['std'];
					$this->options[ $id ] = $option['std'];

				}
			}
		}
		wp_localize_script( 'wpig-scripts', 'WPIG', array( 'enable_infinite_scroll' => $this->enable_infinite_scroll ) );
		wp_localize_script(
			'nanogallery2-starter',
			'WPIGNEW',
			array(
				'enable_infinite_scroll' => $this->enable_infinite_scroll,
				'options'                => $this->options,
			)
		);
		if ( $this->style == 'style-1' ) {
			wp_enqueue_script( 'wpig-scripts' );
		}
		if ( $this->style == 'style-2' ) {
			wp_enqueue_script( 'wpig-scripts' );
		}
		if ( $this->style == 'style-3' ) {
			wp_enqueue_script( 'nanogallery2-min' );
			wp_enqueue_script( 'nanogallery2-starter' );
		}
	}

	/**
	 * @return mixed
	 */
	public function style() {
		// ob_start();

		// if ( $this->style == 'style-3' ) {
		// return '<style  type="text/css"></style>';
		// }

		$image_width = ( 100 / intval( $this->column ) ) . '%';
		$neg_width   = ( intval( $this->column ) - 1 ) * intval( $this->gutter_size ) / intval( $this->column ) . 'px';

		$css = '.wppg-grid-wrapper {
                 background: ' . $this->background_color . ';
                }
                .wppg-grid-sizer,
                .wppg-grid-item {
                    width: calc(' . $image_width . ' - ' . $neg_width . ');
                    margin-bottom: ' . $this->gutter_size . 'px;
                }

                .wppg-gutter-sizer {
                    width: ' . $this->gutter_size . 'px;
                }
                @media only screen and (max-width: 768px) {
                    .wppg-grid-sizer,
                    .wppg-grid-item {
                        width: calc(50% - ' . $neg_width . ');
                    }
                  }

';

		return '<style  type="text/css">' . $css . '</style>';
	}

	/**
	 * @param array $attachments
	 * @return mixed
	 */
	public function wpig_prepare_attachment_html( $attachments = array() ) {
		$result = '';
		if ( is_array( $attachments ) ) {
			foreach ( $attachments as $attachment ) {

				if ( isset( $attachment['sizes'][ $this->select_attachment_size ] ) ) {
					$src = $attachment['sizes'][ $this->select_attachment_size ]['url'];
				} else {
					$src = end( $attachment['sizes'] )['url'];
				}
				$description = '';
				if ( $attachment['description'] ) {
					$description = '<p class="item-description">' . $attachment['description'] . '</p>';
				}
				// echo "<pre>";
				// print_r( $attachment );
				// print_r( $src );
				// echo "</pre>";
				$result .= '<div class="wppg-grid-item">
                <div class="item-content">
                    <img alt="' . $attachment['alt'] . '" title="' . $attachment['title'] . '" src="' . $src . '" />
                    ' . $description . '
                </div>
                </div>';
			}
		} else {
			$result .= 'No attachments Found';
		}
		return $result;
	}


	/**
	 * @param array $attachments
	 * @return mixed
	 */
	public function wpig_prepare_attachment_html_new( $attachments = array() ) {
		$result = '';
		$images = array();
		if ( is_array( $attachments ) ) {
			foreach ( $attachments as $attachment ) {

				if ( isset( $attachment['id'] ) ) {
					// $src = $attachment['sizes'][ $this->select_attachment_size ]['url'];

					$src_full      = wp_get_attachment_image_url( $attachment['id'], 'full' );
					$src_thumbnail = wp_get_attachment_image_url( $attachment['id'], 'medium' );
					$srcset        = wp_get_attachment_image_srcset( $attachment['id'], 'medium' );

				} else {
					$src = end( $attachment['sizes'] )['url'];
				}

				// $thumbnail_url = '';
				// if ( isset( $attachment['sizes']['thumbnail'] ) ) {
				// $thumbnail_url = $attachment['sizes']['thumbnail']['url'];
				// }

				$description = '';
				if ( $attachment['description'] ) {
					$description = $attachment['description'];
				}
				// echo '<pre>';
				// print_r( $attachment );
				// echo '</pre>';

				$images[] = array(
					'src_thumbnail' => $src_thumbnail,
					'src_full'      => $src_full,
					'srcset'        => $srcset,
					'alt'           => $description,
					'caption'       => $description,
					// 'img'           => wp_get_attachment_image( $attachment['id'], array( '300', '200' ), '' ),
				);
			}

			ob_start();

			include_once WPIGDIR . 'templates/design-3.php';

			// echo '<pre>';
			// print_r( $images );
			// echo '</pre>';

			$result = ob_get_clean();

		} else {
			$result .= 'No attachments Found';
		}
		return $result;
	}

	/**
	 * @param $attachment_html
	 * @return mixed
	 */
	public function wpig_wrap_attachment_html( $attachment_html ) {

		if ( $this->enable_infinite_scroll == 'on' ) {
			$viewMoreButton = '';
		} else {
			$viewMoreButton = '<div class="view_more">
            <button class="button view-more-button">View more</button>
            </div>';
		}

		$result = '
    <div class="wppg-grid-wrapper">
    <div class="wppg-grid">
        <div class="wppg-grid-sizer"></div>
        <div class="wppg-gutter-sizer"></div>
' . $attachment_html . '
    </div>

<div class="page-load-status">
    <div class="loader-ellips infinite-scroll-request">
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
        <span class="loader-ellips__dot"></span>
    </div>
    <p class="infinite-scroll-last no_more_image">' . $this->end_content_text . '</p>
    <p class="infinite-scroll-error request_error">' . __( 'Error', 'wpig' ) . '</p>
</div>
' . $viewMoreButton . '

</div>' . $this->style();
		return $result;
	}
}
new WPIG_ShortCode();
