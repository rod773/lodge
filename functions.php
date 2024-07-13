<?php

/* Enqueue Scripts and Styles */


if(!function_exists('lodge_theme_setup')){
    
    /* Theme Setup */

    function lodge_theme_setup(){
        load_theme_textdomain('lodge',get_template_directory());
    }
}


 function 
 theme_styles(){




  wp_enqueue_style("main_style",get_theme_file_uri("/css/style.css"),date("h:i:s"));
  wp_enqueue_style("responsive",get_theme_file_uri("/css/responsive.css"),date("h:i:s"));
  wp_enqueue_style("bootstrap",get_theme_file_uri("/css/bootstrap.css"),date("h:i:s"));

  wp_enqueue_script("bootstrap_js",get_theme_file_uri("/js/bootstrap.js"),[],date("h:i:s"),true);
  wp_enqueue_script("main_style",get_theme_file_uri("/js/custom.js"),[],date("h:i:s"),true);
  wp_enqueue_script("main_style",get_theme_file_uri("/js/jquery-3.4.1.min.js"),[],date("h:i:s"),true);



 }


 add_action('wp_enqueue_scripts', 'theme_styles');

?>