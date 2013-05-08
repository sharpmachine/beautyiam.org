<?php get_header(); ?>

<section>
	<div class="container">

<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

		<h1 class="serif page-title">Offsite Instructors</h1>
		<h4 class=""><?php echo get_the_term_list( $post->ID, 'instuctor_tags', '', ', ', '' ); ?></h4>

<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* Run the loop for the archives page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-archive.php and that will be used instead.
	 */
	
?>
		<h4><?php echo $tax_term->name; // Group name (taxonomy) ?></h4>

		<div class="row offsite-instructors">
			<div class="span12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="oi-cat"></th>
							
							<th>Instructor</th>
							<th>Phone Number</th>
							<th>Area</th>
							<th>Email Address</th>
						</tr>
					</thead>
					<tbody>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<tr>
							<td class="oi-cat"></td>
							<td><?php the_title(); ?></td>
							<td><?php the_field('instructor_phone_number'); ?></td>
							<td><?php the_field('instructor_area'); ?></td>
							<td><a href="mailto:<?php the_field('instructor_email'); ?>"><?php the_field('instructor_email'); ?></a></td>
						</tr>
					<?php endwhile; ?>
					</tbody>
					</table>		
				</div>
			</div>
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
		<hr>
		<h3 class=""><a href="<?php bloginfo( 'url' ); ?>/offsite-instructors">&larr; Full Instructor Listing</a></h3>
	</div>
</section><!-- #page -->
<?php get_footer(); ?>
