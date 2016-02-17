<?php 
/*
Template Name: Shop
*/
$path = get_template_directory_uri();
$bannerVideo = $redux_builder_radarsofthouse['video-banner']['url'];
$bannerVideoMoblie = $redux_builder_radarsofthouse['video-banner-mobile']['url'];
$bannerVideoscreenShot = $redux_builder_radarsofthouse['screenshot-video-banner']['url'];
$bannerVideoscreenShotMobile = $redux_builder_radarsofthouse['screenshot-video-banner-mobile']['url'];
?>
<?php get_header(); ?>

<div class="container">
	<div class="row">
		<section id="container-banner-video" class="padding">
			<div class="banner">
				<!-- <video controls preload="none" poster="parrots-poster.jpg">  -->
				<div class="video-desktop">
					<div class="video">
						<video controls autoplay="autoplay" loop="true" preload="none" > 
						   	<source src="<?php echo $bannerVideo; ?>" type="video/mp4"> 
						</video> 	
					</div>
					<div class="screenShot">
						<img class="img-responsive" src="<?php echo $bannerVideoscreenShot; ?>">
					</div>
				</div>
				<div class="video-mobile">
					<video controls autoplay="autoplay" loop="true" preload="none" > 
					   	<?php 
					   		if ($bannerVideoMoblie) {
					   	?>
				   			 	<source src="<?php echo $bannerVideoMoblie; ?>" type="video/mp4"> 
					   	<?php
					   		}
					   		else
					   		{
					   	?>
					   			<source src="<?php echo $bannerVideo; ?>" type="video/mp4"> 
					   	<?php
					   			
					   		}
					   	?>
					   	
					</video> 	
				</div>
				
			</div>
		</section>
	</div>
	<section id="list-brand-category">
	<?php 
		wp_reset_query();
	   	$args = array(
	        'post_type' => array('clothes','foods','decorations','toys','health','services','groceries'),
	        'post_status' => 'publish',
	        'posts_per_page' => -1,
 			//'suppress_filters' => false,
    	);

	    $pages = get_posts($args);
	    foreach ($pages as $page )
	    {
    		$page_meta = get_post_custom($page->ID);
    		if (wp_get_attachment_image(get_post_thumbnail_id($page->ID), 'full',false, array( 'class' => 'img-responsive' ) )) 
    		{
    		
	?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
					
					<div class="row">
						<div class="img-bands">
							<a href="<?php echo get_page_link($page->ID) ?>"> 
								<?php echo wp_get_attachment_image(get_post_thumbnail_id($page->ID), 'full',false, array( 'class' => 'img-responsive' ) ); ?>
							</a>	 
						</div>
					</div>
				</div>
	<?php
			}
		}
	?>
	</section>
</div>


	

<?php get_footer(); ?>