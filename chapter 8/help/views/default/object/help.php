<?php
/**
 * Entity view for a help topic
 * Type: object Subtype: help
 *
 * @uses $vars['entity'] ElggObject
 */

$item = $vars['entity'];
$question = $item->title;
$answer = $item->description;

// full view means we display the question and answer
if ($vars['full_view']) {
	$body = elgg_view('output/longtext', array(
		'value' => $answer,
		'class' => 'mtn',
	));

	echo <<<HTML
<div class="mbl" id="$item->guid">
	$menu
	<h2>$question</h2>
	$body
</div>
HTML;

} else {
	// summary view is just a link
	$url = "help/category/$item->category#$item->guid";
	echo elgg_view('output/url', array(
		'href' => $url,
		'text' => $question,
		'is_trusted' => true,
	));
}
