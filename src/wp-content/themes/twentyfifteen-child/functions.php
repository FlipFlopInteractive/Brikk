<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */

if ( ! isset( $content_width ) ) {
	$content_width = '100%';
}

/**
 * Global function to retrieve the relative child template directory
 */
function get_child_template_directory_uri() {
	return get_stylesheet_directory_uri();
}

/**
 * Remove initial parent theme load scripts function
 */
function remove_fifteen_scripts() {
	remove_action('wp_enqueue_scripts', 'fifteen_scripts');
}
add_action( 'init', 'remove_fifteen_scripts' );


/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_child_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfifteen-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'twentyfifteen-child-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );

	wp_enqueue_script( 'twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
	}

	wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20141212', true );
	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );

	// Load javascript libraries (i.e. jQuery, Headroom.js, etc.)

	wp_enqueue_script('javascript-libraries', get_child_template_directory_uri() . '/js/vendor/jquery-1.8.1.min.js', array(), '1.0.0', TRUE);

	// Load custom javascript scripts
	wp_enqueue_script('custom-scripts', get_child_template_directory_uri() . '/js/app.js', array(), '1.0.0', TRUE);
	wp_enqueue_script('custom-scripts', get_child_template_directory_uri() . '/js/map.js', array(), '1.0.0', TRUE);

}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_child_scripts' );


function change_post_menu_label() {
	
	global $menu;
	global $submenu;
	$menu[ 5 ][ 0 ] = 'Cases';
	$submenu[ 'edit.php' ][ 5 ][ 0 ] = 'Cases';
	$submenu[ 'edit.php' ][ 10 ][ 0 ] = 'Add cases';
}
add_action( 'admin_init', 'change_post_menu_label' );

function change_post_object_label() {
	
	global $wp_post_types;
	$labels = &$wp_post_types[ 'post' ]->labels;
	$labels->name = 'Cases';
	$labels->singular_name = 'Case';
	$labels->add_new = 'Add case';
	$labels->add_new_item = 'Add case';
	$labels->edit_item = 'Edit case';
	$labels->new_item = 'Case';
	$labels->view_item = 'View case';
	$labels->search_items = 'Search cases';
	$labels->not_found = 'No cases found';
	$labels->not_found_in_trash = 'No cases found in trash';
}
add_action( 'admin_init', 'change_post_object_label' );


/**
 * enable livereload on localhost
 */
function livereload() {

	if( in_array( $_SERVER[ 'REMOTE_ADDR' ], array( '127.0.0.1', '::1' ))){

		wp_register_script( 'livereload', 'http://localhost:35729/livereload.js?snipver=1', NULL, FALSE, TRUE );
		wp_enqueue_script( 'livereload' );
	}
}
add_action( 'wp_enqueue_scripts', 'livereload' );



function get_page_heading_title( $post_id ){


	$html = '';

	$html .='<div class="VimeoHeader">';


	if( simple_fields_fieldgroup( 'heading_title', $post_id )){

		$html .= '<div class="header_text">';
		$html .= '<h1>' . simple_fields_fieldgroup( 'heading_title', $post_id ) . '</h1>';
		$html .= '</div>';
	}


	$html .='<div class="background_wrapper">';

	if( simple_fields_fieldgroup( 'vimeo_heading', $post_id )){

		$html .= '<div class="embed-responsive embed-responsive-16by9">';
		$html .= '<iframe class="embed-responsive-item" src="//player.vimeo.com/video/' . substr( parse_url( simple_fields_fieldgroup( 'vimeo_heading', $post_id ), PHP_URL_PATH ), 1 ) . '?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;autoplay=1&amp;loop=1&amp;color=00D8D8&amp;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
		$html .= '</div>';
	}

	$html .='</div>';
	$html .='</div>';


	return $html;
}


