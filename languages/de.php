<?php
/**
 * An german language definition file
 * Sie-Form
 */

$german = array(
	'facebook_connect' => 'Facebook Services',

	'facebook_connect:requires_oauth' => 'Facebook Services benötigt das aktivierte OAuth Libraries Plugin.',

	'facebook_connect:consumer_key' => 'Facebook Application Id',
	'facebook_connect:consumer_secret' => 'Facebook Application Secret Code',

	'facebook_connect:settings:instructions' => 'Für die Einrichtung wird eine Klient id und Secret von <a href="http://www.facebook.com/developers/" target="_blank">Facebook</a> benötigt. Die meisten Felder dort sind selbsterklärend. Als einzige notwendige Information wird die Callback URL benötigt, die das Format http://[yoursite]/action/facebooklogin/return hat - [yoursite] ist die URL des Elgg Netzwerks.',

	'facebook_connect:usersettings:description' => "Verbindet Ihr %s Konto mit Facebook.",
	'facebook_connect:usersettings:request' => "You must first <a href=\"%s\">authorize</a> %s to access your Facebook account.",
	'facebook_connect:usersettings:logout_required' => 'Sie müssen zunächst der %s erlauben, auf Ihr Facebook Konto zuzugreifen. Dafür bitte einmal ausloggen und dann wieder erneut einloggen.',
	'facebook_connect:authorize:error' => 'Facebook wurde nicht erfolgreich autorisiert.',
	'facebook_connect:authorize:success' => 'Facebook Zuganng wurde autorisiert.',

	'facebook_connect:usersettings:authorized' => "Sie haben %s erlaubt auf Ihr Facebook Konto zuzugreifen: @%s.",
	'facebook_connect:usersettings:revoke' => 'Klicken Sie <a href="%s">hier</a>, um die Facebook-Verbindung zu löschen.',
	'facebook_connect:revoke:success' => 'Facebook Zugang wurde wiederrufen.',

	'facebook_connect:login' => 'Erlaube existierenden Nutzern, die hier Facebook Konto verbunden haben, sich über Facebook anzumelden?',
	'facebook_connect:new_users' => 'Erlaube neuen Nutzern sich per Facebook registieren, auch wenn die manuelle Registierung deaktivert ist?',
	'facebook_connect:post_onfb' => 'Für neue Nutzer den Facebook Konto synch Status auf Facebook posten?',
	'facebook_connect:post_headder' => 'Falls Sie aktiviert haben, Nachrichten auf der Nutzer Facebook-Seite zu hinterlassen, sind folgende Parameter einzurichten. Wenn der Nutzername oder Seitenname im der Nachricht genutzt werden soll kann dafür einfach %username% oder %sitename% eingefügt werden. Beispiel: %username% synchronisiert sein/ihr Facebook-Konto mit %sitename%',
	'facebook_connect:post_message' => 'Geben Sie Ihre Nachricht ein, die Sie in die Nutzer-Seite posten wollen <i> (Standard: XYZ synchronisierte gerade sein/ihr Facebook-Konto mit %s ) </ i>',
	'facebook_connect:post_img' => 'Geben Sie die Bild-URL ein, der an die Benutzer Nachricht hinzugefügt werden soll <i> (Standard: %s_graphics/elgg_logo.png ) </ i>',
	'facebook_connect:post_descp' => 'Geben Sie die Beschreibung der Benutzer Nachricht ein<i> (Standard. : %s ist das soziale Netzwerk für die Verbindung von Menschen ) </ i>',
	'facebook_connect:login:success' => 'Sie sind angemeldet.',
	'facebook_connect:login:error' => 'Login mit Facebook fehlgeschlagen.',
	'facebook_connect:login:email' => "Sie müssen eine gültige Email-Adresse für Ihr neues %s Konto eingeben.",
	'facebook_connect:email:subject' => '%s Registierung erfolgreich',
	'facebook_connect:email:body' => '
Hallo %s,

Glückwunsch! Sie wurden erfolgreich registiert. Bitte besuchen Sie unser Netzwerk hier auf %s %s.

Ihre Anmeldedaten sind -

Username ist %s
Email    ist %s
Password ist %s

Sie können sich mit der EMail-Adresse oder dem Usernamen anmelden.

%s
%s'
	
	);

add_translation('de', $german);
