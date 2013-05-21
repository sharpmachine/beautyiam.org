
	<footer role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="social-media">
						<a href="<?php the_field('facebook', 'options'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/facebook.png" alt="Facebook"></a>
						<a href="<?php the_field('twitter', 'options'); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/img/twitter.png" alt="Twitter"></a>
					</div>
					
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'footer-nav' ) ); ?>
				
					<div id="site-info" class="pull-right">
						&copy; <?php echo date ('Y'); ?><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?></a>
					</div><!-- #site-info -->
				</div>
			</div>
			
		</div>
	</footer>

    <!-- Le javascript
    ================================================== -->
	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php bloginfo ('template_directory'); ?>/js/plugins-min.js"></script>
	<script src="<?php bloginfo ('template_directory'); ?>/js/script-min.js"></script>

<?php wp_footer(); ?>
	</body>
</html>