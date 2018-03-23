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

	'COOKIE_ACCEPT_TEXT'	=> 'Dit forum maakt gebruik van cookies om je de beste en meest relevante ervaring te bieden. Als u dit forum wilt gebruiken, betekent dit dat u het beleid moet accepteren.<br />U kunt meer informatie over de gebruikte cookies vinden door op het "Cookiebeleid" op de hoofdpagina of de onderstaande link te klikken.<br />',
	'COOKIE_ACCEPT'			=> '[ Ik accepteer ]',
	'COOKIE_ACCESS'			=> 'Cookie Toegang',

	'COOKIE_BLOCK'			=> 'Je hebt geen toegang tot de links op dit bord totdat je het Cookiebeleid hebt geaccepteerd.',

	'COOKIE_TEXT'			=> '<h3>Hoe gebruiken we cookies op dit forum</h3>
	<p>We gebruiken bestanden die bekend staan als cookies op %1$s om de prestaties te verbeteren en om uw gebruikerservaring te verbeteren. Door %1$s te gebruiken, gaat u ermee akkoord dat we dit soort bestanden op uw apparaat kunnen plaatsen.</p>
<h3>Wat zijn cookies?</h3><p>Cookies zijn kleine tekstbestanden die een website op uw computer of mobiel apparaat kan plaatsen wanneer u die website of één van haar pagina’s voor het eerst bezoekt.<br /><br />
Er zijn veel functies die een cookie kan dienen. Een cookie helpt bijvoorbeeld de website of een andere website uw apparaat te herkennen wanneer u het de volgende keer bezoekt. %1$s gebruikt de term “cookies” in dit beleid om te verwijzen naar alle bestanden die op deze manier informatie verzamelen.<br /><br />
Bepaalde cookies bevatten persoonlijke informatie. Als u bijvoorbeeld op “Onthoud mij” klikt tijdens het inloggen, zal een cookie uw gebruikersnaam opslaan. De meeste cookies verzamelen geen informatie die u identificeert, maar zullen in plaats daarvan meer algemene informatie verzamelen, zoals hoe gebruikers aankomen en%1$s, gebruiken, of de algemene locatie van een gebruiker.</p>
<h3>Welke soorten cookies gebruikt %1$s?</h3><p>Cookies kunnen verschillende functies uitvoeren:</p>
<p><b>1. Noodzakelijke cookies</b><br />Sommige cookies zijn essentieel voor de werking van %1$s. Deze cookies maken diensten mogelijk waar u specifiek om hebt gevraagd.</p>
<p><b>2. Performance Cookies</b><br />Deze cookies kunnen anonieme informatie verzamelen over de bezochte pagina’s. We kunnen bijvoorbeeld prestatiecookies gebruiken om bij te houden welke pagina’s het populairst zijn, welke methode van koppeling tussen pagina’s het meest effectief is en om te bepalen waarom sommige pagina’s foutmeldingen ontvangen.</p>
<p><b>3. Functionaliteit Cookies</b><br />Deze cookies onthouden keuzes die u maakt om uw ervaring te verbeteren.</p>
<p>%1$s kan derden ook toestaan cookies te serveren die in een van de bovenstaande categorieën vallen. Net als veel andere sites kunnen we Google Analytics bijvoorbeeld gebruiken om ons websiteverkeer te volgen.</p>
<h3>Kan een forumgebruiker cookies blokkeren?</h3><p>Raadpleeg de helpsectie van uw browser of de handleiding van uw mobiele apparaat voor informatie over het beheren van de cookies die u toestaat. U kunt ook één van de onderstaande sites bezoeken met gedetailleerde informatie over het beheren, controleren of verwijderen van cookies.<br /><br />
<a href="http://www.aboutcookies.org" style="text-decoration:none">www.aboutcookies.org</a><br />
<a href="http://www.allaboutcookies.org" style="text-decoration:none">www.allaboutcookies.org</a></p>
<p>Houd er rekening mee dat als u ervoor kiest cookies uit te schakelen, bepaalde gedeelten van %1$s mogelijk niet correct werken.</p>
<h3>Cookies op %1$s van sociale netwerksites</h3><p>%1$s bevat mogelijk links naar sociale netwerksites (bijvoorbeeld Facebook, Twitter of YouTube). Deze websites kunnen ook cookies op uw apparaat plaatsen en %1$s heeft geen controle over hoe zij hun cookies gebruiken, daarom suggereert %1$s dat u hun website(s) controleert om te zien hoe zij cookies gebruiken.',

	'COOKIE_POLICY'			=> 'Cookie beleid',
	'COOKIE_PRIV_POLICY'	=> 'Cookie / Privacybeleid',

	'COOKIE_REQUIRE_ACCESS'	=> '<h3>Cookie acceptatie vereist</h3>
	<p>U moet het Cookiebeleid van %1$s accepteren voordat u zich kunt registreren op deze site of, als u al bent geregistreerd, voordat u zich op de site kunt aanmelden.</p>',

	'DECLINE' 				=> 'Ik accepteer dit beleid niet',

	'POLICY_ACCEPT' 		=> 'Accepteer privacybeleid',
	'PRIVACY_POLICY' 		=> '<h3>Algemene verordening gegevensbescherming - 2018 (GDPR)</h3>
	<br />
	<p>Om aan de GDPR te voldoen, moet u er rekening mee houden dat uw "%1$s" account op zijn minst een uniek identificeerbare naam (hierna "uw gebruikersnaam") bevat, een persoonlijk wachtwoord dat wordt gebruikt om in te loggen op uw account (hierna "uw wachtwoord") en een persoonlijk, geldig e-mailadres (hierna "uw e-mail"). Uw informatie voor uw account op "%1$s" is beschermd door de wetten betreffende gegevensbescherming van het land waarin dit forum gehost wordt. Alle informatie die nog gevraagd wordt door "%1$s" voor meer informatie dan je gebruikersnaam, je wachtwoord en je e-mailadres tijdens het registratieproces, zijn ofwel verplicht of optioneel, naar het inzicht van "%1$s". In alle gevallen hebt u de mogelijkheid om welke informatie in uw account openbaar wordt weergegeven. Bovendien heeft u binnen uw account de mogelijkheid om u aan te melden voor opt-in of opt-out van automatisch gegenereerde e-mails.
