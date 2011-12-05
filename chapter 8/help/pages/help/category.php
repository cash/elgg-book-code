<?php
/**
 * List all questions in a category
 */

// category is passed from page handler
$category = get_input('category', 'getting_started');

$title = elgg_echo("help:title:$category");

elgg_push_breadcrumb(elgg_echo('help'), 'help');
elgg_push_breadcrumb($title);

// get the topics for this category
$options = array(
	'type' => 'object',
	'subtype' => 'help',
	'metadata_name' => 'category',
	'metadata_value' => $category,
	'limit' => 20,
	'list_class' => 'help-list',
);
$content = elgg_list_entities_from_metadata($options);

// create the sidebar
$vars = array('category' => $category);
$sidebar = elgg_view('help/sidebar', $vars);

$params = array(
	'content' => $content,
	'sidebar' => $sidebar,
	'title' => $title,
	'filter' => false,
);
$body = elgg_view_layout('content', $params);

echo elgg_view_page($title, $body);