<?php
/**
 * Entity view for a help topic
 * Type: object Subtype: help
 */

$item = $vars['entity'];

// full view
if ($vars['full']) {
?>
<div class="help_item">
	<a name="<?php echo $item->guid; ?>"></a>
	<h2><?php echo $item->title; ?></h2>
<?php
	echo elgg_view('output/longtext', array('value' => $item->description));

	// admins get a edit and delete link
	if (isadminloggedin()) {
	/*
		$edit_link = "{$vars['url']}pg/help/admin/?guid=$item->guid";
		echo elgg_view('output/url', array(	'text' => elgg_echo('edit'),
											'href' => $edit_link));
		echo ' ';
		$delete_link = "{$vars['url']}action/help/delete?guid=$item->guid";
		echo elgg_view('output/confirmlink', array(	'text' => elgg_echo('delete'),
													'href' => $delete_link));
	 *
	 */
	}
?>

</div>
<?php
} else {
	// do not need any other views of the object at the moment

}
