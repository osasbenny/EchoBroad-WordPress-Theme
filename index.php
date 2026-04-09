<?php
/**
 * The main template file
 */

get_header();
?>

	<main id="primary" class="site-main">
        <?php
        // The React application is rendered into the #root div in header.php.
        // This file's primary purpose is to provide the basic WordPress loop structure,
        // although the content itself is controlled by the JavaScript application.
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				// Post content can be displayed here if needed, but the React app handles the main display.
			}
		} else {
			// No posts found.
		}
		?>
	</main><!-- #main -->

<?php
get_footer();
