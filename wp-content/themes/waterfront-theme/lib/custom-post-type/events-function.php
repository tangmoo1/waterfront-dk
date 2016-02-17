<?php


add_action( 'init', 'event_list' );



function event_list() 
{
	register_post_type('events', array(
	        'labels' => array(
	            'name' => __('List events', 'general'), // Tittel  header
	            'singular_name' => __('events', 'general'),
	            'add_new_item' => 'Add New events',
	            'edit_item' => 'Edit events',
	            'view_item' => 'events',
	            'all_items' => 'All events',
	            'search_items' => 'Search events',
	            'not_found' => 'No found events',
	            'not_found_in_trash' => 'No events found in trash',
	            'parent_item_colon' => '',
	            'menu_name' => 'Events', // main left side 
	    	),
	        'public' => true,
	        'has_archive' => true,
	        'supports' => array('title', 'editor', 'thumbnail'),
	        'menu_position' => 1,
	        'capabilities' => array('create_posts' => true), // Removes support for the "Add New" function
	        'map_meta_cap' => true,   // Set to false, if users are not allowed to edit/delete existing posts
        	'menu_icon' => 'dashicons-megaphone',
    	)
    );
}



add_action( 'cmb2_admin_init', 'events_metaboxes' );
function events_metaboxes() 
{
	$prefix = 'events_';

	 $cmb = new_cmb2_box( array(
        'id'         => $prefix.'image',
        'title'         => __( 'Description Events', 'cmb2' ),
        'object_types'  => array( 'events', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

	$cmb->add_field( array(
	    'name' => 'Test Date Picker',
	    'id'   => $prefix.'dateEvents',
	    'type' => 'text_date_timestamp',
	    // 'timezone_meta_key' => 'wiki_test_timezone',
	    // 'date_format' => 'l jS \of F Y',
	) );

	
	
	// $cmb->add_field( array(
	//     'name'    => 'Input phone number',
	//     'desc'    => 'field description (optional)',
	//     'id'      => $prefix.'phone',
	//     'type'    => 'text',
	// ) );
	
	// $cmb->add_field( array(
	//     'name'    => 'Input url website',
	//     'desc'    => 'field description (optional)',
	//     'id'      => $prefix.'url',
	//     'type'    => 'text',
	// ) );

	// $cmb->add_field( array(
	//     'name'    => 'Input opening time',
	//     'desc'    => 'field description (optional)',
	//     'id'      => $prefix.'open_time',
	//     'type'    => 'wysiwyg',
 //    	'options' => array(),
	// ) );

	
}



