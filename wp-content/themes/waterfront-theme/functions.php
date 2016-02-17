<?php
/**
*$slidesPerView: integer
*$futureEventCount: integer
*/
function addTempSlideItems($slidesPerView = 4, $futureEventCount)
{
    if($futureEventCount > $slidesPerView)
        $futureEventCount = $futureEventCount % $slidesPerView;

    if($slidesPerView == $futureEventCount)
        return;

    if(!empty($futureEventCount) && $futureEventCount > 0)
    {
        $loop = $slidesPerView - $futureEventCount;
        for($fnIndex=0;$fnIndex<$loop;$fnIndex++)
        {
            echo '<div class="swiper-slide"></div>';
        }
    }

    return;
} 

/* ----------------------------------------------------------------------------------- */
/* //Custom script
/*------------------------------------------------------------------------------------ */
function my_scripts() {
	
	wp_enqueue_script(
		'jquery',
		get_stylesheet_directory_uri() . '/js/jquery-2.1.4.min.js'
	);
     wp_enqueue_script(
        'swiper',
        get_stylesheet_directory_uri() . '/js/custom-script.js'
    );

	wp_enqueue_script(
		'website_bar_scripts',
		get_stylesheet_directory_uri() . '/js/swiper.min.js'
	);



}




/* ----------------------------------------------------------------------------------- */
/* //Debug
/*------------------------------------------------------------------------------------ */
function _debug($val, $highlight = FALSE)
{
    echo '<div style="background-color:black;color:white;padding:30px;">';
    echo 'data type is: '.gettype($val).'<br>';

    if(is_array($val))
    {
        
        echo '<pre>';
        if($highlight == TRUE)
            echo highlight_string(implode('', $val));
        else
            print_r($val);
        echo '</pre>';
    }


    if(is_object($val))
    {
        
        echo '<pre>';
        if($highlight == TRUE)
            echo highlight_string(implode('', $val));
        else
            print_r($val);
        echo '</pre>';
    }



    else if(is_string($val))
    {
        if($highlight == TRUE)
            echo '<pre>'.highlight_string($val).'</pre>';   
        else
            echo '<pre>'.$val.'</pre>'; 
    }


    else
    {
        if($highlight == TRUE)
            echo '<pre>'.highlight_string($val).'</pre>';   
        else
            echo '<pre>'.$val.'</pre>'; 
    }

    echo '</div>';
}


/* ----------------------------------------------------------------------------------- */
/* //Thumbnails
/*------------------------------------------------------------------------------------ */
add_theme_support( 'post-thumbnails' );  


/* ----------------------------------------------------------------------------------- */
/* //Bootstrap
/*------------------------------------------------------------------------------------ */
add_action( 'wp_enqueue_scripts', 'my_scripts' );
function wpbootstrap_scripts_with_jquery()
{
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );



/* ----------------------------------------------------------------------------------- */
/* //REMOVE MENU ADMIN
/*------------------------------------------------------------------------------------ */

function remove_menus() {
    // remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page('edit.php');                   //Posts
    // remove_menu_page( 'upload.php' );                 //Media
    //remove_menu_page( 'edit.php?post_type=page' );    //Pages
    // remove_menu_page( 'edit-comments.php' );          //Comments
    // remove_menu_page( 'themes.php' );                 //Appearance
    // remove_menu_page( 'plugins.php' );                //Plugins
    // remove_menu_page( 'users.php' );                  //Users
    // remove_menu_page( 'tools.php' );                  //Tools
    // remove_menu_page( 'options-general.php' );        //Settings
}
add_action('admin_menu', 'remove_menus');


