<?php
/**
 * Entity view for a help topic
 * Type: object Subtype: help
 */

$item = $vars['entity'];
$question = $item->title;
$answer = $item->description;

// full view
if ($vars['full_view']) {
/*
	$menu = elgg_view_menu('entity', array(
		'entity' => $item,
		'handler' => 'help',
		'sort_by' => 'priority',
		'class' => 'elgg-menu-hz',
	));
*/
	$body = elgg_view('output/longtext', array(
		'value' => $answer,
		'class' => 'mtn',
	));

	echo <<<HTML
<div class="help-item" id="$item->guid">
	$menu
	<h2>$question</h2>
	$body
</div>
HTML;

} else {
	// summary view is just a link
	$url = "help/topic/$item->category#$item->guid";
	echo elgg_view('output/url', array(
		'href' => $url,
		'text' => $question,
	));
}
