<?php /* Template Name: Jobs Page Template */ get_header(); ?>

<div class="row sec-header">
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 image">
    <div class="row">
      <img class="img-responsive size-full wp-image-607" src="<?php echo the_field('header_image'); ?>" alt="img1">
    </div>
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 txt">
    <div class="row">
      <div class="normal-width">

        <?php echo get_post_meta($post->ID, 'header_text', true); ?>

      </div>
    </div>
  </div>
</div>

<div class="wrapper">
  <div class="col-lg-12 jobs"> 
    <?php echo get_post_meta($post->ID, 'jobs', true); ?>
    <?php echo do_shortcode("[contact-form-7 id='".get_post_meta($post->ID,'contact_form',true)."' title='jobs']"); ?>
  </div>
</div>
				<?php the_content(); ?>

<?php get_footer(); ?>
