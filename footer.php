<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package sortandsurvive
*/ 
?>
		</main><!-- end main -->
		<footer>
			<div class="container-fluid">
                <div class="row justify-content-center">
                	<div class="col-12 col-md-9 col-8 text-center">
                		<figure>
							<img style="height: 150px;" class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/ss-logo.png">
						</figure>
                		<p>Find us on <a href="https://www.linkedin.com/company/sort-survive-ltd/" target="_blank" title="Sort & Survive on LinkedIn">LinkedIn</a>&nbsp;|&nbsp;<a href="<?php echo get_page_link( get_page_by_path( 'privacy' ) ); ?>">Privacy Policy</a>&nbsp;|&nbsp;<a href="<?php echo get_page_link( get_page_by_path( 'terms-and-conditions' ) ); ?>">Terms &amp; Conditions</a></p>
                		<p class="ss-copyright">&copy;&nbsp;<?php echo date('Y'); ?> Sort & Survive Ltd. All rights reserved.</p>
                	</div>
                </div>
            </div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>