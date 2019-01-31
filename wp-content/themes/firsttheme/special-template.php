<?php /*

template name: Special Layout

 */

?>

<?php get_header(); ?>


<?php if(have_posts()):

	while(have_posts()): the_post(); ?>
	
		<article class="post">
	
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<h4><?php the_title(); ?></h4>
			
			<?php   /*  info box */  ?>
			
			<div class="info-box">
			
			<h4>Disclaimer title</h4>
			<h5>  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard 
			dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived 
			not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the 
			release of 
			Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h5>
			</div>
			
			<h4><?php the_content(); ?></h4>
		</article>
	


	<?php endwhile;
else:
	echo "<p>no posts found</p>";
endif; ?>


<?php get_footer(); ?>