<?php

/*
 * Plugin Name: Porn videos embed
 * Plugin URI: https://perteus.cz/plugins/pornvideo-embed
 * Description: Simble plugin to add shortcode to post and embed video from porntube sites.
 * Version: 0.4
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
  add_shortcode('tnaflix', 'pve_tnaflix');
  add_shortcode('tube8', 'pve_tube8');
  add_shortcode('vporn', 'pve_vporn');
  add_shortcode('gotporn', 'pve_gotporn');
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
