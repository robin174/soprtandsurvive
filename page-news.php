<?php
/**
* Template Name: News
* @package sortandsurvive
*/

get_header(); ?>


<section class="templ--page-main">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-9">

				<div class="row justify-content-center">
					<div class="col-12 col-lg-5 col-xl-4 text-center">
						<section class="ss-image-head">
							<figure>
								<img class="mw-100" src="<?php the_field('image-portrait'); ?>" alt="Sort and Survive - Image">
							</figure>
						</section>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<section>
							<h1 class="text-center">Latest News</h1>
				            <?php
				            $args=array(
				                'post_type' => 'post',
				                'order' => 'DESC',
				                'post_status' => 'publish',
				            );
				            $my_query = null;
				            $my_query = new WP_Query($args);
				            if( $my_query->have_posts() ) {
				            while ($my_query->have_posts()) : $my_query->the_post(); ?>

		                        <div class="post--block">
		                            <div class="row">
		                                <div class="col-12 col-md-3">
		                                    <figure>
		                                        <?php if ( has_post_thumbnail() ) {
		                                            the_post_thumbnail('', array('class' => 'img-fluid'));
		                                        } else { ?>
		                                            <img class="mw-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ss-featured.jpg" alt="<?php the_title(); ?>">
		                                        <?php } ?>
		                                    </figure>
		                                </div>
		                                <div class="col-12 col-md-9">
		                                    <h2><?php the_title(); ?></h2>
		                                   	<?php get_template_part('template-parts/page-builder'); ?>
		                                    <section class="post--add">
		                                    	<?php $location = get_field('location'); ?>
		                                    	<?php $website = get_field('website'); ?>
		                                    	<?php custom_entry_meta(); ?><?php if(get_field('location')): { echo "&nbsp;|&nbsp;".$location; } endif; ?><?php if(get_field('website')): { echo '&nbsp;|&nbsp;<a target="_blank" href="http://'.$website.'">For more...</a>'; } endif; ?>
		                                    </section>
		                                </div>
		                            </div>
		                        </div>

				            <?php endwhile; }
				            wp_reset_query(); ?>
						</section>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>