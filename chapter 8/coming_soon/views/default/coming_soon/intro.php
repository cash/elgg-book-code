<?php
/**
 * Top view
 */

$sitename = $CONFIG->sitename;

$site = get_entity($CONFIG->site_guid);
$tagline = $site->description;
?>
<div id="coming_intro">
	<h1><?php echo $sitename ?></h1>

	<h2><?php echo $tagline;  ?></h2>
</div>