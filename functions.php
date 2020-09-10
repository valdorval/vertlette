<?php
add_action('wp_enqueue_scripts', 'enqueue_styles_vluxe');
function enqueue_styles_vluxe() {
     wp_enqueue_style('style-vluxe', get_template_directory_uri().'/style.css');
     wp_enqueue_style('style-principal', get_template_directory_uri().'/css/main.css');
}