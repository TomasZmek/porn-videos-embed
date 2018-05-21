<?php
/**
 *  Shortcode for vporn
 */
function pve_vporn($atts){

  extract(shortcode_atts(array(
    "url" => 'https://',
    "width" => "580",
    "height" => "460"
  ), $atts));

  $str = $url;
  $re = '/\/(\d+)\//';
  preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
  $vporn_id = $matches[1][0][0];
  $vporn ='
        <iframe src="https://www.vporn.com/embed/'.$vporn_id.'/" width="'.$width.'" height="'.$height.'"></iframe>';
  return $vporn;
}

add_shortcode('vporn', 'pve_vporn');