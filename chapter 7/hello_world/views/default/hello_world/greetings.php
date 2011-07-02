<?php
/**
 * Content area title
 *
 * @uses $vars['name'] The name of a user
 */

$greeting = elgg_echo('hello:user', array($vars['name']));
echo elgg_view_title($greeting);
