<?php
/**
 * Shortcode for xhamster
 */

function pve_xhamster($atts){

    extract(shortcode_atts(array(
      "url" => 'https://',
      "width" => "510",
      "height" => "400"
    ), $atts));
  
    $str = $url;
    $re = '/-(?:.(?!-))+$/';
    preg_match_all($re, $str,$matches);
    $matches[0][0] = str_replace("-", "", $matches[0][0]);
    $xhamster_id = $matches[0][0];
    $xhamster ='<iframe width="'.$width.'" height="'.$height.'" src="https://xhamster.com/embed/'.$xhamster_id.'" frameborder="0" scrolling="no" allowfullscreen></iframe>';
    return $xhamster;
  }

  add_shortcode('xhamster', 'pve_xhamster');
