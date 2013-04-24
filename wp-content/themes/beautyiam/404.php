<?php get_header(); ?>

<div class="container">

	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Oops!  We can\'t find what you\'re looking for', 'smm' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'smm' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
	
</div>


	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>