<?php
/**
 * Register a custom post type called "infinite_gallery".
 *
 * @see get_post_type_labels() for label keys.
 */
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
function register_infinite_gallery() {
	$labels = array(
		'name'                             => _x( 'Gallery', 'Post type general name', 'textdomain' ),
		'singular_name'                    => _x( 'Gallery', 'Post type singular name', 'textdomain' ),
		'menu_name'                        => _x( 'Gallery', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'                   => _x( 'Gallery', 'Add New on Toolbar', 'textdomain' ),
		'add_new'                          => __( 'Add New Gallery', 'textdomain' ),
		'add_new_item'                     => __( 'Add New Gallery', 'textdomain' ),
		'new_item'                         => __( 'New Gallery', 'textdomain' ),
		'edit_item'                        => __( 'Edit Gallery', 'textdomain' ),
		'view_item'                        => __( 'View Gallery', 'textdomain' ),
		'all_items'                        => __( 'All Galleries', 'textdomain' ),
		'search_items'                     => __( 'Search Galleries', 'textdomain' ),
		'parent_item_colon'                => __( 'Parent Galleries:', 'textdomain' ),
		'not_found'                        => __( 'No Gallery found.', 'textdomain' ),
		'not_found_in_trash'               => __( 'No Gallery found in Trash.', 'textdomain' ),
		'featured_infinite_gallery'        => _x( 'Gallery Cover Gallery', 'Overrides the “Featured Gallery” phrase for this post type. Added in 4.3', 'textdomain' ),
		'set_featured_infinite_gallery'    => _x( 'Set cover Gallery', 'Overrides the “Set featured Gallery” phrase for this post type. Added in 4.3', 'textdomain' ),
		'remove_featured_infinite_gallery' => _x( 'Remove cover Gallery', 'Overrides the “Remove featured Gallery” phrase for this post type. Added in 4.3', 'textdomain' ),
		'use_featured_infinite_gallery'    => _x( 'Use as cover Gallery', 'Overrides the “Use as featured Gallery” phrase for this post type. Added in 4.3', 'textdomain' ),
		'archives'                         => _x( 'Gallery archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		'insert_into_item'                 => _x( 'Insert into Gallery', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		'uploaded_to_this_item'            => _x( 'Uploaded to this Gallery', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		'filter_items_list'                => _x( 'Filter Gallery list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		'items_list_navigation'            => _x( 'Galleries list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		'items_list'                       => _x( 'Galleries list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	);

	$args = array(
		'labels'                    => $labels,
		'public'                    => false,
		'publicly_queryable'        => false,
		'show_ui'                   => true,
		'show_in_menu'              => true,
		'query_var'                 => true,
		'show_in_admin_status_list' => false,
		'rewrite'                   => array( 'slug' => 'infinite_gallery' ),
		'capability_type'           => 'post',
		'has_archive'               => true,
		'hierarchical'              => false,
		'menu_position'             => 56,
		'supports'                  => array( 'title' ), // , 'thumbnail', 'custom-fields', 'editor'
		'menu_icon'                 => 'dashicons-screenoptions',
	);

	register_post_type( 'infinite_gallery', $args );
}

add_action( 'init', 'register_infinite_gallery' );

add_action( 'add_meta_boxes_infinite_gallery', 'meta_box_for_wpig' );
/**
 * @param $post
 */
function meta_box_for_wpig( $post ) {

	add_meta_box( 'wpig_metabox_id', __( 'Gallery Settings', 'wpig' ), 'wpig_html_output', 'infinite_gallery', 'side', 'high' );
}

/**
 * @param $post
 */
function wpig_html_output( $post ) {
	echo '<table class="form-table">';
	wp_nonce_field( basename( __FILE__ ), 'ns_meta_box_nonce' ); // used later for security
	// echo '<p><input type="checkbox" name="is_this_featured" value="checked" ' . get_post_meta( $post->ID, 'team_member_title', true ) . '/><label for="is_this_featured">' . __( 'Featured Product?', 'textdomain' ) . '</label></p>';
	// wpap_text_field( ['name' => 'selector', 'label' => 'Selector'], $post );
	// wpap_text_field( ['name' => 'infinite_gallery', 'label' => 'Gallery'], $post );

	include_once 'options-array.php';
	$input_fields = new NS_Plugin_Options( $options, $post->ID );
	$input_fields->display();
	// $image_list = new WPIG_Images_List_Table();
	// $image_list->prepare_items();
	// $image_list->display();
	?>
<style>
.suf-section {
	margin-bottom: 28px;
}
</style>

	<?php

	echo '</table>';
}

add_action( 'save_post_infinite_gallery', 'wpig_save_meta_data', 10, 2 );
/**
 * @param $post_id
 * @return null
 */
function wpig_save_meta_data( $post_id, $post ) {
	// check for nonce to top xss
	// echo "<pre>";
	// print_r( $_POST );
	// echo "</pre>";
	// exit;
	if ( ! isset( $_POST['ns_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['ns_meta_box_nonce'], basename( __FILE__ ) ) ) {
		return;
	}

	// check for correct user capabilities - stop internal xss from customers
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	// update fields
	include_once 'options-array.php';
	foreach ( $options as $key => $option ) {
		$id = $option['id'];
		if ( isset( $_REQUEST[ $id ] ) ) {
			if ( is_array( $_POST[ $id ] ) ) {
				$_value = array_map( 'sanitize_text_field', $_POST[ $id ] );
			} else {
				$_value = sanitize_text_field( $_POST[ $id ] );
			}
			update_post_meta( $post_id, $id, $_value );
		} elseif ( $option['type'] == 'checkbox' ) {
				update_post_meta( $post_id, $id, '' );
		}
	}
}

add_filter( 'enter_title_here', 'wpig_place_holder', 20, 2 );
/**
 * @param $title
 * @param $post
 * @return mixed
 */
function wpig_place_holder( $title, $post ) {

	if ( $post->post_type == 'infinite_gallery' ) {
		$title = __( 'Gallery Name', 'wpig' );
		return $title;
	}
	return $title;
}
add_action( 'edit_form_after_title', 'wpig_add_content_after_editor', 10, 1 );
/**
 * @param $post
 */
function wpig_add_content_after_editor( $post ) {

	if ( $post->post_type == 'infinite_gallery' ) {
		echo '<div style="margin-top: 20px;"><div>';
		echo '<p><h3 style="display: inline;">ShortCode</h3> <input type="text" class="regular-text" readonly value=\'[wpig id="' . esc_html( $post->ID ) . '"]\'/></p>';
		echo '</div></div>';

		echo '<div class="postbox"><div class="inside">';
		?>
<input class="button-primary" id="add_image_to_gallery" type="submit" name="add_image_to_gallery"
	value="<?php esc_attr_e( 'Add Image to Gallery' ); ?>" />

	<input class="button-secondary" id="preview_gallery" type="button" name="preview_gallery"
	value="<?php esc_attr_e( 'Preview Gallery' ); ?>" />
		<?php
		echo '</div></div>';

		echo '<fieldset class="wpig_list_table"><div class="postbox"><div class="inside">';
		echo '<table class="form-table ">';
		$image_list = new WPIG_Images_List_Table();
		$image_list->prepare_items();
		$image_list->display();
		echo '</table>';
		echo '</div></div></fieldset>';
	}
}
