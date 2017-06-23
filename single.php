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
    $pdf_attach = get_post_meta( $post->ID, '_cmb2_pdf_upload', true );
  ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<a class="return_home" href="<?php echo home_url(); ?>">Return to Virtual Workshop</a>
			<h2><?php the_title(); ?></h2>
			<h4>Contributor: <?php echo get_post_meta( $post->ID, '_cmb2_organization', true ); ?></h4>
			<?php echo wpautop(get_post_meta( $post->ID, '_cmb2_video_url', true )); ?>
			<?php echo wpautop(get_post_meta( $post->ID, '_cmb2_short_description', true )); ?>
			<?php echo do_shortcode(" $chat_code "); ?>
			<?php if (!empty($pdf_attach)){ ?>
            <a href="<?php echo $pdf_attach ?>">View <?php echo $pdf_title ?> PDF Here.</a>
          <?php } ?>
			

		</main><!-- .site-main -->
	</div><!-- .content-area -->

  <?php endif; // is_single() ?>
 <?php endwhile; ?>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>