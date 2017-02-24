<?php /* Template Name: die-dagesstatten Page Template */ get_header(); ?>
	
	<main role="main">
		
		<!-- first -->
		<div class="row home_header_bg">
			<div class="dd-left-block col-lg-5 col-md-12 col-sm-12 col-xs-12"><?php echo get_post_meta($post->ID, 'dd-left-block-text', true); ?></div>
			<div class="dd-right-block col-lg-7 col-md-12 col-sm-12 col-xs-12"><div class="row"><img src="<?php echo the_field('dd-right-block-img'); ?>" alt="img" class="img-responsive size-full dd-img" /></div></div>
		</div>
		
		<div class="row">
			<div class="dd-third-block col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="" style="max-width:800px;margin:0 auto;">
					<?php echo get_post_meta($post->ID, 'dd-third-block', true); ?>
				</div>	
			</div>
		</div>

		<div  class="dd-separator50"></div>
		<!-- second -->
		<div class="container">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><?php echo get_post_meta($post->ID, 'dd-1-col', true); ?></div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><?php echo get_post_meta($post->ID, 'dd-2-col', true); ?></div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><?php echo get_post_meta($post->ID, 'dd-3-col', true); ?></div>
		</div>

		<div class="row dd-fifth-block home_header_bg">
			<div class="dd-right-block col-lg-7 col-md-12 col-sm-12 col-xs-12"><div class="row"><img src="<?php echo the_field('dd-fifth-block-image'); ?>" alt="img" class="img-responsive size-full dd-img" /></div></div>
			<div class="dd-left-block col-lg-5 col-md-12 col-sm-12 col-xs-12"><?php echo get_post_meta($post->ID, 'dd-fifth-block', true); ?></div>
		</div>

		<div class="row">
			<div class="dd-fourth-block col-lg-12 col-md-12 col-sm-12 col-xs-12">	
				<div class="" style="max-width:800px;margin:0 auto;">
					<?php echo get_post_meta($post->ID, 'dd-fourth-block', true); ?>
				</div>	
			</div>
		</div>
		
		<!-- third -->	
		
		<!-- fourth -->
		<div class="row">
			

<?php 
    echo do_shortcode("[metaslider id=845]"); 
?>

			<!-- <div class="dd-left-block col-lg-6 col-md-12 col-sm-12 col-xs-12"><?php echo get_post_meta($post->ID, 'dd-fourth-left-block-text', true); ?></div>
			
			<div class="dd-right-block col-lg-6 col-md-12 col-sm-12 col-xs-12"><div class="row"><img src="<?php echo the_field('dd-fourth-right-block-img'); ?>" alt="img" class="img-responsive size-full dd-img" /></div></div> -->
		</div>

		

				<?php the_content(); ?>

<?php get_footer(); ?>
