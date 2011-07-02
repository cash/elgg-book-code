<?php
/**
 * hello, world page
 */

$user = elgg_get_logged_in_user_entity();

$title = "My first page";

// there may be no logged in user
if ($user) {
	$vars = array('name' => $user->name);
	$content = elgg_view('hello_world/greetings', $vars);
} else {
	$content = elgg_view('hello_world/greetings', array('name' => 'visitor'));
}

// count number of blogs by user
$options = array(
	'type' => 'object',
	'subtype' => 'blog',
	'owner_guid' => $user->getGUID(),
	'count' => true,
);
$num_blogs = elgg_get_entities($options);

// add the stats view to the content for page
$vars = array('num_blogs' => $num_blogs);
$content .= elgg_view('hello_world/blog_stats', $vars);

$vars = array(
	'content' => $content,
);
$body = elgg_view_layout('one_sidebar', $vars);

echo elgg_view_page($title, $body);
