<?php get_header(); ?>

<article id="models">

	<div id="models-slides">
	    <ul class="slides-container">
	    
	      <li>
	        <img src="<?php bloginfo('template_directory'); ?>/img/landing-slide1.jpg" alt="I am beautiful">
	        <div class="container">
	        	<div id="slide-landing1" class="inner-slide pull-right">
		         	<h4>
						<span class="i-am">I am</span> 
						<span class="descriptor">beautiful<span>
					</h4>
				</div><!-- .inner-slide -->
	        </div>
	      </li>
	      
	      <li>
	        <img src="<?php bloginfo('template_directory'); ?>/img/landing-slide2.jpg" alt="I am worth it">
	        <div class="container">
	          	<div id="slide-landing2" class="inner-slide pull-right">
		         	<h4>
						<span class="i-am">I am</span> 
						<span class="descriptor">worth it<span>
					</h4>
				</div><!-- .inner-slide -->
	        </div>
	      </li>
	      
	      <li>
	        <img src="<?php bloginfo('template_directory'); ?>/img/landing-slide3.jpg" alt="I am strong">
	        <div class="container">
	          	<div id="slide-landing3" class="inner-slide pull-right">
		         	<h4>
						<span class="i-am">I am</span> 
						<span class="descriptor">strong<span>
					</h4>
				</div><!-- .inner-slide -->
	        </div>
	      </li>
	      
	      <li>
	        <img src="<?php bloginfo('template_directory'); ?>/img/landing-slide4.jpg" alt="I am valuable">
	        <div class="container">
	          	<div id="slide-landing4" class="inner-slide pull-right">
		         	<h4>
						<span class="i-am">I am</span> 
						<span class="descriptor">valuable<span>
					</h4>
				</div><!-- .inner-slide -->
	        </div>
	      </li>
	      
	    </ul><!-- .slides-container -->
	</div><!-- #slides -->
	
</article><!-- #models -->

<article id="headlines">
	<div class="container">
	
	<?php while(the_repeater_field('headlines', 'options')): ?>
	
		<h1>
			<a href="<?php the_sub_field('headline_link', 'options'); ?>">
				<span class="headline"><?php the_sub_field('headline', 'options'); ?></span>
				<span class="sub-headline"><?php the_sub_field('subheadline', 'options'); ?></span>
			</a>
		</h1>
		
		<br>
		
	<?php endwhile; ?>
		
	</div>
</article>

<article id="feature-classes">
	<div id="featured-classes-slides">
	    <ul class="slides-container2">
	    
		    <!-- Fitness -->
		    <li class="purple-bg">
		        <div class="container">
		        	<div id="slide-classes1" class="inner-slide">
	        			<img src="<?php bloginfo('template_directory'); ?>/img/classes-slide1.jpg" class="slide-bg" alt="Purple haze">
		        		<div class="row">
		        			<div class="span2 offset1 class-icon"></div>
		        		</div>
		        		<div class="row class-titles">
		        			<div class="span9 offset2">
		        				<h3 class="sans class-cat">Fitness</h3>
			         			<h1 class="serif">Get Fighting Fit</h1>
			         			<a href="<?php bloginfo( 'url' ); ?>/classes/#fitness" class="">Read more.</a>
		        			</div>
		        		</div>
		        		<img src="<?php bloginfo( 'template_directory' ); ?>/img/woman-runner.png" class="preserve layer-img module" alt="Woman runner">
					</div><!-- .inner-slide -->
		        </div>
		    </li>
		     
		    <!-- Wellness -->
		    <li class="white-bg">
		        <div class="container">
		          	<div id="slide-classes2" class="inner-slide">
		          	<img src="<?php bloginfo('template_directory'); ?>/img/classes-slide2.jpg" class="slide-bg" alt="Goodies">
		          		<!-- <img src="<?php bloginfo( 'template_directory' ); ?>/img/broccoli.jpg" class="preserve broccoli" width="256" height="157" alt="Broccoli">
		        		<img src="<?php bloginfo( 'template_directory' ); ?>/img/lemon.png" class="preserve lemon" width="512" height="318" alt="Lemons"> -->
			         	<div class="row">
		        			<div class="span2 offset1 class-icon"></div>
		        		</div>
		        		<div class="row class-titles">
		        			<div class="span10 offset2">
		        				<h3 class="sans class-cat">Wellness</h3>
			         			<h1 class="serif">Feed the Body</h1>
			         			<a href="<?php bloginfo( 'url' ); ?>/classes/#wellness">Read more.</a>
		        			</div>
		        		</div>
		        		<!-- <img src="<?php bloginfo( 'template_directory' ); ?>/img/tomatoes.png" class="preserve tomatoes" width="512" height="269" alt="Tomatoes"> -->
					</div><!-- .inner-slide -->
		        </div>
		    </li>
		      
		    <!-- Spirit Care   -->
		    <li class="cream-bg">
		        <div class="container">
		          	<div id="slide-classes3" class="inner-slide">
						<img src="<?php bloginfo('template_directory'); ?>/img/classes-slide3.jpg" class="slide-bg" alt="Glory of Love">		         	
			         	<div class="row">
		        			<div class="span2 offset1 class-icon"></div>
		        		</div>
		        		<div class="row class-titles">
		        			<div class="span10 offset2">
		        				<h3 class="sans class-cat">Spirit Care</h3>
			         			<h1 class="serif">Manage <span>the Inside</span></h1>
			         			<a href="<?php bloginfo( 'url' ); ?>/classes/#spirit">Read more.</a>
		        			</div>
		        		</div>
					</div><!-- .inner-slide -->
		        </div>
		    </li>
		    
		    <!-- Counseling  -->
		    <li class="pink-bg">
		        <div class="container">
		          	<div id="slide-classes4" class="inner-slide">
						<img src="<?php bloginfo('template_directory'); ?>/img/classes-slide4.jpg" class="slide-bg" alt="Map of Paris">		         	
			         	<div class="row">
		        			<div class="span2 offset1 class-icon"></div>
		        		</div>
		        		<div class="row class-titles">
		        			<div class="span10 offset2">
		        				<h3 class="sans class-cat">Counseling</h3>
			         			<h1 class="serif">Get Savvy</h1>
			         			<a href="<?php bloginfo( 'url' ); ?>/classes/#counsel">Read more.</a>
		        			</div>
		        		</div>
					</div><!-- .inner-slide -->
		        </div>
		    </li>
	      
	    </ul><!-- .slides-container -->
	    
	    <nav class="slides-navigation2">
	    	<div class="container">
				<a href="#" class="next pull-right"><img src="<?php bloginfo( 'template_directory' ); ?>/img/arrow-right.png" alt="Right Arrow"></a>
			</div>
		</nav>
		
	</div><!-- #slides -->
</article>

<article id="blog">
	<div class="container">
		<h2>Lastest Articles:</h2>
		<?php query_posts( 'posts_per_page=3' ) ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'loop', 'blog' ); ?>
		<?php endwhile; endif; ?>
		<h3 class="text-right"><a href="<?php bloginfo( 'url' ); ?>/blog">See all blog posts &rarr;</a></h3>
	</div>
</article>

<article id="featured-artist" style="background-color:<?php the_field('background_color', 'options'); ?>;display:none;">
	<h3><?php the_field('fa_headline', 'options'); ?></h3>
	<h2><?php the_field('fa_first_name', 'options'); ?> <?php the_field('fa_last_name', 'options'); ?></h2>
	<img src="<?php the_field('fa_image', 'options'); ?>" alt="">
</article>

<?php get_footer(); ?>