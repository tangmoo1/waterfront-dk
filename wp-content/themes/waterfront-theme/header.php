<?php global $redux_builder_radarsofthouse; ?>
<?php $path = get_template_directory_uri().'/img/'; ?>

<?php
/**
 * The Header for our theme
 *
 * @author		Atthakorn
 * @package		Website-bar
 * @since		1.0 / 1.july.2015
 */
?>
<?php  
	$dateToday = date('l'); 
	$monday = $redux_builder_radarsofthouse['monday'];
	$tuesday = $redux_builder_radarsofthouse['tuesday'];
	$wednesday = $redux_builder_radarsofthouse['wednesday'];
	$thursday = $redux_builder_radarsofthouse['thursday'];
	$friday = $redux_builder_radarsofthouse['friday'];
	$saturday = $redux_builder_radarsofthouse['saturday'];
	$sunday = $redux_builder_radarsofthouse['sunday'];
	$dayToday = array(
	 			"Monday" => $monday,
				"Tuesday" => $tuesday,
				"Wednesday" => $wednesday,
				"Thursday" => $thursday,
				"Friday"=> $friday,
				"Saturday" => $saturday,
				"Sunday" => $sunday 
			);
?>
<!DOCTYPE html>


<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html>

	<head>
		<!-- Base Meta Tags -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="author" content="Website-bar">
		 <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<!-- Style Sheet -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <script src="http://maps.googleapis.com/maps/api/js"></script>
      
		
        <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?> <?php wp_title('|'); ?></title>
		<?php //echo $redux_builder_radarsofthouse['google_analytic_code'];?>
	

	</head>
	<body>
		
		<header class="container">
			<div id="menu-desktop" class="close">
				<div id="close-menu">
					<div id="close-menu-destop">
						<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/close.png">
					</div>
				</div>
				<?php  wp_nav_menu( array('menu' => 'menu-sub-page-eng' )); ?>
			</div>
			<div class="col-lg-12 col-md-12 header-waterfornt">			
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
					<div class="row">
						<div class="container-opening-hours">
							<div class="opening-hours">
								<span> <strong>åbningstid i dag: </strong></span>
								<span class="time-desktop"> 
									<?php
										echo   $dayToday[date('l')];
									?>
								</span>
								<span class="time-mobile">
									<?php 
										$string = $dayToday[date('l')];
										$pieces = explode(':', $string);
										$last_word = array_pop($pieces);

										echo $last_word;
									?>
								</span>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
					<div class="row">
						<div class="logo-desktop">
							<a  href="<?php echo bloginfo('url'); ?>" >
								<img class="img-responsive" src="<?php echo $redux_builder_radarsofthouse['logo-images']['url'];?>">
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
					<div class="row">
						<div class="container-humber-menu">
							<div id="humber-menu-destop">
								<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/humber-menu.png">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="icon-small-drop-down ">
						<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/arrow-small-drop-down.png">
					</div>	
				</div>
				
				<div class="container-time" id="<?php echo $dateToday ?>">
					<div class="col-lg-2 col-md-3 col-sm-4">
						<div class="row">
							<div class="container-day">
								<span class="title-opening-day-mobile">åbningstid i dag:</span>
								<ul class="day-hours">
									<li class="weekday Monday"> <span><?php echo $redux_builder_radarsofthouse['monday'];?> </span></li>
									<li class="weekday Tuesday"> <span><?php echo $redux_builder_radarsofthouse['tuesday'];?> </span></li>
									<li class="weekday Wednesday"><span> <?php echo $redux_builder_radarsofthouse['wednesday'];?> </span></li>
									<li class="weekday Thursday"> <span> <?php echo $redux_builder_radarsofthouse['thursday'];?> </span> </li>
									<li class="weekday Friday"> <span><?php echo $redux_builder_radarsofthouse['friday'];?> </span></li>
									<li class="weekday Saturday"> <span><?php echo $redux_builder_radarsofthouse['saturday'];?> </span></li>
									<li class="weekday Sunday"> <span><?php echo $redux_builder_radarsofthouse['sunday'];?> </span></li>
								</ul> 
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</header>
		
	