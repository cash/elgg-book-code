<?php
/**
 * Example view that displays some blog stats
 *
 * @uses $vars['num_blogs'] The number of blogs that a user has published
 */
?>
<p>
	<?php echo elgg_echo('hello:blog:stats', array($vars['num_blogs'])); ?>
</p>
