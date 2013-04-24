<?php 
/*
	Template Name: Blog
*/
get_header(); ?>

<section id="blog-landing" class="page">
	<div class="container">
	
		<div class="row">
		
		<div class="span12">
			<?php
					$temp = $wp_query;
					$wp_query = null;
					$wp_query = new WP_Query();
					$wp_query->query('&paged='.$paged);
				?>
				
				<?php 
					$featured_query = new WP_Query('showposts=1&orderby=comment_count');
					while ($featured_query->have_posts()) : $featured_query->the_post();
					$do_not_duplicate[] = $post->ID 
					 ?>
					
					<div id="featured-post">
						<div class="post-category">
							Popular / <?php if ( count( get_the_category() ) ) : ?>
								<?php printf( __( '%2$s', 'smm' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
							<?php endif; ?>
						</div>
						<h2 class="serif"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="serif post-date"><?php the_date(); ?></div>
						<div class="post-author">
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
						</div>
					
						<!-- <div class="post-read-more"><a href="<?php the_permalink(); ?>">Read more...</a></div> -->
							
							<?php
								$tags_list = get_the_tag_list( '', ', ' );
								if ( $tags_list ):
							?>
							<div class="post-tags">
								<?php printf( __( '<strong>Tags </strong> %2$s', 'smm' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
								<span class="meta-sep">,</span>
							</div>
						<?php endif; ?>
					</div> 
					
				<?php endwhile; ?>
		</div>
			<div class="span9">
				
				<?php while (have_posts()) : the_post();
					if (in_array ($post->ID, $do_not_duplicate)) continue;
					update_post_caches($post);
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
