<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deadline
 */

$ilovewp_logo = get_template_directory_uri() . '/images/ilovewp-logo-white.png';

?>

	<?php get_sidebar( 'footer' ); ?>

	<footer class="site-footer" role="contentinfo">
	
		<?php
		$footer_branding = get_theme_mod( 'deadline_footer_branding', 0 );
		$footer_logo_img = esc_url( get_theme_mod( 'deadline_footer_logo' ) );
		?>
		
		<?php if ( has_nav_menu( 'footer' ) || !empty ( $footer_logo_img ) ) { ?>
		
		<div class="wrapper wrapper-footer ">
			
			<?php if ( !empty ( $footer_logo_img ) && $footer_branding == 1 ) { ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url( $footer_logo_img ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo-site-footer" /></a>
			<?php } ?>

			<nav id="hermes-nav-footer-copy" aria-label="Footer Navigation">

				<?php wp_nav_menu( array('container' => '', 'container_class' => '', 'menu_class' => '', 'menu_id' => 'menu-site-footer', 'sort_column' => 'menu_order', 'depth' => '1', 'theme_location' => 'footer', 'after' => '') ); ?>

			</nav><!-- #hermes-nav-footer-copy -->
			
		</div><!-- .wrapper .wrapper-footer -->
		
		<?php }	?>
		
		<div class="wrapper wrapper-copy">
				<p class="copy"><?php _e('Copyright &copy;','deadline');?> <?php echo date_i18n(__("Y","deadline")); ?> <?php bloginfo('name'); ?>. <?php _e('All Rights Reserved', 'deadline');?>. </p>
				<p class="copy-ilovewp"><span class="theme-credit"><?php _e( 'Theme by', 'deadline' ); ?><a href="http://www.ilovewp.com/" rel="designer" class="footer-logo-ilovewp"><img src="<?php echo esc_url($ilovewp_logo); ?>" width="51" height="11" alt="<?php esc_attr_e('Magazine WordPress Themes', 'deadline');?>" /></a></span></p>
		</div><!-- .wrapper .wrapper-copy -->
	
	</footer><!-- .site-footer -->

</div><!-- end #container -->

<?php wp_footer(); ?>

</body>
</html>