<?php
$insert_view = elgg_view('facebooksettings/extend');

$consumer_key_string = elgg_echo('facebook_connect:consumer_key');
$consumer_key_view = elgg_view('input/text', array(
	'name' => 'params[consumer_key]',
	'value' => $vars['entity']->consumer_key,
	'class' => 'text_input',
));

$consumer_secret_string = elgg_echo('facebook_connect:consumer_secret');
$consumer_secret_view = elgg_view('input/text', array(
	'name' => 'params[consumer_secret]',
	'value' => $vars['entity']->consumer_secret,
	'class' => 'text_input',
));

$sign_on_with_facebook_string = elgg_echo('facebook_connect:login');
$sign_on_with_facebook_view = elgg_view('input/dropdown', array(
	'name' => 'params[sign_on]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no'),
	),
	'value' => $vars['entity']->sign_on ? $vars['entity']->sign_on : 'yes',
));

$new_users_with_facebook = elgg_echo('facebook_connect:new_users');
$new_users_with_facebook_view = elgg_view('input/dropdown', array(
	'name' => 'params[new_users]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no'),
	),
	'value' => $vars['entity']->new_users ? $vars['entity']->new_users : 'no',
));

$post_on_facebook = elgg_echo('facebook_connect:post_onfb');
$post_on_facebook_view = elgg_view('input/dropdown', array(
	'name' => 'params[post_onfb]',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no'),
	),
	'value' => $vars['entity']->post_onfb ? $vars['entity']->post_onfb : 'no',
));

// Posting on Facebook

$post_message_string = elgg_echo('facebook_connect:post_message',array($vars['config']->sitename));
$post_message_view = elgg_view('input/text', array(
	'name' => 'params[post_message]',
	'value' => $vars['entity']->post_message,
	'class' => 'text_input',
));

$post_img_string = elgg_echo('facebook_connect:post_img',array(elgg_get_site_url()));
$post_img_view = elgg_view('input/url', array(
	'name' => 'params[post_img]',
	'value' => $vars['entity']->post_img,
	'class' => 'text_input',
));

$post_descp_string = elgg_echo('facebook_connect:post_descp',array($vars['config']->sitename));
$post_descp_view = elgg_view('input/text', array(
	'name' => 'params[post_descp]',
	'value' => $vars['entity']->post_descp,
	'class' => 'text_input',
));

$post_headder_string = elgg_echo('facebook_connect:post_headder');

$settings = <<<__HTML
<div>$insert_view</div>
<div>$consumer_key_string $consumer_key_view</div>
<div>$consumer_secret_string $consumer_secret_view</div>
<div>$sign_on_with_facebook_string $sign_on_with_facebook_view</div>
<div>$new_users_with_facebook $new_users_with_facebook_view</div>
<div>$post_on_facebook $post_on_facebook_view</div>
<hr>
<div>$post_headder_string</div>
<br>
<div>$post_message_string $post_message_view</div>
<div>$post_img_string $post_img_view</div>
<div>$post_descp_string $post_descp_view</div>
__HTML;

echo $settings;