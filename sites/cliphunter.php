<?php
/**
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

add_shortcode('cliphunter','pve_cliphunter');