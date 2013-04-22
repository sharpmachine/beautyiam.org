<?php 
/*
	Template Name: Blog
*/
get_header(); ?>



<section id="blog-landing">
	<div class="container">
	
		<div class="row">
			<div class="span9">
				<?php
					$temp = $wp_query;
					$wp_query = null;
					$wp_query = new WP_Query();
					$wp_query->query('&paged='.$paged);
					while ($wp_query->have_posts()) : $wp_query->the_post();
				?>
					<?php get_template_part( 'loop', 'blog' ); ?>
				<?php endwhile; ?>

				<?php bootstrap_pagination(); ?>

				<?php $wp_query = null; $wp_query = $temp;?>
			</div>
			<div id="sidebar" class="span3">
				<?php get_sidebar(); ?>
			</div>
		</div>
		
	</div>
</section><!-- #page -->

<?php get_footer(); ?>
