<?php

/**
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

add_shortcode('youjizz', 'pve_youjizz');