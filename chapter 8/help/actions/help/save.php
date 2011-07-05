<?php
/**
 * Save a help topic
 */

// get the form values
$category = get_input('category');
$question = get_input('question');
$answer = get_input('answer');
$access_id = get_input('access_id');

// if editing, we will have a guid
$guid = get_input('guid', 0);

// save the question and queue status message
$result = help_save_topic($question, $answer, $category, $access_id, $guid);
if (!$result) {
	register_error(elgg_echo('help:error:nosave'));
} else {
	system_message(elgg_echo('help:status:save'));
}

forward(REFERER);
