<?php
/**
 * Setup help topics page
 */

// only admins should see this page
admin_gatekeeper();

// context will be help so we need to set to admin
set_context('admin');

$title = elgg_echo('help:admin');

$content = elgg_view_title($title);

$content .= elgg_view('help/admin/main');

// use special admin layout
$body = elgg_view_layout("administration", $content);

page_draw($title, $body);