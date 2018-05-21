<?php

/**
* Shorcode for tnaflix
*/

function pve_tnaflix($atts){

    extract(shortcode_atts(array(
      "url" => 'https://',
      "width" => "580",
      "height" => "460"
    ), $atts));
  
    $str = $url;
    $re = '/video(\d+)/';
    preg_match_all($re, $str,$matches, PREG_OFFSET_CAPTURE);
    $tnaflix_id = $matches[1][0][0];
    $tnaflix ='
          <iframe src="https://player.tnaflix.com/video/'.$tnaflix_id.'" width="'.$width.'" height="'.$height.'" frameborder="0"></iframe>';
    return $tnaflix;
  }

  add_shortcode('tnaflix', 'pve_tnaflix');