<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Radarsofthouse
*/
$path = get_template_directory_uri();
$bannerVideo = $redux_builder_radarsofthouse['video-banner']['url'];
$bannerVideoMoblie = $redux_builder_radarsofthouse['video-banner-mobile']['url'];
$bannerVideoscreenShot = $redux_builder_radarsofthouse['screenshot-video-banner']['url'];
$bannerVideoscreenShotMobile = $redux_builder_radarsofthouse['screenshot-video-banner-mobile']['url'];
?>

<?php get_header(); ?>
<?php 
// Background color
//echo 'URL value: '       . $redux_builder_website_bar['opt-media']['url'] . "<br>";

?>
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
	
		<section id="container-list-category" class="padding">
			<!-- Clothes -->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="row">
					<div class="container-list-main-category">
						<div class="front-list-main-category">
							<div class="box-list-main-category">
								<ul  class="list-main-category clothes">
									<li> mode </li>
									<li> beklædning </li>
									<li> accessories </li>
								</ul>
							</div>
							<div class="overlay-front-main-category"></div>
						</div>
						<div class="hover-list-shop-category">
							<div class="box-list-main-category">
								<ul class="list-hover-category clothes">
									<?php 
										wp_reset_query();
									    $args = array(
									        'post_type' => 'clothes',//array('clothes','toys'), //,

									        'post_status' => 'publish',
									    );

									    $pages = get_posts($args);
									    foreach ($pages as $page )
									    {
								    		$page_meta = get_post_custom($page->ID);
									?>
											<li> <a href="<?php echo get_page_link($page->ID) ?>"> <?php echo $page->post_title; ?> </a> </li>
									<?php
										}
									?>
								</ul>
							</div>
							<div class="overlay-hover-clothes-category"></div>
						</div>
						<img class="img-responsive" src="<?php echo $path; ?>/img/category/CPT-clothes.jpg">
					</div>
				</div>
			</div>
			<!-- FOOD -->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="row">
					<div class="container-list-main-category">
						<div class="front-list-main-category">
							<div class="box-list-main-category">
								<ul class="list-main-category foods">
									<li> cafeer </li>
									<li> restauranter </li>
								</ul>
							</div>
							<div class="overlay-front-main-category"></div>
						</div>
						<div class="hover-list-shop-category">
							<div class="box-list-main-category">
								<ul class="list-hover-category foods">
									<?php 
										wp_reset_query();
									    $args = array(
									        'post_type' => 'foods',
									        'post_status' => 'publish',
									    );

									    $pages = get_posts($args);
									    foreach ($pages as $page )
									    {
								    		$page_meta = get_post_custom($page->ID);
									?>
											<li> <a href="<?php echo get_page_link($page->ID) ?>"> <?php echo $page->post_title; ?> </a> </li>
									<?php
										}
									?>
								</ul>
							</div>
							<div class="overlay-hover-foods-category"></div>
						</div>
						<img class="img-responsive" src="<?php echo $path; ?>/img/category/CPT-food.jpg">
					</div>
				</div>
			</div>
			<!-- Decorations -->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="row">
					<div class="container-list-main-category">
						<div class="front-list-main-category">
							<div class="box-list-main-category">
								<ul class="list-main-category decorations">
									<li> Bolig </li>
									<li> Gaver </li>
									<!-- <li> Per Hillo </li>
									<li> Søstrene Grene </li> -->
								</ul>
							</div>
							<div class="overlay-front-main-category"></div>
						</div>
						<div class="hover-list-shop-category">
							<div class="box-list-main-category">
								<ul class="list-hover-category decorations">
									<?php 
										wp_reset_query();
									    $args = array(
									        'post_type' => 'decorations',
									        'post_status' => 'publish',
									    );

									    $pages = get_posts($args);
									    foreach ($pages as $page )
									    {
								    		$page_meta = get_post_custom($page->ID);
									?>
											<li> <a href="<?php echo get_page_link($page->ID) ?>"> <?php echo $page->post_title; ?> </a> </li>
									<?php
										}
									?>
								</ul>
							</div>
							<div class="overlay-hover-decoration-category"></div>
						</div>
						<img class="img-responsive" src="<?php echo $path; ?>/img/category/CPT-decoration.jpg">
					</div>
				</div>
			</div>
			<!-- Toy -->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="row">
					<div class="container-list-main-category">
						<div class="front-list-main-category">
							<div class="box-list-main-category">
								<ul class="list-main-category toys">
									<li> børn </li>
									<li> leg </li>
								</ul>
							</div>
							<div class="overlay-front-main-category"></div>
						</div>
						<div class="hover-list-shop-category">
							<div class="box-list-main-category">
								<ul class="list-hover-category toys">
									<?php 
										wp_reset_query();
									    $args = array(
									        'post_type' => 'toys',
									        'post_status' => 'publish',
									    );

									    $pages = get_posts($args);
									    foreach ($pages as $page )
									    {
								    		$page_meta = get_post_custom($page->ID);
									?>
											<li> <a href="<?php echo get_page_link($page->ID) ?>"> <?php echo $page->post_title; ?> </a> </li>
									<?php
										}
									?>
								</ul>
							</div>
							<div class="overlay-hover-toy-category"></div>
						</div>
						<img class="img-responsive" src="<?php echo $path; ?>/img/category/CPT-toy.jpg">
					</div>
				</div>
			</div>
			<!-- Health -->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="row">
					<div class="container-list-main-category">
						<div class="front-list-main-category">
							<div class="box-list-main-category">
								<ul class="list-main-category health">
									<li> personlig pleje </li>
								</ul>
							</div>
							<div class="overlay-front-main-category"></div>
						</div>
						<div class="hover-list-shop-category">
							<div class="box-list-main-category">
								<ul class="list-hover-category health">
									<?php 
										wp_reset_query();
									    $args = array(
									        'post_type' => 'health',
									        'post_status' => 'publish',
									    );

									    $pages = get_posts($args);
									    foreach ($pages as $page )
									    {
								    		$page_meta = get_post_custom($page->ID);
									?>
											<li> <a href="<?php echo get_page_link($page->ID) ?>"> <?php echo $page->post_title; ?> </a> </li>
									<?php
										}
									?>
								</ul>
							</div>
							<div class="overlay-hover-health-category"></div>
						</div>
						<img class="img-responsive" src="<?php echo $path; ?>/img/category/CPT-health.jpg">
					</div>
				</div>
			</div>
			<!-- Service -->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="row">
					<div class="container-list-main-category">
						<div class="front-list-main-category">
							<div class="box-list-main-category">
								<ul class="list-main-category services">
									<li> services </li>
								</ul>
							</div>
							<div class="overlay-front-main-category"></div>
						</div>
						<div class="hover-list-shop-category">
							<div class="box-list-main-category">
								<ul class="list-hover-category services">
									<?php 
										wp_reset_query();
									    $args = array(
									        'post_type' => 'services',
									        'post_status' => 'publish',
									    );

									    $pages = get_posts($args);
									    foreach ($pages as $page )
									    {
								    		$page_meta = get_post_custom($page->ID);
									?>
											<li> <a href="<?php echo get_page_link($page->ID) ?>"> <?php echo $page->post_title; ?> </a> </li>
									<?php
										}
									?>
								</ul>
							</div>
							<div class="overlay-hover-service-category"></div>
						</div>
						<img class="img-responsive" src="<?php echo $path; ?>/img/category/CPT-food.jpg">
					</div>
				</div>
			</div>
			<!-- Groceries -->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="row">
					<div class="container-list-main-category">
						<div class="front-list-main-category">
							<div class="box-list-main-category">
								<ul class="list-main-category groceries">
									<li> DAGLIGVARER </li>
								</ul>
							</div>
							<div class="overlay-front-main-category"></div>
						</div>
						<div class="hover-list-shop-category">
							<div class="box-list-main-category">
								<ul class="list-hover-category groceries">
									<?php 
										wp_reset_query();
									    $args = array(
									        'post_type' => 'groceries',
									        'post_status' => 'publish',
									    );

									    $pages = get_posts($args);
									    foreach ($pages as $page )
									    {
								    		$page_meta = get_post_custom($page->ID);
									?>
											<li> <a href="<?php echo get_page_link($page->ID) ?>"> <?php echo $page->post_title; ?> </a> </li>
									<?php
										}
									?>
								</ul>
							</div>
							<div class="overlay-hover-groceries-category"></div>
						</div>
						<img class="img-responsive" src="<?php echo $path; ?>/img/category/CPT-groceries.jpg">
					</div>		
				</div>
			</div>
			<!-- subscribe -->
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="row">
					<div class="container-list-main-category">
						<div class="form-subscribe">
							<div class="title-subscribe">
								<p>Tilmeld dig vores NYHEDSBREV<br> — </p> 
							</div>
							<div class="desc-subscribe">
								<span> 
									Tilmeld dig og få invitationer til førudsalg og VIP-arrangementer, eksklusive tilbud, trends og inspiration direkte i din inbox.
									Du kan til enhver tid afmelde dig igen.
								</span>
							</div>
							<div class="contact-form">
								<?php echo do_shortcode('[contact-form-7 id="52" title="subscribe"]'); ?>
							</div>
						</div>
					</div>		
				</div>
			</div>
		</section>
	</div>
	
</div>






<?php get_footer(); ?>