function get_page_heading( $post_id ){

	$html = '<article class="ImageHeader">';

	if( has_post_thumbnail( $post_id )){

		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
		$html = '<article class="ImageHeader" style="background-image: url(' . $image[ 0 ] . ');">';
	}

	if( simple_fields_fieldgroup( 'heading_title', $post_id )){
		$html .= '<div class="header_text">';
		$html .= '<h1>' . simple_fields_fieldgroup( 'heading_title', $post_id ) . '</h1>';
		$html .= '</div>';
	}

	$html .= '</article>';

	return $html;
}

function get_page_heading_contact( $post_id ){

	$html = '<article class="ContactHeader">';

	if( has_post_thumbnail( $post_id )){

		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
		$html = '<article class="ContactHeader" style="background-image: url(' . $image[ 0 ] . ');">';
	}

	if( simple_fields_fieldgroup( 'heading_title', $post_id )){
		$html .= '<div class="header_text">';
		$html .= '<h1>' . simple_fields_fieldgroup( 'heading_title', $post_id ) . '</h1>';
		$html .= '</div>';
	}

	$html .= '</article>';

	return $html;
}

function get_page_title( $post_id ){


	if( simple_fields_fieldgroup( 'heading_title', $post_id )){
		$html .= '<div class="header_text">';
		$html .= '<h1>' . simple_fields_fieldgroup( 'heading_title', $post_id ) . '</h1>';
		$html .= '</div>';
	}

	return $html;
}


function get_all_cases( $classes ){

	$html  = '';
	// $html .= '<div class="container-fluid">';
	$html .= '<div class="row">';
		
	$args = array(
		'posts_per_page'   => 1000,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => '',
		'orderby'          => 'post_date',
		'order'            => 'ASC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'post_status'      => 'publish',
		'suppress_filters' => true 
	);

	$cases = get_posts( $args );

	foreach( $cases as $case ){

		if( has_post_thumbnail( $case->ID )){

			$category = simple_fields_fieldgroup( 'categories_choose',$case->ID );

			// $case_title = simple_fields_fieldgroup( 'case_stills', $case->ID );

			$html .= '<div class="' . $classes .' '.'6'.' '.$category.'">';
			$html .= '<div class="works_wrapper">';
			$html .= '<a href="' . get_permalink( $case->ID ) . '"><div class="works_overlay">';
			$html .= '<div class="information_works">';
			$html .= '<div class="header_works_text">';
			$html .= '<h2>'. get_the_title( $case ) .'</h2>';
			// $html .= '<a href="' . get_permalink( $case->ID ) . '"><h3>full case</h3></a>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div></a>';
			$html .= get_the_post_thumbnail( $case->ID );
			$html .= '</div>';
			$html .= '</div>';
		}
	}

	$html .= '</div>';
	// $html .= '</div>';

	return $html;
}

function get_case_vimeo( $case_id ){

	$html = '';

	if( simple_fields_fieldgroup( 'case_vimeo', $post_id )){

		$html .= '<div class="embed-responsive embed-responsive-16by9">';
		$html .= '<iframe class="embed-responsive-item" src="//player.vimeo.com/video/' . substr( parse_url( simple_fields_fieldgroup( 'case_vimeo', $post_id ), PHP_URL_PATH ), 1 ) . '?title=0&amp;byline=0&amp;portrait=0&amp;color=00D8D8&amp;autoplay=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
		$html .= '</div>';
	}

	return $html;
}

function get_showreel_vimeo($showreel_id){

	$html = '';

	if( simple_fields_fieldgroup( 'showreel_vimeo', $post_id )){

		$html .= '<div class="embed-responsive embed-responsive-16by9">';
		$html .= '<iframe class="embed-responsive-item" src="//player.vimeo.com/video/' . substr( parse_url( simple_fields_fieldgroup( 'showreel_vimeo', $post_id ), PHP_URL_PATH ), 1 ) . '?title=0&amp;byline=0&amp;portrait=0&amp;color=00D8D8&amp;autoplay=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
		$html .= '</div>';
	}

	return $html;

}


