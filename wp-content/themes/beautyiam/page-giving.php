<?php get_header(); ?>

<section id="giving" class="page">
	<div class="container">
		<div class="row">
		
			<div class="span12">
				<h1 class="serif"><?php the_field('heading'); ?><span class="sans"><?php the_field('subheading'); ?></span></h1>
			</div>
			
		</div>
		
		<div class="row">
			<div class="span5">
				<?php get_template_part( 'loop', 'page' ); ?>
			</div>
			<div class="span6 offset1">
				<div id="monthly-partners" class="row">
					<div class="span6">
						<h6 class="serif">Monthly</h6>
						<?php while(the_repeater_field('monthly_partner')): ?>
							<a href="<?php the_sub_field('monthly_partner_paypal_url'); ?>" class="btn btn-purple btn-donate"><span class="line2"><?php the_sub_field('monthly_partner_button_label'); ?></span></a>
						<?php endwhile; ?>
					</div>
				</div>
				<div id="one-time" class="row">
					<div class="span5">
						<h6 class="serif">Once-off</h6>
						
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

						    <!-- Identify your business so that you can collect the payments. -->
						    <input type="hidden" name="business" value="iwillbearit@gmail.com">

						    <!-- Specify a Donate button. -->
						    <input type="hidden" name="cmd" value="_donations">

						    <!-- Specify details about the contribution -->
						    <input type="hidden" name="item_name" value="Once-off donation">
						    <input type="hidden" name="item_number" value="Once-off donation">
						    <input type="hidden" name="currency_code" value="USD">
							<input type="text" id="amount" name="amount" value"" placeholder="Amount">

						    <!-- Display the payment button. -->
						    <button class="btn btn-purple btn-submit" name="submit">Proceed</button>
						</form>
						
					</div>
				</div>
				
				
			</div>
		</div>
		<hr>
		
		<div id="payment-methods" class="row">
			<div class="span5 pull-right">
				<img src="<?php bloginfo( 'template_directory' ); ?>/img/paypal.png" alt="Paypal Logos">
				<img src="<?php bloginfo( 'template_directory' ); ?>/img/credit-cards.png" alt="Credit Cards Logos">
			</div>
		</div>
	</div>
	
	<div class="page-footer purple-bg">
		<div class="container">
			<div class="row">
				<div class="span7 tagline">
					<h4 class="serif"><?php the_field('fa_quote'); ?></h4>
				</div>
				<div class="span2 curly-bracket curly-bracket-white"></div>
				<div class="span3 featurette">
					<div class="feature-title">Featured Artist</div>
					<div class="feature-name serif"><?php the_field('fa_name'); ?></div>
					<a href="<?php the_field('fa_link_to_interview'); ?>" class="btn btn-purple">See Full Interview</a>
				</div>
			</div>
		</div>
	</div>
</section><!-- #page -->
<?php get_footer(); ?>
