<?php get_header(); ?>

<section id="single-post" class="page">
	
	<div class="container">
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
		
	</div>

</section><!-- #page -->

<?php get_footer(); ?>
