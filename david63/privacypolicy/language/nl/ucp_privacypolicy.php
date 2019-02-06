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
	'CSV_DOWNLOAD'					=> 'Download CSV-bestand van deze gegevens',

	'REMOVE_ACCOUNT'				=> 'Klik op deze link om een e-mail te sturen naar de beheerder van het forum met het verzoek om uw account te verwijderen',
	'REMOVE_MY_ACCOUNT'				=> 'Gelieve mijn account te verwijderen',
	'REMOVE_MY_ACCOUNT_BODY'		=> 'Ik wens niet langer lid te zijn van dit forum en wil je vragen dat mijn gegevens worden verwijderd in overeenstemming met de GDPR (2018) wetgeving. %1$sMijn gebruikersnaam is %2$s',

	'UCP_PRIVACY_POLICY_EXPLAIN'	=> 'Hieronder vindt u de details van uw persoonlijke gegevens die wij op deze site opslaan.',
	'UCP_PRIVACY_TITLE'				=> 'Privacybeleid Gegevens',
));
