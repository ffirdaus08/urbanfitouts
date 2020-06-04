<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>
		
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="row">
				<div class="col-md-10">
					<a>© 2019 Work Nation. All rights reserved | </a>
					<a href="<?php echo esc_url('http://mplus.software/'); ?>"><?php printf( 'Website By M+ Software' ) ; ?></a>
				</div>
				<div class="col-md-2">
					<a href="<?php echo esc_url('https://www.linkedin.com/company/work-nation/'); ?>"><img class="faf" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/07/Work Nation-08.png"></a>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
