
	<footer role="contentinfo">
		<div class="container">
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
	</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-transition.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-button.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-affix.js"></script>

    
	<script src="<?php bloginfo('template_directory'); ?>/js/animate-enhanced.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/superslides.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/slide-in-min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/waypoint.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/easing.1.3.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/js/cycleThru.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jcarousellite.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/scrollTo.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/pageNav.js"></script>

	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php bloginfo ('template_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo ('template_directory'); ?>/js/script.js"></script>

<?php wp_footer(); ?>
	</body>
</html>