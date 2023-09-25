<?php
/**
 * Theme functions and definitions
 *
 * @package Bosa Insurance
 */

require get_stylesheet_directory() . '/inc/customizer/customizer.php';
require get_stylesheet_directory() . '/inc/customizer/loader.php';

if ( ! function_exists( 'bosa_insurance_enqueue_styles' ) ) :
	/**
	 * @since Bosa Insurance 1.0.0
	 */
	function bosa_insurance_enqueue_styles() {
		wp_enqueue_style( 'bosa-insurance-style-parent', get_template_directory_uri() . '/style.css',
			array(
				'bootstrap',
				'slick',
				'slicknav',
				'slick-theme',
				'fontawesome',
				'bosa-blocks',
				'bosa-google-font'
				)
		);
		wp_enqueue_style( 'bosa-insurance-google-fonts', "https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap", false );
		wp_enqueue_style( 'bosa-insurance-google-fonts-two', "https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap", false );
	}

endif;
add_action( 'wp_enqueue_scripts', 'bosa_insurance_enqueue_styles', 10 );

if( !function_exists( 'bosa_insurance_feature_posts_layout_filter' ) ){
    /**
    * Filter of feature posts layout choices.
    * 
    * @since Bosa Insurance 1.0.2
    * @return array
    */
    add_filter( 'bosa_feature_posts_section_layouts_filter', 'bosa_insurance_feature_posts_layout_filter' );
    function bosa_insurance_feature_posts_layout_filter( $feature_layout ){
        $added_feature = array(
           'feature_two' => get_stylesheet_directory_uri() . '/assets/images/feature-post-layout-2.png',
        );
        return array_merge( $feature_layout, $added_feature );
    }
}

add_theme_support( "title-tag" );
add_theme_support( 'automatic-feed-links' );