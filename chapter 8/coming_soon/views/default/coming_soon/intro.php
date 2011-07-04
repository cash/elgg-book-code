<?php
/**
 * Top view
 */

$site = elgg_get_site_entity();

$title = $site->name;
$tagline = $site->description;

echo "<h1>$title</h1>";
echo "<h3>$tagline</h3>";
