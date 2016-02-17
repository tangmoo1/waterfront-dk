<?php global $redux_builder_radarsofthouse; ?>
<?php $path = get_template_directory_uri().'/img/'; ?>
<section id="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="container-footer">
				<div class="container">
					<div class="row">
						<div class="footer-desktop">
							<div class="col-lg-12">
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-6">
										<div class="contanier-detail-contact padding">
											<div class="box-title-footer">
												<span class="title-footer-menu"> KONTAKT </span>
												<div class="border-title"></div>
											</div>
											<div class="footer-address-contact">
												<p>
													<?php echo $redux_builder_radarsofthouse['address-footer'];?>
													<a class="email-footer" href="mailto:<?php echo $redux_builder_radarsofthouse['email-address-footer'];?>"> Mail: <span style=""> <?php echo $redux_builder_radarsofthouse['email-address-footer'];?></span></a>
												</p>
											</div>					
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6">
										<div class="contanier-detail-contact padding">
											<div class="box-title-footer">
												<span class="title-footer-menu"> følg os på </span>
												<div class="border-title"></div>
											</div>
											
											<div class="social-media">
												<ul>
													<li> <a target="_blank" href="<?php echo $redux_builder_radarsofthouse['instagram-api'];?>"> <img class="img-responsive" src="<?php echo $path; ?>icon-ig.png "></a></li>
													<li> <a target="_blank" href="<?php echo $redux_builder_radarsofthouse['facebook-api'];?>"> <img class="img-responsive"  src="<?php echo $path; ?>icon-fb.png "></a></li>
												</ul>
											</div>
										</div> 
									</div>
								</div>
							</div>
						</div>
						<div class="footer-mobile">
							<div class="col-lg-12">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="row">
										<div class="contanier-detail-contact">
											<div class="box-title-footer">
												<span class="title-footer-menu"> følg os på </span>
												<div class="border-title"></div>
											</div>
											
											<div class="social-media">
												<ul>
													<li> <a target="_blank" href="<?php echo $redux_builder_radarsofthouse['instagram-api'];?>"> <img class="img-responsive" src="<?php echo $path; ?>icon-ig.png "></a></li>
													<li> <a target="_blank" href="<?php echo $redux_builder_radarsofthouse['facebook-api'];?>"> <img class="img-responsive"  src="<?php echo $path; ?>icon-fb.png "></a></li>
												</ul>
											</div>
										</div>
									</div> 
								</div>
								<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
									<div class="row">
										<div class="contanier-detail-contact">
											<div class="mobile-contact">
												<div class="box-title-footer">
													<span class="title-footer-menu"> KONTAKT </span>
													<div class="border-title"></div>
												</div>
												<div class="footer-address-contact">
													<p>
														<?php echo $redux_builder_radarsofthouse['address-footer'];?>
														<a class="email-footer" href="mailto:<?php echo $redux_builder_radarsofthouse['email-address-footer'];?>"> <?php echo $redux_builder_radarsofthouse['email-address-footer'];?></a>
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
	</div>
</section>	
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom-script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
<script  src="/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js"></script>
<script  src="/wp-content/plugins/contact-form-7/includes/js/scripts.js"></script>
<script type="text/javascript">
	var swiper = new Swiper('.swiper-image-shop', {
        pagination: '.swiper-image-shoppagination',
        nextButton: '.image_slide-button-next',
    	prevButton: '.image_slide-button-prev',
        centeredSlides: true,
        // autoplay: 6000,
        paginationClickable: true,
    });
</script>
</body>
</html>