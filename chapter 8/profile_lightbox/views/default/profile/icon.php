<?php

/**
 * Override the default profile icon view.
 * Add a link to the master profile icon then the large version is shown.
 */

// Get entity
if (empty($vars['entity'])) {
	$vars['entity'] = $vars['user'];
}

if ($vars['entity'] instanceof ElggUser) {
	$name = htmlentities($vars['entity']->name, ENT_QUOTES, 'UTF-8');
	$username = $vars['entity']->username;

	if ($icontime = $vars['entity']->icontime) {
		$icontime = "{$icontime}";
	} else {
		$icontime = "default";
	}

	// Get size
	if (!in_array($vars['size'],array('small','medium','large','tiny','master','topbar'))) {
		$vars['size'] = 'medium';
	}

	// Get any align and js
	if (!empty($vars['align'])) {
		$align = " align=\"{$vars['align']}\" ";
	} else {
		$align = '';
	}

	// Override
	if (isset($vars['override']) && $vars['override'] == true) {
		$override = true;
	} else {
		$override = false;
	}
	// profile avatar drop-down menu
	if (!$override) {
	?>
		<div class="usericon <?php echo $vars['size']; ?>">
		<div class="avatar_menu_button"><img src="<?php echo $vars['url']; ?>_graphics/spacer.gif" border="0" width="15px" height="15px" /></div>
		<div class="sub_menu">
			<h3 class="displayname"><a href="<?php echo $vars['entity']->getURL(); ?>"><?php echo $vars['entity']->name; ?>
			<span class="username"><?php echo "&#64;" . $vars['entity']->username; ?></span></a></h3>
			<?php
			echo "<ul class='sub_menu_list'>";
				if (isloggedin()) {
					// if not looking at your own avatar menu
					if ($vars['entity']->getGUID() != $vars['user']->getGUID()) {

						// Add / Remove friend link
						$friendlinks = elgg_view('profile/menu/friendlinks',$vars);
						if (!empty($friendlinks)) {
							echo "<li class='user_menu_profile'>{$friendlinks}</li>";
						}
						// view for plugins to extend
						echo elgg_view('profile/menu/links',$vars);
					} else {
						// if looking at your own avatar menu - provide a couple of handy links
						?>
						<li class="user_menu_profile">
							<a class="edit_profile" href="<?php echo $vars['url']?>pg/profile/<?php echo $vars['entity']->username; ?>/edit/details"><?php echo elgg_echo("profile:edit"); ?></a>
						</li>
						<li class="user_menu_profile">
							<a class="edit_avatar" href="<?php echo $vars['url']?>pg/profile/<?php echo $vars['entity']->username; ?>/edit/icon"><?php echo elgg_echo("profile:editicon"); ?></a>
						</li>
						<?php
					}

					// if Admin is logged in, and not looking at admins own avatar menu
					if (isadminloggedin() && ($_SESSION['id']!=$vars['entity']->guid) ){
						$adminlinks = elgg_view('profile/menu/adminlinks', $vars);
						if (!empty($adminlinks)) {
							echo "<li class='user_menu_admin'>{$adminlinks}</li>";
						}
					}

				}
				echo "</ul>";
			?>
		</div>
			<?php
				if ((isadminloggedin()) || (!$vars['entity']->isBanned())) {
				 ?><a href="<?php echo $vars['entity']->getURL(); ?>" class="icon" ><?php
				}

	}

	// Rounded avatar corners - CSS3 method - users avatar as background image so we can clip it with border-radius in supported browsers

///////////////////////// Modifications start //////////////////////////

	// only add the lightbox when a large profile icon is shown
	if ($vars['size'] == 'large') {
		// get the link to the master icon and add a link to it around the profile image
		$url = $vars['entity']->getIcon('master');
		$name = htmlentities($vars['entity']->name, ENT_QUOTES, 'UTF-8');
		echo "<a href=\"$url\" id=\"profile_lightbox\" title=\"$name\">";
	}
	?>
	<img src="<?php echo $vars['url']; ?>_graphics/spacer.gif" border="0" <?php echo $align; ?> alt="<?php echo htmlentities($vars['entity']->name, ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlentities($vars['entity']->name, ENT_QUOTES, 'UTF-8'); ?>" <?php echo $vars['js']; ?> style="background: url(<?php echo $vars['entity']->getIcon($vars['size']); ?>) no-repeat;" class="<?php echo $vars['size']; ?>" />
	<?php
	if ($vars['size'] == 'large') {
		echo "</a>";

		// Add some javascript that is run by the browser when page is loaded.
		// See http://api.jquery.com/jQuery/#jQuery3
		//
		// $('#profile_lightbox') selects the link with the id profile_lightbox.
		// See http://api.jquery.com/id-selector/
		//
		// The lightbox() function does all the work of setting up the lightbox.
		// See http://leandrovieira.com/projects/jquery/lightbox/
?>
<script type="text/javascript">
$(function() {
	$('#profile_lightbox').lightBox();
});
</script>
<?php
	}

	/*
	original avatar method
	<img src="<?php echo $vars['entity']->getIcon($vars['size']); ?>" border="0" <?php echo $align; ?> alt="<?php echo htmlentities($vars['entity']->name, ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlentities($vars['entity']->name, ENT_QUOTES, 'UTF-8'); ?>" <?php echo $vars['js']; ?> />
	*/

////////////////////////// Modifications end ///////////////////////////

	if (!$override) {
	?>
		</a></div>
	<?php
	}
}