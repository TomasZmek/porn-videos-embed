<?php

/*
 * Plugin Name: Porn videos embed
 * Plugin URI: https://wordpress.org/plugins/porn-videos-embed
 * Description: A very simple wordpress plugin for add shortcode embed videos from porn sites
 * like xvideos, xhmaster, pornhub.
 * Version: 0.9
 * Author: Tomáš Zmek @ perteus
 * Author URI: https://perteus.cz
 * License: GPL3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: porn-videos-embed
 */


 /**
  * include all files from folder sites
  */

foreach( glob(dirname(__FILE__) . '/sites/*.php') as $class_path )
require_once( $class_path );

/*
* Add button to editor
* use: https://1stwebdesigner.com/how-to-add-custom-buttons-to-the-wordpress-tinymce-editor/
*/

// Filter Functions with Hooks
function custom_mce_button() {

  // Check if WYSIWYG is enabled
  if ( 'true' == get_user_option( 'rich_editing' ) ) {
    add_filter( 'mce_external_plugins', 'custom_tinymce_plugin' );
    add_filter( 'mce_buttons', 'register_mce_button' );
  }
}
add_action('admin_head', 'custom_mce_button');

// Function for new button
function custom_tinymce_plugin( $plugin_array ) {
  $plugin_array['custom_mce_button'] = plugin_dir_url(__FILE__) .'/js/editor_plugin.js';
  return $plugin_array;
}

// Register new button in the editor
function register_mce_button( $buttons ) {
  array_push( $buttons, 'custom_mce_button' );
  return $buttons;
}
