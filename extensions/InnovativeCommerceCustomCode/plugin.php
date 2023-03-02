<?php
/*
Plugin Name: InnovativeCommerceCustomCode
Plugin URI: http://www.InnovativeCommerceCustomCode.com
Description: Create your of custom Javascript code with this easy-to-use plugin.
Author: Leanne R Salva
Author URI: https://www.velascommerce.com/
*/

add_action('wp_enqueue_scripts'); 
add_action('wp_enqueue_scripts',, 'plugin_scripts');
function plugin_scripts(){
    wp_enqueue_script('InnovativeCommerceCustomCode', plugin_url('/scripts.js',__FILE__), array('jquery'), false, true);
}