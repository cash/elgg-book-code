<?php
/**
 * Widget display code
 *
 * @uses $vars['entity'] ElggWidget object
 */

$num_links = $vars['entity']->num_links;

// welcome text
echo elgg_echo('welcome:message');

// array of links
$links = array(
	'help',
	'activity',
	'members',
	'notifications/personal',
	'settings'
);

// display links in an unordered list
echo '<div class="elgg-output">';
echo '<ul>';
for ($index = 0; $index < $num_links; $index++) {
	$link = $links[$index];
	$text = elgg_echo("welcome:text:$link");
	$anchor = elgg_view('output/url', array(
		'href' => $link,
		'text' => $text,
		'is_trusted' => true,
	));
	echo "<li>$anchor</li>";
}
echo '</ul>';
echo '</div>';