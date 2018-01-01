<?php
	global $current_user;
	get_currentuserinfo();

	$other_themes = 'http://wpthemess.net';
?>

<div class="thb-admin-message">
	<span class="thb-discard" data-key="activation">&times;</span>

	<p class="big">
		Welcome back, <?php echo $current_user->display_name; ?>!
	</p>
	<p>
		<a href="<?php echo $other_themes; ?>">Other themes</a>
	</p>

	<?php do_action('thb_admin_message_activation'); ?>
</div>