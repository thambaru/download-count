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
	$atts = shortcode_atts(array(
	    'link' => '#',
	    'text' => 'Download'
		), $atts, 'downloadCount');

	return '<a href="' . $atts['link'] . '" target="_blank" data-wptnwdownload="true">' . $atts['text'] . '</a>';
    }

}
