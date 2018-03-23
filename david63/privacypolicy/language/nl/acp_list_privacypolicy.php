<?php
/**
*
* @package Privacy Policy Extension
* @copyright (c) 2018 david63
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* * @license GNU General Public License, version 2 (GPL-2.0)
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
	'ACCEPT_DATE'					=> 'Acceptatie datum',
	'ACP_PRIVACY_POLICY_EXPLAIN'	=> 'Hier kunt u de privacy gegevens van een gebruiker selecteren en bekijken.',
	'ACP_PRIVACY_TITLE'				=> 'Privacybeleid Gegevens',

	'CLEAR_FILTER'					=> 'Filter wissen',

	'FILTER_BY'						=> 'Filteren op',

	'GO'							=> 'Ga',

	'LAST_VISIT'					=> 'Laatste bezoek',

	'PAGE_NUMBER'					=> 'Pagina',
	'PRIVACY_LIST_EXPLAIN'			=> 'Hier is een lijst met alle forum leden en de datum waarop ze het privacybeleid van dit forum hebben geaccepteerd.',

	'REG_DATE'						=> 'Registratie datum',

	'SELECT_USERNAME_EXPLAIN'		=> 'De gebruiker van wie u de privacy gegevens wilt bekijken.',
	'SELECT_USERNAME'				=> 'Selecteer gebruikersnaam',
	'SORT_BY'						=> 'Sorteer op',

	'TOTAL_USERS'					=> 'Totaal',

	'USER_ID'						=> 'Gebruikers ID',
	'USERNAME'						=> 'Gebruikersnaam',

	// Translators - set these to whatever is most appropriate in your language
	// These are used to populate the filter keys
	'START_CHARACTER'	=> 'A',
	'END_CHARACTER'		=> 'Z',
));
