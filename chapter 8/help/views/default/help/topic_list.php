<?php
/**
 * List the help topics
 */
?>
<div id="help_topics">
	<h2><?php echo $vars['title']; ?></h2>
</div>
<?php
foreach ($vars['topics'] as $topic) {
	echo elgg_view_entity($topic, TRUE);
}