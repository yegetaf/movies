<?php 
/**
 * Plugin Name: yg Plugin
 * Plugin URI: http://bonus-plugin.com
 * Author: Robi
 * Author URI: http://ygplus.me
 * Version: 1.0.0
 * Text Domain: bonus-plugin
 * Description: A smaple plugin to learn the plugin development.
 */
if( !defined('ABSPATH') ) : exit(); endif;

/**
 * Define plugin constants
 */
define( 'MYPLUGIN_PATH', trailingslashit( plugin_dir_path(__FILE__) ) );
define( 'MYPLUGIN_URL', trailingslashit( plugins_url('/', __FILE__) ) );

/**
 * Include admin.php
 */
if( is_admin() ) {
    require_once MYPLUGIN_PATH . '/admin/admin.php';
}

/**
 * Include public.php 
 */
if( !is_admin() ) {
    require_once MYPLUGIN_PATH . '/public/public.php';
}

/**
 * Include Post Types
 */
require_once MYPLUGIN_PATH . '/inc/post-types/movie.php';

/**

 * Include Metaboxes
 */
require_once MYPLUGIN_PATH . '/inc/metaboxes/movie-metaboxes.php';

/**
 * Inlcudes Data Tables
 */
require_once MYPLUGIN_PATH . '/inc/data-tables/movie-data-table.php';


