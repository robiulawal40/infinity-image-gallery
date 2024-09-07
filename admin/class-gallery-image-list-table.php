<?php
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
// WP_List_Table is not loaded automatically so we need to load it in our application
if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
}
/**
 * Create a new table class that will extend the WP_List_Table
 */
class WPIG_Images_List_Table extends WP_List_Table {
	/**
	 * Prepare the items for the table to process
	 *
	 * @return Void
	 */
	public function prepare_items() {
		$this->get_attachment_ids();
		$columns  = $this->get_columns();
		$hidden   = $this->get_hidden_columns();
		$sortable = $this->get_sortable_columns();

		// For Bulk Actions
		$action = $this->current_action();
		if ( $action == 'remove' ) {
			if ( $_POST['attachment'] ) {
				$attachment_ids = array_map( 'sanitize_text_field', $_POST['attachment'] );
				wpig_remove_attachment_gallery_image( $this->get_post_id(), $attachment_ids );
				// foreach ( $attachment_ids as $attachment_id ) {
				// }
			}
		} elseif ( $action == 'delete' ) {
			if ( $_POST['attachment'] ) {
				$attachment_ids = array_map( 'sanitize_text_field', $_POST['attachment'] );
				foreach ( $attachment_ids as $attachment_id ) {
					delete_attachment_gallery_image( $attachment_id );
				}
			}
		}

		$perPage     = 20;
		$currentPage = $this->get_pagenum();
		// $totalItems  = count( $data );
		// $args['post__in']       = $this->selected_attachment_ids;
		$this->set_pagination_args(
			array(
				'total_items' => wpig_get_total_attachment(
					array(
						'orderby' => isset( $_GET['orderby'] ) ?: '',
						'order'   => isset( $_GET['order'] ) ?: '',
						'post_in' => $this->get_attachment_ids(),
					)
				),
				'per_page'    => $perPage,
			)
		);

		// $data = [];
		$data = $this->table_data();

		$this->_column_headers = array( $columns, $hidden, $sortable, 'branch_id' );
		$this->items           = $data;
	}
	/**
	 * @return mixed
	 */
	public function get_post_id() {
		global $post;
		return $post->ID;
	}

	public function get_attachment_ids() {
		global $post;
		$ids = get_post_meta( $post->ID, WPIG_IMAGES, true );
		if ( is_array( $ids ) ) {
			return array_merge( array( 1 ), $ids );
		} else {
			return array( 1 );
		}

		// Not Working: Don't know why
		// include_once WPIGDIR . 'admin/options-array.php';
		// foreach ( $options as $key => $option ) {
		// $id = $option['id'];
		// if ( metadata_exists( 'post', $this->post_id, $id ) ) {

		// $this->{$id} = get_post_meta( $this->post_id, $id, true );
		// } else {
		// $this->{$id} = $option['std'];
		// }

		// }
	}

	/**
	 * @return mixed
	 */
	public function get_bulk_actions() {
		$actions = array(
			'remove' => 'Remove From Gallery',
			'delete' => 'Delete',
		);
		return $actions;
	}

	/**
	 * Override the parent columns method. Defines the columns to use in your listing table
	 *
	 * @return Array
	 */
	public function get_columns() {
		$columns = array(
			'cb'           => '<input type="checkbox" />',
			'ID'           => 'ID',
			'image'        => 'Image',
			'post_title'   => 'Title',
			// 'alt_text'     => 'ALT Text',
			'post_content' => 'Description',
			'post_excerpt' => 'Caption',
			// 'keywords'     => 'Keywords',
		);

		return $columns;
	}

	/**
	 * Define which columns are hidden
	 *
	 * @return Array
	 */
	public function get_hidden_columns() {
		return array();
	}

	/**
	 * Define the sortable columns
	 *
	 * @return Array
	 */
	public function get_sortable_columns() {
		return array(
			'ID'         => array( 'ID', false ),
			'post_title' => array( 'title', false ),
		);
		// return array('title' => array('title', false));
	}

