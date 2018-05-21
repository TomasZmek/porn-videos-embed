<?php 

/**
 * Xvideos schorcode
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

add_shortcode('xvideos', 'pve_xvideos');