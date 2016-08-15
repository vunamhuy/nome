<?php
/**
 * @version		$Id: checkout.php 3750 2014-09-28 16:22:31Z mic $
 * @package		Translation Deutsch
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']						= 'Kasse';

// Text
$_['text_cart']							= 'Warenkorb';
$_['text_checkout_option']				= 'Schritt 1: Bezahloptionen';
$_['text_checkout_account']				= 'Schritt 2: Konto- &amp; Rechnungsdetails';
$_['text_checkout_payment_address']		= 'Schritt 2: Rechnungsadresse';
$_['text_checkout_shipping_address']	= 'Schritt 3: Lieferadresse';
$_['text_checkout_shipping_method']		= 'Schritt 4: Versandart';
$_['text_checkout_payment_method']		= 'Schritt 5: Zahlungsart';
$_['text_checkout_confirm']				= 'Schritt 6: Auftrag bestätigen';
$_['text_modify']						= 'Ändern &raquo;';
$_['text_new_customer']					= 'Neukunde';
$_['text_returning_customer']			= 'Stammkunde';
$_['text_checkout']						= 'Optionen';
$_['text_i_am_returning_customer']		= 'Ich bin bereits Kunde';
$_['text_register']						= 'Neues Konto anlegen';
$_['text_guest']						= 'Direktbestellung';
$_['text_register_account']				= 'Mit dem Anlegen eines Kontos erfolgen zukünftige Bestellungen schneller, der Auftragsstatus kann nachverfolgt, bisherige Bestellungen angesehen, sowie persönliche Daten bearbeitet werden.';
$_['text_forgotten']					= 'Passwort vergessen';
$_['text_your_details']					= 'Persönliche Angaben';
$_['text_your_address']					= 'Meine Adresse';
$_['text_your_password']				= 'Passwort';
$_['text_agree']						= '<a href="%s" class="agree"><b>%s</b></a> habe ich gelesen und bin einverstanden.';
$_['text_address_new']					= 'Neue/andere Rechnungs-/Lieferadresse anlegen/verwenden.';
$_['text_address_existing']				= 'Bereits vorhandene Rechnungs-/Lieferadresse verwenden.';
$_['text_shipping_method']				= 'Bitte die gewünschte Versandart für diesen Auftrag wählen.';
$_['text_payment_method']				= 'Bitte die gewünschte Zahlungsart für diesen Auftrag wählen.';
$_['text_comments']						= 'Kommentar zur Bestellung (optional)';
$_['text_recurring']					= 'Abozahlung';
$_['text_payment_recurring']			= 'Abozahlungsprofil';
$_['text_trial_description']			= '%s jede(n) %d %s(s) für %d Zahlung(en), dann ';
$_['text_payment_description']			= '%s jede(n) %d %s(s) für %d Zahlung(en)';
$_['text_payment_until_canceled_description']	= '%s jede(n) %d %s(s) bis Abbruch';
$_['text_day']							= 'Tag(e)';
$_['text_week']							= 'Woche(n)';
$_['text_semi_month']					= 'Halbjährlich';
$_['text_month']						= 'Monat(e)';
$_['text_year']							= 'Jahr(e)';

// Column
$_['column_name']						= 'Name';
$_['column_model']						= 'Artikelnr.';
$_['column_quantity']					= 'Menge';
$_['column_price']						= 'Preis';
$_['column_total']						= 'Gesamt';

// Entry
$_['entry_email_address']				= 'Emailadresse';
$_['entry_email']						= 'Email';
$_['entry_password']					= 'Passwort';
$_['entry_confirm']						= 'Passwortwiederholung';
$_['entry_firstname']					= 'Vorname';
$_['entry_lastname']					= 'Nachname';
$_['entry_telephone']					= 'Telefon';
$_['entry_fax']							= 'Fax';
$_['entry_account']						= 'Konto';
$_['entry_company']						= 'Firma';
$_['entry_customer_group']				= 'Kundengruppe';
$_['entry_address_1']					= 'Strasse';
$_['entry_address_2']					= 'Adresszusatz';
$_['entry_postcode']					= 'Postleitzahl';
$_['entry_city']						= 'Stadt';
$_['entry_country']						= 'Land';
$_['entry_zone']						= 'Bundesland';
$_['entry_newsletter']					= 'Ich möchte mich für den %s Newsletter anmelden (Abmeldung ist jederzeit möglich).';
$_['entry_shipping']					= 'Liefer- &amp; Rechnungsadresse sind dieselbe.';

// Error
$_['error_warning']						= 'Es ist ein Problem bei der Verarbeitung des Auftrags aufgetreten! Falls es weiterhin besteht entweder eine andere Zahlungsart wählen oder die Shopverwaltung <a href="%s">hier</a> kontaktieren.';
$_['error_login']						= 'Diese Emailadresse und/oder Passwort ist/sind nicht korrekt.';
$_['error_approved']					= 'Hinweis: das Konto muss noch genehmigt werden.';
$_['error_exists']						= 'Diese Emailadresse kann nicht verwendet werden!';
$_['error_firstname']					= 'Vorname muss zwischen 1 und 32 Zeichen lang sein!';
$_['error_lastname']					= 'Nachname muss zwischen 1 und 32 Zeichen lang sein!';
$_['error_email']						= 'Emailadresse ist nicht gültig!';
$_['error_telephone']					= 'Telefon muss zwischen 3 und 32 Zeichen lang sein!';
$_['error_password']					= 'Passwort muss zwischen 3 und 20 Zeichen lang sein!';
$_['error_confirm']						= 'Passwort und Bestätigung stimmt nicht überein!';
$_['error_address_1']					= 'Strasse muss zwischen 3 und 128 Zeichen lang sein!';
$_['error_city']						= 'Stadt muss zwischen 2 und 128 Zeichen lang sein!';
$_['error_postcode']					= 'Postleitzahl muss zwischen 2 und 10 Zeichen lang sein.';
$_['error_country']						= 'Bitte ein Land wählen!';
$_['error_zone']						= 'Bitte ein Bundesland wählen!';
$_['error_agree']						= 'Den %s muss zugestimmt werden!';
$_['error_address']						= 'Es muss eine Adresse ausgewählt werden!';
$_['error_shipping']					= 'Es muss eine Versandart ausgewählt werden!';
$_['error_no_shipping']					= 'Für die gewählte Adresse sind keine Versandarten verfügbar - eventuell stimmen Postleitzahl und Land nicht überein?<br />Entweder die Zustelladresse oder Teile davon ändern oder für Hilfe uns <a href="%s">kontaktieren</a>.';
$_['error_payment']						= 'Es muss eine Zahlungsart ausgewählt werden!';
$_['error_no_payment']					= 'Es sind keine Zahlungsarten verfügbar, für Hilfe bitte uns <a href="%s">kontaktieren</a>.';
$_['error_custom_field']				= '%s ist erforderlich';