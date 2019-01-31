<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset= "<?php bloginfo('charset');  ?>">
<meta name="viewport" content = "width=device-width">

<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="container">

<!-- site header -->

	<header class="site-header">
	
		<!-- hd search -->
		
		<div class="hd-search">
		
		<?php get_search_form();?>
		
		</div>
	
	
	
	
	<!-- for the site title and description as well as for the home url by clicking on the site title  -->
	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
	
	<h1><?php bloginfo('description'); ?> <?php if(is_page('about-us')){?>
	
	<h3>thank you for viewing our page</h3>
	
	
	<?php } ?></h1>
	
	<nav class="site-nav">
	
	
		<?php
			$args = array(
			
			'theme_location'=>'primary'
			
			);
		?>
	
	<?php wp_nav_menu($args); ?>
	
	</nav>
	
	</header>




