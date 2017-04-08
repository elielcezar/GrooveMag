<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function groovemag2016_widgets_init() {
  register_sidebar( array(
    'name'          => 'Banner Topo',
    'id'            => 'banner-topo',
    'description'   => __( 'Appears in the footer section of the site.'),
    'before_widget' => '<div class="%2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
  ) );
  register_sidebar( array(
    'name'          => 'Menu',
    'id'            => 'menu',
    'description'   => __( 'Appears in the footer section of the site.'),
    'before_widget' => '<div class="%2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
  ) );
 
  register_sidebar( array(
    'name'          => 'Banner Home',
    'id'            => 'banner-home',
    'description'   => __( 'Appears in the footer section of the site.'),
    'before_widget' => '<div class="%2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
  ) );
	register_sidebar( array(
		'name'          => 'Lateral',
		'id'            => 'lateral',
		'description'   => __( 'Appears in the footer section of the site.'),
		'before_widget' => '<div class="well widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
  
}
add_action( 'widgets_init', 'groovemag2016_widgets_init' );
/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 36;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return ' [continua]';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
add_theme_support( 'post-thumbnails' );
  
add_image_size( 'thumb-quadrado', 250, 250, true ); 
add_image_size( 'thumb-noticias', 450, 310, true ); 
add_image_size( 'thumb-veja', 450, 250, true ); 

// automatically retrieve the first image from posts
function get_first_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all( '/<img .+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches );
    $first_img = $matches[1][0];
    if ( empty( $first_img ) ) {
        // defines a fallback imaage
        $first_img = get_template_directory_uri() . "/images/default.jpg";
    }
    $first_img = '<img src="' . $first_img . '" alt="Post Image" class="img-responsive"/>';
    return $first_img;
}


 
function get_custom_cat_template($single_template) {
     global $post;
 
       if ( in_category( 'videos' )) {
          $single_template = dirname( __FILE__ ) . '/single-videos.php';
     }
     return $single_template;
}
 
add_filter( "single_template", "get_custom_cat_template" ) ;
 


?>