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
				Watch our video: Welcome to NAPSA Virtual Workshop 2017 (6:19)
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
					// $napsa_member_sanctuaries = array( 'post_type' => 'napsavid', 'taxonomy' => 'napsa_member_sanctuaries', 'orderby' => 'menu_order');
					// $loop = new WP_Query( $napsa_member_sanctuaries );
				$args = array( 'post_type' => 'napsavid',               
               'tax_query' =>
                               array(
                                  array(
                                    'taxonomy' => 'tag',
                                    'field'    => 'name',
                                    'terms' => napsa_member_sanctuaries,                                    
                                  ),
                                ), 
                );

				$loop = new WP_Query( $args ); 

				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<a class="post_block" href="<?php the_permalink(); ?>">
						<div class="img_hold"><img src="<?php echo get_post_meta( $post->ID, '_cmb2_placholder_image', true ); ?>" /></div>
						<div class="vid_info">
							<h2><?php the_title() ?></h2>
							<p><?php echo wpautop(get_post_meta( $post->ID, '_cmb2_short_description', true )); ?></p>
						</div>
					</a>
				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
			</section> <!-- .videofeed -->

			<section class="videofeed sanctuary_retirement">
				<h2 id="sanctuary_retirement">Sanctuary Retirement</h2>
				<?php
					$sanctuary_retirement = array( 'post_type' => 'napsavid', 'tax_query' =>
                               array(
                                  array(
                                    'taxonomy' => 'tag',
                                    'field'    => 'name',
                                    'terms' => sanctuary_retirement,                                    
                                  ),
                                ), 
                );
					$loop = new WP_Query( $sanctuary_retirement );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<a class="post_block" href="<?php the_permalink(); ?>">
						<div class="img_hold"><img src="<?php echo get_post_meta( $post->ID, '_cmb2_placholder_image', true ); ?>" /></div>
						<div class="vid_info">
							<h2><?php the_title() ?></h2>
							<p><?php echo wpautop(get_post_meta( $post->ID, '_cmb2_short_description', true )); ?></p>
						</div>
					</a>
				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
			</section> <!-- .videofeed -->


			<section class="videofeed caregiving">
				<h2 id="caregiving">Caregiving</h2>
				<?php
					$caregiving = array( 'post_type' => 'napsavid',  'tax_query' =>
                               array(
                                  array(
                                    'taxonomy' => 'tag',
                                    'field'    => 'name',
                                    'terms' => caregiving,                                    
                                  ),
                                ), 
                );
					$loop = new WP_Query( $caregiving );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<a class="post_block" href="<?php the_permalink(); ?>">
						<div class="img_hold"><img src="<?php echo get_post_meta( $post->ID, '_cmb2_placholder_image', true ); ?>" /></div>
						<div class="vid_info">
							<h2><?php the_title() ?></h2>
							<p><?php echo wpautop(get_post_meta( $post->ID, '_cmb2_short_description', true )); ?></p>
						</div>
					</a>
				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
			</section> <!-- .videofeed -->

			<section class="videofeed facility_design">
				<h2 id="facility_design">Facility Design</h2>
				<?php
					$facility_design = array( 'post_type' => 'napsavid', 'tax_query' =>
                               array(
                                  array(
                                    'taxonomy' => 'tag',
                                    'field'    => 'name',
                                    'terms' => facility_design,                                    
                                  ),
                                ), 
                );
					$loop = new WP_Query( $facility_design );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<a class="post_block" href="<?php the_permalink(); ?>">
						<div class="img_hold"><img src="<?php echo get_post_meta( $post->ID, '_cmb2_placholder_image', true ); ?>" /></div>
						<div class="vid_info">
							<h2><?php the_title() ?></h2>
							<p><?php echo wpautop(get_post_meta( $post->ID, '_cmb2_short_description', true )); ?></p>
						</div>
					</a>
				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
			</section> <!-- .videofeed -->

			<section class="videofeed sanctuary_management">
				<h2 id="sanctuary_management">Sanctuary Management</h2>
				<?php
					$sanctuary_management = array( 'post_type' => 'napsavid', 'tax_query' =>
                               array(
                                  array(
                                    'taxonomy' => 'tag',
                                    'field'    => 'name',
                                    'terms' => sanctuary_management,                                    
                                  ),
                                ), 
                );
					$loop = new WP_Query( $sanctuary_management );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<a class="post_block" href="<?php the_permalink(); ?>">
						<div class="img_hold"><img src="<?php echo get_post_meta( $post->ID, '_cmb2_placholder_image', true ); ?>" /></div>
						<div class="vid_info">
							<h2><?php the_title() ?></h2>
							<p><?php echo wpautop(get_post_meta( $post->ID, '_cmb2_short_description', true )); ?></p>
						</div>
					</a>
				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
			</section> <!-- .videofeed -->

			<section class="videofeed collaboration">
				<h2 id="collaboration">Collaboration</h2>
				<?php
					$collaboration = array( 'post_type' => 'napsavid', 'tax_query' =>
                               array(
                                  array(
                                    'taxonomy' => 'tag',
                                    'field'    => 'name',
                                    'terms' => collaboration,                                    
                                  ),
                                ), 
                );
					$loop = new WP_Query( $collaboration );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<a class="post_block" href="<?php the_permalink(); ?>">
						<div class="img_hold"><img src="<?php echo get_post_meta( $post->ID, '_cmb2_placholder_image', true ); ?>" /></div>
						<div class="vid_info">
							<h2><?php the_title() ?></h2>
							<p><?php echo wpautop(get_post_meta( $post->ID, '_cmb2_short_description', true )); ?></p>
						</div>
					</a>
				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
			</section> <!-- .videofeed -->

			<section class="videofeed supplemental_information">
				<h2 id="supplemental_information">Supplemental Information</h2>
				<?php
					$supplemental_information = array( 'post_type' => 'napsavid', 'tax_query' =>
                               array(
                                  array(
                                    'taxonomy' => 'tag',
                                    'field'    => 'name',
                                    'terms' => supplemental_information,                                    
                                  ),
                                ), 
                );
					$loop = new WP_Query( $supplemental_information );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<a class="post_block" href="<?php the_permalink(); ?>">
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