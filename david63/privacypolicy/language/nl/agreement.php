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
	'TERMS_OF_USE_CONTENT_2' => '<br /><br /><strong>GDPR</strong><br />Om te voldoen aan de EU GDPR (2018) moet u op de hoogte worden gehouden van het volgende.<br /><br />Naast het bovenstaande zal "%1$s" ook alle IP-adressen opslaan waarmee je hebt gepost. Afhankelijk van uw voorkeuren kan "%1$s" u e-mails sturen naar het e-mailadres dat u hebt gebruikt toen u zich registreerde of dat u later hebt gewijzigd, maar u kunt deze voorkeuren op elk gewenst moment wijzigen via uw gebruikers configuratiescherm (UCP) als u wil ze niet meer ontvangen.<br /><br />De persoonlijke gegevens die u ons hebt gegeven toen u zich aanmeldde, worden uitsluitend gebruikt voor de doelmatigheid van de "%1$s" forum functionaliteit. Ze zullen niet voor iets anders worden gebruikt en zullen ook niet worden doorgegeven aan een derde partij zonder uw uitdrukkelijke toestemming.<br /><br />De enige andere informatie over u is die welke u besluit te plaatsen in de fora, waarna deze wordt beschouwd als "publiekelijk beschikbaar" zoals deze door zoekmachines is geïndexeerd), evenals online archief sites.<br /><br />Door te klikken op de knop "Ik ga akkoord met deze voorwaarden" wordt uw acceptatie van deze voorwaarden vastgelegd.',
));
