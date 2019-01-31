<?php get_header(); /* controle the op for pages */?>

<?php if(have_posts()):

	while(have_posts()): the_post(); ?>
	
		<article class="post page">
			<?php 
			
			
			if(has_children() OR $post->post_parent>0){ ?>
			
		<span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>
		
			<?php 
			
			$args= array(
			
			'child_of'=> get_top_ancestor_id(),
			'title_li'=>""
			
			);
			
			?>
		
		<?php wp_list_pages($args); }?>
			
			<h2><?php the_title(); ?></h2>
			
			<h4><?php the_title(); ?></h4>
			
			<h4><?php the_content(); ?></h4>
		</article>
	
	<?php endwhile;
else:
	echo "<p>no posts found</p>";
endif; ?>

<?php get_footer(); ?>