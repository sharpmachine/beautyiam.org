<?php get_header(); ?>

<section id="" class="page">
	<div class="container">
	
		<div class="row">
			<div class="span12">
				<h1 class="serif page-title"><?php the_title(); ?></h1>
			</div>
		</div>
		
<?php
    // Get current Category
    $get_current_cat = get_term_by('name', single_cat_title('',false), 'category');
    $current_cat = $get_current_cat->term_id;

    // List posts by the terms for a custom taxonomy of any post type
    $post_type = 'offsite_instructors';
    $tax = 'instructor_category';
    $tax_terms = get_terms( $tax, 'orderby=name&order=ASC');
    if ($tax_terms) {
        foreach ($tax_terms  as $tax_term) {
            $args = array(
                'post_type'         => $post_type,
                'parent'			=> 0,
                "$tax"              => $tax_term->slug,
                'post_status'       => 'publish',
                'posts_per_page'    => -1,
                'category__in'      => $current_cat // Only posts in current category (category.php)
            );

            $my_query = null;
            $my_query = new WP_Query($args);

            if( $my_query->have_posts() ) : ?>

                <h4><?php echo $tax_term->name; // Group name (taxonomy) ?></h4>
                
                <div class="row offsite-instructors">
					<div class="span12">
						<table class="table table-striped">
							<thead>
								<tr>
									<!-- <th class="oi-cat"></th> -->
									<th class="oi-type">Type</th>
									<th class="oi-instructor">Instructor</th>
									<th class="oi-phone">Phone Number</th>
									<th class="oi-area">Area</th>
									<th class="oi-email">Email Address</th>
								</tr>
							</thead>
							<tbody>

		                <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
		                    <?php $term_list = wp_get_post_terms($post->ID, 'category', array("fields" => "ids")); // Get post categories IDs?>

								<tr>
									<!-- <td class="oi-cat"></td> -->
									<td class="oi-type"><?php echo get_the_term_list( $post->ID, 'instuctor_tags', '', ', ', '' ); ?></td>
									<td class="oi-instructor"><?php the_title(); ?></td>
									<td class="oi-phone"><?php the_field('instructor_phone_number'); ?></td>
									<td class="oi-area"><?php the_field('instructor_area'); ?></td>
									<td class="oi-email"><a href="mailto:<?php the_field('instructor_email'); ?>"><?php the_field('instructor_email'); ?></a></td>
								</tr>

		                <?php endwhile; // end of loop ?>
		                	</tbody>
						</table>		
					</div>
				</div>
            <?php endif; // if have_posts()
            wp_reset_query();
        } // end foreach #tax_terms
    } // end if tax_terms
?>

	</div>
</section><!-- #page -->
<?php get_footer(); ?>
