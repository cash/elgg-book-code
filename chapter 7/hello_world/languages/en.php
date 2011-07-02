<?php
/**
 * English language file
 *
 * It is a mapping from a descriptor string to a display string.
 */

$mapping = array(
	'hello:world'         => "Hello, World!",
	'hello:dolly'         => "Hello, Dolly.",
	'hello:menu'          => "Hello",
	'hello:sidebar:world' => "Hello world",
	'hello:sidebar:dolly' => "Hello dolly",

	'hello:user'          => "Hello, %s!",
	'hello:blog:stats'    => "You have posted %s blogs",
);

// this is the English mapping
add_translation('en', $mapping);
