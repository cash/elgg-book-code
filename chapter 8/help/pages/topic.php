<?php
/**
 * List all topics in a category
 */

// category is passed from page handler
$category = get_input('category', 'getting_started');

$title = elgg_echo('help') . ' / ' . elgg_echo("help:title:$category");

// get the topics for this category - unlimited number
$options = array(	'type' => 'object',
					'subtype' => 'help',
					'metadata_names' => 'category',
					'metadata_values' => $category,
					'limit' => 0);
$topics = elgg_get_entities_from_metadata($options);

// create the sidebar
$vars = array(	'topics' => $topics,
				'category' => $category,
				'title' => $title);
$sidebar = elgg_view('help/topic_sidebar', $vars);

// get list of topics
$content = elgg_view('help/topic_list', $vars);

$body = elgg_view_layout('one_column_with_sidebar', $content, $sidebar);

page_draw($title, $body);