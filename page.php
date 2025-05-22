<?php
/**
* The template for displaying all pages.
*
* @package sortandsurvive
*/

get_header(); ?>

<section class="templ--page-main">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-9">
				<?php get_template_part('template-parts/page-builder'); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>