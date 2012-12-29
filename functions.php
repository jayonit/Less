<?php

/*-----------------------------------------------------------------------------------*/
/* Add Rss to Head
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* enable post thumbnails
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* register main menu
/*-----------------------------------------------------------------------------------*/
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'less' ),
) );


/*-----------------------------------------------------------------------------------*/
/* Enque Styles and scripts
/*-----------------------------------------------------------------------------------*/

function less_styles()  { 

  wp_register_style( 'less-style', get_template_directory_uri() . '/style.css', '10000', 'all' );
  wp_enqueue_style( 'less-style' );
  
}
add_action('wp_enqueue_scripts', 'Less_styles');



?>