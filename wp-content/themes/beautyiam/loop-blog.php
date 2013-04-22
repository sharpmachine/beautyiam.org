


 
 	<div class="row posts category-meals">
 	
		<div class="span2 author-headshot">
			<div class="post-category-icon"></div>
			<img src="<?php bloginfo( 'template_directory' ); ?>/img/ashton-headshot.png" class="img-circle" alt="Ashton Roark">
			<div class="post-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></div>
		</div>
		
		<div class="span6 post-details">
			<div class="post-category">
				<?php if ( count( get_the_category() ) ) : ?>
					<?php printf( __( '%2$s', 'smm' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
				<?php endif; ?>
			</div>
			<h1 class="serif"><a href="<?php the_permalink(); ?>" class="category-meals"><?php the_title(); ?></a></h1>
			<div class="serif post-date"><?php the_date(); ?></div>
			<div class="post-read-more"><a href="<?php the_permalink(); ?>">Read more...</a></div>
			
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
	</div><!-- .posts -->