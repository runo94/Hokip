<?php /* Template Name: MitarbeiterInnen Page Template */get_header();?>

<div class="row sec-header">
<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 image"><div class="row"><img class="img-responsive size-full wp-image-607" src="<?php echo the_field('image_1'); ?>" alt="img1"></div></div>
<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 txt">
<div class="row">
<div class="normal-width">

<?php echo get_post_meta($post->ID, 'text_1', true); ?>


</div>
</div>
</div>
</div>

<div class="row">

<div class="container">
<div class="title"><h2>Unsere MitarbeiterInnen</h2></div>
	<div id="accordion" class="spoiler-avs">
	  <?php echo do_shortcode("[avs_show_spoiler id='14']"); ?>
	  <?php echo do_shortcode("[avs_show_spoiler id='2']"); ?>
	  <?php echo do_shortcode("[avs_show_spoiler id='19']"); ?>
	  <?php echo do_shortcode("[avs_show_spoiler id='27']"); ?>
	  <?php echo do_shortcode("[avs_show_spoiler id='34']"); ?>
	  <?php echo do_shortcode("[avs_show_spoiler id='38']"); ?>	
	  <?php echo do_shortcode("[avs_show_spoiler id='47']"); ?>	
	</div>
</div>


<div class="row sec-footer">

<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vbottom txt">
<div class="row">
<div class="normal-width">

<?php echo get_post_meta($post->ID, 'text_block_2', true); ?>
</div>
</div>
</div> -->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vbottom image">
	<div class="row">

		<div class="text_on_image">
			<?php echo get_post_meta($post->ID, 'text_on_image_2', true); ?>
		</div>
		<img src="<?php echo the_field('image_block_2'); ?>" alt="img2" class="img-responsive size-full wp-image-620" />

	</div>
</div>
</div>
</div>
				<?php the_content();?>

<?php get_footer();?>
