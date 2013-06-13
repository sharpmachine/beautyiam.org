
<div <?php post_class(); ?>>
	<div class="row">
	
		<div class="span2 author-headshot">
			<div class="post-category-icon"></div>
			<?php echo get_avatar( get_the_author_email(), '150' ); ?>
			<div class="post-author">
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
			</div>
			<?php if(is_single( )): ?>
			<div class="full-profile">
				<a href="<?php bloginfo( 'url' ); ?>/team/<?php the_author_meta( 'first_name' ); ?>-<?php the_author_meta( 'last_name' ); ?>" class="btn btn-black">Full Profile</a>
				 
			</div>
			<?php if(get_the_author_meta('twitter')): ?>
			<div class="post-twitter">
				<a href="http://twitter.com/<?php the_author_meta( 'twitter' ); ?>">@<?php the_author_meta( 'twitter' ); ?></a>
			</div>
			<?php endif; ?>
			<?php endif; ?>
		</div>
		
		<div class="span6 post-details">
			<div class="post-category">
				<?php if ( count( get_the_category() ) ) : ?>
					<?php printf( __( '%2$s', 'smm' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
				<?php endif; ?>
			</div>
			<h1 class="serif"><a href="<?php the_permalink(); ?>" class="category-meals"><?php the_title(); ?></a></h1>
			<div class="serif post-date"><?php the_date(); ?></div>
			
			<?php if(!is_single()): ?>
			<div class="post-read-more"><a href="<?php the_permalink(); ?>">Read more...</a></div>
			<?php endif; ?>
			
			<?php
				$tags_list = get_the_tag_list( '', ', ' );
				if ( $tags_list ):
			?>
			<div class="post-tags">
				<?php printf( __( '<strong>Tags </strong> %2$s', 'smm' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
				<span class="meta-sep">,</span>
			</div>
			<?php endif; ?>
			
			<?php if(is_single()): ?>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
			
			<div id="all-in-cat">
				<?php $category = get_the_category(); 
				echo '
					<a href="'.get_category_link($category[0]->cat_ID).'" class="btn btn-blue btn-cat pull-right">
						<span class="icon"></span> 
						<span class="btn-label">All articles in
							<span class="line2">category</span>
						</span>
					</a>
				'; ?>
			</div>
			
			<?php comments_template( '', true ); ?>
			<?php endif; ?>
			
		</div>
	</div><!-- .post -->
</div><!-- .row -->