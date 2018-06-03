<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
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

/// DEVELOPERS PLEASE NOTE
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
	'ACP_USER_UTILS'		        => 'Gebruikers hulpprogramma’s',
	'AUTOGROUPS_TYPE_PPACCPT'	    => 'Privacybeleid geaccepteerd',

	'COOKIE_POLICY'			        => 'Privacy & cookiebeleid',

	'POLICY_RESET_LOG'		        => '<strong>Reset van beleid acceptatie</strong>',
	'POLICY_USER_ACCEPT_LOG'	    => '<strong>Privacybeleid acceptatie ingesteld voor gebruiker</strong><br />»» %1$s',
	'POLICY_USER_UNSET_LOG'		    => '<strong>Privacybeleid acceptatie uitgeschakeld voor gebruiker</strong><br />»» %1$s',
	'PRIVACY_DATA'			        => 'Privacy gegevens',
	'PRIVACY_LIST'			        => 'Privacy lijst',
	'PRIVACY_POLICY'		        => 'Privacybeleid',
	'PRIVACY_POLICY_ADD_LOG'	    => '<strong>Privacybeleid toegevoegd</strong>',
	'PRIVACY_POLICY_EDIT'		    => 'Taal gegevens bijgewerkt',
	'PRIVACY_POLICY_EDIT_LOG'	    => '<strong>Privacybeleid bewerkt</strong>',
	'PRIVACY_POLICY_LOG'		    => '<strong>Privacybeleid instellingen bijgewerkt</strong>',
	'PRIVACY_POLICY_MANAGE'		    => 'Privacybeleid instellingen',

	'TAPATALK_INSTALLED'			=> 'Tapatalk gedetecteerd',
	'TAPATALK_INSTALLED_EXPLAIN'	=> 'De Tapatalk extensie is gedetecteerd als zijnde geïnstalleerd op dit forum, wat niet compatibel is met de Privacybeleid extensie.<br /><br />Dit betekent dat alle Tapatalk gebruikers die dit forum bezoeken niet zullen worden onderworpen aan de vereisten van het Privacybeleid.',
));
