<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
		<div class="container-fluid">
		<div class="row">
			<!-- header -->
			<div class="outer-header">
				<header class="header clear container outer-header" role="banner">
						<nav class="navbar">
				  <div class="container">
					<div class="row">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                        
				      </button>
				      
				      <div class="logo col-lg-3 col-md-12 col-sm-12">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="http://hokip.at.wptest.us/wp-content/uploads/2017/01/LOGO.png" alt="Logo" class="logo-img">
							</a>
						</div>
				    <div class="collapse navbar-collapse col-lg-9 header-menu col-md-12 col-sm-12" id="myNavbar">
				      <ul class="nav navbar-nav">
				       <?php html5blank_nav(); ?>
				      </ul>
						<?php 
							echo image_text();
							
						?>
				    </div>
				  </div>
				  </div>
				</nav>
				</header>
		<div id="button-up" style="display: block;">
            <img src="https://image.flaticon.com/icons/png/512/25/25649.png">
        </div>

				
				  
			</div>
			</div>
			<!-- /header -->
