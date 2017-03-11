<?php
elgg_load_library('facebook');
$fbData = array();
$facebook = facebookservice_api();
$helper = $facebook->getRedirectLoginHelper();
$permissions = ['public_profile','email'];
if(facebook_connect_allow_post_on_facebook()) {
$permissions = ['public_profile','email','publish_actions'];
}
$callback = elgg_get_site_url().'facebook_connect/login';
$url = $helper->getLoginUrl($callback, $permissions)."&auth_type=rerequest";
$label = elgg_echo('facebook_connect:login:button:label');
$sublabel = elgg_echo('facebook_connect:login:button:sublabel');

$login = <<<__HTML
<div id="login_with_facebook">
	<a href="$url" alt="$sublabel" id='elgg-button-submit-fb' class="elgg-button-submit elgg-button">
	<svg xmlns="http://www.w3.org/2000/svg" id="svg19" width="32" height="32"> <path d="M32 5.333689C32 2.5312 29.469867 0 26.666667 0H5.333333C2.5301333 0 0 2.5312 0 5.333689v21.332622C0 29.4688 2.5301333 32 5.333689 32H16V19.911111h-3.911111v-5.333333H16v-2.077867c0-3.583644 2.6912-6.811022 6-6.811022h4.311111v5.333333H22c-.471822 0-1.022222.5728-1.022222 1.430756v2.1248h5.333333v5.333333h-5.333333V32h5.688889C29.469867 32 32 29.4688 32 26.666311z" id="elgg-button-submit-fb-icon" /> </svg>
		<span id='elgg-button-submit-fb-text'>
			<b>{$label}</b><br/><span>{$sublabel}</span>
		</span>
	</a>
</div>
__HTML;
echo $login;
