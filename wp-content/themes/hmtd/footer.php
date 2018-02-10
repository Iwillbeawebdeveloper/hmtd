<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hmtd
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://www.iwillbewebdeveloper.co.uk', 'hmtd' ) ); ?>"><?php printf( esc_html__( 'Website Developed by %s', 'hmtd' ), 'James Winfield' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'hmtd' ), 'hmtd', '<a href="http://www.iwillbewebdeveloper.co.uk" rel="designer">James Winfield</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<script>
setTimeout(function(){
     var videoframe = document.getElementById('videoframe');
  videoframe.src = videoframe.src + '?rel=0&autoplay=1';
}, 15000);
</script>
</html>
