<?php
/**
 * Coming soon page
 */

require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");

// get the html for the 3 sections
$intro = elgg_view('coming_soon/intro');
$countdown = elgg_view('coming_soon/countdown');
$footer = elgg_view('coming_soon/footer');

// layout using the view canvas/layouts/coming_soon
$body = elgg_view_layout('coming_soon', $intro, $countdown, $footer);

// hack because of Elgg's limitations
elgg_set_viewtype('coming_soon');
page_draw('', $body);