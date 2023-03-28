<?php 

add_action( 'wp_enqueue_scripts', 'auto_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function auto_scripts() {

	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/assets/css/style.css'); //точка это конкатенация
	wp_enqueue_style( 'reset.css', get_template_directory_uri() . '/assets/css/reset.css'); 
	wp_enqueue_style( 'slick.css', get_template_directory_uri() . '/assets/css/slick.css'); 
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap'); 
	wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'); 
	wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com'); 
	
    //get_template_directory_uri() - путь до текущей папки в которой лежит functions.php. 
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
};
?>


