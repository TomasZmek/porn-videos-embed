<?php
/**
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

add_shortcode('homemoviestube', 'pve_homemoviestube');