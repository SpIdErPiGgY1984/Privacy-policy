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
	'DONATE'					=> 'Doneer',
	'DONATE_EXTENSIONS'			=> 'Doneer aan mijn extensies',
	'DONATE_EXTENSIONS_EXPLAIN'	=> 'Deze extensie is, net als al mijn extensies, volledig gratis. Als u er baat bij heeft gehad, overweeg dan om een donatie te doen door op de PayPal donatieknop hiernaast te klikken - ik zou het op prijs stellen. Ik beloof dat er geen spam zal zijn, noch verzoeken om verdere donaties, hoewel ze altijd welkom zouden zijn.',

	'NEW_VERSION'				=> 'Nieuwe versie - %s',
	'NEW_VERSION_EXPLAIN'		=> 'Versie %1$s van deze extensie kan nu worden gedownload.<br>%2$s',
	'NEW_VERSION_LINK'			=> 'Download hier',
	'NO_VERSION_EXPLAIN'		=> 'Versie update informatie is niet beschikbaar.',

	'PAYPAL_BUTTON'				=> 'Doneer met de PayPa knop',
	'PAYPAL_TITLE'				=> 'PayPal - De veiligere, gemakkelijkere manier om online te betalen!',

	'VERSION'					=> 'Versie',
));
