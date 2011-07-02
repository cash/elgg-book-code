<?php
/**
 * Tip view - it is added to the sidebar
 */
$title = elgg_echo('sidebar_tip:title');
$body = "<h3>$title</h3>";
$body .= sidebar_tip_get_tip();

echo elgg_view('page_elements/sidebar_box', array('body' => $body));