<?php
/**
 * Coming soon pageshell
 * We need this so that we control all aspects of the page. Otherwise, Elgg
 * would add its normal header and footer to the coming soon page.
 */

// Set the content type
header("Content-type: text/html; charset=UTF-8");

$title = elgg_get_site_entity()->name;
$url = 'mod/coming_soon/css/coming_soon.css';
$url = elgg_normalize_url($url);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $title; ?></title>

		<!-- include our custom css file -->
		<link rel="stylesheet" href="<?php echo $url; ?>" type="text/css" />
	</head>
	<body>
		<?php echo $vars['body']; ?>
	</body>
</html>