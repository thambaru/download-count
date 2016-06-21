<?php

/**
 * Description of class-main
 *
 * @author thambaru
 */
class WPTNWDownloadCount {

    public static $lang_slug;

    protected function setAttributes() {
	self::$lang_slug = '_wp_tnw_downloadcount';
    }

    public function __construct() {
	add_filter('manage_posts_columns', 'postColumnHead');
	add_action('manage_posts_custom_column', 'postColumnContent', 10, 2);
    }

    function postColumnHead($defaults) {
	$defaults['downloadCount'] = 'Download Count';
	return $defaults;
    }

    function postColumnContent($column_name, $post_ID) {
	if ($column_name == 'downloadCount') {
	    echo 'here';
	}
    }

}
