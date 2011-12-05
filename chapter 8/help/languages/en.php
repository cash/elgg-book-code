<?php
/**
 * Help language file
 */

$english = array(
	// titles
	'help:admin' => 'Help',
	'help:categories' => 'Help Categories',

	// menu items and instructions
	'help:admin:instruct' => "Create and edit categorized FAQs.",
	'help:back' => "Back to help categories",
	'help:topics' => "Help topics",

	// category titles
	'help:title:getting_started' => 'Getting started',
	'help:title:blogging' => 'Blogging',
	'help:title:bookmarks' => 'Bookmarks',
	'help:title:thewire' => 'The Wire',
	'help:title:profile' => 'Your profile',
	'help:title:settings' => 'Your settings',

	// category blurbs
	'help:blurb:getting_started' => 'General info, account, privacy',
	'help:blurb:blogging' => 'Writing, saving, previewing',
	'help:blurb:bookmarks' => 'Bookmarklet, sharing',
	'help:blurb:thewire' => 'Microblogging, mentions',
	'help:blurb:profile' => 'Avatar, profile fields, comment wall',
	'help:blurb:settings' => 'Display name, email, notifications',

	// form
	'help:label:category' => 'Category',
	'help:label:question' => 'Question',
	'help:label:answer' => 'Answer',

	// status messages
	'help:status:deletequestion' => 'The help topic was deleted.',
	'help:error:nodelete' => 'Unable to delete help topic.',
	'help:status:save' => 'The help topic was saved.',
	'help:error:nosave' => 'Unable to save the help topic.',

	// Elgg's generic name for this object type
	'item:object:help' => 'Help topic',
);

add_translation("en", $english);
