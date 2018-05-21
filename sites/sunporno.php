<?php
/**
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

add_shortcode('sunporno', 'pve_sunporno');