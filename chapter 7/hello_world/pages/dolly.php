<?php
/**
 * The hello dolly page
 */

$title = "My second page";

$vars = array('name' => 'Dolly');
$content = elgg_view('hello_world/greetings', $vars);

$vars = array('content' => $content);
$body = elgg_view_layout('one_sidebar', $vars);

page_draw($title, $body);
