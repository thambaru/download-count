<?php

/**
 * Description of WPTNWDownloadCountShortCode
 *
 * @author thambaru
 */
class WPTNWDownloadCountShortCode {

    function __construct() {
	add_shortcode('downloadCount', array($this, 'downloadLink'));
    }

    function downloadLink($atts) {
	global $post;

	$atts = shortcode_atts(array(
	    'link' => '',
	    'title' => 'Download',
	    'style' => '',
	    'class' => ''
		), $atts, 'downloadCount');

	return "<span class='{$atts['class']}' style='cursor:pointer;{$atts['style']}' data-href='{$atts['link']}' data-post='{$post->ID}' data-wptnwdownload='true'>{$atts['title']}</span>";
    }

}
