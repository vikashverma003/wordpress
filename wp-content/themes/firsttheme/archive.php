
<?php get_header(); ?>


<?php if(have_posts()):


?>

	<h3><?php

	if(is_category()){
		
		//echo "caty";
	single_cat_title();
	
	}

		elseif(is_tag()){
			
			//echo "tagyy";
	single_tag_title();
	
	}
	
	elseif(is_author()){
		
		the_post();
		
		echo "Author archive:::" .get_the_author();
		
		rewind_posts();
	}
	
	elseif(is_day()){
		
		echo "Days Archive::" .get_the_date();
	}
	
	elseif(is_month()){
		
		echo "Month Archive::" .get_the_date('F Y');
		
	}
	elseif(is_year()){
		
		echo "Yearly Archive::" .get_the_date('Y');
	}
	
	else{
		
		echo "Archive";
	}
	

	?></h3>

<?php

	while(have_posts()): the_post(); ?>
	
		<article class="post">
	
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			
			<p><?php echo the_time('F j, Y g:i a'); ?>|by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php  the_author(); ?></a>
			|Posted in
			<?php 
			
			$categories = get_the_category();
			
			$separator = ", ";
			
			$output = '';
			
			
			if($categories )
			{
				
				foreach( $categories as $category){
				
				//$output .=  $category->cat_name .$separator; 
				
				$output .=  '<a href=" '.get_category_link($category->term_id).' ">'. $category->cat_name .'</a>' .$separator; 
				 
				
				}
				echo trim($output, $separator);
				
			}
			
			
			
			
			?>
			
			
			
			</p>
			
			<h4><?php the_title(); ?></h4>
			
			<h4><?php //the_content('Continue Reading &raquo;'); ?></h4>
			
			<h4><?php //the_excerpt(); ?></h4>
		
			<!-- for creating manually read more link -->
			<?php the_post_thumbnail('small-thumbnail'); ?>
			
			<?php
			
			if($post->post_excerpt)
			{ ?>
				<p>
			<h4><?php echo get_the_excerpt(); ?></h4>
			<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
			</p>
				
			
			<?php
			}
			else{
				
			the_content();
			
			}?>
			
			
		
		</article>
	<?php endwhile;
		else:
			echo "<p>no posts found</p>";
	endif; 

?>


<?php get_footer(); ?>