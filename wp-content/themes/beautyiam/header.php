<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]>
<html class="no-js ie6" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 7 ]>    
<html class="no-js ie7" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 8 ]>    
<html class="no-js ie8" <?php language_attributes(); ?>>
 <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html class="no-js" <?php language_attributes(); ?>> 
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php
		global $page, $paged;
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";	  	
		 if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'smm' ), max( $paged, $page ) );
     	?></title>

		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    	<meta name="description" content="">
    	<meta name="author" content="Sharp Machine">
	
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		
		<link href='http://fonts.googleapis.com/css?family=Mrs+Saint+Delafield' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Linden+Hill' rel='stylesheet' type='text/css'>
    	<!-- Le styles -->
    	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
    	<!-- <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet"> -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    	<!-- Le fav and touch icons -->
    	<link rel="shortcut icon" href="../assets/ico/favicon.ico">
    	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    	<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.7.min.js"></script>
		<!--[if lte IE 8]><script src="<?php bloginfo('template_directory'); ?>/js/selectivizr-min.js"></script><![endif]-->
	
		<?php
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );
			wp_head();
			?>
			
			<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
	</head>

	<body <?php body_class(); ?> data-spy="scroll" data-target="#classes-menu" data-offset="590">
	
	<header>
		
		<div id="support-group-bar">
			<div id="support-group">
				<div class="container">
					<div id="sg-tab" class="pull-right">
						<span><a href="#open">Artist Support Group <img src="<?php bloginfo( 'template_directory' ); ?>/img/chevron.png" alt="Chevron"></a></span>
					</div>
				</div>
			</div>
		
			<div id="support-group-details">
				<div class="container">
					<div id="close-btn" class="row">
						<div class="span12">
							<span class="close">
								<a href="#close">
									<img src="<?php bloginfo( 'template_directory' ); ?>/img/close.png" alt="Close">
								</a>
							</span>
						</div>
					</div>
					
					<div class="row">
						<div class="span3">
							<h3 class="sans">Artist<br>Support<br>Group</h1>
						</div>
						
						<div id="group-quote" class="span3">
							<div class="serif">
								"<?php the_field('asg_positive_experience_quote', 'options'); ?>"
								<span class="sans">- <?php the_field('asg_quotees_first_name', 'options'); ?></span>
							</div>
						</div>
						
						<div id="group-details" class="span5 pull-right">
							<div id="location-notice" class="sans">Location confirmed each week.</div>
							<div class="serif"><?php the_field('asg_day', 'options'); ?></div>
							<div class="serif"><?php the_field('asg_time', 'options'); ?></div>
							<div id="this-week" class="sans">This week we meet at:</div>
							<div class="serif"><?php the_field('asg_location', 'options'); ?></div>
						</div>
					</div>
					
					<div class="row">
						<div id="directions-btn" class="span3 pull-right">
							<a href="http://maps.google.com/maps?saddr=&daddr=<?php the_field('asg_street_address', 'options'); ?>" class="btn btn-pink btn-directions">
								<span class="icon"></span> 
								<span class="btn-label">I want <span class="line2">directions</span></span>
							</a>
						</div>
					</div>
					
				</div>
			</div>
		</div><!-- #support-group-bar -->
	
		<div id="top-nav" class="navbar navbar-static-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="<?php bloginfo('url') ?>"></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => new Bootstrap_Menu_Walker ) ); ?>
        		</div>
			</div>
    	</div><!-- .navbar -->
    	
    </header>