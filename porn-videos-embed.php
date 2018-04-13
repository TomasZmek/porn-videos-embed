<?php

/*
 * Plugin Name: Porn videos embed
 * Plugin URI: https://perteus.cz/plugins/pornvideo-embed
 * Description: Simble plugin to add shortcode to post and embed video from porntube sites (xvideos,xhmaster)
 * Version: 0.2
 * Author: Tomáš Zmek @ perteus
 * Author URI: https://zmek.eu
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
}

/*
 *  Shortcodes for xvideos
 *  work:  [xvideos url=[url to video]]
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
 *  Shortcodes for xhamster
 *  work:  [xhamster url=[url to video]]
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
 *  Shortcodes for pornhub
 *  work:  [pornhub url=[url to video]]
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
