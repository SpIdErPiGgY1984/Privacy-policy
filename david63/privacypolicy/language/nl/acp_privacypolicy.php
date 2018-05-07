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
	'ALL'									=> 'Alle pagina’s',

	'CLICK_TO_SELECT'						=> 'Klik in het vak om een kleur te selecteren',

	'COOKIE_BLOCK_LINKS'					=> 'Blokkeer alle koppelingen (linken)',
	'COOKIE_BLOCK_LINKS_EXPLAIN'			=> 'Voorkom dat een gebruiker toegang krijgt tot links op het bord totdat hij het Cookiebeleid heeft geaccepteerd.',
	'COOKIE_BOX_BDR_COLOUR'					=> 'Rand kleur voor de rand van het Cookie vak',
	'COOKIE_BOX_BDR_COLOUR_EXPLAIN'			=> 'Selecteer de rand kleur voor het vak “Cookie acceptatie”.<br />De standaard kleur is <strong>“#FFFF8A”</strong>',
	'COOKIE_BOX_BDR_WIDTH'					=> 'Cookie vak rand breedte',
	'COOKIE_BOX_BDR_WIDTH_EXPLAIN'			=> 'Selecteer de rand breedte voor het vak “Cookie acceptatie”.<br />De standaard breedte is <strong>“1”</strong>',
	'COOKIE_BOX_BG_COLOUR'					=> 'Cookie vak achtergrondkleur',
	'COOKIE_BOX_BG_COLOUR_EXPLAIN'			=> 'Selecteer de achtergrondkleur voor het vak “Cookie acceptatie”.<br />The default colour is <strong>“#00608F”</strong>',
	'COOKIE_BOX_HREF_COLOUR'				=> 'Cookie vak link kleur',
	'COOKIE_BOX_HREF_COLOUR_EXPLAIN'		=> 'Selecteer de kleur van de acceptatie link voor het vak “Cookie acceptatie”.<br />De standaard kleur is <strong>“#FFFFFF”</strong>',
	'COOKIE_BOX_TXT_COLOUR'					=> 'Cookie vak tekstkleur',
	'COOKIE_BOX_TXT_COLOUR_EXPLAIN'			=> 'Selecteer de tekstkleur voor het vak “Cookie acceptatie”.<br />De standaard kleur is <strong>“#DBDB00”</strong>',

	'COOKIE_CUSTOM_PAGE'					=> 'Gebruik aangepaste kleuren voor de cookie pagina',
	'COOKIE_CUSTOM_PAGE_CORNERS'			=> 'Gebruik afgeronde hoeken',
	'COOKIE_CUSTOM_PAGE_CORNERS_EXPLAIN'	=> 'Gebruik afgeronde hoeken op de cookiebeleid pagina.<br />Als u dit instelt op <strong>Nee</strong>, betekent dit dat de pagina vierkante hoeken heeft.',
	'COOKIE_CUSTOM_PAGE_EXPLAIN'			=> 'Gebruik de aangepaste kleuren voor de cookiebeleid pagina.<br />Als u dit instelt op <strong>Nee</strong>, worden de standaard kleuren van uw stijl gebruikt.',
	'COOKIE_CUSTOM_PAGE_RADIUS'				=> 'Aangepaste pagina radius',
	'COOKIE_CUSTOM_PAGE_RADIUS_EXPLAIN'		=> 'Stelt het aantal pixels in voor het afronden van de aangepaste hoeken van de cookie pagina. Als u dit op 0 instelt, betekent dit dat de pagina vierkante hoeken heeft.<br /><em>De standaardwaarde voor prosilver is 7px.</em>',

	'COOKIE_EXPIRE'							=> 'Cookie vervalt',
	'COOKIE_EXPIRE_EXPLAIN'					=> 'Als u dit instelt op Ja, moet de gebruiker het Cookiebeleid jaarlijks opnieuw accepteren.',

	'COOKIE_PAGE_BG_COLOUR'					=> 'Aangepaste achtergrondkleur van de cookie pagina',
	'COOKIE_PAGE_BG_COLOUR_EXPLAIN'			=> 'Selecteer de achtergrondkleur voor de pagina Cookiebeleid.',
	'COOKIE_PAGE_TXT_COLOUR'				=> 'Tekstkleur aangepaste cookie pagina',
	'COOKIE_PAGE_TXT_COLOUR_EXPLAIN'		=> 'Selecteer de tekstkleur voor de pagina Cookiebeleid.',

	'COOKIE_POLICY_ENABLE'					=> 'Schakel het Cookiebeleid in',
	'COOKIE_POLICY_ENABLE_EXPLAIN'			=> 'Schakel alle gebruikers vereisten aan/uit om het gebruik van cookies volgens de EU-cookie richtlijn (2012) op dit bord te accepteren.',
	'COOKIE_POLICY_EXPLAIN'					=> 'Hier kunt u de opties instellen om het privacy en cookiebeleid te beheren.',
	'COOKIE_POLICY_ON_INDEX'				=> 'Alleen weergeven op de index',
	'COOKIE_POLICY_ON_INDEX_EXPLAIN'		=> 'Toon het acceptatie vak voor het cookiebeleid alleen op de indexpagina of op alle pagina’s.',
	'COOKIE_POLICY_OPTIONS'					=> 'Cookie beleidsopties',

	'COOKIE_REQUIRE'						=> 'Vereisen van cookie acceptatie',
	'COOKIE_REQUIRE_EXPLAIN'				=> 'Vereis dat forum cookies worden geaccepteerd voordat een lid zich kan registreren of kan inloggen.<br />Als u dit op "Ja" instelt, kan een gebruiker het bord nog steeds bekijken (afhankelijk van de rechten).',

	'COOKIE_SHOW_POLICY'					=> 'Toon privacy/cookie beleid',
	'COOKIE_SHOW_POLICY_EXPLAIN'			=> 'Als u dit instelt op ja, wordt in de navigatie balk een link weergegeven naar het privacy/cookiebeleid wanneer het Cookiebeleid is uitgeschakeld, dat wil zeggen dat u een privacy/cookiebeleid kunt hebben zonder dat u het acceptatie vak hoeft te hebben.',

	'CUSTOM_BOX_COLOURS'					=> 'Cookie vak kleuren',
	'CUSTOM_BOX_COLOURS_EXPLAIN'			=> '<strong>Hier kunt u de kleuren aanpassen aan uw stijl voor het vak Cookie acceptatie.</strong>',
	'CUSTOM_PAGE_COLOURS'					=> 'Aangepaste cookie pagina opties',
	'CUSTOM_PAGE_COLOURS_EXPLAIN'			=> '<strong>Hier kunt u de kleuren wijzigen en/of afgeronde hoeken instellen die passen bij uw stijl voor de pagina Cookiebeleid.</strong>',

	'PIXELS'								=> 'px',
	'POLICIES'								=> 'Beleid',
	'PRIVACY_POLICY_ENABLE'					=> 'Schakel het Privacybeleid in',
	'PRIVACY_POLICY_ENABLE_EXPLAIN'			=> 'Schakel alle gebruikers vereisten in/uit om de GDPR (2018) op dit forum te accepteren.',
	'PRIVACY_POLICY_LIST_LINES'				=> 'Privacybeleid regels',
	'PRIVACY_POLICY_LIST_LINES_EXPLAIN'		=> 'Het aantal regels dat moet worden weergegeven in de <em>Privacybeleid Lijst</em>.',
	'PRIVACY_POLICY_OPTIONS'				=> 'Privacybeleid opties',
	'PRIVACY_POLICY_FORCE'					=> 'Privacy acceptatie afdwingen',
	'PRIVACY_POLICY_FORCE_EXPLAIN'			=> 'Alle gebruikers op dit forum dwingen de GDPR te accepteren.',
	'PRIVACY_POLICY_RESET'					=> 'Reset beleid acceptatie',
	'PRIVACY_POLICY_RESET_EXPLAIN'			=> 'Reset de acceptatie van het beleid zodat leden het Privacybeleid opnieuw moeten accepteren.<br />Zodra dit is uitgevoerd, moet u "<strong>Gedwongen privacy acceptatie</strong>" instellen op "<strong>Ja</strong>"<br />Als u deze optie op "Ja" zet, worden ook de phpBB cookies gereset waardoor alle leden opnieuw moeten inloggen.',

	'VERSION'								=> 'Versie',
));
