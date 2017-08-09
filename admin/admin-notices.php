<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function wp_qbar_admin_notice()
{
	add_thickbox();
	$sharelink_text_array_qbar = array
						(
						"I use Quick Bar - Popup Notification Bar wordpress plugin from @xyzscripts and you should too.",
						"Quick Bar - Popup Notification Bar wordpress plugin from @xyzscripts is awesome",
						"Thanks @xyzscripts for developing such a wonderful Quick Bar wordpress plugin",
						"I was looking for a Popup Notification Bar and I found this. Thanks @xyzscripts",
						"Its very easy to use Quick Bar - Popup Notification Bar wordpress plugin from @xyzscripts",
						"I installed Quick Bar - Popup Notification Bar - Popup Notification Bar from @xyzscripts,it works flawlessly",
						"Quick Bar - Popup Notification Bar wordpress plugin that i use works terrific",
						"I am using Quick Bar - Popup Notification Bar wordpress plugin from @xyzscripts and I like it",
						"The Quick Bar - Popup Notification Bar plugin from @xyzscripts is simple and works fine",
						"I've been using this Quick Bar - Popup Notification Bar plugin for a while now and it is really good",
						"Quick Bar - Popup Notification Bar wordpress plugin is a fantastic plugin",
						"Quick Bar - Popup Notification Bar wordpress plugin is easy to use and works great. Thank you!",
						"Good and flexible Popup Notification Bar plugin especially for beginners",
						"The best Popup Notification Bar wordpress plugin I have used ! THANKS @xyzscripts",
						);
$sharelink_text_qbar = array_rand($sharelink_text_array_qbar, 1);
$sharelink_text_qbar = $sharelink_text_array_qbar[$sharelink_text_qbar];
$bare_url=admin_url('admin.php?page=quickbar-basic-settings&qbar_notice=hide');

	echo '<div id="qbar_notice_td" class="error" style="margin-left: 2px;background: none repeat scroll 0pt 0pt infobackground; border: 1px solid inactivecaption; padding: 5px;line-height:16px;">
	<p>It looks like you have been enjoying using <a href="https://wordpress.org/plugins/quick-bar/" target="_blank"> Quick Bar - Popup Notification Bar</a> plugin from Xyzscripts for atleast 30 days.Would you consider supporting us with the continued development of the plugin using any of the below methods?</p>
	<p>
	<a href="https://wordpress.org/support/view/plugin-reviews/quick-bar" class="button" style="color: white;text-decoration: none; background-color: #25A6E1;margin-right: 4px;" target="_blank">Rate it 5★\'s on wordpress</a>
	<a href="https://xyzscripts.com/members/product/purchase/XYZWPPOP" class="button" style="color: white;text-decoration: none; background-color: #25A6E1;margin-right: 4px;" target="_blank">Purchase premium version</a>';
	if(get_option('xyz_credit_link')=="0")
		echo '<a class="button xyz_qbr_backlink" style="color: white;text-decoration: none; background-color: #25A6E1;margin-right: 4px;" target="_blank">Enable Backlink</a>';

	echo '<a href="#TB_inline?width=250&height=75&inlineId=show_share_icons_qbar" class="button thickbox" style="color: white;text-decoration: none; background-color: #25A6E1;margin-right: 4px;" target="_blank">Share on</a>

	<a href="'. wp_nonce_url( $bare_url, 'hide_notice').'" class="button" style="color: white;text-decoration: none; background-color: #25A6E1;margin-right: 4px;">Don\'t Show This Again</a>
	</p>

	<div id="show_share_icons_qbar" style="display: none;">
	<a class="button" style="background-color:#3b5998;color:white;margin-right:4px;margin-left:100px;margin-top: 25px;" href="http://www.facebook.com/sharer/sharer.php?u=https://wordpress.org/plugins/quick-bar/&text='.$sharelink_text_qbar.'" target="_blank">Facebook</a>
	<a class="button" style="background-color:#00aced;color:white;margin-right:4px;margin-left:20px;margin-top: 25px;" href="http://twitter.com/share?url=https://wordpress.org/plugins/quick-bar/&text='.$sharelink_text_qbar.'" target="_blank">Twitter</a>
	<a class="button" style="background-color:#007bb6;color:white;margin-right:4px;margin-left:20px;margin-top: 25px;" href="http://www.linkedin.com/shareArticle?mini=true&url=https://wordpress.org/plugins/quick-bar/" target="_blank">LinkedIn</a>
	<a class="button" style="background-color:#dd4b39;color:white;margin-right:4px;margin-left:20px;margin-top: 25px;" href="https://plus.google.com/share?&hl=en&url=https://wordpress.org/plugins/quick-bar/" target="_blank">google+</a>
	</div>



	</div>';


}
$qbar_installed_date = get_option('qbar_installed_date');
if ($qbar_installed_date=="") {
	$qbar_installed_date = time();
}

if($qbar_installed_date < ( time() - (30*24*60*60)))
{
	if (get_option('xyz_qbar_dnt_shw_notice') != "hide")
	{
		add_action('admin_notices', 'wp_qbar_admin_notice');
	}
}
?>
