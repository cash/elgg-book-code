<?php
/**
 * List of all help categories
 */

$categories = help_get_categories();

// create unorder list that we mark-up with CSS
echo "<ul id='help_categories'>";
foreach ($categories as $code => $title) {
	$blurb = elgg_echo("help:blurb:$code");
	$url = "{$vars['url']}pg/help/topic/$code";
	echo "<li><a href='$url'><h4>$title</h4><span>$blurb</span></a></li>";
}
echo "</ul>";