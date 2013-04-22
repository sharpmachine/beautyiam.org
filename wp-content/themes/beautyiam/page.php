<?php get_header(); ?>

<section>
	<div class="container">
	
		<div class="row">
			<div class="span8">
				<?php get_template_part( 'loop', 'page' ); ?>
			</div>
			<div class="span4">
				<?php get_sidebar(); ?>
			</div>
		</div>
		
	</div>
</section><!-- #page -->
<?php get_footer(); ?>
