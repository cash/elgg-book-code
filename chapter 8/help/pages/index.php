<?php
/**
 * List the help categories
 */

$title = elgg_echo('help:categories');

$content = elgg_view('help/category_list');

$body = elgg_view_layout('one_column', $content);

page_draw($title, $body);
