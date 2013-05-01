<?php get_header(); ?>

<section id="contact-us" class="page">
	<div class="container">
		<div class="row">
		
			<div class="span12 text-center">
				<?php // get_template_part( 'loop', 'page' ); ?>
				<h1 class="serif">want details?</h1>
				<h3>Tell us what you want to know</h3>
			</div>
			
		</div>
		
		<div class="row">
			<div class="span10 offset1 contact-form">
			<form class="form-inline">
				
				<textarea></textarea>
				
				<label>
					Your Name <input type="text">
				</label>
				
				<label>
					Your Email <input type="email">
				</label>
				
				<button type="submit" class="btn btn-submit">Send</button>
				
			</form>
			</div>
		</div>
		
		<div id="contact-details" class="row">
			<div class="span4 offset1 serif">
				<div class="email"><a href="mailto:info@beautyiam.org">info@beautyiam.org</a></div>
				<div class="phone">323-546-8535</div>
			</div>
			<div class="span2 offset1">
				<address>
					P.O.Box 790 <br>
					Los Angeles, CA <br>
					90212
				</address>
			</div>
		</div>
	</div>
	
	<div class="page-footer blueGreen-bg">
		<div class="container">
			<div class="row">
				<div class="span5 tagline">
					<h4 class="serif">let us show you how beautiful <br>you really are</h4>
				</div>
				<div class="span2 curly-bracket curly-bracket-white-rev"></div>
				<div class="span5 featurette">
					<h3>Subscribe to our newsletter</h3>
					<form class="form-inline">
				
						<label>
							Your Email <input type="email">
						</label>
						
						<button type="submit" class="btn btn-submit">Subscribe</button>
						
					</form>
				</div>
			</div>
		</div>
	</div>
</section><!-- #page -->
<?php get_footer(); ?>