function get_case_stills( $case_id, $classes ){

	$html = '';

	$stills = simple_fields_fieldgroup( 'case_stills', $case_id );

	if( $stills ){

		foreach( $stills as $still ){


			$html .= '<div class="' . $classes . '">';
			$html .= $still[ 'image' ][ 'full' ];
			$html .= '</div>';
		}
	}

	return $html;
}

function get_case_extra_movies($case_extra_movies_id){


	$html = '';

	$case_extra_movies = simple_fields_fieldgroup( 'case_extra_movies', $post_id);

	if( $case_extra_movies ){

		foreach( $case_extra_movies as $case_extra_movie ){

			$html .= '<p>';
			$html .= $case_extra_movie['Case_extra_vimeo_link_title'];
			$html .= '</p>';
			// $html .= '<div class="extraMovies">';
			$html .= '<iframe class="extraMovies" src="//player.vimeo.com/video/' . substr( parse_url( $case_extra_movie['case_extra_vimeo_link'], PHP_URL_PATH ), 1 ) . '?title=0&amp;byline=0&amp;portrait=0&amp;color=00D8D8&amp;autoplay=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
			// $html .= '</div>';
		}
	}

	return $html;


}

function get_case_detail_information($case_detail_id){


	$html = '';

	$detailInformation = simple_fields_fieldgroup( 'case_detail_information', $case_detail_id );

		if( simple_fields_fieldgroup( 'case_detail_information', $case_detail_id )){

		$html .= '<div class="information_detail">';
		$html .= simple_fields_fieldgroup( 'case_detail_information', $case_detail_id );
		$html .= '</div>';
	}

	return $html;


}


function get_contact_faces($post_id){


	$html = '';

	$contact_faces = simple_fields_fieldgroup( 'contact_faces', $post_id);

	// print_r($contact_face);

	if( $contact_faces ){

		foreach( $contact_faces as $contact_face ){

			// print_r($contact_face['contact_face_image_static']['image']['full']);
			// print_r($contact_face);

		// $html .= '<!--';	
		// $html .= '--><div class="member">';	
		$html .= '<div class="member">';	
	      	$html .= '<div class="member__wrapper">';
	      		$html .= '<div class="contact_overlay">';
					$html .= '<div class="vertically-centered">';
						$html .= '<div class="vertically-centered__content">';
							$html .= '<div class="information">';
								$html .= '<p class="name">'. $contact_face['contact_face_name'] .'</p><br />';
								$html .= '<p class="job_function">'. $contact_face['job_function'] .'</p><br />';
								$html .= '<p class="info_phone"><img src="'. get_child_template_directory_uri() .'/images/icons/iphone_icon.png">'. $contact_face['phone_number'] .'</p><br />';
								$html .= '<p class="info_mail"><img src="'. get_child_template_directory_uri() .'/images/icons/mail_icon.png"/>';
								$html .= '<a href="mailto:'.$contact_face['E_mail'] .'">'. $contact_face['E_mail'] .'</a></p>';
							$html .= '</div>';
						$html .= '</div>';
					$html .= '</div>';
				$html .= '</div>';
	      		$html .= '<img class="info_icon" alt="brikk members info button" title="brikk members info button" src="'. get_child_template_directory_uri() .'/images/buttons/info_btn.png" />';
	      		$html .= '<img class="close_icon" alt="brikk members close button" title="brikk members close button" src="'. get_child_template_directory_uri() .'/images/buttons/close_btn.png" />';	
	      		
		      	$html .= '<img class="Brikk_members alt="Members of Brikk" title="Members of Brikk"'. $contact_face['contact_face_image_dynamic']['image']['full'];
		  	   $html .= '<img class="static_members  alt="Members of Brikk" title="Members of Brikk""'. $contact_face['contact_face_image_static']['image']['full'];
	      $html .= '</div>';
	      	$html .= '<a href="mailto:'.$contact_face['E_mail'] .'" ><p class="name_lower">'. $contact_face['contact_face_name'] .'</p></a>';  	
    	$html .= '</div>';
    	// $html .= '</div><!--';
			
		}
	}

	return $html;


}


















