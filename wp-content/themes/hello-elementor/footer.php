<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	get_template_part( 'template-parts/footer' );
}
?>

<?php wp_footer(); ?>
<script>
jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();
    if (jQuery(window).scrollTop() >= 100) {
        jQuery(".main-header").addClass("sticky");
    } else {
        jQuery(".main-header").removeClass("sticky");
    }
});

</script>
</body>
</html>