	/**
	 * Get the table data
	 *
	 * @return Array
	 */
	private function table_data() {
		$data = array();

		// echo "<pre>";
		// print_r( $this->get_attachment_ids() );
		// echo "</pre>";
		// exit;

		$per_page               = $this->_pagination_args['per_page'];
		$args['posts_per_page'] = $per_page;
		$args['orderby']        = sanitize_text_field( isset( $_GET['orderby'] ) ?: '' );
		$args['order']          = sanitize_text_field( isset( $_GET['order'] ) ?: '' );
		$args['post__in']       = $this->get_attachment_ids();
		$args['offset']         = ( $this->get_pagenum() - 1 ) * $per_page;

		return wpig_get_attachment( $args );
	}

	/**
	 * @param $item
	 * @param $column_name
	 * @return mixed
	 */

	/**
	 * @param $item
	 */
	/**
	 * @param $item
	 */
	/**
	 * @param $item
	 */
	/**
	 * @param $item
	 */
	/**
	 * @param $item
	 */
	/**
	 * @param $item
	 */
	/**
	 * @param $item
	 */
	/**
	 * @param $item
	 */
	/**
	 * @param $item
	 */
	/**
	 * @param $item
	 */
	public function column_default( $item, $column_name ) {
		switch ( $column_name ) {
			case 'ID':
			case 'post_title':
			case 'post_excerpt':
				return $item->{$column_name};
			case 'post_content':
				return $item->{$column_name};

			default:
				return print_r( $item, true );
		}
	}
	/**
	 * @param $item
	 */
	function column_cb( $item ) {
		return sprintf(
			'<input type="checkbox" name="attachment[]" value="%s" />',
			$item->ID
		);
	}
	/**
	 * @param $item
	 */
	function column_image( $item ) {
		$thumbnail = wp_get_attachment_image_src( $item->ID, 'thumbnail' );
		// return print_r(  );
		// return get_the_post_thumbnail( $item->ID, 'thumbnail' );
		return sprintf( '<img  src="%s" width="50px" height="50px"/>', $thumbnail[0] );
	}
	function column_keywords( $item ) {
		return get_post_meta( $item->ID, '_wp_attachment_image_keywords', true );
	}

	/**
	 * @param $item
	 */
	public function column_actions( $item ) {
		echo "<a href='?edit=true'>Edit</a>";
	}

	/**
	 * @param $item
	 */
	function column_ID( $item ) {
		$actions = array(
			'edit'   => sprintf( '<a class="edit-button" href="%s" data-attachment="%s">Edit</a>', get_edit_post_link( $item->ID, 'display' ), $item->ID ),
			'remove' => sprintf( '<a class="remove-button" href="?page=%s&action=%s"  data-attachment="%s">Remove From Gallery</a>', isset( $_REQUEST['page'] ) ?: '', 'remove_from_gallery', $item->ID ),
			'delete' => sprintf( '<a class="delete-button" href="?page=%s&action=%s"  data-attachment="%s">Delete</a>', isset( $_REQUEST['page'] ) ?: '', 'delete', $item->ID ),
		);

		// if ( $item['branch_status'] == "active" ) {
		// unset( $actions['delete'] );
		// unset( $actions['active'] );
		// } else {
		// unset( $actions['de-active'] );
		// }

		return sprintf( '%1$s %2$s', $item->ID, $this->row_actions( $actions ) );
	}

	/**
	 * Allows you to sort the data by the variables set in the $_GET
	 *
	 * @return Mixed
	 */
	private function sort_data( $a, $b ) {
		// Set defaults
		$orderby = 'title';
		$order   = 'asc';

		// If orderby is set, use this as the sort column
		if ( ! empty( $_GET['orderby'] ) ) {
			$orderby = sanitize_text_field( $_GET['orderby'] );
		}

		// If order is set use this as the order
		if ( ! empty( $_GET['order'] ) ) {
			$order = sanitize_text_field( $_GET['order'] );
		}

		$result = strcmp( $a[ $orderby ], $b[ $orderby ] );

		if ( $order === 'asc' ) {
			return $result;
		}

		return -$result;
	}

	/**
	 * @param $column
	 * @param $post_id
	 */
	// public function render_columns( $column, $post_id ) {
	// $this->prepare_row_data( $post_id );

	// if ( ! $this->object ) {
	// return;
	// }

	// if ( is_callable( array( $this, 'render_' . $column . '_column' ) ) ) {
	// $this->{"render_{$column}_column"}();
	// }
	// }

	// public function render_actions_column() {
	// echo "<a href='?delete=true'>Delete</a>";
	// }
}
