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
    $re = '/(\d+)/';
    preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
    $xhamster_id = $matches[1][0][0];
    $xhamster ='
          <iframe width="'.$width.'" height="'.$height.'" src="https://xhamster.com/xembed.php?video='.$xhamster_id.'" frameborder="0" scrolling="no" allowfullscreen></iframe>';
    return $xhamster;
  }

  add_shortcode('xhamster', 'pve_xhamster');