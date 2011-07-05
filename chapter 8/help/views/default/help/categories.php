<?php
/**
 * List of all help categories
 */

$categories = help_get_categories();

// create unorder list that we mark-up with CSS
echo "<ul id='help-categories'>";
foreach ($categories as $code => $title) {
	$blurb = elgg_echo("help:blurb:$code");
	
	$url = "/help/category/$code";
	$url = elgg_normalize_url($url);

	$text = "<h4>$title</h4><span>$blurb</span>";

	echo "<li><a href=\"$url\">$text</a></li>";
}
echo "</ul>";