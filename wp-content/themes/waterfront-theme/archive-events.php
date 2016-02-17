<?php 
	$path = get_template_directory_uri();

?>
<?php get_header(); ?>

<div class="desktop">
	<div class="container">
		
		<div class="col-lg-3"></div>
		<div class="col-lg-6">
			<div class="row">
				<?php   $todaystamp = current_time('Y-m-d'); ?>
				<?php   $coverntToday = strtotime($todaystamp) //echo $todaystamp = get_the_time('U'); ?>
				<?php //echo $coverntToday; ?>
				<div class="container-box-list-event">
					<div class="image_slide-button-prev">
						<img class="img-responsive" src="<?php echo $path ;?>/img/scroll-arrow-top.png">
					</div>
					<div class="box-list-event">
						<div class="swiper-container">
				        	<div class="swiper-wrapper">
								<?php
									$prefix = 'events_';
									//wp_reset_query();
									$args = array(
							           	'post_type' => 'events',
							           	'post_status' => 'publish',
							           	'posts_per_page'   => -1,
							           	'meta_key' => $prefix.'dateEvents',
									 	'orderby' => 'meta_value',
										'order' => 'ASC',
							        );
									$events = get_posts( $args );
									$active = 0;
									$index = 0;
									$indexActive = 0;
									$left =1;
									$futureEventCount = 0;

									foreach ($events as $event ) 
									{	
								?>
										<?php
											$index += 1;
											$page_meta = get_post_custom($event->ID);
									
											if ( $page_meta[$prefix.'dateEvents'][0] >= $coverntToday ) {
												if ($active == 1) {
													$left +=1;			
												}
												else
												{
													$active = 1 ;
													$indexActive = $index ;
												}

												$futureEventCount++;
											}	
										?>
										<div class="swiper-slide">
											<div class="container-list-event">
												<div class="title-event">
													<span> <?php echo $event->post_title ;?> </span>
													<div class="border-title"></div> 
													

													
												</div>
												<div class="content-list-event">
													<?php echo $event->post_content ; ?>
												</div>
											</div>
										</div>
									<?php 
									}
									addTempSlideItems(4, $futureEventCount);
									?>
							</div>
						</div>
					</div>
					<div class="image_slide-button-next">
						<img class="img-responsive" src="<?php echo $path ;?>/img/scroll-arrow-down.png">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3"></div>
	</div>
</div>
<div class="mobile">
	<div class="col-xs-12 custom-mobile">
		<div class="row">
			<?php   $todaystamp = current_time('Y-m-d'); ?>
			<?php   $coverntToday = strtotime($todaystamp) //echo $todaystamp = get_the_time('U'); ?>
			<?php //echo $coverntToday; ?>
			
			<div class="container-box-list-event">
				<div class="image_slide-button-prev">
					<img class="img-responsive" src="<?php echo $path ;?>/img/scroll-arrow-top.png">
				</div>
				
					<div class="box-list-event">
						<div class="col-xs-12 custom-mobile">
							<div class="swiper-container">
					        	<div class="swiper-wrapper">
									<?php
										$prefix = 'events_';
										//wp_reset_query();
										$args = array(
								           	'post_type' => 'events',
								           	'post_status' => 'publish',
								           	'posts_per_page'   => -1,
								           	'meta_key' => $prefix.'dateEvents',
										 	'orderby' => 'meta_value',
											'order' => 'ASC',
								        );
										$events = get_posts( $args );
										$active = 0;
										$index = 0;
										$indexActive = 0;
										$left =0;
										foreach ($events as $event ) 
										{	
									?>
											<?php
												$index += 1;
												$page_meta = get_post_custom($event->ID);
										
												if ( $page_meta[$prefix.'dateEvents'][0] >= $coverntToday ) {
													if ($active == 1) {
														$left +=1;	
														$index += 1;		
													}
													else
													{
														$active = 1 ;
														$left +=1;
														$indexActive = $index ;
													}
												}
												else
												{
													$indexActive = $index;
												}	
											?>
											<div class="swiper-slide">
												<div class="container-list-event">
													<div class="title-event">
														<span> 
															<?php echo $event->post_title ;?>
															<div class="border-title"></div> 
														 </span>
														
														

														
													</div>
													<div class="content-list-event">
														<?php echo $event->post_content ; ?>
													</div>
												</div>
											</div>
										<?php 
										}
										addTempSlideItems(2, $futureEventCount);
										?>
								</div>
							</div>
						</div>
					</div>

				<div class="image_slide-button-next">
					<img class="img-responsive" src="<?php echo $path ;?>/img/scroll-arrow-down.png">
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
 <script>
  	var indexid= <?php echo $indexActive ;?> -1;

  	//var indexid = 2;
  	console.log("index:"+indexid);
  	var leftID = <?php echo $left ;?> ;

    var swiper = new Swiper('.swiper-container', {
        paginationClickable: true,
       	pagination: '.swiper-pagination',
        nextButton: '.image_slide-button-next',
        prevButton: '.image_slide-button-prev',
        slidesPerView: 4,
        centeredSlides: false,
        //slidesPerView: 'auto',
        
        initialSlide : indexid,
        direction: 'vertical',
        //autoHeight : true,
  

        //freeMode: true
        breakpoints: {
            1024: {
                slidesPerView: 4,
                //spaceBetween: 40
            },
            736: {
                slidesPerView: 2,
                //spaceBetween: 30
            },
            667: {
                slidesPerView: 2,
                //spaceBetween: 20
            },
            640: {
                slidesPerView: 2,
                //spaceBetween: 20
            },
            568: {
                slidesPerView: 2,
                //spaceBetween: 20
            },
            480: {
                slidesPerView: 2,
                //spaceBetween: 20
            },
            414: {
                slidesPerView: 2,
                //spaceBetween: 30
            },
            375: {
                slidesPerView: 2,
                //spaceBetween: 20
            },

            320: {
                slidesPerView: 2,
                //spaceBetween: 10
            }
        }


    });

	
    //console.log(swiper.height);
   


</script>