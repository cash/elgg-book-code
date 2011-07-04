<?php
/**
 * Countdown view
 */

$release_date = elgg_get_plugin_setting('release_date', 'coming_soon');
if (!$release_date) {
	// nothing to display so we return
	return true;
}

// number of seconds until release
$diff = $release_date - time();

// round up to number of days
$day = 24 * 60 * 60;
$num_days = ceil($diff/$day);

$countdown = elgg_echo('coming_soon:coming', array($num_days));
?>

<div id="coming-countdown">
	<span>
		<?php echo $countdown; ?>
	</span>
</div>
