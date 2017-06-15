<?php
/*
Template Name: Index
*/
  get_header();
?>


	<div id="primary" class="content-area">
		<section id="header_video">
			<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/32C685KDoFo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> -->
			  <div class="videoWrapper videoWrapper169 js-videoWrapper">
			    <!-- YouTube iframe. -->
			    <!-- note the iframe src is empty by default, the url is in the data-src="" argument -->
			    <!-- also note the arguments on the url, to autoplay video, remove youtube adverts/dodgy links to other videos, and set the interface language -->
			    <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/32C685KDoFo?autoplay=1&rel=0&amp;showinfo=0" ></iframe>
			    <!-- the poster frame - in the form of a button to make it keyboard accessible -->
			    <span class="videoPoster js-videoPoster" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/christopher_ape.jpg">&nbsp;</span>
			  </div>
  
			<div class="video_info_bar">
				Featured: Christopher, Center for Great Apes
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
				<h2 id="napsa_member_sanctuaries">NAPSA and its Members</h2>
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
						<div class="img_hold">
							<div class="play_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/play_arrow.svg"></div>
							<img src="<?php echo get_post_meta( $post->ID, '_cmb2_placholder_image', true ); ?>" class="placeholder" />
						</div>
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
						<div class="img_hold">
							<div class="play_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/play_arrow.svg"></div>
							<img src="<?php echo get_post_meta( $post->ID, '_cmb2_placholder_image', true ); ?>" class="placeholder" />
						</div>
						<div class="vid_info">
							<h2><?php the_title() ?></h2>
							<p><?php echo wpautop(get_post_meta( $post->ID, '_cmb2_short_description', true )); ?></p>
						</div>
					</a>
				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
			</section> <!-- .videofeed -->

			<section class="videofeed safety">
				<h2 id="safety">Safety</h2>
				<?php
					$safety = array( 'post_type' => 'napsavid', 'tax_query' =>
                               array(
                                  array(
                                    'taxonomy' => 'tag',
                                    'field'    => 'name',
                                    'terms' => safety,                                    
                                  ),
                                ), 
                );
					$loop = new WP_Query( $safety );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<a class="post_block" href="<?php the_permalink(); ?>">
						<div class="img_hold">
							<div class="play_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/play_arrow.svg"></div>
							<img src="<?php echo get_post_meta( $post->ID, '_cmb2_placholder_image', true ); ?>" />
						</div>
						<div class="vid_info">
							<h2><?php the_title() ?></h2>
							<p><?php echo wpautop(get_post_meta( $post->ID, '_cmb2_short_description', true )); ?></p>
						</div>
					</a>
				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
			</section> <!-- .videofeed -->
			
			
			<section class="videofeed sanctuary_management">
				<h2 id="sanctuary_management">Management</h2>
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
						<div class="img_hold">
							<div class="play_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/play_arrow.svg"></div>
							<img src="<?php echo get_post_meta( $post->ID, '_cmb2_placholder_image', true ); ?>" class="placeholder" />
						</div>
						<div class="vid_info">
							<h2><?php the_title() ?></h2>
							<p><?php echo wpautop(get_post_meta( $post->ID, '_cmb2_short_description', true )); ?></p>
						</div>
					</a>
				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
			</section> <!-- .videofeed -->

			

			<section class="videofeed veterinary">
				<h2 id="veterinary">Veterinary</h2>
				<?php
					$veterinary = array( 'post_type' => 'napsavid', 'tax_query' =>
                               array(
                                  array(
                                    'taxonomy' => 'tag',
                                    'field'    => 'name',
                                    'terms' => veterinary,                                    
                                  ),
                                ), 
                );
					$loop = new WP_Query( $veterinary );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<a class="post_block" href="<?php the_permalink(); ?>">
						<div class="img_hold">
							<div class="play_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/play_arrow.svg"></div>
							<img src="<?php echo get_post_meta( $post->ID, '_cmb2_placholder_image', true ); ?>" class="placeholder" />
						</div>
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