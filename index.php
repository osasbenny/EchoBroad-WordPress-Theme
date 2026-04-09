<?php
/**
 * The main template file
 */

get_header();
?>

	<main id="primary" class="site-main">
        <?php
        // If we are in the editor or Elementor, render the standard WordPress content
        if ( is_admin() || is_customize_preview() || isset( $_GET['elementor-preview'] ) || is_singular() ) {
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    the_content();
                }
            }
        } else {
            // The React application is rendered into the #root div in header.php.
            // This part is for the standard WordPress loop if needed.
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
