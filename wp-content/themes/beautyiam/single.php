<?php get_header(); ?>

<section id="single-post">
	
	<div class="container">
	
		<div class="row">
			<div class="span9">
				
					<?php get_template_part( 'loop', 'single' ); ?>
				
				
			</div>
			
			<div id="sidebar" class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
		
	</div>

</section><!-- #page -->

<?php get_footer(); ?>
