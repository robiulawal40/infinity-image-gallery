<?php
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
$options = array(

	'column'                 => array(
		'name'    => 'Number of column for gallery',
		'desc'    => '',
		'id'      => 'column',
		'type'    => 'select',
		'parent'  => 'sidebar-setup',
		'std'     => '4',
		'options' => array(
			'2' => 'Two',
			'3' => 'Three',
			'4' => 'Four',
		),
	),
	'style'                  => array(
		'name'    => 'Style',
		'desc'    => '',
		'id'      => 'style',
		'type'    => 'select',
		'parent'  => 'sidebar-setup',
		'std'     => 'style-2',
		'options' => array(
			'style-1' => 'Style One',
			'style-2' => 'Style Two',
			'style-3' => 'Style Three',
		),
	),
	'background_color'       => array(
		'name'   => 'Background Color',
		'desc'   => '',
		'id'     => 'background_color',
		'type'   => 'color-picker',
		'parent' => 'sidebar-setup',
		'std'    => '#efefef',
	),
	'gutter_size'            => array(
		'name'   => 'Gutter Size (in px)',
		'desc'   => '',
		'id'     => 'gutter_size',
		'type'   => 'text',
		'parent' => 'sidebar-setup',
		'std'    => '10',
	),
	'enable_infinite_scroll' => array(
		'name'    => 'Enable Infinite Scroll',
		'desc'    => '',
		'id'      => 'enable_infinite_scroll',
		'type'    => 'checkbox',
		'parent'  => 'sidebar-setup',
		'std'     => 'on',
		'options' => array(
			'on' => 'On',
		),
	),
	'orderby'                => array(
		'name'    => 'Sort By',
		'desc'    => '',
		'id'      => 'orderby',
		'type'    => 'select',
		'parent'  => 'sidebar-setup',
		'std'     => 'date',
		'options' => array(
			'ID'       => __( 'Attachment ID', 'wpig' ),
			'title'    => __( 'Attachment Title', 'wpig' ),
			'name'     => __( 'Attachment Slug', 'wpig' ),
			'date'     => __( 'Attachment Date', 'wpig' ),
			'modified' => __( 'Attachment Last Modified Date', 'wpig' ),
			'rand'     => __( 'Random', 'wpig' ),
		),
	),
	'order'                  => array(
		'name'    => 'Order',
		'desc'    => '',
		'id'      => 'order',
		'type'    => 'select',
		'parent'  => 'sidebar-setup',
		'std'     => 'DESC',
		'options' => array(
			'ASC'  => __( 'Ascending', 'wpig' ),
			'DESC' => __( 'Descending', 'wpig' ),
		),
	),
	'image_per_request'      => array(
		'name'   => 'Image per Request',
		'desc'   => '',
		'id'     => 'image_per_request',
		'type'   => 'text',
		'parent' => 'sidebar-setup',
		'std'    => '10',
	),
	'select_attachment_size' => array(
		'name'    => 'Attachment Size',
		'desc'    => '',
		'id'      => 'select_attachment_size',
		'type'    => 'select',
		'parent'  => 'sidebar-setup',
		'std'     => 'full',
		'options' => array(
			'full'      => 'Full',
			'large'     => 'Large (787x525)',
			'medium'    => 'Medium (300x200)',
			'thumbnail' => 'thumbnail (150x150)',
		),
	),
	'end_content_text'       => array(
		'name'   => 'End Content Text',
		'desc'   => '',
		'id'     => 'end_content_text',
		'type'   => 'textarea',
		'parent' => 'sidebar-setup',
		'std'    => 'End of content',
	),

);
