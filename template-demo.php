<?php /* Template Name: Demo Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<div class="container">
<div class="first-part">
<div class="pic-1 col-lg-6 col-md-6 col-sm-12 col-xs-12"><img class=" img-responsive size-full wp-image-584" src="<?php echo the_field('image_1'); ?>" alt="pic1"></div>
<div class="txt col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="centered">

<?php echo get_post_meta($post->ID, 'text_1', true); ?>

</div>
</div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="seccond-part">
<div class="txt col-lg-6 col-md-6 hidden-sm hidden-xs">
<div class="centered"><?php echo get_post_meta($post->ID, 'text_2', true); ?></div>
</div>
<div class="pic-2 col-lg-6 col-md-6 col-sm-12 col-xs-12"><img class="img-responsive size-full wp-image-585" src="<?php echo the_field('image_2'); ?>" alt="pic2"></div>
<div class="txt col-xs-12 col-sm-12 visible-sm visible-xs hidden-md hidden-lg">
<div class="centered"><?php echo get_post_meta($post->ID, 'text_2', true); ?></div>
</div>
</div>
</div>

				<?php the_content(); ?>

<?php get_footer(); ?>
