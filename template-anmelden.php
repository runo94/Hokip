<?php /* Template Name: Kind anmelden Page Template */ get_header(); ?>

<div class="row">
  <?php echo do_shortcode('[metaslider id=665]'); ?>
</div>


<div class="row six-block">
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 vbottom image">
    <div class="row">
      <img class="img-responsive size-full wp-image-710" style="float: right;" src="<?php echo the_field('block_image_6'); ?>" alt="kind-anmelden-lg-2">
    </div>
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 vbottom txt">
    <div class="row">
      <div class="title_contact"><?php echo get_post_meta($post->ID,'title_contact',true); ?></div>
      <div class="contact_description"><?php echo get_post_meta($post->ID,'contact_description',true); ?></div>
      <div class="required"><p>Wählen Sie hier den Standort aus.</p></div>
      <?php echo do_shortcode("[contact-form-7 id='".get_post_meta($post->ID,'contact_form',true)."' title='Kind anmelden']"); ?>
    </div>
  </div>
</div><!-- 

<div class="row first-block">
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 image">
    <div class="row">
      <img class="img-responsive size-full wp-image-671" src="<?php echo the_field('block_image_1'); ?>" alt="%d0%b0%d0%bd%d1%82%d0%be%d0%bd">
      </div> 
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 txt">
    <div class="row">
      <div class="normal-width">
        <?php echo get_post_meta($post->ID, 'block_text_1', true); ?>
      </div>
    </div>
  </div>
</div> 

<div class="row sec-block">
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 vbottom image">
    <div class="row">
      <img class="alignnone size-full wp-image-694" src="<?php echo the_field('block_image_2'); ?>" alt="kind-anmelden-lg">
    </div>
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 vbottom txt">
    <div class="row">
      <p><?php echo get_post_meta($post->ID, 'block_text_2', true); ?></p>

    </div>
  </div>
</div>
<div class="row third-block">
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 txt">
    <div class="row">
      <p><?php echo get_post_meta($post->ID, 'block_text_3', true); ?></p>
    </div>
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 image">
    <div class="row">
      <img class="alignnone size-full wp-image-703" src="<?php echo the_field('block_image_3'); ?>" alt="kind-anmelden-lg">
    </div>
  </div>
</div>
<div class="row forth-block">
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 vbottom txt">
    <div class="row">
      <p><?php echo get_post_meta($post->ID, 'block_text_4', true); ?></p>
    </div>
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 vbottom image">
    <div class="row">
      <img class="alignnone size-full wp-image-706" src="<?php echo the_field('block_image_4'); ?>" alt="kind-anmelden-lg-1">
    </div>
  </div>
</div> -->

<!-- <div class="row fiv-block">
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 vbottom image">
    <div class="row">
      <img class="alignnone size-full wp-image-710" src="<?php echo the_field('block_image_5'); ?>" alt="kind-anmelden-lg-2">
    </div>  
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 vbottom txt">
    <div class="row">
      <p><?php echo get_post_meta($post->ID, 'block_text_5', true); ?></p>
    </div>
  </div>
</div> -->


				<?php the_content(); ?>

<?php get_footer(); ?>
