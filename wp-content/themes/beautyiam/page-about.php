<?php get_header(); ?>

<section id="about" class="page">
	<?php get_template_part( 'loop', 'page' ); ?>
	
	<div id="about-offerings" class="container">
		<div class="row">
			<div id="about-fitness" class="span3"></div>
			<div id="about-wellness" class="span3"></div>
			<div id="about-spirit" class="span3"></div>
			<div id="about-counsel" class="span3"></div>
		</div>
		<div class="row">
			<div class="span12 sans">
				<h3 class="text-center">We offer a variety of groups, counsel, and classes that address the mental, physical and spiritual needs of those pursing their dreams in this industry.</h3>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h1 class="serif">We are Beauty <span class="i-am">i am</span>.</h1>
			</div>
		</div>
	</div>
	
	<?php rewind_posts(); ?>
	<div id="team" class="container">
		<?php query_posts( 'post_type=team' ); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row team-member">
			<div class="span2 author-headshot">
				<img src="<?php the_field('member_headshot'); ?>" class="img-circle" alt="<?php the_title(); ?>">
			</div>
			<div class="span6 member-details">
				<div class="member-position sans"><?php the_field('team_position'); ?></div>
				<div class="member-name sans"><?php the_title(); ?></div>
				<p class="member-description">
					<?php the_field('member_bio_excerpt'); ?>
				</p>
			</div>
			<div class="span2 offset1 member-actions">
				<div class="full-profile">
					<a href="<?php the_permalink(); ?>" class="btn btn-black">Full Profile</a>
				</div>
			<?php if(get_field('member_twitter')): ?>
				<div class="post-twitter">
					<a href="http://twitter.com/<?php the_field('member_twitter'); ?>">@<?php the_field('member_twitter'); ?></a>
				</div>
			<?php endif; ?>
			</div>
		</div><!-- .team-member -->
		<?php endwhile; endif; ?>	
	</div>
	
</section><!-- #page -->

<?php get_footer(); ?>
