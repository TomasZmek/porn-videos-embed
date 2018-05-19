<?php

/*
 * Plugin Name: Porn videos embed
 * Plugin URI: https://wordpress.org/plugins/porn-videos-embed
 * Description: A very simple wordpress plugin for add shortcode embed videos from porn sites
 * like xvideos, xhmaster, pornhub.
 * Version: 0.8
 * Author: Tomáš Zmek @ perteus
 * Author URI: https://perteus.cz
 * License: GPL3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: porn-videos-embed
 */

//HOOK Register all shortcodes
add_action('init', 'pve_register_shortcodes');

//Register all SHORTCODES

function pve_register_shortcodes(){
  add_shortcode('xvideos', 'pve_xvideos');
  add_shortcode('xhamster', 'pve_xhamster');
  add_shortcode('pornhub', 'pve_pornhub');
  add_shortcode('tnaflix', 'pve_tnaflix');
  add_shortcode('tube8', 'pve_tube8');
  add_shortcode('vporn', 'pve_vporn');
  add_shortcode('gotporn', 'pve_gotporn');
  add_shortcode('drtuber', 'pve_drtuber');
  add_shortcode('youjizz', 'pve_youjizz');
  add_shortcode('sunporno', 'pve_sunporno');
  add_shortcode('eporner', 'pve_eporner');
  add_shortcode('homemoviestube', 'pve_homemoviestube');
  add_shortcode('cliphunter','pve_cliphunter');
}

/*
 *  Shortcode for xvideos
 */
function pve_xvideos($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "510",
    "height" => "400"
  ), $atts));

  $str = $url;
  $re = '/video(\d+)/';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $xvideo_id = $matches[1][0][0];
  $xvideo ='
        <iframe src="https://www.xvideos.com/embedframe/'.$xvideo_id.'" frameborder=0 width='.$width.' height='.$height.' scrolling=no allowfullscreen=allowfullscreen></iframe>';
  return $xvideo;
}


/*
 *  Shortcode for xhamster
 */
function pve_xhamster($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "510",
    "height" => "400"
  ), $atts));

  $str = $url;
  $re = '/(\d+)/';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $xhamster_id = $matches[1][0][0];
  $xhamster ='
        <iframe width="'.$width.'" height="'.$height.'" src="https://xhamster.com/xembed.php?video='.$xhamster_id.'" frameborder="0" scrolling="no" allowfullscreen></iframe>';
  return $xhamster;
}


/*
 *  Shortcode for pornhub
 */
function pve_pornhub($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "640",
    "height" => "360"
  ), $atts));
  $str = $url;
  $re = '/viewkey\=(\S+)/';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $pornhub_id = $matches[1][0][0];
  $pornhub ='
        <iframe src="https://www.pornhub.com/embed/'.$pornhub_id.'" frameborder=0 width="'.$width.'" height="'.$height.'" scrolling="no" allowfullscreen></iframe>
        ';
  return $pornhub;
}

/*
* Shorcode for tnaflix
*/

function pve_tnaflix($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "580",
    "height" => "460"
  ), $atts));

  $str = $url;
  $re = '/video(\d+)/';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $tnaflix_id = $matches[1][0][0];
  $tnaflix ='
        <iframe src="https://player.tnaflix.com/video/'.$tnaflix_id.'" width="'.$width.'" height="'.$height.'" frameborder="0"></iframe>';
  return $tnaflix;
}

/*
 * Shorcode for tube8.com
 */

function pve_tube8($atts){

    extract(shortcode_atts(array(
        "url" => 'https://',
        "width" => "708",
        "height" => "560"
    ), $atts));

    $tube8 ='
       <iframe src="'.$url.'" frameborder="0" height="'.$height.'" width="'.$width.'" scrolling="no" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" name="t8_embed_video"></iframe>';
    return $tube8;
}


/*
 *  Shortcode for vporn
 */
function pve_vporn($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "580",
    "height" => "460"
  ), $atts));

  $str = $url;
  $re = '/\/(\d+)\//';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $vporn_id = $matches[1][0][0];
  $vporn ='
        <iframe src="https://www.vporn.com/embed/'.$vporn_id.'/" width="'.$width.'" height="'.$height.'"></iframe>';
  return $vporn;
}


/*
 *  Shortcode for gotporn
 */
function pve_gotporn($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "640",
    "height" => "480"
  ), $atts));

  $str = $url;
  $re = '/\/video-(\d+)/';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $gotporn_id = $matches[1][0][0];
  $gotporn ='
        <iframe width="'.$width.'" height="'.$height.'" src="https://www.gotporn.com/video/'.$gotporn_id.'/embedframe" frameborder="0" allowfullscreen></iframe>';
  return $gotporn;
}

/*
 *  Shortcode for drtuber
 */
function pve_drtuber($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "640",
    "height" => "395"
  ), $atts));

  $str = $url;
  $re = '/\/video\/(\d+)\//';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $drtuber_id = $matches[1][0][0];
  $drtuber ='
        <iframe src="http://www.drtuber.com/embed/'.$drtuber_id.'" width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" allowfullscreen></iframe>';
  return $drtuber;
}

/*
 *  Shortcode for youjizz
 */
function pve_youjizz($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "100",
    "height" => "570"
  ), $atts));

  $str = $url;
  $re = '/\-(\d+)\.html/';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $youjizz_id = $matches[1][0][0];
  $youjizz ='
        <iframe src="http://www.youjizz.com/videos/embed/'.$youjizz_id.'" frameborder="0" style="width:'.$width.'%; height:'.$height.'px;" scrolling="no" allowtransparency="true"></iframe>';
  return $youjizz;
}

/*
 *  Shortcode for sunporno
 */
function pve_sunporno($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "650",
    "height" => "518"
  ), $atts));

  $str = $url;
  $re = '/\/videos\/(\d+)\//';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $sunporno_id = $matches[1][0][0];
  $sunporno ='
        <iframe src="https://embeds.sunporno.com/embed/'.$sunporno_id.'" width="'.$width.'" height="'.$height.'" style="border: none;overflow: hidden;" allowfullscreen></iframe>';
  return $sunporno;
}

/*
* Shortcode for eporner
*/

function pve_eporner($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "650",
    "height" => "518"
  ), $atts));

  $str = $url;
  $re = '/\/hd-porn\/(\w+)\//';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $eporner_id = $matches[1][0][0];
  $eporner ='
  <iframe width="'.$width.'" height="'.$height.'" src="https://www.eporner.com/embed/'.$eporner_id.'"       frameborder="0" allowfullscreen></iframe>';
  return $eporner;
}

/*
 *  Shortcode for homemoviestube
 */
function pve_homemoviestube($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "650",
    "height" => "518"
  ), $atts));

  $str = $url;
  $re = '/\/videos\/(\d+)\//';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $homemoviestube_id = $matches[1][0][0];
  $homemoviestube ='
  <iframe src="http://www.homemoviestube.com/embed/'.$homemoviestube_id.'" width="'.$width.'" height="'.$height.'" frameborder="0"></iframe>';
  return $homemoviestube;
}

/*
 *  Shortcode for cliphunter
 */
function pve_cliphunter($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "640",
    "height" => "400"
  ), $atts));

  $str = $url;
  $re = '/\/w\/(\d+)\//';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $cliphunter_id = $matches[1][0][0];
  $cliphunter ='
  <iframe width="'.$width.'" height="'.$height.'" src="https://www.cliphunter.com/embed/'.$cliphunter_id.'" frameborder="0" scrolling="no" allowfullscreen></iframe>';
  return $cliphunter;
}



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
