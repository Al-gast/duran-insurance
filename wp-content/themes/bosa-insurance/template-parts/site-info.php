<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa Insurance
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-insurance' ) ) );
		echo esc_html( date( 'Y' ) );
		printf( esc_html__( ' Bosa Insurance. Powered by', 'bosa-insurance' ) );
	?>
	<a href="<?php echo esc_url( __( '//bosathemes.com', 'bosa-insurance' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'Bosa Themes', 'bosa-insurance' ) );
		?>
	</a>
</div><!-- .site-info -->