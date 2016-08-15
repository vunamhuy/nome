<?php
/**
 * @version		$Id: pp_express.php 3754 2014-10-01 20:12:29Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'PayPal Express';

// Text
$_['text_success']			= 'Datensatz erfolgreich bearbeitet';
$_['text_edit']				= 'Bearbeiten';
$_['text_pp_express']		= '<a href="https://www.paypal.com/at/mrb/pal=BCZYWJHWKF23Y" target="_blank"><img src="view/image/payment/paypal.png" alt="PayPal" title="PayPal" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorization']	= 'Genehmigung';
$_['text_sale']				= 'Verkauf';
$_['text_clear']			= 'Löschen';
$_['text_browse']			= 'Einfügen';
$_['text_image_manager']	= 'Bildverwaltung';
$_['text_ipn']				= 'IPN URL';

// Entry
$_['entry_username']		= 'API Benutzername';
$_['entry_password']		= 'API Passwort';
$_['entry_signature']		= 'API Unterschrift';
$_['entry_test']			= 'Testmodus';
$_['entry_method']			= 'Transaktionsart';
$_['entry_geo_zone']		= 'Geozone';
$_['entry_status']			= 'Status';
$_['entry_sort_order']		= 'Reihenfolge';
$_['entry_icon_sort_order']	= 'Icon Reihenfolge';
$_['entry_debug']			= 'Berichte aktivieren';
$_['entry_total']			= 'Summe';
$_['entry_currency']		= 'Standardwährung';
$_['entry_recurring_cancellation']	= 'Kunden dürfen Profil löschen';
$_['entry_canceled_reversal_status']	= 'Auftragsstatus Erstattung Abgebrochen';
$_['entry_completed_status']			= 'Status Fertig';
$_['entry_denied_status']				= 'Auftragsstatus Abgelehnt';
$_['entry_expired_status']				= 'Status abgelaufen';
$_['entry_failed_status']				= 'Auftragsstatus Fehlgeschlagen';
$_['entry_pending_status']				= 'Auftragsstatus Ausstehend';
$_['entry_processed_status']			= 'Status bearbeitet';
$_['entry_refunded_status']				= 'Auftragsstatus Erstattet';
$_['entry_reversed_status']				= 'Auftragsstatus Gutschrift';
$_['entry_voided_status']				= 'Status ungültig';
$_['entry_display_checkout']			= 'Zeige Quickcheckout Icon';
$_['entry_allow_notes']					= 'Erlaube Kommentare';
$_['entry_logo']						= 'Logo';
$_['entry_border_colour']               = 'Farbe Kopf Rahmen';
$_['entry_header_colour']               = 'Farbe Kopf Hintergrund';
$_['entry_page_colour']                 = 'Farbe Seite Hintergrund';

// Tab
$_['tab_general']		= 'Allgemein';
$_['tab_api_details']	= 'API Details';
$_['tab_order_status']	= 'Auftragsstatus';
$_['tab_customise']		= 'Individueller Bezahlvorgang';

// Help
$_['help_ipn']				= 'Erforderlich für Abozahlungen';
$_['help_total']			= 'Mindestgesamtsumme im Warenkorb damit diese Zahlungsart verfügbar ist';
$_['help_logo']				= 'Max. 750px(B) x 90px(H)<br />Logo sollte nur bei einer https-Verbindung eingesetzt werden';
$_['help_colour']			= '6-stelliger HEX-Code für Farbe (z.B. FF0000 = Rot)';
$_['help_currency']			= 'Anwendung bei Suche in Transaktionen';

// Error
$_['error_permission']	= 'Keine Rechte für diese Aktion';
$_['error_username']	= 'API Benutzername erforderlich!';
$_['error_password']	= 'API Passwort erforderlich!';
$_['error_signature']	= 'API Unterschrift erforderlich!';
$_['error_data']		= 'Keine Daten aus Request';
$_['error_timeout']		= 'Anfragezeit überschritten';