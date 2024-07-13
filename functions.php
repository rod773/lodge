<?php



/* Enqueue Scripts and Styles */


include_once  (__DIR__)."/class-wp-bootstrap-navwalker.php";



function lodge_theme_setup(){
    load_theme_textdomain('lodge',get_template_directory()."/languages");
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5' ,array(
        'search-form',
        'comment-form',
        'comment-list',
        'caption'
    ));
    add_theme_support( 'customize-selective-refresh-widgets' );

 
    
}


add_action('after_setup_theme','lodge_theme_setup');


function register_menus(){
    register_nav_menus( array(
        array(
            'primary'=>esc_html__('Menu Principal','lodge')
        )
    ) );
}

add_action( 'after_setup_theme', 'register_menus', 0 );


 function 
 theme_styles(){


  

  wp_enqueue_style("main_style",get_theme_file_uri("/css/style.css"),date("h:i:s"));
  wp_enqueue_style("responsive",get_theme_file_uri("/css/responsive.css"),date("h:i:s"));
  wp_enqueue_style("bootstrap",get_theme_file_uri("/css/bootstrap.css"),date("h:i:s"));

  wp_enqueue_script("bootstrap_js",get_theme_file_uri("/js/bootstrap.js"),[],date("h:i:s"),true);
  wp_enqueue_script("custom",get_theme_file_uri("/js/custom.js"),[],date("h:i:s"),true);
  wp_enqueue_script("jquery",get_theme_file_uri("/js/jquery-3.4.1.min.js"),[],date("h:i:s"),true);

  //wp_enqueue_script("tailwind","https://cdn.tailwindcss.com" ,[],date("h:i:s"),true);

  



 }


 add_action('wp_enqueue_scripts', 'theme_styles');

?>