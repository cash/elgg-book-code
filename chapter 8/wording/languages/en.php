<?php
/**
 * English language mapping
 *
 * 1. Comments -> Responses
 * 2. Blogs -> Rants
 */
$english = array(

	/**
	 * Comments -> Responses
	 */
	'comments' => 'Responses',
	'generic_comments:add' => "Leave a response",
	'generic_comments:post' => "Post a response",
	'generic_comments:text' => "Respond",
	'generic_comments:latest' => "Latest responses",
	'generic_comment:title' => 'Response by %s',

	// river
	'river:generic_comment' => 'responded on %s %s',
	'river:comment:object:blog' => '%s responded to the blog %s',
	'river:comment:object:bookmarks' => '%s responded on the bookmark %s',
	'river:comment:object:file' => '%s responded to the file %s',
	'river:comment:object:page' => '%s responded on the page %s',
	'river:comment:object:page_top' => '%s responded on the page %s',

	// status messages
	'generic_comment:posted' => "Your response was successfully posted.",
	'generic_comment:deleted' => "The response was successfully deleted.",
	'generic_comment:blank' => "Sorry, you need to actually put something in your response before we can save it.",
	'generic_comment:notdeleted' => "Sorry, we could not delete this response.",
	'generic_comment:failure' => "An unexpected error occurred when adding your response. Please try again.",
	'generic_comment:none' => 'No responses',

	// notifications
	'generic_comment:email:subject' => 'You have a new response',
	'generic_comment:email:body' => "You have a new response on your item \"%s\" from %s. It reads:

%s

To reply or view the original item, click here:

%s

To view %s's profile, click here:

%s

Please do not reply to this email.",



	/**
	 * Blog -> Rants
	 */
	'blog' => 'Rants',
	'blog:blogs' => 'Rants',
	'blog:blog' => 'Rant',
	'item:object:blog' => 'Rants',

	'blog:title:user_blogs' => '%s\'s rants',
	'blog:title:all_blogs' => 'All site rants',
	'blog:title:friends' => 'All friends\' rants',

	'blog:group' => 'Group rant',
	'blog:enableblog' => 'Enable group rants',

	// editing
	'blog:add' => 'New rant',
	'blog:write' => 'Write a rant',
	'blog:edit' => 'Edit rant',

	// status messages
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

	// notifications
	'blog:newpost' => 'A new rant',

	// widget
	'blog:widget:description' => 'Display your latest rants',
	'blog:moreblogs' => 'More rants',
	'blog:numbertodisplay' => 'Number of rants to display',
	'blog:noblogs' => 'No rants',
);

add_translation("en", $english);
