<?php

/**
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

add_shortcode('pornhub', 'pve_pornhub');