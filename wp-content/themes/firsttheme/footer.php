		<footer class="site-footer">
		
			<nav class="site-nav">
			
			<?php
			
			$args = array(
			
			'theme_location'=>'footer'
			
			);
			?>
		
			<?php wp_nav_menu($args); ?>
			
			</nav>

		<h3><?php bloginfo('name'); ?> -&copy; <?php echo date('Y'); ?></h3>

		</footer>
	</div> <!-- end of the div   -->

<?php wp_footer(); ?>
</body>

</html>