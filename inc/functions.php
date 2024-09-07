<?php
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
/**
 * @param $post_id
 * @param $attachment_ids
 */
function wpig_remove_attachment_gallery_image( $post_id, $attachment_ids ) {

	$current_attachments = get_post_meta( $post_id, WPIG_IMAGES, true );
	if ( is_array( $current_attachments ) ) {

		$new_attachments = array_filter(
			$current_attachments,
			function ( $attachment ) use ( $attachment_ids ) {
				return ! in_array( $attachment, $attachment_ids );
			}
		);

		$new_attachments = array_values( array_unique( array_merge( $new_attachments ) ) );
	}
	update_post_meta( $post_id, WPIG_IMAGES, $new_attachments );

	// return update_post_meta( $id, "_wspg", 0 );
}

/**
 * @param $id
 * @param $attachment_ids
 */
function wpig_make_attachment_gallery_image( $post_id, $attachment_ids ) {

	$current_attachments = get_post_meta( $post_id, WPIG_IMAGES, true );
	if ( is_array( $current_attachments ) ) {
		$new_attachments = array_values( array_unique( array_merge( $attachment_ids, $current_attachments ) ) );
	} else {
		$new_attachments = array_unique( $attachment_ids );
	}
	// wp_send_json_success( $new_attachments );
	update_post_meta( $post_id, WPIG_IMAGES, $new_attachments );
	return $new_attachments;
}

function wpig_attachment_to_gallery() {
	if ( ! wp_verify_nonce( $_POST['nonce'], 'wpig_attachment_to_gallery' ) ) {
		wp_send_json_success( 'Nonce Failed' );
	}
	// $attachment_id = sanitize_text_field( $_POST['attachment_id'] );

	$attachment_ids = array_map( 'sanitize_text_field', $_POST['attachment_id'] );
	$post_id        = sanitize_text_field( $_POST['post_id'] );
	$redirect_url   = '';
	if ( 'publish' != get_post_status( $post_id ) ) {
		$wpig_post = array(
			'ID'          => $post_id,
			'post_status' => 'publish',
		);
		if ( wp_update_post( $wpig_post ) ) {
			$redirect_url = admin_url( 'post.php?post=' . $post_id . '&action=edit' );
			// $redirect_url = get_edit_post_link( $post_id );
		} else {
			wp_send_json( 'Post is Not published' );
		}
	}

	$update_attachments = wpig_make_attachment_gallery_image( $post_id, $attachment_ids );
	// foreach ( $attachment_ids as $attachment_id ) {
	// }
	wp_send_json_success(
		array(
			'ids'          => $update_attachments,
			'redirect_url' => $redirect_url,
		)
	);
	// make_attachment_gallery_image( $attachment_id );
	// wp_send_json($data)
	return true;
}
add_action( 'wp_ajax_wpig_attachment_to_gallery', 'wpig_attachment_to_gallery' );

function wpig_attachment_query_args() {
	return array(
		'post_type'      => 'attachment',
		'post_status'    => 'inherit',
		'post_mime_type' => 'image',

		// 'meta_key'       => '_wspg',
		// 'meta_value'     => '1',
		// 'meta_compare'   => '=',
		// 'meta_query'     => array(
		// array(
		// 'key'     => '_wspg',
		// 'value'   => '1',
		// 'compare' => '=',
		// ),
		// ),
	);
}

/**
 * @param array $args
 * @return mixed
 */
function wpig_get_attachment( $args = array() ) {

	// echo "<pre>";
	// print_r( $args );
	// echo "</pre>";
	// exit;
	$args  = wp_parse_args( $args, wpig_attachment_query_args() );
	$query = new WP_Query( $args );
	// $GLOBALS['wsgp_max_num_pages'] = $query->max_num_pages;
	// $GLOBALS['wsgp_found_posts']   = $query->found_posts;

	// echo "<pre>";
	// print_r( $args );

	// $query = new WP_Query( $args );

	// print_r( $query->found_posts );
	// echo "</pre>";
	// exit;

	return $query->get_posts();
}

/**
 * @param array $args
 * @return mixed
 */
function wpig_get_attachment_images( $args = array() ) {
	$attachments = wpig_get_attachment( $args );

	$attachment_metas = array();
	if ( $attachments ) {
		foreach ( $attachments as $attachment ) {
			$attachment_metas[] = wp_prepare_attachment_for_js( $attachment );
		}
	}
	return $attachment_metas;
}

/**
 * @return mixed
 */
function wpig_get_total_attachment( $args = array() ) {
	$args = wp_parse_args( $args, wpig_attachment_query_args() );

	// echo "<pre>";
	// print_r( $args['post_in'] );

	// //$query = new WP_Query( $args );

	// // print_r( $query->found_posts );
	// echo "</pre>";
	// exit;

	// return $query->found_posts;
	if ( is_array( $args['post_in'] ) ) {
		return count( $args['post_in'] );
	} else {
		return 0;
	}
}

function wpig_remove_attachment_to_gallery() {
	if ( ! wp_verify_nonce( $_POST['nonce'], 'wpig_attachment_to_gallery' ) ) {
		exit;
	}
	// $attachment_id = sanitize_text_field( $_POST['attachment_id'] );

	$attachment_ids = array_map( 'intval', $_POST['attachment_id'] );
	$post_id        = sanitize_text_field( $_POST['post_id'] );
	wpig_remove_attachment_gallery_image( $post_id, $attachment_ids );
	// foreach ( $attachment_ids as $attachment_id ) {
	// remove_attachment_gallery_image( $attachment_id );
	// }
	wp_send_json_success( $attachment_ids );
	// make_attachment_gallery_image( $attachment_id );
	// wp_send_json($data)
	return true;
}
add_action( 'wp_ajax_wpig_remove_attachment_to_gallery', 'wpig_remove_attachment_to_gallery' );

function wpig_delete_attachment_to_gallery() {
	if ( ! wp_verify_nonce( $_POST['nonce'], 'wpig_attachment_to_gallery' ) ) {
		exit;
	}
	// $attachment_id = sanitize_text_field( $_POST['attachment_id'] );

	$attachment_ids = array_map( 'intval', $_POST['attachment_id'] );
	foreach ( $attachment_ids as $attachment_id ) {
		wp_delete_attachment( $attachment_id, true );
	}
	wp_send_json_success( $attachment_ids );
	// make_attachment_gallery_image( $attachment_id );
	// wp_send_json($data)
	return true;
}
add_action( 'wp_ajax_wpig_delete_attachment_to_gallery', 'wpig_delete_attachment_to_gallery' );
