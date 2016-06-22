<?php

/**
 * Description of class-main
 *
 * @author thambaru
 */
class WPTNWDownloadCount {

    public static $__FILE__, $lang_slug;

    protected function setAttributes($__FILE__) {
	self::$__FILE__ = $__FILE__;
	self::$lang_slug = '_wp_tnw_downloadcount';
    }

    public function __construct($__FILE__) {
	$this->setAttributes($__FILE__);

	add_filter('manage_posts_columns', array($this, 'postColumnHead'));
	add_action('manage_posts_custom_column', array($this, 'postColumnContent'), 10, 2);

	add_action('wp_enqueue_scripts', array($this, 'enqueueScripts'));

	new WPTNWDownloadCountShortCode;
	new WPTNWDownloadCountAjaxHandler;
    }

    function enqueueScripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('front-main', plugin_dir_url(self::$__FILE__) . 'includes/assets/js/front-main.js', array('jquery'));
    }

    function postColumnHead($defaults) {
	$defaults['downloadCount'] = 'Download Count';
	return $defaults;
    }

    function postColumnContent($column_name, $post_ID) {
	if ($column_name == 'downloadCount') {
	    echo get_post_meta($post_ID, 'wptnwdownloadcount', true);
	}
    }

}
