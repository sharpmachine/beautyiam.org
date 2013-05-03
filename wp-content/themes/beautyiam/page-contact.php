<?php get_header(); ?>

<section id="contact-us" class="page">
	<div class="container">
		<div class="row">
		
			<div class="span12 text-center">
				<h1 class="serif">want details?</h1>
				<h3>Tell us what you want to know</h3>
			</div>
			
		</div>
		
		<div class="row">
			<div class="span10 offset1 contact-form">
				
				<?php get_template_part( 'loop', 'page' ); ?>

			</div>
		</div>
		
		<div id="contact-details" class="row">
			<div class="span4 offset1 serif">
				<div class="email"><a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a></div>
				<div class="phone"><?php the_field('contact_phone'); ?></div>
			</div>
			<div class="span2 offset1">
				<address>
					<?php the_field('contact_mailing_address'); ?> <br>
					<?php the_field('contact_city_state'); ?> <br>
					<?php the_field('contact_zip_code'); ?>
				</address>
			</div>
		</div>
	</div>
	
	<div class="page-footer blueGreen-bg">
		<div class="container">
			<div class="row">
				<div class="span5 tagline">
					<h4 class="serif"><?php the_field('contact_message'); ?></h4>
				</div>
				<div class="span2 curly-bracket curly-bracket-white-rev"></div>
				<div class="span5 featurette">
					<h3>Subscribe to our newsletter</h3>
					
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="http://beautyiam.us6.list-manage1.com/subscribe/post?u=07683979b15d14a7c5a256a08&amp;id=5ce5b396b2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank">
							
							<label>
								Your Email <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="you@email.com" required>
							</label>
							
							<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-submit">Subscribe</button>
							
						</form>
					</div>
					<!--End mc_embed_signup-->
				</div>
			</div>
		</div>
	</div>
</section><!-- #page -->
<?php get_footer(); ?>
