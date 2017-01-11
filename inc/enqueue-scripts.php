<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

if ( ! function_exists( 'wpdrubo_scripts' ) ) :
	function wpdrubo_scripts() {


	/**
	 * ===================================================================================
	 * 	*****	Stylesheets assets  *****
	 * ===================================================================================
	 */
	

	/**
	* Enqueue a CSS stylesheet.
	*
	* Registers the style if source provided (does NOT overwrite) and enqueues.
	*
	*
	* @param string           $handle Name of the stylesheet. Should be unique.
	* @param string           $src    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
	*                                 Default empty.
	* @param array            $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
	* @param string|bool|null $ver    Optional. String specifying stylesheet version number, if it has one, which is added to the URL
	*                                 as a query string for cache busting purposes. If version is set to false, a version
	*                                 number is automatically added equal to current installed WordPress version.
	*                                 If set to null, no version is added.
	* @param string           $media  Optional. The media for which this stylesheet has been defined.
	*                                 Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like
	*                                 '(orientation: portrait)' and '(max-width: 640px)'
	*                                 
	* @link https://codex.wordpress.org/Function_Reference/wp_enqueue_style
	* 
	* wp_enqueue_style( $handle, $src = '', $deps = array(), $ver = false, $media = 'all' )
	*/ 




	// Bootstrap
	wp_enqueue_style( 'Bootstrap' , get_template_directory_uri().'/assets/css/bootstrap.min.css', '' , '3.3.5' , 'all' );
	// This core.css file contents all plugings css file
	wp_enqueue_style( 'core' , get_template_directory_uri().'/assets/css/core.css', '' , '1.0.0' , 'all' );
	// Theme shortcodes/elements style
	wp_enqueue_style( 'shortcode' , get_template_directory_uri().'/assets/css/shortcode/shortcodes.css', '' , '1.0.0' , 'all' );
	// Nivo Slider
	wp_enqueue_style( 'nivo-slider' , get_template_directory_uri().'/assets/css/nivo-slider.css', '' , '3.2' , 'all' );
	// Magnific Popup Css
	wp_enqueue_style( 'magnific-popup' , get_template_directory_uri().'/assets/css/magnific-popup.css', '' , '1.0.0' , 'all' );
	// Material design iconic font Css
	wp_enqueue_style( 'material-design-iconic-font' , get_template_directory_uri().'/assets/css/material-design-iconic-font.min.css', '' , '1.0.0' , 'all' );
	// Venubox Css
	wp_enqueue_style( 'venobox' , get_template_directory_uri().'/assets/css/venobox.css', '' , '1.0.0' , 'all' );
	// Owl carsoul Css
	wp_enqueue_style( 'owl-carousel' , get_template_directory_uri().'/assets/css/plugins/owl.carousel.css', '' , '1.0.0' , 'all' );
	// Mean Menu Css
	wp_enqueue_style( 'meanmenu' , get_template_directory_uri().'/assets/css/plugins/meanmenu.min.css', '' , '1.0.0' , 'all' );
	// Mean Menu Css



	// Load our main stylesheet.
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
	// Responsive css
	wp_enqueue_style( 'responsive' , get_template_directory_uri().'/assets/css/responsive.css', '' , '1.0.0' , 'all' );
	// Custom css
	wp_enqueue_style( 'custom' , get_template_directory_uri().'/assets/css/custom.css', '' , '1.0.0' , 'all' );


	

	/**
	 * ===================================================================================
	 * 			Javascripts assets
	 * ===================================================================================
	 */

    /**
	 * Enqueue scripts
	 * 
	 * @param     string        $handle      Script name
	 * @param     string        $src         Script url
	 * @param     array         $deps        (optional) Array of script names on which this script depends
	 * @param     string|bool   $ver         (optional) Script version (used for cache busting), set to null to disable
	 * @param     bool          $in_footer   (optional) Whether to enqueue the script before </head> or before </body>
	 *
	 * @link https://codex.wordpress.org/Function_Reference/wp_enqueue_script
	 *
	 * wp_enqueue_script( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
	 * 
	 */
	
    wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery') , '3.3.5' , true );
    wp_enqueue_script( 'plugins-js' , get_template_directory_uri(). '/assets/js/plugins.js', array('jquery') , '1.0.0' , true );
    wp_enqueue_script( 'nivo-slider-js' , get_template_directory_uri(). '/assets/js/jquery.nivo.slider.pack.js', array('jquery') , '1.0.0' , true );
    wp_enqueue_script( 'magnific-popup-js' , get_template_directory_uri(). '/assets/js/jquery.magnific-popup.min.js', array('jquery') , '1.0.0' , true );
    wp_enqueue_script( 'isotope-js' , get_template_directory_uri(). '/assets/js/isotope.pkgd.min.js', array('jquery') , '1.0.0' , true );
    wp_enqueue_script( 'venobox-js' , get_template_directory_uri(). '/assets/js/venobox.min.js', array('jquery') , '1.0.0' , true );
    wp_enqueue_script( 'ajax-mail-js' , get_template_directory_uri(). '/assets/js/ajax-mail.js', array('jquery') , '1.0.0' , true );
    wp_enqueue_script( 'ajaxchimp-js' , get_template_directory_uri(). '/assets/js/jquery.ajaxchimp.min.js', array('jquery') , '1.0.0' , true );


    wp_enqueue_script( 'owl-carousel-js' , get_template_directory_uri(). '/assets/js/owl.carousel.min.js', array('jquery') , '1.0.0' , true );
    wp_enqueue_script( 'meanmenu-js' , get_template_directory_uri(). '/assets/js/jquery.meanmenu.js', array('jquery') , '1.0.0' , true );
    wp_enqueue_script( 'imagesloaded-js' , get_template_directory_uri(). '/assets/js/imagesloaded.pkgd.min.js', array('jquery') , '1.0.0' , true );
    wp_enqueue_script( 'counterup-js' , get_template_directory_uri(). '/assets/js/jquery.counterup.min.js', array('jquery') , '1.0.0' , true );
    wp_enqueue_script( 'waypoints-js' , get_template_directory_uri(). '/assets/js/jquery.waypoints.min.js', array('jquery') , '1.0.0' , true );
    wp_enqueue_script( 'theme-main-js' , get_template_directory_uri(). '/assets/js/main.js', array('jquery') , '1.0.0' , true );


    //wp_enqueue_script( 'google-map-js' , 'https://maps.googleapis.com/maps/api/js', array('jquery') , '1.0.0' , true );
    


    wp_enqueue_script( 'modanizer' ,  get_template_directory_uri().'/assets/js/vendor/modernizr-2.8.3.min.js');

	// Add the comment-reply library on pages where it is necessary
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}
	add_action( 'wp_enqueue_scripts', 'wpdrubo_scripts' );
endif;



