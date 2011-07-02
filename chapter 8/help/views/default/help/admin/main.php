<?php
/**
 * Admin page consists of header, instructions and form
 */

$instructions = elgg_echo('help:admin:instruct');
echo "<p>$instructions</p>";

$body = elgg_view('help/admin/form');

echo elgg_view('input/form', array(	'internalname' => 'help_form',
									'action' => "{$vars['url']}action/help/save",
									'body' => $body
));
