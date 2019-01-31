
<?php get_header(); ?>


<?php if(have_posts()):

	while(have_posts()): the_post(); ?>
	
		<article class="post">
	
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<h4><?php the_title(); ?></h4>
			<?php the_post_thumbnail('banner-image'); ?>
			
						<?php //the_post_thumbnail('banner-image'); ?>

			
			<h4><?php the_content(); ?></h4>
	
	</article>
	<?php endwhile;
		else:
			echo "<p>no posts found</p>";
	endif; 

?>


<?php get_footer(); ?>