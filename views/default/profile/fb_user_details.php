<?php
global $CONFIG;

$fbuser_id = elgg_get_page_owner_entity()->guid;
$facebook_id = elgg_get_plugin_user_setting('uid', $fbuser_id, 'facebook_connect');

if (elgg_is_admin_logged_in()) {
echo "&nbsp;&nbsp;&nbsp;<b>Facebook</b>: <a href='https://www.facebook.com/" .$facebook_id."' target='_blank'>" . $facebook_id . "</a><br><br>";
}