function images_feed()
{
    // define main output
    $str    = "";
    // get remote data
    //$result = wp_remote_get( "https://api.instagram.com/v1/users/20886550/media/recent/?client_id=cde9765b75fb42208356e1897406697a" );

    $result = wp_remote_get( "https://api.instagram.com/v1/users/672532407/media/recent/?client_id=cde9765b75fb42208356e1897406697a" );
    if ( is_wp_error( $result ) ) {
        // error handling
        $error_message = $result->get_error_message();
        $str           = "Something went wrong: $error_message";
    } else {
        // processing further
        $result    = json_decode( $result['body'] ); //var_dump($result);
        $main_data = array();
        $n         = 0;

        // get username and actual thumbnail
        foreach ( $result->data as $d ) {
            $main_data[ $n ]['user']      = $d->user->username;
            $main_data[ $n ]['standard_resolution'] = $d->images->standard_resolution->url;
            $main_data[ $n ]['likes']        = $d->likes->count;
            $main_data[ $n ]['link']         = $d->link;
            $main_data[ $n ]['comments']     = $d->comments->count;
            $n++;
        }

        // create main string, pictures embedded in links
        foreach ( $main_data as $data ) {
           // $str .= '<div class="moment-image" style="margin-bottom:20px;"><a class="insta-image" target="_blank" href="'.$data['link'].'"><img src="'.$data['standard_resolution'].'" alt="'.$data['user'].' pictures" class="scale-with-grid"></a> <p> '.$data['likes']. ' </p> <p> '.$data['comments']. ' </p> </div>';
            $str .= '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                        <div class="row">
                            <a class="insta-image" target="_blank" href="'.$data['link'].'">
                                <div class="box-img-inspiration">
                                    <img class="img-responsive" src="'.$data['standard_resolution'] .'">
                                   
                                    <div class="overlat-hover-in">
                                        <div class="container-wrap-like-comment">
                                            <div class="wrap-like">
                                                <div class="In-like"> </div>
                                                <div class="count-like">'.$data['likes'] .'</div>
                                            </div>
                                            <div class="wrap-comment">
                                                <div class="In-comment"> </div>
                                                <div class="count-comment">'.$data['comments'].'</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>';
        }
    }

    return $str;
}

/* ----------------------------------------------------------------------------------- */
/* //Menu
/*------------------------------------------------------------------------------------ */

function register_my_menus() {
  register_nav_menus(
    array(
        'front-page' => __( 'Main Menu' ),
        // 'Sub-page' => __( 'Sub Page Menu' ),
        // 'sub-collection-menu' => __( 'Sub Collection Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );


/* ----------------------------------------------------------------------------------- */
/* metabox class
/*------------------------------------------------------------------------------------ */
// add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
// function be_initialize_cmb_meta_boxes() {
//     if ( !class_exists( 'cmb_Meta_Box' ) ) {
//         require_once( 'lib/metabox-new/init.php' );
//     }
// }

add_filter('custom_menu_order', 'my_custom_menu_order');
add_filter('menu_order', 'my_custom_menu_order');

function my_custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;
    return array(
        'index.php', // the dashboard link
        'edit.php?post_type=custom_post_type',
        'edit.php', // posts
        'upload.php'
            // add anything else you want, just get the url
    );
}

add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
    function add_featured_image_instruction( $content ) {
    return $content .= '<p> Image size 400 x 300 </p>';
}





require ( get_template_directory() . '/admin/admin-init.php');
require ( get_template_directory() . '/lib/custom-post-type/clothes-category.php');
require ( get_template_directory() . '/lib/custom-post-type/food-category.php');
require ( get_template_directory() . '/lib/custom-post-type/decorations-category.php');
require ( get_template_directory() . '/lib/custom-post-type/toy-category.php');
require ( get_template_directory() . '/lib/custom-post-type/health-category.php');
require ( get_template_directory() . '/lib/custom-post-type/services-category.php');
require ( get_template_directory() . '/lib/custom-post-type/groceries-category.php');
require ( get_template_directory() . '/lib/custom-post-type/events-function.php');
require ( get_template_directory() . '/lib/custom-post-type/contact-function.php');

?>