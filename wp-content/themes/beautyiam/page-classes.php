<?php get_header(); ?>

<div class="page">
	<div id="classes-menu" data-spy="affix" data-offset-top="200">
		<div class="container">
			<div class="row">
				<ul class="nav">
				
					<li class="span3 active">
						<a href="#fitness" id="class-fitness">
							<span>Fitness</span>
						</a>
					</li>
					
					<li class="span3">
						<a href="#wellness" id="class-wellness">
							<span>Wellness</span>
						</a>
					</li>
					
					<li class="span3">
						<a href="#spirit" id="class-spirit">
							<span>Spirit</span>
						</a>
					</li>
					
					<li class="span3">
						<a href="#counsel" id="class-counsel">
							<span>Counsel</span>
						</a>
					</li>
					
				</ul>
			</div>
			
		</div>
	</div>
<div id="all-classes">
	<div id="fitness" class="class-section">
		<div class="container">
		
		<?php query_posts("post_type=classes&classes_category=fitness"); ?>
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
				</div>
				
				<div class="row">
					<div class="span12">
						<?php the_content(); ?>
					</div>
				</div>
			</article>
		<?php endwhile; endif; ?>
			
		</div>
	</div>
	
	<div id="wellness" class="class-section">
		<div class="container">
		
			<?php query_posts("post_type=classes&classes_category=wellness"); ?>
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
				</div>
				
				<div class="row">
					<div class="span12">
						<?php the_content(); ?>
					</div>
				</div>
			</article>
		<?php endwhile; endif; ?>
			
		</div>
	</div>
	
	<div id="spirit" class="class-section">
		<div class="container">
		
			<?php query_posts("post_type=classes&classes_category=spirit"); ?>
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
				</div>
				
				<div class="row">
					<div class="span12">
						<?php the_content(); ?>
					</div>
				</div>
			</article>
		<?php endwhile; endif; ?>
			
		</div>
	</div>
	
	<div id="counsel" class="class-section">
		<div class="container">
		
			<?php query_posts("post_type=classes&classes_category=counsel"); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="classes">
				<div class="row">
					<div class="span12">
						<h3><?php the_field('class_headline'); ?></h3>
						<h2><?php the_title(); ?></h2>
						<div class="class-time serif">By Appointment</div>
					</div>
				</div>
				
				<div class="row class-instructor">
					<div class="span9 class-instructor-name">
						Instructor \ <?php the_field('class_instructors_name'); ?>
					</div>
					<div class="span3 add-to-calendar">
						<a href="mailto:info@beautyiam.org?subject=Counseling session" class="btn">
							<span class="icon"></span>
							<span class="btn-label">Book a
								<span class="line2">Session</span>
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
	</div>
</div><!-- #all-classes -->
</div><!-- .page -->
<?php get_footer(); ?>
