<?php
/**
 * English language mapping
 *
 * 1. Comments -> Responses partially done
 * 2. Blogs -> Rants
 */
$english = array(
	// Comments -> Responses
	'generic_comments:add' => "Leave a response",
	'generic_comments:post' => "Post a response",
	'generic_comments:text' => "Respond",
	'generic_comments:latest' => "Latest responses",

	
	// Blog -> Rants
	'blog' => 'Rants',
	'blog:blogs' => 'Rants',
	'blog:blog' => 'Rant',
	'item:object:blog' => 'Rants',

	'blog:title:user_blogs' => '%s\'s rants',
	'blog:title:all_blogs' => 'All site rants',
	'blog:title:friends' => 'All friends\' rants',

	'blog:group' => 'Group rant',
	'blog:enableblog' => 'Enable group rants',

	// Editing
	'blog:add' => 'New rant',
	'blog:write' => 'Write a rant',
	'blog:edit' => 'Edit rant',

	// messages
	'blog:message:saved' => 'Rant saved.',
	'blog:error:cannot_save' => 'Cannot save rant.',
	'blog:error:cannot_write_to_container' => 'Insufficient access to save rant to group.',
	'blog:message:deleted_post' => 'Rant deleted.',
	'blog:error:cannot_delete_post' => 'Cannot delete rant.',
	'blog:none' => 'No rants',
	'blog:error:missing:title' => 'Please enter a rant title!',
	'blog:error:missing:description' => 'Please enter the body of your rant!',

	// river
	'river:create:object:blog' => '%s published a rant %s',
	'river:comment:object:blog' => '%s commented on the rant %s',

	// widget
	'blog:widget:description' => 'Display your latest rants',
	'blog:moreblogs' => 'More rants',
	'blog:numbertodisplay' => 'Number of rants to display',
	'blog:noblogs' => 'No rants',
);

add_translation("en", $english);
