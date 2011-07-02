<div class="contentWrapper">
<?php
/**
 * Widget display code
 */

// get user set value or use default
$num_links = 5;
if (isset($vars['entity']->num_links)) {
	$num_links = $vars['entity']->num_links;
}

// welcome text
echo elgg_echo('welcome:message');

// display links in an unordered list
echo "<ul>";
for ($index=1; $index<=$num_links; $index++) {
	$location = elgg_echo("welcome:link$index");
	$url = $vars['url'] . $location;
	$title = elgg_echo("welcome:title$index");
	echo "<li><a href='$url'>$title</a></li>";
}
echo "</ul>";
?>
</div>


