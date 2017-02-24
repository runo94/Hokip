<?php /* Template Name: Kontakt Page Template */ get_header(); ?>

<div class="container">
	<div class="col-lg-9 col-md-9  col-sm-12 col-xs-12 contact-list">
		<div class="col-lg-9 col-md-12  col-sm-12 col-xs-12">
	<iframe class="google_map" src="https://www.google.com/maps/d/u/0/embed?mid=13B8DVYzqNAJblSXIOzhZ0gs3F8k" width="97%" height="400"></iframe>
		</div>
		<div class="col-lg-3 col-md-12  col-sm-12 col-xs-12  top-part contact">
			<div style="" class="for_small"><?php echo get_post_meta($post->ID, 'buroadresse', true); ?></div>
		</div>
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-12 title"><p>Ansprechpersonen</p></div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact"><?php echo get_post_meta($post->ID, 'sekretariat', true); ?></div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact"><?php echo get_post_meta($post->ID, 'leitung', true); ?></div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact"><?php echo get_post_meta($post->ID, 'geschaftsfuhrer', true); ?></div>
				<div class="col-lg-12 title"><p>Standorte</p></div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact"><?php echo get_post_meta($post->ID, 'viktring', true); ?></div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact"><?php echo get_post_meta($post->ID, 'reifnitz', true); ?></div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact"><?php echo get_post_meta($post->ID, 'annabichl', true); ?></div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact"><?php echo get_post_meta($post->ID, 'klagenfurt', true); ?></div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 contact"><?php echo get_post_meta($post->ID, 'waidmannsdorf', true); ?></div>
			</div>
			<div class="row">
			  <?php echo do_shortcode("[contact-form-7 id='".get_post_meta($post->ID,'contact_form',true)."' title='Kontaktformular 1']"); ?>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
		<?php  get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>


