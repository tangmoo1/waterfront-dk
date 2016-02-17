<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */


    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_builder_radarsofthouse";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'redux_builder_radarsofthouse',
        'use_cdn' => TRUE,
        'display_name' => 'My theme option',
        'display_version' => '1.0.0',
        'page_title' => 'Theme Options',
        'update_notice' => 0,
        'admin_bar' => 0,
        'menu_type' => 'menu',
        'menu_title' => 'Theme Options',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon' => 'el el-broom',
            'icon_position' => 'left',
            'icon_color' => 'lightgray',
            'icon_size' => 'large',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Information', 'redux-framework-demo' ),
        'id'     => 'Information',
        //'desc'   => __( 'Information on this website', 'redux-framework-demo' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'logo-images',
                'type'     => 'media', 
                'class'    => 'img-responsive custom-img',
                //'url'      => true,
                'title'    => __('Logo images', 'redux-framework-demo'),
                'desc'     => __('This picture background should be transprent.', 'redux-framework-demo'),
                //'subtitle' => __('รูป logo ของ เว็บไซต์นี้', 'redux-framework-demo'),
                'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                ),
            ),
            array(
                'id'       => 'video-banner',
                'type'     => 'media', 
                'title'    => __('Video-banner', 'redux-framework-demo'),
                'desc'     => __('Video support only mp4.', 'redux-framework-demo'),
                'mode' => false
                //'subtitle' => __('รูป logo ของ เว็บไซต์นี้', 'redux-framework-demo'),
                
            ),
            array(
                'id'       => 'screenshot-video-banner',
                'type'     => 'media', 
                'title'    => __('screenshot video banner vertion', 'redux-framework-demo'),
                //'desc'     => __('This picture background should be transprent.', 'redux-framework-demo'),
                'mode' => false
                //'subtitle' => __('รูป logo ของ เว็บไซต์นี้', 'redux-framework-demo'),
                
            ),    
            array(
                'id'       => 'video-banner-mobile',
                'type'     => 'media', 
                'title'    => __('Video banner for mobile', 'redux-framework-demo'),
                'desc'     => __('Video support only mp4', 'redux-framework-demo'),
                'mode' => false
                //'subtitle' => __('รูป logo ของ เว็บไซต์นี้', 'redux-framework-demo'),
                
            ), 
            array(
                'id'       => 'screenshot-video-banner-mobile',
                'type'     => 'media', 
                'title'    => __('screenshot video banner vertion mobile', 'redux-framework-demo'),
                //'desc'     => __('This picture background should be transprent.', 'redux-framework-demo'),
                'mode' => false
                //'subtitle' => __('รูป logo ของ เว็บไซต์นี้', 'redux-framework-demo'),
                
            ),       
        )
    ) );

    // social media 
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Opening hours', 'redux-framework-demo' ),
        'id'     => 'opening-time',
        //'desc'   => __( 'Information on this website', 'redux-framework-demo' ),
        'icon'   => 'el el-time-alt',
        'fields' => array(
            array(
                'id'       => 'monday',
                'type'     => 'text',
                'title'    => __( 'monday', 'redux-framework-demo' ),
                //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'mandag 10.00 - 20.00',
            ),
             array(
                'id'       => 'tuesday',
                'type'     => 'text',
                'title'    => __( 'tuesday', 'redux-framework-demo' ),
                //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'tirsdag 10.00 - 20.00',
            ),
            array(
                'id'       => 'wednesday',
                'type'     => 'text',
                'title'    => __( 'wednesday', 'redux-framework-demo' ),
                //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'onsdag 10.00 - 20.00',
            ),
            array(
                'id'       => 'thursday',
                'type'     => 'text',
                'title'    => __( 'thursday', 'redux-framework-demo' ),
                //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'torsdag 10.00 - 20.00',
            ),
            array(
                'id'       => 'friday',
                'type'     => 'text',
                'title'    => __( 'friday', 'redux-framework-demo' ),
                //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'fredag 10.00 - 20.00',
            ),
            array(
                'id'       => 'saturday',
                'type'     => 'text',
                'title'    => __( 'saturday', 'redux-framework-demo' ),
                //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'lørdag 10.00 - 20.00',
            ),
            array(
                'id'       => 'sunday',
                'type'     => 'text',
                'title'    => __( 'sunday', 'redux-framework-demo' ),
                //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                'default'  => 'lørdag 10.00 - 20.00',
            ),
            
        )
    ) );

    // social media 
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Setup Footer', 'redux-framework-demo' ),
        'id'     => 'footer',
        //'desc'   => __( 'Information on this website', 'redux-framework-demo' ),
        'icon'   => 'el el-comment-alt',
        'fields' => array(
            array(
                'id'       => 'address-footer',
                'type'     => 'textarea',
                'title'    => __( 'address footer', 'redux-framework-demo' ),
                //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                //'default'  => 'Default Text',
            ),
             array(
                'id'       => 'email-address-footer',
                'type'     => 'text',
                'title'    => __( 'email address footer', 'redux-framework-demo' ),
                //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                //'default'  => 'Default Text',
            ),
            array(
                'id'       => 'instagram-api',
                'type'     => 'text',
                'title'    => __( 'instagram-url', 'redux-framework-demo' ),
                //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                //'default'  => 'Default Text',
            ),
            array(
                'id'       => 'facebook-api',
                'type'     => 'text',
                'title'    => __( 'fackbook-url', 'redux-framework-demo' ),
                //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                //'default'  => 'Default Text',
            ),
            
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'google analytic', 'redux-framework-demo' ),
        'id'     => 'google_analytic',
        //'desc'   => __( 'Information on this website', 'redux-framework-demo' ),
        'icon'   => 'el el-globe-alt',
        'fields' => array(
            array(
                'id'       => 'google_analytic_code',
                'icon'   => 'facebook',
                'type'     => 'textarea',
                'title'    => __( 'code google analytic', 'redux-framework-demo' ),
                //'subtitle' => __( 'ใส่ url facebook ที่ต้องการแสดงในเว็บไซต์นี้', 'redux-framework-demo' ),
                'desc'     => __( 'Field Description', 'redux-framework-demo' ),
                //'default'  => 'Default Text',
            ),
        )
    ) );

    // Redux::setSection( $opt_name, array(
    //     'title'  => __( 'Banner front pages', 'redux-framework-demo' ),
    //     'id'     => 'banner',
    //     //'desc'   => __( 'Information on this website', 'redux-framework-demo' ),
    //     'icon'   => 'el el-home',
    //     'fields' => array(
    //         array(
    //             'id'       => 'banner-images-1',
    //             'type'     => 'media', 
    //             'class'    => 'img-responsive custom-img',
    //             'url'      => true,
    //             'title'    => __('banner #1 show on front page'),
    //             'desc'     => __('<span class="desc-admin"> Upload a graphic to appear as a banner on the homepage. </span>', 'redux-framework-demo'),
    //             //'subtitle' => __('รูป logo ของ เว็บไซต์นี้', 'redux-framework-demo'),
    //             // 'default'  => array(
    //             //     'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
    //             // ),
    //         ),
    //         array(
    //             'id'       => 'text-banner-1',
    //             'type'     => 'textarea',
    //             'title'    => __( 'Text banner #1' , 'redux-framework-demo' ),
    //             // add icon 'title'    => __( 'Text banner #1'.'<img src="icon.png">' , 'redux-framework-demo' ),
    //             //'subtitle' => __( 'ใส่ url facebook ที่ต้องการแสดงในเว็บไซต์นี้', 'redux-framework-demo' ),
    //             //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
    //             //'default'  => 'Default Text',
    //         ),
    //         array(
    //             'id'       => 'banner-images-2',
    //             'type'     => 'media', 
    //             'class'    => 'img-responsive custom-img',
    //             'url'      => true,
    //             'title'    => __('banner #2 show on front page'),
    //             'desc'     => __('<span class="desc-admin"> Upload a graphic to appear as a banner on the homepage. </span>', 'redux-framework-demo'),
    //             //'subtitle' => __('รูป logo ของ เว็บไซต์นี้', 'redux-framework-demo'),
    //             // 'default'  => array(
    //             //     'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
    //             // ),
    //         ),
    //         array(
    //             'id'       => 'text-banner-2',
    //             'type'     => 'textarea',
    //             'title'    => __( 'Text banner #2', 'redux-framework-demo' ),
    //             //'subtitle' => __( 'ใส่ url facebook ที่ต้องการแสดงในเว็บไซต์นี้', 'redux-framework-demo' ),
    //             //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
    //             //'default'  => 'Default Text',
    //         ),
    //         array(
    //             'id'       => 'banner-images-3',
    //             'type'     => 'media', 
    //             'class'    => 'img-responsive custom-img',
    //             'url'      => true,
    //             'title'    => __('banner #3 show on front page'),
    //             'desc'     => __('<span class="desc-admin"> Upload a graphic to appear as a banner on the homepage. </span>', 'redux-framework-demo'),
    //             //'subtitle' => __('รูป logo ของ เว็บไซต์นี้', 'redux-framework-demo'),
    //             // 'default'  => array(
    //             //     'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
    //             // ),
    //         ),
    //         array(
    //             'id'       => 'text-banner-3',
    //             'type'     => 'textarea',
    //             'title'    => __( 'Text banner #3', 'redux-framework-demo' ),
    //             //'subtitle' => __( 'ใส่ url facebook ที่ต้องการแสดงในเว็บไซต์นี้', 'redux-framework-demo' ),
    //             //'desc'     => __( 'Field Description', 'redux-framework-demo' ),
    //             //'default'  => 'Default Text',
    //         ),
    //     )
    // ) );

  

    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Text', 'redux-framework-demo' ),
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="http://docs.reduxframework.com/core/fields/text/" target="_blank">http://docs.reduxframework.com/core/fields/text/</a>',
    //     'id'         => 'opt-text-subsection',
    //     'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'       => 'text-example',
    //             'type'     => 'text',
    //             'title'    => __( 'Text Field', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
    //             'desc'     => __( 'Field Description', 'redux-framework-demo' ),
    //             'default'  => 'Default Text',
    //         ),
    //         // array(
    //         //     'id'       => 'opt-media',
    //         //     'type'     => 'media', 
    //         //     'class'    => 'img-responsive custom-img',
    //         //     'url'      => true,
    //         //     'title'    => __('Media w/ URL', 'redux-framework-demo'),
    //         //     'desc'     => __('Basic media uploader with disabled URL input field.', 'redux-framework-demo'),
    //         //     'subtitle' => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
    //         //     'default'  => array(
    //         //         'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
    //         //     ),
    //         // ),
    //     )
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Text Area', 'redux-framework-demo' ),
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="http://docs.reduxframework.com/core/fields/textarea/" target="_blank">http://docs.reduxframework.com/core/fields/textarea/</a>',
    //     'id'         => 'opt-textarea-subsection',
    //     'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'       => 'textarea-example',
    //             'type'     => 'textarea',
    //             'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
    //             'desc'     => __( 'Field Description', 'redux-framework-demo' ),
    //             'default'  => 'Default Text',
    //         ),
    //     )
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title' => __( 'Basic Fields 1', 'redux-framework-demo' ),
    //     'id'    => 'basic_1',
    //     'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
    //     'icon'  => 'el el-network'
    // ) );

    //  Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Text Area', 'redux-framework-demo' ),
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="http://docs.reduxframework.com/core/fields/textarea/" target="_blank">http://docs.reduxframework.com/core/fields/textarea/</a>',
    //     'id'         => 'opt-textarea-subsection_2',
    //     'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'       => 'textarea-example',
    //             'type'     => 'textarea',
    //             'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
    //             'desc'     => __( 'Field Description', 'redux-framework-demo' ),
    //             'default'  => 'Default Text',
    //         ),
    //         array(
    //             'id'       => 'textarea-examplesdsas',
    //             'type'     => 'textarea',
    //             'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
    //             'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
    //             'desc'     => __( 'Field Description', 'redux-framework-demo' ),
    //             'default'  => 'Default Text',
    //         ),
    //         array(
    //             'id'       => 'opt-background',
    //             'type'     => 'background',
    //             'title'    => __('Body Background', 'redux-framework-demo'),
    //             'subtitle' => __('Body background with image, color, etc.', 'redux-framework-demo'),
    //             'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
    //             'default'  => array(
    //                 'background-color' => '#1e73be',
    //             )
    //         ),
    //     )
    // ) );

    /*
     * <--- END SECTIONS
     */
