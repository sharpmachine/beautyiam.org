
	<footer role="contentinfo">
		<div class="container">
			<div class="social-media">
				<a href="http://www.facebook.com/beautyiam"><img src="<?php bloginfo( 'template_directory' ); ?>/img/facebook.png" alt="Facebook"></a>
				<a href="http://www.twitter.com/beautyiam"><img src="<?php bloginfo( 'template_directory' ); ?>/img/twitter.png" alt="Twitter"></a>
			</div>
			
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'footer-nav' ) ); ?>
		
			<div id="site-info" class="pull-right">
				&copy; <?php echo date ('Y'); ?><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?></a>
				 | <a href="http://twitter.github.com/bootstrap" target="_blank">Bootstrap Docs</a><!-- Remove for production -->
			</div><!-- #site-info -->
		</div>
	</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-transition.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-alert.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-modal.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-tab.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-popover.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-button.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-typeahead.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/easing.1.3.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/animate-enhanced.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/superslides.js" type="text/javascript" charset="utf-8"></script>


	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php bloginfo ('template_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo ('template_directory'); ?>/js/script.js"></script>

	<script>
		jQuery(document).ready(function($) {
			// $("#landing-slide1").backstretch("<?php bloginfo('template_directory'); ?>/img/landing-slide1.jpg");
			// $("#landing-slide2").backstretch("<?php bloginfo('template_directory'); ?>/img/landing-slide2.jpg");
			// $("#landing-slide3").backstretch("<?php bloginfo('template_directory'); ?>/img/landing-slide3.jpg");
			// $("#landing-slide4").backstretch("<?php bloginfo('template_directory'); ?>/img/landing-slide4.jpg");

			$('#slides').superslides({
				play: false, //7000,
			    slide_easing: 'easeInOutCubic',
			    slide_speed: 800,
			    pagination: true,
			    hashchange: false,
			    scrollable: true
 			});

 			$('#featured-classes-slides').superslides({
				play: false, //7000,
			    slide_easing: 'easeInOutCubic',
			    slide_speed: 800,
			    pagination: true,
			    hashchange: false,
			    scrollable: true
 			});
		});
	</script>

	<!-- Remove these before deploying to production -->
	<script src="<?php bloginfo ('template_directory'); ?>/js/hashgrid.js" type="text/javascript"></script>

<?php wp_footer(); ?>
	</body>
</html>