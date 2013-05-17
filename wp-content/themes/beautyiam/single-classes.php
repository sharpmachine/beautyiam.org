<?php get_header(); ?>

<section id="single-class" class="page">

	<div class="container">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="classes">
			<div class="row">
				<div class="span12">
					<h3><?php the_field('class_headline'); ?></h3>
					<h2><?php the_title(); ?></h2>
					<div class="class-time serif"><?php the_field('class_days'); ?> from <?php the_field('class_start_time'); ?>- <?php the_field('class_end_time'); ?> <?php the_field('class_am_or_pm'); ?></div>
				</div>
			</div>
			
			<div class="row class-instructor">
				<div class="span9 class-instructor-name">
					Instructor \ <?php the_field('class_instructors_name'); ?>
				</div>
				<div class="span3 add-to-calendar">
					<a href="mailto:info@beautyiam.org?subject=Book <?php the_title(); ?>" class="btn">
						<span class="icon"></span>
						<span class="btn-label">Book
							<span class="line2">Class</span>
						</span>
					</a>
				</div>
			</div>
			
			<div class="row">
				<div class="span12">
					<?php the_content(); ?>
				</div>
			</div>
		</article>
	<?php endwhile; endif; ?>
		</div>
		
	
	<div class="container">
		<div class="row">
			<div class="span12">
				<hr>
				<h3 class="text-right"><a href="<?php bloginfo( 'url' ); ?>/classes">See all classes &rarr;</a></h3>
			</div>
		</div>
	</div>

</section><!-- #page -->

<?php get_footer(); ?>
