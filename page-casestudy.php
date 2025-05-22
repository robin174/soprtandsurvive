<?php
/**
* Template Name: Case Studies
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
							<h1 class="text-center">Case Studies</h1>

							<h2>For Museums &amp; Heritage Organisations</h2>
							<?php $args=array(
				                    'post_type' => 'case-study',
				                    'post_status' => 'publish',
				                    'order' => 'DESC',
									'post_status' => 'publish',
				                    'collaboration' => 'museums, heritage-organisations',
				                );
				                $query = new WP_Query( $args );
				                if ( $query->have_posts() ) :
				                while ( $query->have_posts() ) : $query->the_post(); ?>
					            	<div class="post--block">
			                            <div class="row">
			                                <div class="col-12">
			                                	<h3><?php the_field('cs_heading'); ?></h3>
			                                	<?php if( get_field('cs_content') ): ?>
			                                		<?php the_field('cs_content'); ?>
			                                	<?php endif; ?>
			                                	<?php if( get_field('cs_testimonial') ): ?>
			                                		<blockquote>&ldquo;<?php the_field('cs_testimonial'); ?>&rdquo;<br>
			                                		<span class="credit"><?php the_field('cs_credit'); ?></span></blockquote>
			                                	<?php endif; ?>
			                                	<p class="cost"><strong><span class="small">Cost:</span>&nbsp;<?php the_field('cs_cost'); ?></strong></p>                               
			                                </div>
			                            </div>
			                        </div>
				            	<?php wp_reset_postdata(); endwhile; 
				            endif; ?>

							<h2><br>For individuals</h2>
							<?php $args=array(
				                    'post_type' => 'case-study',
				                    'post_status' => 'publish',
				                    'order' => 'DESC',
									'post_status' => 'publish',
				                    'collaboration' => 'individuals',
				                );
				                $query = new WP_Query( $args );
				                if ( $query->have_posts() ) :
				                while ( $query->have_posts() ) : $query->the_post(); ?>
					            	<div class="post--block">
			                            <div class="row">
			                                <div class="col-12">
			                                	<h3><?php the_field('cs_heading'); ?></h3>
			                                	<?php if( get_field('cs_content') ): ?>
			                                		<?php the_field('cs_content'); ?>
			                                	<?php endif; ?>
			                                	<?php if( get_field('cs_testimonial') ): ?>
			                                		<blockquote>&ldquo;<?php the_field('cs_testimonial'); ?>&rdquo;<br>
			                                		<span class="credit"><?php the_field('cs_credit'); ?></span></blockquote>
			                                	<?php endif; ?>
			                                	<p class="cost"><strong><span class="small">Cost:</span>&nbsp;<?php the_field('cs_cost'); ?></strong></p>                               
			                                </div>
			                            </div>
			                        </div>
				            	<?php wp_reset_postdata(); endwhile; 
				            endif; ?>

						</section>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>