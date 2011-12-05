<?php
/**
 * Setup help topics page
 */

// only admins should see this page
admin_gatekeeper();

// context will be help so we need to set to admin
elgg_set_context('admin');

$title = elgg_echo('help:admin');

$content = elgg_view_title($title);

$content .= elgg_view_form('help/save');

// use special admin layout
$body = elgg_view_layout('admin', array('content' => $content));

echo elgg_view_page($title, $body, 'admin');
