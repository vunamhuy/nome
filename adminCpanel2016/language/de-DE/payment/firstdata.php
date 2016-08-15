<?php
/**
 * @version		$Id: firstdata.php 3754 2014-10-01 20:12:29Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'First Data EMEA Connect (3DSecure aktiviert)';
$_['text_firstdata']		= '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';

// Text
$_['text_payment']			= 'Zahlung';
$_['text_success']			= 'Datensatz erfolgreich bearbeitet';
$_['text_edit']				= 'Bearbeiten';
$_['text_notification_url']	= 'URL Benachrichtigung';
$_['text_live']				= 'Live';
$_['text_demo']				= 'Demo';
$_['text_enabled']			= 'Aktiviert';
$_['text_merchant_id']		= 'H�ndlernummer';
$_['text_secret']			= 'Geheimbegriff';
$_['text_capture_ok']		= 'Erfassung erfolgreich';
$_['text_capture_ok_order']	= 'Datenerfassung erfolgreich, Auftragsstatus angepasst';
$_['text_void_ok']			= 'Auftragsstatus erfolgreich, Auftragsstatus angepasst';
$_['text_settle_auto']		= 'Verkauf';
$_['text_settle_delayed']	= 'Pre auth';
$_['text_success_void']		= 'Transaktion ung�ltig';
$_['text_success_capture']	= 'Transaktion wurde erfasst';
$_['text_payment_info']		= 'Zahlungsinfo';
$_['text_capture_status']	= 'Zahlugn geholt';
$_['text_void_status']		= 'Zahlung ung�ltig';
$_['text_order_ref']		= 'Auftragsreferenz';
$_['text_order_total']		= 'Gesamt genehmigt';
$_['text_total_captured']	= 'Gesamt geholt';
$_['text_transactions']		= 'Transaktionen';
$_['text_column_amount']	= 'Betrag';
$_['text_column_type']		= 'Art';
$_['text_column_date_added']= 'Erstellt';
$_['text_confirm_void']		= 'Sicher diese Zahlung f�r ung�ltig erkl�ren?';
$_['text_confirm_capture']	= 'Sicher diese Zahlung holen?';

// Entry
$_['entry_merchant_id']		= 'H�ndlernummer';
$_['entry_secret']			= 'Geheimbegriff';
$_['entry_total']			= 'Gesamt';
$_['entry_sort_order']		= 'Reihenfolge';
$_['entry_geo_zone']		= 'Geozone';
$_['entry_status']			= 'Status';
$_['entry_debug']			= 'Berichte aktiv';
$_['entry_live_demo']		= 'Live / Demo';
$_['entry_auto_settle']		= 'Art der Abwicklung';
$_['entry_card_select']		= 'Karte ausw�hlen';
$_['entry_tss_check']		= 'Pr�fe TSS';
$_['entry_live_url']		= 'URL Live';
$_['entry_demo_url']		= 'URL Demo';
$_['entry_status_success_settled']	= 'Abwicklung festgelegt';
$_['entry_status_success_unsettled']= 'Abwicklug aufgehoben';
$_['entry_status_decline']			= 'Ablehnen';
$_['entry_status_void']				= 'Ung�ltig';
$_['entry_enable_card_store']		= 'Speicherung Kartentoken';

$_['help_total']			= 'Mindestsumme Warenkorb damit diese Bezahlung aktiv ist';
$_['help_notification']		= 'Diese URL muss an First Data �bergeben werden um Zahlungsbenachrichtigungen zu erhalten';
$_['help_debug']			= 'Mit dem aktivieren dieser Einstellung werden tw. sensible Daten aufgezeichnet - nur aktivieren wenn erforderlich (z.B. bei Fehlern)';
$_['help_settle']			= 'Wird Pre-Auth verwendet muss innerhalb von 3-5 Tagen eine Antwort erfolgen ansonsten die Zahlung nicht erfolgen wird';

// Tab
$_['tab_account']			= 'API Info';
$_['tab_order_status']		= 'Auftragsstatus';
$_['tab_payment']			= 'Allgemein';
$_['tab_advanced']			= 'Erweitert';

$_['button_capture']		= 'Holen';
$_['button_void']			= 'Ung�ltig';

// Error
$_['error_merchant_id']		= 'H�ndlernummer erforderlich';
$_['error_secret']			= 'Geheimbegriff erforderlich';
$_['error_live_url']		= 'Live URL ist erforderlich';
$_['error_demo_url']		= 'Demo URL ist erforderlich';
$_['error_data_missing']	= 'Es fehlen einige Angaben';
$_['error_void_error']		= 'Kann Transaltion nicht f�r Ung�ltig erkl�ren';
$_['error_capture_error']	= 'Kann Daten nicht holen';