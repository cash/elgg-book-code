<?php
/**
 * Header view - overriden from core
 *
 * Consists of site name on the left and menu on the right.
 */

// link back to main site.
echo elgg_view('page/elements/header_logo', $vars);



// drop-down login
echo elgg_view('core/account/login_dropdown');


/**
 * Original code from lesson 2 replaced by code below
 *
<ul id="custom-menu">
	<li><a href="">Activity</a></li>
	<li><a href="">Blogs</a></li>
	<li><a href="">Groups</a></li>
	<li><a href="">Help</a></li>
</ul>
 *
 */

$site_url = elgg_get_site_url();

// this array contains label => link
$menu = array(
	elgg_echo('activity') => "{$site_url}activity",
	elgg_echo('blog') => "{$site_url}blog",
	elgg_echo('groups') => "{$site_url}groups",
	elgg_echo('thewire') => "{$site_url}thewire",
	elgg_echo('help') => "{$site_url}help",
);
?>
<ul id="custom-menu">
<?php
// write out each menu link
foreach ($menu as $label => $url) {
	echo "<li><a href=\"$url\">$label</a></li>";
}
?>
</ul>
