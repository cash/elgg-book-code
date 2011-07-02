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


// create an array of thise users menu options
$settings = find_plugin_usersettings('user_defined_toolbar');
$menu = array();
foreach ($settings as $name => $value) {
	// menu items not selected will be zero
	if ($value) {
		$menu[elgg_echo($name)] = $value;
	}
}
?>
		<ul id="custom_menu">
<?php
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
