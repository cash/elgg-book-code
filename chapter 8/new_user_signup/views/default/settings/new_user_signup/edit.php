<?php
/**
 * Plugin settings view
 * Administrator sets the email address to use for new user notifications
 */

// get email address set by user
$email = '';
if (isset($vars['entity']->email)) {
	$email = $vars['entity']->email;
}

echo elgg_echo('new_user:email') . ": ";

// when Elgg handles the saving, names need to be params[<var name>] as below
echo elgg_view('input/text', array(	'internalname' => 'params[email]',
									'value' => $email
				));
