<?php
/**
 * Delete a help topic
 */

// get the GUID
$guid = get_input('guid');

// delete the object if we can get it
$topic = get_entity($guid);
if ($topic) {
	$topic->delete();
	system_message(elgg_echo('help:status:deletequestion'));
} else {
	register_error(elgg_echo('help:error:nodelete'));
}

// send back to the same page
forward(REFERER);