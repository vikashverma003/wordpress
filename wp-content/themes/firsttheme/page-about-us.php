<?php get_header(); /* controle the op for pages */?>


<?php if(have_posts()):

	while(have_posts()): the_post(); ?>
	
		<article class="post">
	
			<h2><?php //the_title(); ?></h2>
			
			<h4><?php //the_title(); ?></h4>
			
			<h4><?php the_content(); ?></h4>
		</article>
	
	<?php endwhile;
else:
	echo "<p>no posts found</p>";
endif; ?>

<?php get_footer(); ?>