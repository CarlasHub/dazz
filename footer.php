<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dazz
 */

?>


	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dazz' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly developed by %s', 'dazz' ), '' );
				?>
			</a>
	
			&copy; <?php 
				$copyYear = 2017; 
				$curYear = date('Y'); 
				echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
				?> Me, Inc.
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'dazz' ), 'dazz', '<a href="http://underscores.me/">Carla Goncalves</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
