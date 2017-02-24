<?php /* Template Name: IMPRESSUM Page Template */ get_header(); ?>

		<div class="row dd-fifth-block home_header_bg">
			<div class="dd-right-block col-lg-7 col-md-12 col-sm-12 col-xs-12"><div class="row"><img src="<?php echo the_field('dd-fifth-block-image'); ?>" alt="img" class="img-responsive size-full dd-img" /></div></div>
			<div class="dd-left-block col-lg-5 col-md-12 col-sm-12 col-xs-12">
			<h2><?php the_title(); ?></h2>
			<?php echo get_post_meta($post->ID, 'dd-fifth-block', true); ?>
				
			</div>
		</div>

<?php get_footer(); ?>
