<?php get_header(); ?>

<section id="tag-landing" class="page">
	
	<div class="container">
	
		<div class="row">
			<h1 class="page-title">
				<?php printf( __( 'Tag Archives: %s', 'smm' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?>
			</h1>
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
		
	</div>

</section><!-- #page -->

<?php get_footer(); ?>
