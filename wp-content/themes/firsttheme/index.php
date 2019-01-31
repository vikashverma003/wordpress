
<?php get_header(); ?>


<?php if(have_posts()):

	while(have_posts()): the_post(); ?>
	
		<?php get_template_part('content', get_post_format()); ?>
		
	<?php endwhile;
		else:
			echo "<p>no posts found</p>";
	endif; 

?>


<?php get_footer(); ?>