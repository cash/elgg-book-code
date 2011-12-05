<?php
/**
 * List the help categories
 */

$title = elgg_echo('help:categories');

$content = elgg_view('help/categories');

$body = elgg_view_layout('one_column', array('content' => $content));

echo elgg_view_page($title, $body);