<br /><br />
Verder bewaren we het volledige IP-adres waarmee je kunt posten. Afhankelijk van uw voorkeuren kan "%1$s" u e-mails sturen naar het e-mailadres dat u hebt gebruikt toen u zich registreerde, of dat u later hebt gewijzigd, maar u kunt deze voorkeuren op elk gewenst moment wijzigen via uw gebruikers configuratiescherm (UCP) als je ze niet meer wilt ontvangen.<br /><br />De persoonlijke gegevens die je ons hebt gegeven toen je je aanmeldde, worden alleen gebruikt voor de doelmatigheid van de "%1$s" forum functionaliteiten. Ze zullen niet voor iets anders worden gebruikt en zullen ook niet worden doorgegeven aan een derde partij zonder uw uitdrukkelijke toestemming. U kunt op elk gewenst moment controleren of de persoonlijke gegevens die "%1$s" bijhoud in de buurt zijn in het gedeelte "Profiel" van uw UCP.
<br /><br />
De enige andere informatie over u is die welke u besluit te plaatsen in de fora, waarna deze als "openbaar beschikbaar" wordt beschouwd, omdat deze door zoekmachines en online archief sites is geïndexeerd.',

	'PRIVACY_POLICY_ACCEPT' => '<h3>Algemene verordening gegevensbescherming - 2018 (GDPR)</h3>
	<br />
	<p>Om aan de GDPR te voldoen, moet u er rekening mee houden dat uw "%1$s" account op zijn minst een uniek identificeerbare naam (hierna "uw gebruikersnaam") bevat, een persoonlijk wachtwoord dat wordt gebruikt om in te loggen op uw account (hierna "uw wachtwoord") en een persoonlijk, geldig e-mailadres (hierna "uw e-mail"). Uw informatie voor uw account op "%1$s" is beschermd door de wetten betreffende gegevensbescherming van het land waarin dit forum gehost wordt. Alle informatie die nog gevraagd wordt door "%1$s" voor meer informatie dan je gebruikersnaam, je wachtwoord en je e-mailadres tijdens het registratieproces, zijn ofwel verplicht of optioneel, naar het inzicht van "%1$s". In alle gevallen hebt u de mogelijkheid om welke informatie in uw account openbaar wordt weergegeven. Bovendien heeft u binnen uw account de mogelijkheid om u aan te melden voor opt-in of opt-out van automatisch gegenereerde e-mails.
<br /><br />
Verder bewaren we het volledige IP-adres waarmee je kunt posten. Afhankelijk van uw voorkeuren kan "%1$s" u e-mails sturen naar het e-mailadres dat u hebt gebruikt toen u zich registreerde, of dat u later hebt gewijzigd, maar u kunt deze voorkeuren op elk gewenst moment wijzigen via uw gebruikers configuratiescherm (UCP) als je ze niet meer wilt ontvangen.<br /><br />De persoonlijke gegevens die je ons hebt gegeven toen je je aanmeldde, worden alleen gebruikt voor de doelmatigheid van de "%1$s" forum functionaliteiten. Ze zullen niet voor iets anders worden gebruikt en zullen ook niet worden doorgegeven aan een derde partij zonder uw uitdrukkelijke toestemming. U kunt op elk gewenst moment controleren of de persoonlijke gegevens die "%1$s" bijhoud in de buurt zijn in het gedeelte "Profiel" van uw UCP.
<br /><br />
De enige andere informatie over u is die welke u besluit te plaatsen in de fora, waarna deze als "openbaar beschikbaar" wordt beschouwd, omdat deze door zoekmachines en online archief sites is geïndexeerd.
<br /><br />
Als u op de knop "<strong>Ik ga akkoord met dit beleid</strong>" klikt, wordt uw acceptatie van deze voorwaarden geregistreerd. Als u op de knop "<strong>Ik ga niet akkoord met dit beleid</strong>" hieronder klikt, wordt u uitgelogd op dit forum.',
));
