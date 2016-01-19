<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bemmy
 */

require_once dirname( __FILE__ ) . '/components/Footer/Footer.php';

?>

	</div><!-- #content -->

  <?php if ( is_active_sidebar( 'pre-footer-area' ) ) : ?>
    <?php dynamic_sidebar( 'pre-footer-area' ); ?>
  <?php endif; ?>

  <?php Footer(); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
