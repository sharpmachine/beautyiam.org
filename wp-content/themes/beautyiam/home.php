<?php get_header(); ?>

<section id="page">

	<div id="myCarousel" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php bloginfo('template_directory'); ?>/img/1.jpeg" alt="">
				<div class="carousel-caption">
					<h4>I am beautiful</h4>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_directory'); ?>/img/2.jpeg" alt="">
				<div class="carousel-caption">
					<h4>I am strong</h4>
				</div>
			</div>
		</div>
	</div>
	
	<div class="landing">
		<div class="container">
			<h1>Hello</h1>
		</div>
	</div>
	
</section><!-- #page -->
 	<div class="container">
			<div class="row">
<?php get_footer(); ?>
