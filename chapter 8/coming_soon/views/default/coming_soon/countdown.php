<?php
/**
 * Countdown view
 */

$release_date = get_plugin_setting('release_date', 'coming_soon');
if (!$release_date) {
	return '';
}

// date is stored as mm/dd/yy
$date_parts = explode('/', $release_date);
$release_time = mktime(0, 0, 0, $date_parts[0], $date_parts[1], $date_parts[2]);

// number of seconds until release
$diff = $release_time - time();

// round up to number of days
$day = 24 * 60 * 60;
$num_days = ceil($diff/$day);
?>

<div id="coming_countdown">
	<span>
<?php
echo sprintf(elgg_echo('coming_soon:coming'), $num_days);
?>
	</span>
</div>