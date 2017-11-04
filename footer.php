<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zaffre
 */

?>

	</div><!-- #content -->

<div class="social-footer"><?php get_template_part( 'menu', 'social' ); ?></div>

	<footer id="colophon" class="site-footer" role="contentinfo">

<div id="footer-sidebar" class="secondary">
		<div id="footer-sidebar1">
		<?php
		if(is_active_sidebar('footer-sidebar-1')){
		dynamic_sidebar('footer-sidebar-1');
		}
		?>
		</div>
			<div id="footer-sidebar2">
			<?php
			if(is_active_sidebar('footer-sidebar-2')){
			dynamic_sidebar('footer-sidebar-2');
			}
			?>
			</div>
		<div id="footer-sidebar3">
		<?php
		if(is_active_sidebar('footer-sidebar-3')){
		dynamic_sidebar('footer-sidebar-3');
		}
		?>
		</div>
			<div id="footer-sidebar4">
			<?php
			if(is_active_sidebar('footer-sidebar-4')){
			dynamic_sidebar('footer-sidebar-4');
			}
			?>
		</div>
	</div>
		
	<div id="footer-disclaimer">
	<?php
	if(is_active_sidebar('footer-disclaimer')){
	dynamic_sidebar('footer-disclaimer');
	}
	?>
	</div>
		
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'zaffre' ) ); ?>">
				<?php printf( __( 'Powered by %s', 'zaffre' ), 'WordPress' ); ?></a>
			<span> | </span>Theme: 
			<a href="<?php echo esc_url( __( 'http://incodescentthemes.com/zaffre', 'zaffre' ) ); ?>">
				<?php printf( __( 'Zaffre', 'zaffre' ) ); ?></a> <br>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
