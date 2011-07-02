<?php
/**
 * Sidebar for a category's topics
 */

$category = $vars['category'];

// add a back to main help page link
echo "<a href='{$vars['url']}pg/help/'>";
echo elgg_echo('help:back');
echo "</a>";

$heading = elgg_echo('help:topics');
echo "<h3>$heading</h3>";

echo "<ul>";
foreach ($vars['topics'] as $item) {
	$url = "{$vars['url']}pg/help/topic/$category#$item->guid";
	echo "<li><a href='$url'>$item->title</a></li>";
}
echo "</ul>";
