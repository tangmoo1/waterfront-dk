<?php 
	
	add_action( 'cmb2_admin_init', 'contact_metaboxes' );
	function contact_metaboxes() 
	{
		$prefix = 'contact_';

		 $cmb = new_cmb2_box( array(
	        'id'            => 'contact',
	        'title'         => __( 'Set up detail contact us page', 'cmb2' ),
	        'object_types'  => array( 'page', ), // Post type
	        'context'       => 'normal',
	        'priority'      => 'high',
	        'show_on' => array( 'key' => 'page-template', 'value' => 'contact-us.php' ),
	        'show_names'    => true, // Show field names on the left
	        // 'cmb_styles' => false, // false to disable the CMB stylesheet
	        // 'closed'     => true, // Keep the metabox closed by default
	    ) );

		$cmb->add_field( array(
	        'name'       => __( 'Headline section', 'cmb2' ),
	        //'desc'       => __( 'field description (optional)', 'cmb2' ),
	        'id'         => $prefix . 'headline',
	        'type'       => 'textarea',
    	) );

    	$cmb->add_field( array(
		    'name'    => 'Marketingchef',
		    //'desc'    => 'field description (optional)',
		    'id'      => $prefix .'marketingchef',
		    'type'    => 'textarea',
		) );

    	$cmb->add_field( array(
	        'name'       => __( 'driftchef', 'cmb2' ),
	        //'desc'       => __( 'field description (optional)', 'cmb2' ),
	        'id'         => $prefix . 'driftchef',
	        'type'       => 'textarea',
	        'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
    	) );

    	$cmb->add_field( array(
	        'name'       => __( 'Center Manager', 'cmb2' ),
	        //'desc'       => __( 'field description (optional)', 'cmb2' ),
	        'id'         => $prefix . 'Center-Manager',
	        'type'       => 'textarea',
	       
    	) );

    	$cmb->add_field( array(
		    'name'    => 'Leasing Manager',
		    'desc'    => 'field description (optional)',
		    'id'      => $prefix .'section2_content_right_side',
		    'type'    => 'textarea',
		) );
	}
?>