<?php


add_action( 'init', 'food_category' );



function food_category() 
{
	register_post_type('foods', array(
	        'labels' => array(
	            'name' => __('List shop foods', 'general'), // Tittel  header
	            'singular_name' => __('Shop', 'general'),
	            'add_new_item' => 'Add New shop',
	            'edit_item' => 'Edit Shop',
	            'view_item' => 'Shop',
	            'all_items' => 'All Shop',
	            'search_items' => 'Search Shop',
	            'not_found' => 'No found Shop',
	            'not_found_in_trash' => 'No Shop found in trash',
	            'parent_item_colon' => '',
	            'menu_name' => 'Foods', // main left side 
	    	),
	        'public' => true,
	        'has_archive' => true,
	        'supports' => array('title', 'editor', 'thumbnail'),
	        'menu_position' => 3,
	        'capabilities' => array('create_posts' => true), // Removes support for the "Add New" function
	        'map_meta_cap' => true,   // Set to false, if users are not allowed to edit/delete existing posts
        	'menu_icon' => 'dashicons-store',
    	)
    );
}
add_action( 'cmb2_admin_init', 'foods_metaboxes' );
function foods_metaboxes() 
{
	$prefix = 'foods_';

	 $cmb = new_cmb2_box( array(
        'id'         => $prefix.'image',
        'title'         => __( 'Doods Shop', 'cmb2' ),
        'object_types'  => array( 'foods', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

	// $cmb->add_field( array(
	//     'name'    => 'logo shop',
	//     'desc'    => 'uoload or input url picture field :: 400 x 300 px (optional)',
	//     'id'      => $prefix.'logo_shop',
	//     'type' => 'file',
	//     'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	// ) );

	$cmb->add_field( array(
	    'name'    => 'Picture shop',
	    'desc'    => 'uoload or input url picture field :: 1170 x 936 px (optional)',
	    'id'      => $prefix.'image_shop',
	    'type' => 'file_list',
	    'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );

	$cmb->add_field( array(
	    'name'    => 'Color Background under Detail shop',
	    'id'      => $prefix.'colorBG',
	    'type'    => 'colorpicker',
	    'default' => '#fff2f2',
	) );
	

	$cmb->add_field( array(
	    'name'    => 'Input phone number',
	    'desc'    => 'field description (optional)',
	    'id'      => $prefix.'phone',
	    'type'    => 'text',
	) );
	
	$cmb->add_field( array(
	    'name'    => 'Input url website',
	    'desc'    => 'field description (optional)',
	    'id'      => $prefix.'url',
	    'type'    => 'text',
	) );

	$cmb->add_field( array(
	    'name'    => 'Input opening time',
	    'desc'    => 'field description (optional)',
	    'id'      => $prefix.'open_time',
	    'type'    => 'wysiwyg',
    	'options' => array(),
	) );

	
}



