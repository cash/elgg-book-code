<?php
/**
 * Form body for creating/editing help topics
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

?>
<p>
<label>Category</label><br />
<?php 
$categories = help_get_categories();
echo elgg_view('input/pulldown', array(	'internalname' => 'category',
										'value' => $category,
										'options_values' => $categories));
?>
</p>

<p>
<label>Question</label><br />
<?php
echo elgg_view('input/text', array(	'internalname' => 'question',
									'value' => $question));
?>
</p>

<p>
<label>Answer</label><br />
<?php
echo elgg_view('input/longtext', array(	'internalname' => 'answer',
										'value' => $answer));
?>
</p>

<p>
<label>Access</label><br />
<?php
echo elgg_view('input/access', array('internalname' => 'access_id',
									 'value' => $access_id));
?>
</p>

<?php
// if editing we need GUID to save this correctly
echo elgg_view('input/hidden', array('internalname' => 'guid',
									 'value' => $guid));
?>

<p>
<?php echo elgg_view('input/submit', array('value' => elgg_echo('save'))); ?>
</p>
