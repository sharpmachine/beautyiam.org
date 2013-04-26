<?php get_header(); ?>

<section id="" class="page">
	<div class="container">
	
		<div class="row">
			<div class="span12">
				<h1 class="serif page-title"><?php the_title(); ?></h1>
			</div>
		</div>
		
<?php
$taxonomyName = "instructor_category";
$terms = get_terms($taxonomyName, array('parent' => 0, 'orderby' => 'slug', 'hide_empty' => false));  
// $terms = get_terms('instructor_category', array( 'parent' => 0 ));
// $children = get_terms($taxonomyName, array('parent' => $term->term_id, 'orderby' => 'slug', 'hide_empty' => false)); 

foreach ($terms as $term) {
	$children = get_terms($taxonomyName, array('parent' => $term->term_id, 'orderby' => 'slug', 'hide_empty' => false));

  $wpq = array ('taxonomy'=> $taxonomyName,'term'=>$term->slug);
  $myquery = new WP_Query ($wpq);
  $article_count = $myquery->post_count;
  echo "<h3 class=\"term-heading\" id=\"".$term->slug."\">";
  echo $term->name;
  echo "</h3>";
  if ($article_count) {
    echo "<ul>";
    while ($myquery->have_posts()) : $myquery->the_post();
      echo "<li><a href=\"".get_permalink()."\">".the_title()."</a></li>";
      // echo $children->name;
    endwhile;
    echo "</ul>";
  }
}
?>
<hr>
<?php 

$taxonomyName = "instructor_category";
//This gets top layer terms only.  This is done by setting parent to 0.  
$parent_terms = get_terms($taxonomyName, array('parent' => 0, 'orderby' => 'slug', 'hide_empty' => false));   
echo '<ul>';
foreach ($parent_terms as $pterm) {
    //Get the Child terms
    $terms = get_terms($taxonomyName, array('parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false));
    // $terms = get_term_children( $pterm->term_id, $taxonomyName );
    foreach ($terms as $term) {
        echo '<li><a href="' . get_term_link( $term->name, $taxonomyName ) . '">' . $term->name . '</a></li>';  
    }
}
echo '</ul>';

?>

		
		
		<?php query_posts(array('post_type' => 'offsite_instructors', 'instructor_category' => $term->slug ) ); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_title(); ?>
			<?php the_field('instructor_phone_number'); ?>
			<?php the_field('instructor_area'); ?>
			<?php the_field('instructor_email'); ?>
			<br>
		<?php endwhile; ?>
	
		<?php else: ?>
	
		<?php endif; ?>
		
		<div class="row offsite-instructors">
			<div class="span12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="oi-cat"></th>
							<th>Type</th>
							<th>Instructor</th>
							<th>Phone Number</th>
							<th>Area</th>
							<th>Email Address</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="oi-cat">Music</td>
							<td class="oi-type">Voice</td>
							<td>Samantda Zeitders</td>
							<td>323.546.8535</td>
							<td>Pasadena</td>
							<td>sam33@gmail.com</td>
						</tr>
						<tr>
							<td class="oi-cat"></td>
							<td class="oi-type">Voice</td>
							<td>Samantda Zeitders</td>
							<td>323.546.8535</td>
							<td>Pasadena</td>
							<td>sam33@gmail.com</td>
						</tr>
						<tr>
							<td class="oi-cat"></td>
							<td class="oi-type">Voice</td>
							<td>Samantda Zeitders</td>
							<td>323.546.8535</td>
							<td>Pasadena</td>
							<td>sam33@gmail.com</td>
						</tr>
						<tr>
							<td class="oi-cat"></td>
							<td class="oi-type">Voice</td>
							<td>Samantda Zeitders</td>
							<td>323.546.8535</td>
							<td>Pasadena</td>
							<td>sam33@gmail.com</td>
						</tr>
					</tbody>
				</table>		
			</div>
		</div>
		
		<div class="row offsite-instructors">
			<div class="span12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="oi-cat"></th>
							<th>Type</th>
							<th>Instructor</th>
							<th>Phone Number</th>
							<th>Area</th>
							<th>Email Address</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="oi-cat">Music</td>
							<td class="oi-type">Voice</td>
							<td>Samantda Zeitders</td>
							<td>323.546.8535</td>
							<td>Pasadena</td>
							<td>sam33@gmail.com</td>
						</tr>
						<tr>
							<td class="oi-cat"></td>
							<td class="oi-type">Voice</td>
							<td>Samantda Zeitders</td>
							<td>323.546.8535</td>
							<td>Pasadena</td>
							<td>sam33@gmail.com</td>
						</tr>
						<tr>
							<td class="oi-cat"></td>
							<td class="oi-type">Voice</td>
							<td>Samantda Zeitders</td>
							<td>323.546.8535</td>
							<td>Pasadena</td>
							<td>sam33@gmail.com</td>
						</tr>
						<tr>
							<td class="oi-cat"></td>
							<td class="oi-type">Voice</td>
							<td>Samantda Zeitders</td>
							<td>323.546.8535</td>
							<td>Pasadena</td>
							<td>sam33@gmail.com</td>
						</tr>
					</tbody>
				</table>		
			</div>
		</div>
		
	</div>
</section><!-- #page -->
<?php get_footer(); ?>
