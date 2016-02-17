<?php 
/*
Template Name: aboutus page

*/
?>

<?php get_header(); ?>

 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
	<div class="row">
		<section id="about-us">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="padding">
							<div class="row">
								<?php echo wp_get_attachment_image(get_post_thumbnail_id($page->ID), 'full',false, array( 'class' => 'img-responsive' ) ); ?>
							</div>	
						</div>
						
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1"></div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						
							<div class="container-detail-about-us">
								<h1> <?php the_title();?> </h1>
								<div class="description-content-shop ">
									<?php the_content(); ?>
								</div>
							</div>
						
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1"></div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php endwhile; endif; ?>




<?php get_footer(); ?>