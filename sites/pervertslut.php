<?php
/**
 *  Shortcode for pervertslut.com
 */
function pve_pervertslut($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "640",
    "height" => "480"
  ), $atts));

  $str = $url;
  $re = '/\/videos\/(\d+)\//';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $pervertslut_id = $matches[1][0][0];
  $pervertslut ='
  <iframe width="'.$width.'" height="'.$height.'" src="http://pervertslut.com/embed/'.$pervertslut_id.'" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>';
  return $pervertslut;
}

add_shortcode('pervertslut','pve_pervertslut');