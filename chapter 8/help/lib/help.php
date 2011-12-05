<?php
/**
 * Help function library
 */

/**
 * Save a help topic
 *
 * @param string $question  Text for the question
 * @param string $answer    Text for the answer including any HTML
 * @param string $category  Category string as defined in help_get_categories()
 * @param int    $access_id See ACCESS* defines
 * @param int    $guid      GUID of the previously saved help topic
 * @return bool
 */
function help_save_topic($question, $answer, $category, $access_id, $guid = 0) {
	if ($guid) {
		$help = get_entity($guid);
		if (!$help) {
			return FALSE;
		}
	} else {
		$help = new ElggObject();
		$help->subtype = 'help';
	}
	
	$help->title = $question;
	$help->description = $answer;
	$help->category = $category;
	$help->access_id = $access_id;
	
	$guid = $help->save();
	if (!$guid) {
		return false;
	}

	return true;
}

/**
 * Get an array of categories.
 *
 * Array is of the form code => title
 *
 * @return array
 */
function help_get_categories() {
	$codes = array(
		'getting_started',
		'blogging',
		'bookmarks',
		'thewire',
		'profile',
		'settings',
	);
	$categories = array();
	foreach ($codes as $code) {
		$categories[$code] = elgg_echo("help:title:$code");
	}

	return $categories;
}
