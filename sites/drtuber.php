<?php
/**
 *  Shortcode for drtuber
 */

function pve_drtuber($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "640",
    "height" => "395"
  ), $atts));

  $str = $url;
  $re = '/\/video\/(\d+)\//';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $drtuber_id = $matches[1][0][0];
  $drtuber ='
        <iframe src="http://www.drtuber.com/embed/'.$drtuber_id.'" width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" allowfullscreen></iframe>';
  return $drtuber;
}
add_shortcode('drtuber', 'pve_drtuber');