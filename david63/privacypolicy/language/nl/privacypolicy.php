<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACCEPT' 				=> 'Ik accepteer dit beleid',

	'COOKIE_ACCEPT_TEXT'	=> 'Dit forum maakt gebruik van cookies om je de beste en meest relevante ervaring te bieden. Als u dit forum wilt gebruiken, betekent dit dat u het beleid moet accepteren.<br>U kunt meer informatie over de gebruikte cookies vinden door op het "Cookiebeleid" op de hoofdpagina of de onderstaande link te klikken.<br>',
	'COOKIE_ACCEPT'			=> '[ Ik accepteer ]',
	'COOKIE_ACCESS'			=> 'Cookie Toegang',

	'COOKIE_BLOCK'			=> 'Je hebt geen toegang tot de links op dit bord totdat je het Cookiebeleid hebt geaccepteerd.',

	'COOKIE_POLICY'			=> 'Cookie beleid',
	'COOKIE_PRIV_POLICY'	=> 'Cookie/Privacybeleid',

	'COOKIE_REQUIRE_ACCESS'	=> '<h3>Cookie acceptatie vereist</h3>
	<p>U moet het Cookiebeleid van %1$s accepteren voordat u zich kunt registreren op deze site of, als u al bent geregistreerd, voordat u zich op de site kunt aanmelden.</p>',

	'DECLINE' 				=> 'Ik accepteer dit beleid niet',

	'HR_BBCODE_HELPLINE' 	=> 'Horizontale lijn invoegen',

	'POLICY_ACCEPT' 		=> 'Accepteer privacybeleid',
));
