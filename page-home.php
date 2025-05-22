<?php
/**
* Template Name: Page - Home
* @package sortandsurvive
*/

get_header(); ?>

<section class="templ--page-main">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-9 col-xl-8 text-center">
				<figure>
					<img class="mw-100" src="<?php the_field('ss_logo');?>">
				</figure>
				<h2 class="atm--home"><?php the_field('ss_introduction');?></h2>
				<!-- Image -->
				<h3 class="atm--home"><?php the_field('ss_explanation_intro');?></h3>
				<p class="atm--home"><?php the_field('ss_explanation');?></p>

				<div class="row gx-5 justify-content-center mt-1">
					<div class="col-12 col-md-4">
						<section class="ss-orgs">
							<figure>
								<a href="http://www.apdo-uk.co.uk" target="_blank" title="Find out more about apdo-uk" rel="external">
									<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/ss-logo-apdo-wh-v3.png" alt="apdo-uk">
								</a>
							</figure>
							<h6>Member of APDO-UK - The Association of Professional Declutterers &amp; Organisers.</h6>
							<p class="small"><a href="http://www.apdo-uk.co.uk" target="_blank" title="Find out more about apdo-uk" rel="external">Find out more »</a></p>
						</section>
					</div>
					<div class="col-12 col-md-4">
						<section class="ss-orgs">
							<figure>
								<a href="http://www.museumsassociation.org" target="_blank" title="Find out more about the Museums Association" rel="external">
									<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/ss-logo-ma-2025.png" alt="Museums Association">
								</a>
							</figure>
							<h6>Consultant Member of the Museums Association.</h6>
							<p class="small"><a href="http://www.museumsassociation.org" target="_blank" title="Find out more about the Museums Association" rel="external">Find out more »</a></p>
						</section>
					</div>
					<div class="col-12 col-md-4">
						<section class="ss-orgs">
							<figure>
								<a href="https://www.aim-museums.co.uk" target="_blank" title="Find out more about the Association of Independent Museums" rel="external">
									<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/ss-logo-aim.png" alt="Association of Independent Museums">
								</a>
							</figure>
							<h6>Member of the Association of Independent Museums</h6>
							<p class="small"><a href="https://www.aim-museums.co.uk" target="_blank" title="Find out more about the Museums Association" rel="external">Find out more »</a></p>
						</section>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>