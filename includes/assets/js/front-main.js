jQuery(function ($) {
    $("[data-wptnwdownload]").click(function () {
	if ($(this).attr('data-wptnwdownload') == false)
	    return;

	recordTheClick($(this).attr('data-post'));

	window.open($(this).attr('data-href'), "_self");
    });
});

function recordTheClick(postId) {
    jQuery.ajax({
	url: ajaxurl,
	type: 'POST',
	data: {action: 'record_the_click', postId: postId}
    })
}