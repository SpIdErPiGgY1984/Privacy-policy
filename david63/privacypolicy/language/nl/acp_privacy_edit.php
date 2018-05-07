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
	'COOKIE_EDIT_EXPLAIN'				=> 'Hier kunt u het Cookiebeleid van het forum aanpassen.',
	'COOKIE_EDIT_EXPLAIN_NEW'			=> 'Hier kunt u een nieuw Cookiebeleid toevoegen.<br />Het Cookiebeleid wordt weergegeven wanneer het Cookiebeleid is ingeschakeld en een gebruiker klikt op de koppeling “Cookie/Privacybeleid” in de navigatie balk onderaan.',

	'POLICY_DESCRIPTION'				=> 'Naam beleidsbestand',
	'POLICY_DESCRIPTION_EXPLAIN'		=> 'De weergave naam van dit beleidsbestand en moet in de vereiste taal worden vertaald.',
	'POLICY_EDIT'						=> 'Beleid Bestanden Editor',
	'POLICY_EDIT_EXPLAIN'				=> 'Hier kunt u selecteren welke beleid tekstbestanden u wilt bewerken of een nieuw beleid tekstbestand in een opgegeven taal maken.',
	'POLICY_FILE_OPTIONS'	   			=> 'Beleidsbestand opties',
	'POLICY_SELECT_FILE'		   		=> 'Selecteer bestand',
	'POLICY_SELECT_LANGUAGE'			=> 'Selecteer taal',
	'PRIVACY_ACCEPT_EDIT_EXPLAIN'		=> 'Hier kunt u het privacy acceptatiebeleid van het forum aanpassen.',
	'PRIVACY_ACCEPT_EDIT_EXPLAIN_NEW'	=> 'Hier kunt u een nieuw privacy acceptatiebeleid toevoegen.<br />Het privacy acceptatiebeleid wordt weergegeven na het privacybeleid.',
	'PRIVACY_EDIT_EXPLAIN'				=> 'Hier kunt u het privacybeleid van het forum aanpassen.',
	'PRIVACY_EDIT_EXPLAIN_NEW'			=> 'Hier kunt u een nieuw privacybeleid toevoegen.<br />Het privacybeleid is het belangrijkste beleid dat de privacyregels van dit forum beschrijft.',

	'TERM_OF_USE_EDIT_EXPLAIN'			=> 'Hier kunt u het aanvullende Beleid voor gebruiksvoorwaarden van het forum aanpassen.',
	'TERM_OF_USE_EDIT_EXPLAIN_NEW'		=> 'Hier kunt u een nieuw aanvullend Beleid voor Gebruiksvoorwaarden toevoegen.<br />Dit wordt weergegeven na de hoofdvoorwaarden wanneer een nieuwe gebruiker zich op het forum wil registreren.',

	'SITENAME'							=> 'Site naam',
	'SITENAME_HELP'						=> 'Plaats de site naam plaatshouder (%sitename%)',

	'VERSION'				   			=> 'Versie',
));
