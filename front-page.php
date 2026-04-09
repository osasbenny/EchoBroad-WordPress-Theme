<?php
/**
 * The front page template file.
 *
 * @package EchoBroad
 */

get_header();
?>

	<main id="primary" class="site-main">
        <?php
        // If we are in the editor or Elementor, render the standard WordPress content
        if ( is_admin() || is_customize_preview() || isset( $_GET['elementor-preview'] ) ) {
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    the_content();
                }
            }
        } else {
            // The React application is rendered into the #root div in header.php.
            // This file serves as the entry point for the front page.
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                }
            }
        }
		?>
	</main><!-- #main -->

<?php
get_footer();
