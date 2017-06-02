<?php
/*
Template Name: single_video
*/
  get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php if ( is_single() ) : ?>
  <?php 
    $chat_code = get_post_meta( $post->ID, '_cmb2_full_description', true );
  ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php the_title(); ?>
			<?php echo wpautop(get_post_meta( $post->ID, '_cmb2_video_url', true )); ?>
			<?php echo wpautop(get_post_meta( $post->ID, '_cmb2_short_description', true )); ?>
			<?php echo do_shortcode(" $chat_code "); ?>
			
			<?php echo wpautop(get_post_meta( $post->ID, '_cmb2_organization', true )); ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

  <?php endif; // is_single() ?>
 <?php endwhile; ?>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>