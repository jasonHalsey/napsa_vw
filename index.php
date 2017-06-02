<?php
/*
Template Name: Index
*/
  get_header();
?>


	<div id="primary" class="content-area">
		<section id="header_video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/32C685KDoFo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				<div class="video_info_bar">
					Watch our video: Lorem Ipsum Dolor Sit Amet (4:24)
				</div>
			</section>	
		<main id="main" class="site-main" role="main">

			<section class="page-content">
				<?php
				if (have_posts()) :
				   while (have_posts()) :
				      the_post();
				      the_content();
				   endwhile;
				endif; ?>		
			</section>
			<section class="videofeed napsa_member_sanctuaries">
				<h2 id="napsa_member_sanctuaries">Learn more about NAPSA Member Sanctuaries</h2>
				<?php
					$sanctuary_retirement = array( 'post_type' => 'napsavid', 'taxonomy' => 'napsa_member_sanctuaries', 'orderby' => 'menu_order');
					$loop = new WP_Query( $sanctuary_retirement );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<a href="<?php the_permalink(); ?>">
						<div class="img_hold"><img src="<?php echo get_post_meta( $post->ID, '_cmb2_placholder_image', true ); ?>" /></div>
						<div class="vid_info">
							<h2><?php the_title() ?></h2>
							<p><?php echo wpautop(get_post_meta( $post->ID, '_cmb2_short_description', true )); ?></p>
						</div>
					</a>
				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
			</section> <!-- .videofeed -->
		</main><!-- .site-main -->
		<section id="sidebar_nap">
			<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
			    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
			<?php endif; ?>
		</section>
	</div><!-- .content-area -->

<?php get_footer(); ?>