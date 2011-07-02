<?php
/**
 * User settings edit code
 * user selects menu options from a list
 */

// display user instructions
$instructions = elgg_echo('udt:instruct');
echo "<p>$instructions</p>";

// grab previous settings and use those in the creation of the checkboxes
$settings = find_plugin_usersettings('user_defined_toolbar');

$user = page_owner_entity();

// setup toolbar menu item names and links
$checkboxes = array('udt:blog' => "{$vars['url']}pg/blog/$user->username/read/",
					'udt:notify' => "{$vars['url']}pg/notifications/personal",
					'udt:inbox' => "{$vars['url']}pg/messages/$user->username",
					'udt:files' => "{$vars['url']}pg/file/$user->username",
					);

$params = array('options' => $checkboxes,
				'values' => $settings);
echo elgg_view('input/checkboxes', $params);

// for each menu item display a checkbox - do not use Elgg input view due to bugs
foreach ($checkboxes as $name => $link) {
	$label = elgg_echo($name);
	$value = $settings->$name;
	$checked = $value ? 'checked="checked"' : '';
?>
	<input type="hidden" name="params[<?php echo $name; ?>]" value="0" />
	<input type="checkbox" name="params[<?php echo $name; ?>]" value="<?php echo $link ?>" <?php echo $checked; ?> class="input_checkboxes" />

	<label><?php echo $label; ?></label><br />
<?php
}


