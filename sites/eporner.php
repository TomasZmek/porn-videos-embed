<?php
/**
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

add_shortcode('eporner', 'pve_eporner');