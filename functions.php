<?php
/**
 * Theme functions
 * 
 * @package Aquila
 */


function aq_enqueue_scripts()
{
    wp_enqueue_style("stylesheet", get_template_directory_uri() . '/style.css', [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style("mainStylesheet", get_template_directory_uri() . '/assets/css/style.css', [], filemtime(get_template_directory() . '/assets/css/style.css'), 'all');
}


add_action("wp_enqueue_scripts", "aq_enqueue_scripts");