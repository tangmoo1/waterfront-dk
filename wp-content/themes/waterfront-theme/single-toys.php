<?php 
	$path = get_template_directory_uri();
	get_header(); 
	$post_type = get_post_type( $post->ID );
	$postID = $post->ID; 
?>
<?php
	$query = new WP_Query(array('p' =>$post->ID, 'post_type' => 'toys'));
	$query->the_post();
	$prefix = 'toys_';

	$imageShop 	 	=	get_post_meta($post->ID, $prefix . 'image_shop',true);
	$colorBg  		=	get_post_meta($post->ID, $prefix . 'colorBG',true);
	$phoneNumber  	=	get_post_meta($post->ID, $prefix . 'phone',true);
	$phoneUrl  		=	get_post_meta($post->ID, $prefix . 'url',true);
	$openTime  		=	get_post_meta($post->ID, $prefix . 'open_time',true);
	//_debug($colorBg);
?>
<div class="container">
	<div class="row">
		<div class="margin-detail">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="row">
					<div class="padding">
						<div class="swiper-image-shop">
					        <div class="swiper-wrapper">
					           	<?php 
						           	$images_slide = get_post_meta($post->ID, $prefix.'image_shop',true); 

									foreach ($images_slide as $image_slide) 
									{
								?>
									<div class="swiper-slide">
										<img class="img-responsive custom-imgrespomsive" src="<?php echo $image_slide ?>">
									</div>
								<?php
									}	
						    	?>
					        </div>
							<div class="container ps_relative">
								<div class="swiper-image-shoppagination"></div>
							</div>
					    </div>
					</div>
				</div>
			</div>
			<div class="desktop">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="row">
						<div id="description-shop" style="background-color: <?php echo $colorBg;?>">
							<div class="col-lg-2 col-md-2"></div>
							<div class="col-lg-8 col-md-8 col-sm-12">
								<div class="row">
									<div class="container-detail-shop">
										<div class="col-lg-12">
											<h1> <?php the_title();?> </h1>
											<div class="description-content-shop">
												<?php the_content(); ?>
											</div>
											<div class="openTime-Tel-website"> 
												<div class="col-lg-7 col-md-7 col-sm-7">
													<div class="row">
														<div class="container-opentime">
															<h3> Åbningstider : </h3>
															<div class="timeShop">
																<p> <?php echo $openTime; ?> </p>	
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-5 col-md-5 col-sm-5">
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12 header-waterfornt">

															<div class="row">
																<div class="container-phone">
																	<h3> Tel : </h3>
																	<p> <?php echo $phoneNumber; ?></p>
																</div>	
															</div>
														</div>
														<div class="col-lg-12 col-md-12 col-sm-12 header-waterfornt">
															<div class="row">
																
															
																<div class="container-url-web">
																	<h3> Web : </h3>
																	<a href="http://<?php echo $phoneUrl; ?>"> <p> <?php echo $phoneUrl; ?></p></a>
																</div>
															</div>
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-2"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mobile">
	<div class="container-fluid">
		<div class="row">
			<div style="background-color: <?php echo $colorBg;?>">
				<div class="col-lg-1 col-md-1"></div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="row">
						<div class="container-detail-shop" >
							
							<div class="col-lg-12">
								<h1> <?php the_title();?> </h1>
								<div class="description-content-shop">
									<?php the_content(); ?>
								</div>
								<div class="openTime-Tel-website"> 
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="row">
											<div class="container-opentime">
												<h3> Åbningstider : </h3>
												<div class="timeShop">
													<p> <?php echo $openTime; ?> </p>	
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 header-waterfornt">
												<div class="container-phone">
													<h3> Tel : </h3>
													<p> <?php echo $phoneNumber; ?></p>
												</div>	
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 header-waterfornt">
												<div class="container-url-web">
													<h3> Web : </h3>
													<a href="http://<?php echo $phoneUrl; ?>"> <p> <?php echo $phoneUrl; ?></p></a>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-md-1"></div>
			</div>
		</div>
	</div>	
</div>
<div class="container">
	<div class="row">
		<section id="list-brand-category">
			<?php 
				wp_reset_query();
			    $args = array(
			        'post_type' => 'toys',//array('clothes','toys'), //,
			        'post_status' => 'publish',
			    );

			    $pages = get_posts($args);
			    
			    foreach ($pages as $page )
			    {
		    		$page_meta = get_post_custom($page->ID);
		    		if ( wp_get_attachment_image(get_post_thumbnail_id($page->ID), 'full',false) && !($postID == $page->ID) ) 
		    		{
		    		
			?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
							<div class="img-bands">
								<a href="<?php echo get_page_link($page->ID) ?>"> 
									<?php echo wp_get_attachment_image(get_post_thumbnail_id($page->ID), 'full',false, array( 'class' => 'img-responsive' ) ); ?>
								</a>
							</div> 
						</div>
			<?php
					}
				}
			?>
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
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-123">
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
		</section>
	</div>
</div>

<?php get_footer(); ?>