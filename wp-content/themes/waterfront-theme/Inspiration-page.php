<?php 
/*
Template Name: Inspiration page

*/
$path = get_template_directory_uri();
?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div id="container-Inspiration" class="padding">
			<?php echo images_feed(); ?>
		</div>
	</div>
</div>




<?php get_footer(); ?>