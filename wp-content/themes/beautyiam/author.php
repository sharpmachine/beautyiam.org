<?php get_header(); ?>

<section id="author" class="page">
	<div class="container">
		<?php
			if ( have_posts() )
				the_post();
		?>
		
		<div class="row">
			<h1 class="page-title author"><?php printf( __( 'All Posts by: %s', 'smm' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h1>
		</div>
		
		<?php rewind_posts(); ?>
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

</section>

<?php get_footer(); ?>
