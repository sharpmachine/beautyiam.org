
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
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-affix.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/easing.1.3.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/animate-enhanced.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/superslides.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/slide-in-min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/waypoint.min.js"></script>
	<script src="http://charles-harvey.co.uk/plugins/cycleThru/js/jquery.cycleThru.js"></script>
	<script src="https://raw.github.com/imsky/holder/master/holder.js"></script>


	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php bloginfo ('template_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo ('template_directory'); ?>/js/script.js"></script>

	<script>
		jQuery(document).ready(function($) {

			$('#models-slides').superslides({
				play: 7000, //false
			    slide_easing: 'easeInOutCubic',
			    slide_speed: 900,
			    pagination: true,
			    hashchange: false,
			    scrollable: true,
			    classes: {
					nav: 'slides-navigation',
					container: 'slides-container',
					pagination: 'slides-pagination'
				}
 			});

 			$('#featured-classes-slides').superslides({
				play: false, //7000,
			    slide_easing: 'easeInOutCubic',
			    slide_speed: 800,
			    pagination: true,
			    hashchange: false,
			    scrollable: true,
			    classes: {
			    	preserve: 'preserve',
					nav: 'slides-navigation2',
					container: 'slides-container2',
					pagination: 'slides-pagination2'
				}

 			});

 			

 		// 	$('body').on('animated.slides', function() {
			//   if ($('li.white-bg').hasClass('current')) {
			//   	$('a.brand').addClass('test');
			//   	$('ul.nav').addClass('test2');

			//   } else

			//   	$('a.brand').removeClass('test');
			//   	$('ul.nav').removeClass('test2');
			// });

		});
	</script>

	<!-- Remove these before deploying to production -->
	<script src="<?php bloginfo ('template_directory'); ?>/js/hashgrid.js" type="text/javascript"></script>

<?php wp_footer(); ?>
	</body>
</html>