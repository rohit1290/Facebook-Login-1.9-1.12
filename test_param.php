<style>
body, html{
padding: 5px;
margin: 5px;
}

</style>
<?php
include("../../engine/start.php");

elgg_admin_gatekeeper();

echo "<h2><u>Facebook Connect Parameters</u></h2>";

echo "<ul>";
echo "<b><li>".elgg_echo('facebook_connect:consumer_key')."</li></b>";

echo elgg_get_plugin_setting('consumer_key', 'facebook_connect');
echo "<br><br>";

echo "<b><li>".elgg_echo('facebook_connect:consumer_secret')."</li></b>";

echo elgg_get_plugin_setting('consumer_secret', 'facebook_connect');
echo "<br><br>";

echo "<b><li>".elgg_echo('facebook_connect:login')."</li></b>";

echo elgg_get_plugin_setting('sign_on', 'facebook_connect');
echo "<br><br>";

echo "<b><li>".elgg_echo('facebook_connect:new_users')."</li></b>";

echo elgg_get_plugin_setting('new_users', 'facebook_connect');
echo "<br><br>";

echo "<b><li>".elgg_echo('facebook_connect:post_onfb')."</li></b>";

echo elgg_get_plugin_setting('post_onfb', 'facebook_connect');
echo "<br><br>";


$link = elgg_get_site_url();
$username = elgg_get_logged_in_user_entity()->name;
$sitename = elgg_get_config('sitename');
		
		
echo "<b><li>".elgg_echo('facebook_connect:post_message',array($sitename))."</li></b>";

if(!empty(elgg_get_plugin_setting('post_message', 'facebook_connect'))){
$temp_str = elgg_get_plugin_setting('post_message', 'facebook_connect');
$temp_str2 = str_replace("%username%", "$username", $temp_str);
echo str_replace("%sitename%", "$sitename", $temp_str2);
}else{
echo $username . ' just synched his/her facebook account with ' . $sitename;
}
echo "<br><br>";


echo "<b><li>".elgg_echo('facebook_connect:post_img',array(elgg_get_site_url()))."</li></b>";

if(!empty(elgg_get_plugin_setting('post_img', 'facebook_connect'))){
echo "<img src='".elgg_get_plugin_setting('post_img', 'facebook_connect')."'>";
}else{
echo "<img src='".$link."/_graphics/elgg_logo.png'>";
}
echo "<br><br>";

echo "<b><li>".elgg_echo('facebook_connect:post_descp',array($sitename))."</li></b>";

if(!empty(elgg_get_plugin_setting('post_descp', 'facebook_connect'))){
$temp_str = elgg_get_plugin_setting('post_descp', 'facebook_connect');
$temp_str2 = str_replace("%username%", "$username", $temp_str);
echo str_replace("%sitename%", "$sitename", $temp_str2);
}else{
echo $sitename . ' is the social network for connecting people.';
}
echo "<br><br>";
?>