<?php
/**
 * help/save form body
 *
 */

// set default values for form
$category = '';
$question = '';
$answer = '';
$access_id = ACCESS_DEFAULT; // pick up default access of site/user

// if we are editing, the GUID is sent to us
$guid = get_input('guid', 0);
$topic = get_entity($guid);
if ($topic) {
	$category = $topic->category;
	$question = $topic->title;
	$answer = $topic->description;
	$access_id = $topic->access_id;
}


$instructions = elgg_echo('help:admin:instruct');

$category_label = elgg_echo('help:label:category');
$categories = help_get_categories();
$category_input = elgg_view('input/dropdown', array(
	'name' => 'category',
	'value' => $category,
	'options_values' => $categories,
));

$question_label = elgg_echo('help:label:question');
$question_input = elgg_view('input/text', array(
	'name' => 'question',
	'value' => $question,
));

$answer_label = elgg_echo('help:label:answer');
$answer_input = elgg_view('input/longtext', array(
	'name' => 'answer',
	'value' => $answer,
));

$access_label = elgg_echo('access');
$access_input = elgg_view('input/access', array(
	'name' => 'access_id',
	'value' => $access_id,
));

$button = elgg_view('input/submit', array('value' => elgg_echo('save')));

echo <<<HTML

<div>$instructions</div>
<div>
	<label>$category_label</label><br />
	$category_input
</div>

<div>
	<label>$question_label</label><br />
	$question_input
</div>

<div>
	<label>$answer_label</label>
	$answer_input
</div>

<div>
	<label>$access_label</label><br />
	$access_input
</div>

<div class="elgg-foot">
	$button
</div>
HTML;


// if editing we need GUID to save this correctly
echo elgg_view('input/hidden', array(
	'name' => 'guid',
	'value' => $guid,
));
