<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package EDF
 */

get_header();
?>
<section class="site-section intro-section archive-page">
	<div class="site-wrapper">
		<div class="d-flex justify-center site-row">
			<div class="site-col col-12">
				<div class="site-content text-center">
					<div class="section-title">
						<h2 class="large-text"><?php esc_html_e('Oops! That page can’t be found.','edf'); ?></h2>
					</div>
					<div class="section-content">
						<p>
							<?php esc_html_e( 'It looks like nothing was found at this location. Please ensure you do not have any typos in the URL', 'edf' ); ?>
						</p>
						<div class="text-center">
							<a class="site-btn" href="<?php echo home_url('/'); ?>">
								<?php echo esc_html('Go to Home'); ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
