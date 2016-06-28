<?php

/**
 * Description of class-ajax
 *
 * @author thambaru
 */
class WPTNWDownloadCountAjaxHandler {

    public function __construct() {
	add_action('wp_ajax_record_the_click', array($this, 'recordTheClick'));
	add_action('wp_ajax_nopriv_record_the_click', array($this, 'recordTheClick'));
	add_action('wp_head', array($this, 'setAjaxURL'));
    }

    /**
     * 
     * Define ajax url for ajax requests.
     * 
     */
    function setAjaxURL() {
	?>
	<script type="text/javascript">
	    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
	</script>
	<?php
    }

    /**
     * 
     * Count the click on db.	
     * 
     */
    function recordTheClick() {
	$oldCount = (int) get_post_meta($_POST['postId'], 'wptnwdownloadcount', true);
	$newCount = empty($oldCount) ? 1 : $oldCount + 1;
	update_post_meta($_POST['postId'], 'wptnwdownloadcount', $newCount);
	wp_die();
    }

}
