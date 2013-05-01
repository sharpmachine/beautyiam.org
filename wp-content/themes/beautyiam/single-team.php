<?php get_header(); ?>

<section id="team-profile" class="page">
	
	<div id="member-profile" class="container">
		
				
				
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row team-member">
					<div class="span2 author-headshot">
						<img src="<?php the_field('member_headshot'); ?>" class="img-circle" alt="<?php the_title(); ?>">
						<div class="post-twitter">
							<a href="http://twitter.com/<?php the_field('member_twitter'); ?>"><?php the_field('member_twitter'); ?></a>
						</div>
					</div>
					<div class="span9 member-details">
						<div class="member-position sans"><?php the_field('team_position'); ?></div>
						<div class="member-name sans"><?php the_title(); ?></div>
						<div class="member-headline serif"><?php the_field('member_headline'); ?></div>
						
						<div class="member-bio">
							<?php the_field('member_full_bio'); ?>
						</div>
						<div class="all-member-articles">
							<a href="<?php bloginfo( 'url' ); ?>/author/<?php global $post; $post_slug=$post->post_name; echo $post_slug; ?>" class="btn btn-blue pull-right">
								<span class="btn-label">All articles from <span class="line2"><?php the_title(); ?></span></span>
								
							</a>
						</div>
					</div>
				</div><!-- .team-member -->
			<?php endwhile; endif; ?>
			
	
		
	</div>

</section><!-- #page -->

<?php get_footer(); ?>
