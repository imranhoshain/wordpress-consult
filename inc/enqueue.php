<?php

function consult_cs_js(){
	wp_enqueue_style( 'google-font', consult_fonts_url(), array(), '3.4.4' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), '3.4.4', 'all' );
	wp_enqueue_style( 'font-awaesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.5.0', 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'text-animation', get_template_directory_uri().'/assets/css/text-animation.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'fancybox-pop', get_template_directory_uri().'/assets/css/magnific-popup.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'rs-layer', get_template_directory_uri().'/rs-plugin/css/layers.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'rs-setting', get_template_directory_uri().'/rs-plugin/css/settings.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'plugins', get_template_directory_uri().'/assets/css/plugins.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'icons', get_template_directory_uri().'/assets/css/icons.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'menu', get_template_directory_uri().'/assets/css/menu-css.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'consult-comment-style', get_stylesheet_uri() );
        if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	wp_enqueue_script( 'jquery-min', get_template_directory_uri().'/assets/js/jquery.min.js', array(), '2.2.4', 'false' );
	wp_enqueue_script( 'modernizr', get_template_directory_uri().'/assets/js/modernizr.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'waypoints', get_template_directory_uri().'/assets/js/waypoints.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'plugins-js', get_template_directory_uri().'/assets/js/plugins.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'scrollUp', get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'map', get_template_directory_uri().'https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'gmap', get_template_directory_uri().'/assets/js/gmaps.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'fancybox-js', get_template_directory_uri().'/assets/js/jquery.fancybox.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'magnific-pop', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'counterup', get_template_directory_uri().'/assets/js/counterup.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/js/wow.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'jquery.lettering', get_template_directory_uri().'/assets/js/jquery.lettering.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'textillate', get_template_directory_uri().'/assets/js/jquery.textillate.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'mixitup', get_template_directory_uri().'/assets/js/mixitup.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'chart', get_template_directory_uri().'/assets/js/chart.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'chart-active', get_template_directory_uri().'/assets/js/chart-active.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'themepunch', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.tools.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'themepunch-revolution', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'revolution-a', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.actions.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'revolution-k', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'revolution-l', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'migration-js', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.migration.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'navigation-js', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'partrueax', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'slideanims', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'extension-video', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.video.min.js', array(), '1.0.0', 'true' );
	wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/js/custom.js', array(), '1.0.0', 'true' );

}

add_action( 'wp_enqueue_scripts', 'consult_cs_js');

function consult_fonts_url() {
$fonts_url = '';

$open_sans = _x( 'on', 'Open Sans font: on or off', 'theme-slug' );
$Montserrat = _x( 'on', 'Montserrat font: on or off', 'theme-slug' );

if ( 'off' !== $open_sans || 'off' !== $Montserrat ) {
	$font_families = array();
	if ( 'off' !== $open_sans ) {
	$font_families[] = 'Open+Sans:300i,400,400i,600,700,800';
	}
	if ( 'off' !== $Montserrat ) {
	$font_families[] = 'Montserrat:200,300,400,500,600,700,800,900';
	}

	$query_args = array(
	'family' => urlencode( implode( '|', $font_families ) ),
	'subset' => urlencode( 'cyrillic-ext,cyrillic,vietnamese,latin-ext,latin' ),
	);

	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
}
return esc_url_raw($fonts_url);
}

//Adding Google fonts to the editor
function consult_editor_styles() {
$open_sans = (array('editor-style.css', '//fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800'));
$Montserrat = (array('editor-style.css', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900'));
add_editor_style($open_sans, $Montserrat);
}
add_action( 'after_setup_theme', 'consult_editor_styles' );

function consult__custom_header_fonts() {
wp_enqueue_style( 'open_sans-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800', array(), null );
wp_enqueue_style( 'Montserrat-fonts', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900', array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'consult__custom_header_fonts' );