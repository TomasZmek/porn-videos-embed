<?php
/**
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

add_shortcode('gotporn', 'pve_gotporn');