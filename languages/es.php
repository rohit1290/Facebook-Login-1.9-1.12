<?php

return array(
	'facebook_connect' => 'Servicios de Facebook',

	'facebook_connect:requires_oauth' => 'Los servicios de Facebook requieren que el plugin de OAuth Libraries esté habilitado.',

	'facebook_connect:consumer_key' => 'Id de la Aplicación de Facebook',
	'facebook_connect:consumer_secret' => 'Clave secreta de la Aplicación de Facebook',
	'facebook_connect:permissions' => 'Permisos de Facebook',

	'facebook_connect:settings:instructions' => 'Debes obtener un Id y una clave secreta del sitio de <a href="http://www.facebook.com/developers/" target="_blank">Facebook Desarrolladores</a>. La mayor parte de los campos son autoexplicativos, lo que necesitaras es que la URL callback http://[yoursite]/action/facebooklogin/return - [yoursite] sea la misma que la de tu red Elgg.',

	'facebook_connect:usersettings:description' => "Conectar tu %s cuenta con Facebook.",
	'facebook_connect:usersettings:request' => "Debes primer <a href=\"%s\">autorizar</a> %s acceder a tu cuenta de Facebook.",
	'facebook_connect:usersettings:logout_required' => 'Debes primero autorizar %s a acceder a tu cuenta de Facebook. Cierra tu sesión y vuelve a iniciarla.',
	'facebook_connect:authorize:error' => 'No ha sido posible autorizar Facebook.',
	'facebook_connect:authorize:success' => 'Facebook ha sido autorizado.',

	'facebook_connect:usersettings:authorized' => "Has autorizado a %s a acceder a tu cuenta de Facebook: @%s.",
	'facebook_connect:usersettings:revoke' => 'Click <a href="%s">aqui</a> para  revocar el acceso.',
	'facebook_connect:revoke:success' => 'El acceso a Facebook ha sido revocado.',

	'facebook_connect:login' => '¿Permitir a los usuarios existentes que han conectado su cuenta con Facebook ingresar al sitio por medio de Facebook?',
	'facebook_connect:new_users' => 'Permitir a los nuevos usuarios registrarse por medio de Facebook incluso si la registración del sitio esta deshabilitada?',
	'facebook_connect:post_onfb' => '¿Quiere publicar en el muro de la cuenta de Facebook cuando se registre en su Elgg?',
	'facebook_connect:post_headder' => 'Si habilita la opción de publicar en el muro del usuario es neceasrio qe configures los siguienes parámetros. Si quieres mostrar el nombre de usuario o del sitio web, utiliza respectivamente la cadena %username% o %sitename% en la caja de abajo. Ej: %username% ha conectado su cuenta con el sitio %sitename%',
	'facebook_connect:post_message' => 'Ingresa el mensaje que quieres publicar en el perfil del usuario <i>(Por defecto: XYZ just synched his/her facebook account with %s)</i>',
	'facebook_connect:post_img' => "Ingresa la URL de la imagen para mostrar en la publicación <i>(Por defecto: %s_graphics/elgg_logo.png)</i>",
	'facebook_connect:post_descp' => 'Ingresa el mensaje que quieres incluir dentro de la publicación <i>(Por defecto: %s is the social network for connecting people.)</i>',
	'facebook_connect:login:success' => 'Has ingresado.',
	'facebook_connect:login:error' => 'No es imposible ingresar por medio de Facebook.',
	'facebook_connect:login:email' => "Debes ingresar un correo electrónico válido para tu nueva cuenta %s.",
	'facebook_connect:login:button:label' => 'Facebook',
	'facebook_connect:login:button:sublabel' => 'Ingresa usando tu Facebook',


	'facebook_connect:email:subject' => '%s se registró correctamente',
	'facebook_connect:email:body' => '
Hola %s,

Te has registrado exitosamente. Por favor visita nuestro sitio web en %s %s.

La información de tu usuario para ingresar es la siguiente:

Nombre de usuario: %s
Correo electrónico: %s
Contraseña: %s

Puedes ingresar usando tu Nombre de usuario o tu Correo electrónico. También puedes hacerlo usando la cuenta de Facebook que usaste para registrarte.

%s
%s'

);
?>
