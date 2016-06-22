<?php

/**
 * Description of class-ajax
 *
 * @author thambaru
 */
class WPTNWDownloadCountAjaxHandler {
    
    public function __construct() {
	add_action('wp_ajax_asana_token_check', array($this, 'recordTheClick'));
	$this->setAjaxURL();
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
	$oldCount = get_post_meta($_POST['postId'], 'wptnwdownloadcount', true);
	$newCount = empty($oldCount) ? 0 : $oldCount++;
	update_post_meta($_POST['postId'], 'wptnwdownloadcount', $newCount);
	wp_die();
    }

}
