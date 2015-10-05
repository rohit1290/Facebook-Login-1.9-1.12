<?php
elgg_load_library('facebook');
$fbData = array();
$facebook = facebookservice_api();

$helper = $facebook->getRedirectLoginHelper();  
$permissions = ['public_profile','email'];
$callback = elgg_get_site_url().'facebook_connect/login';
$url = $helper->getLoginUrl($callback, $permissions);

$img_url = elgg_get_site_url() . 'mod/facebook_connect/graphics/facebook_login.png';

$login = <<<__HTML
<div id="login_with_facebook">
	<a href="$url" target="_self"><img src="$img_url" alt="Facebook" /></a>
</div>
__HTML;

echo $login;