<?php
/**
 * Login page for getting behind the coming soon page
 */

require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");

// make sure admin is sent to backend when logged in
$_SESSION['last_forward_from'] = 'pg/admin/';

$title = elgg_echo('login');

// get the HTML for the login form
$content = elgg_view('account/forms/login');

// put the login form in a one column layout
$body = elgg_view_layout('one_column', $content);

// send to browser
page_draw($title, $body);