<?php get_header(); ?>

<section id="search-landing" class="page">
	
	<div class="container">
		<?php if ( have_posts() ) : ?>
		
		<div class="row">
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'smm' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</div>
	
		<div class="row">
			<div class="span9">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop', 'blog' ); ?>
				<?php endwhile; ?>
					<?php bootstrap_pagination(); ?>
				<?php endif; ?>
				
			</div>
			
			<div id="sidebar" class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
		
		<?php else : ?>
		
		<div id="post-0" class="post no-results not-found">
			<h2 class="entry-title"><?php _e( 'Nothing Found', 'smm' ); ?></h2>
			<div class="entry-content">
				<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'smm' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->
		</div><!-- #post-0 -->
	<?php endif; ?>

	</div>

</section><!-- #page -->

<?php get_footer(); ?>
