<?php
/**
 * Sidebar for a category's topics
 *
 * @uses $vars['category']
 */

$category = $vars['category'];

$heading = elgg_echo('help:topics');

$options = array(
	'type' => 'object',
	'subtype' => 'help',
	'metadata_name' => 'category',
	'metadata_value' => $category,
	'limit' => 0,
	'full_view' => false,
	'list_class' => 'help-list',
);
$body = elgg_list_entities_from_metadata($options);

echo elgg_view_module('aside', $heading, $body);