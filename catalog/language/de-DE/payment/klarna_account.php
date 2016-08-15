<?php
/**
 * @version		$Id: klarna_account.php 3721 2014-08-18 13:37:29Z mic $
 * @package		Translation - Frontend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Text
$_['text_title']			= 'Klarna';
$_['text_pay_month']		= 'Klarna Zahlung von %s / Monat <span id="klarna_account_toc_link"></span><script text="javascript">$.getScript(\'http://cdn.klarna.com/public/kitt/toc/v1.0/js/klarna.terms.min.js\', function(){ var terms = new Klarna.Terms.Account({ el: \'klarna_account_toc_link\', eid: \'%s\',   country: \'%s\'});})</script>';
$_['text_information']		= 'Klarna Kontoinformation';
$_['text_additional']		= 'Klarna benötigt weitere Infos bevor die Bestellung bearbeitet werden kann.';
$_['text_male']				= 'Mann';
$_['text_female']			= 'Frau';
$_['text_year']				= 'Jahr';
$_['text_month']			= 'Monat';
$_['text_day']				= 'Tag';
$_['text_payment_option']	= 'Zahlungsoptionen';
$_['text_single_payment']	= 'Einmalzahlung';
$_['text_monthly_payment']	= '%s - %s pro Monat';
$_['text_comment']			= "Klarna Rechnungsnr.: %s\n%s/%s: %.4f";

// Entry
$_['entry_gender']			= 'Geschlecht';
$_['entry_pno']				= 'Sozialversicherungsnr.';
$_['entry_dob']				= 'Geburtsdatum';
$_['entry_phone_no']		= 'Telefonnummer';
$_['entry_street']			= 'Straße';
$_['entry_house_no']		= 'Hausnummer';
$_['entry_house_ext']		= 'Zusatz';
$_['entry_company']			= 'Firmennummer';

// Help
$_['help_pno']				= 'Bitte hier die Sozialversicherungsnummer angeben';
$_['help_phone_no']			= 'Bitte hier die Telefonnummer angeben';
$_['help_street']			= 'Bitte beachten: die Lieferung kann nur an eine exixtierende Adresse erfolgen!';
$_['help_house_no']			= 'Bitte genaue Hausnummer angeben';
$_['help_house_ext']		= 'Falls die Hausnummer einen Zusatz hat (z.B. A, B, C, usw.)';
$_['help_company']			= 'Bitte hier die Firmennummer angeben';


// Error
$_['error_deu_terms']      = 'Den Datenschutzbestimmungen muss zugestimmt werden';
$_['error_address_match']  = 'Liefer- und Zustelladresse müssen übereinstimmen wenn mit Klarna gezahlt wird';
$_['error_network']        = 'Leider gab es einen Netzwerkfehler - bitte nochmals probieren';