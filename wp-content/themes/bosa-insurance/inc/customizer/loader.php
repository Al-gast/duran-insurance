<?php

function bosa_insurance_default_styles(){

	// Begin Style
	$css = '<style>';

	$feature_posts_overlay_opacity = get_theme_mod( 'feature_posts_overlay_opacity', 4 );
	$css .= '
	.feature-posts-layout-two .feature-posts-content-wrap .feature-posts-image a:before {
	 	background-color: rgba(0, 0, 0, 0.'. esc_attr( $feature_posts_overlay_opacity ) .');
	}
	';

	$featured_post_title_color = get_theme_mod( 'featured_post_title_color', '#101010' );
    $featured_post_category_color = get_theme_mod( 'featured_post_category_color', '#ff483a' );
    $featured_post_meta_icon_color = get_theme_mod( 'featured_post_meta_icon_color', '#ff483a' );
    $featured_post_meta_color = get_theme_mod( 'featured_post_meta_color', '#7a7a7a' );
    $featured_post_hover_color = get_theme_mod( 'featured_post_hover_color', '#086abd' );
    $css .= '
    	.feature-posts-content .feature-posts-title {
    		color: '. esc_attr( $featured_post_title_color) .';
    	}
    	.feature-posts-layout-two .feature-posts-content .feature-posts-title a:after {
    		background-color: '. esc_attr( $featured_post_title_color) .';
    	}
    	.feature-posts-content .feature-posts-title a:hover, 
    	.feature-posts-content .feature-posts-title a:focus, 
    	.feature-posts-content .feature-posts-title a:active {
    		color: '. esc_attr( $featured_post_hover_color ) .';
    	}
    	.feature-posts-layout-two .feature-posts-content .feature-posts-title a:hover:after, 
    	.feature-posts-layout-two .feature-posts-content .feature-posts-title a:focus:after, 
    	.feature-posts-layout-two .feature-posts-content .feature-posts-title a:active:after {
    		background-color: '. esc_attr( $featured_post_hover_color ) .';
    	}
    ';

    $css .= '
    	.feature-posts-content .cat-links a {
    		color: '. esc_attr( $featured_post_category_color ) .';
    	}
    	.feature-posts-layout-two .feature-posts-content .cat-links a:hover,
    	.feature-posts-layout-two .feature-posts-content .cat-links a:focus,
    	.feature-posts-layout-two .feature-posts-content .cat-links a:active {
    		color: '. esc_attr( $featured_post_hover_color ) .';
    	}
    ';

    $css .= '
    	.post .feature-posts-content .entry-meta a {
    		color: '. esc_attr( $featured_post_meta_color ) .';
    	}
    	.post .feature-posts-content .entry-meta a:before {
    		color: '. esc_attr( $featured_post_meta_icon_color ) .';
    	}
    	.post .feature-posts-content .entry-meta a:hover, 
    	.post .feature-posts-content .entry-meta a:focus, 
    	.post .feature-posts-content .entry-meta a:active,
    	.post .feature-posts-content .entry-meta a:hover:before, 
    	.post .feature-posts-content .entry-meta a:focus:before, 
    	.post .feature-posts-content .entry-meta a:active:before {
    		color: '. esc_attr( $featured_post_hover_color ) .';
    	}
    ';
	
	// End Style
	$css .= '</style>';

	// return generated & compressed CSS
	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); 
}
add_action( 'wp_head', 'bosa_insurance_default_styles', 99 );