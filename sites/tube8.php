<?php
/**
 * Shorcode for tube8.com
 */

function pve_tube8($atts){

    extract(shortcode_atts(array(
        "url" => 'https://',
        "width" => "708",
        "height" => "560"
    ), $atts));

    $tube8 ='
       <iframe src="'.$url.'" frameborder="0" height="'.$height.'" width="'.$width.'" scrolling="no" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" name="t8_embed_video"></iframe>';
    return $tube8;
}

add_shortcode('tube8', 'pve_tube8');