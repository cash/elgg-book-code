<?php
/**
 * Header view - overriden from core
 *
 * Consists of site name on the left and menu on the right.
 */
?>
<div id="elgg_header">
	<div id="elgg_header_contents">
		<!-- site name -->
		<h1><a href="<?php echo $vars['url']; ?>"><?php
		$logo = $vars['config']->site->customlogo;
		$logo_time = $vars['config']->site->customlogo_time;
		if (empty($logo)) {
			echo "<span class='network_title'>".$vars['config']->sitename ."</span>";
		} else {
			echo "<img class='custom_logo' src=\"{$vars['url']}pg/csseditor/{$logo_time}.jpg\" alt=\"". htmlentities($vars['config']->sitename) ."\" />";
		}
		?></a></h1>
		<?php
			// drop-down login
			echo elgg_view('account/forms/login_dropdown');


// this array contains label => link
$menu = array(
	elgg_echo('activity') => "{$vars['url']}mod/riverdashboard/",
	elgg_echo('blog') => "{$vars['url']}pg/blog/",
	elgg_echo('groups') => "{$vars['url']}pg/groups/world/",
	elgg_echo('thewire:title') => "{$vars['url']}mod/thewire/everyone.php",
	elgg_echo('help') => "{$vars['url']}pg/help/",
);
?>
		<ul id="custom_menu">
<?php
// write out each menu link
foreach ($menu as $label=>$url) {
	echo "<li><a href=\"$url\">$label</a></li>";
}
?>
		</ul>
<?php
			// insert a view which can be extended
			echo elgg_view('header/extend');
		?>
	</div>
</div>
