<?php 
/*
Template Name: contact page

*/
?>
<?php
	wp_reset_query();
    $args = array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'meta_key' => '_wp_page_template',
 		'meta_value' => 'contact-us.php',
    );
    $pages = get_posts($args);
	$page = $pages[0];
	$page_meta = get_post_custom($page->ID);
	$prefix = 'contact_';
	//debug($page_meta);
	//_debug(get_the_ID());
?>


<?php get_header(); ?>
<script>
	var iconBase = '<?php echo get_template_directory_uri();?>/img/';
    function initialize() 
    {

        var mapCanvas = document.getElementById('map-canvas');
        var latLng = new google.maps.LatLng(
    	55.725733,12.579268
        );

        var mapOptions = {
          center: latLng,
          zoom: 16,

          mapTypeId: google.maps.MapTypeId.ROADMAP,
          styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        
        var marker = new google.maps.Marker({
          position: latLng,
          map: map,
          icon: iconBase+'map-marker_2.png'
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="container">
	<div class="row">
		<div id="container-contact-us">
			<div class="desktop">
				<div class="col-lg-4 col-md-4 col-sm-6">
					<div class="box-container-contact-us">
						<?php echo $page->post_content; ?>
					</div>
				</div>
			</div>
				<div class="col-lg-8 col-md-8 col-sm-6">
					
						<div class="wrap-google-map">
							<div id="map-canvas" ></div>
						</div>
					
				</div>
			<div class="mobile">
				<div class="col-lg-4">
					<div class="row">
						<div class="box-container-contact-us padding">
							<?php echo $page->post_content; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="container-fluid">
		<div class="row">
			<div class="backgroundContact">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="container-contact-us">
								<div class="title-contact-us"> 
									<h3> Kontakt </h3>
								</div>
								<div class="detail-contact-us">
									<p>
										<?php echo $page_meta[$prefix.'headline'][0]; ?>
									</p>
								</div>
								<div class="container-address" >
									<div class="marketingchef">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
											<div class="row">
												<div class="title-contact-address">
													<h4>Marketingchef </h4>
												</div>
												<p>
													<?php echo $page_meta[$prefix.'marketingchef'][0]; ?>
												</p>
											</div>
										</div>
									</div>
									<div class="driftchef">
										<div class="col-lg-3 col-md-6  col-sm-6 col-xs-12">
											<div class="row">
												<div class="title-contact-address">
													<h4> Driftchef </h4>
												</div>
												<p>
													<?php echo $page_meta[$prefix.'driftchef'][0]; ?>
												</p>
											</div>
											
										</div>
									</div>
									<div class="center-manager">
										<div class="col-lg-3 col-md-6  col-sm-6 col-xs-12">
											<div class="row">
												<div class="title-contact-address">
													<h4> Center Manager </h4>
												</div>
												<p>
													<?php echo $page_meta[$prefix.'Center-Manager'][0]; ?>
												</p>
											</div>
											
										</div>
									</div>
									<div class="leasing-manager">
										<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
											<div class="row">
												<div class="title-contact-address">
													<h4> Leasing Manager </h4>
												</div>
												<p>
													<?php echo $page_meta[$prefix.'section2_content_right_side'][0]; ?>
												</p>
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
	</div>


<?php get_footer(); ?>
