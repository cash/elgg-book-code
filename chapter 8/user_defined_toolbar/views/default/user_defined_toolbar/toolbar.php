<?php
/**
 * User menu
 */

$user = elgg_get_logged_in_user_entity();

$items = array(
	'blog' => "blog/owner/$user->username",
	'settings' => "settings",
	'inbox' => "messages/inbox/$user->username",
	'files' => "files/owner/$user->username"
);

$settings = elgg_get_all_plugin_user_settings($user->guid, 'user_defined_toolbar');
if ($settings) {
	echo '<ul id="udt-toolbar">';
	foreach ($items as $name => $url) {
		if ($settings[$name]) {
			$link = elgg_view('output/url', array(
				'text' => elgg_echo("udt:$name"),
				'href' => $url,
			));
			echo "<li>$link</li>";
		}
	}
	echo '</ul>';
}