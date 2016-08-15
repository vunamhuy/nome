<?php
/**
 * @version		$Id: firstdata_remote.php 3754 2014-10-01 20:12:29Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'First Data EMEA Connect (3DSecure aktiviert)';

// Text
$_['text_firstdata_remote']	= '<img src="view/image/payment/firstdata.png" alt="First Data" title="First Data" style="border: 1px solid #EEEEEE;" />';
$_['text_payment']			= 'Zahlung';
$_['text_success']			= 'Datensatz erfolgreich aktualisiert';
$_['text_edit']				= 'Bearbeiten';
$_['text_card_type']		= 'Kartentyp';
$_['text_enabled']			= 'Aktiviert';
$_['text_merchant_id']		= 'H�ndlernummer';
$_['text_subaccount']		= 'Unterkonto';
$_['text_user_id']			= 'Benutzernummer';
$_['text_capture_ok']		= 'Erfassung erfolgreich';
$_['text_capture_ok_order']	= 'Datenerfassung erfolgreich, Auftragsstatus angepasst';
$_['text_refund_ok']		= 'R�ckzahlung erfolgreich';
$_['text_refund_ok_order']	= 'R�ckzahlung erfolgreich, Auftragsstatus angepasst';
$_['text_void_ok']			= 'Void was successful, order status updated to voided';
$_['text_settle_auto']		= 'Verkauf';
$_['text_settle_delayed']	= 'Pre auth';
$_['text_mastercard']		= 'Mastercard';
$_['text_visa']				= 'Visa';
$_['text_diners']			= 'Diners';
$_['text_amex']				= 'American Express';
$_['text_maestro']			= 'Maestro';
$_['text_payment_info']		= 'Zahlungsinfo';
$_['text_capture_status']	= 'Zahlung geholt';
$_['text_void_status']		= 'Zahlung ung�ltig';
$_['text_refund_status']	= 'Zahlung r�ckerstattet';
$_['text_order_ref']		= 'Auftragsreferenz';
$_['text_order_total']		= 'Gesamt genehmigt';
$_['text_total_captured']	= 'Gesamt geholt';
$_['text_transactions']		= 'Transaktionen';
$_['text_column_amount']	= 'Betrag';
$_['text_column_type']		= 'Art';
$_['text_column_date_added']= 'Erstellt';
$_['text_confirm_void']		= 'Sicher dass die Zahlung ung�ltig erkl�rt werden soll?';
$_['text_confirm_capture']	= 'Sicher diese Zahlung holen?';
$_['text_confirm_refund']	= 'Sicher dass die Zahlung r�ckerstattet werden soll?';

// Entry
$_['entry_certificate_path']	= 'Pfad zum Zertifikat';
$_['entry_certificate_key_path']= 'Pfad zum privaten Schl�ssel';
$_['entry_certificate_key_pw']	= 'Passwort privater Schl�ssel';
$_['entry_certificate_ca_path']	= 'Pfad zum CA-Zertifikat';
$_['entry_merchant_id']			= 'H�ndlernummer';
$_['entry_user_id']				= 'Benutzernummer';
$_['entry_password']			= 'Passwort';
$_['entry_total']				= 'Gesamt';
$_['entry_sort_order']			= 'Reihenfolge';
$_['entry_geo_zone']			= 'Geozone';
$_['entry_status']				= 'Status';
$_['entry_debug']				= 'Berichte aktiv';
$_['entry_auto_settle']			= 'Art der Abwicklung';
$_['entry_status_success_settled']	= 'Abwicklung festgelegt';
$_['entry_status_success_unsettled']= 'Abwicklug aufgehoben';
$_['entry_status_decline']			= 'Ablehnen';
$_['entry_status_void']				= 'Ung�ltig';
$_['entry_status_refund']			= 'R�ckzahlung';
$_['entry_enable_card_store']		= 'Speicherung Kartentoken';
$_['entry_cards_accepted']			= 'Akzeptierte Karten';

// Help
$_['help_total']			= 'Mindestsumme Warenkorb damit diese Bezahlung aktiv ist';
$_['help_certificate']		= 'Zertifikate und private Schl�ssel sollten ausserhalb des �ffentlichen Webspace gespeichert werden';
$_['help_card_select']		= 'Kunde nach Kartentyp fragen bevor er weitergeleitet wird';
$_['help_notification']		= 'Diese URL muss an First Data �bergeben werden um Zahlungsbenachrichtigungen zu erhalten';
$_['help_debug']			= 'Mit dem aktivieren dieser Einstellung werden tw. sensible Daten aufgezeichnet - nur aktivieren wenn erforderlich (z.B. bei Fehlern)';
$_['help_settle']			= 'Wird Pre-Auth verwendet muss innerhalb von 3-5 Tagen eine Antwort erfolgen ansonsten die Zahlung nicht erfolgen wird';

// Tab
$_['tab_account']			= 'API Info';
$_['tab_order_status']		= 'Auftragsstatus';
$_['tab_payment']			= 'Allgemein';


$_['button_capture']		= 'Holen';
$_['button_refund']			= 'R�ckerstatten';
$_['button_void']			= 'Ung�ltig';

// Error
$_['error_merchant_id']		= 'H�ndlernummer ist erforderlich';
$_['error_user_id']			= 'Benutzernummer ist erforderlich';
$_['error_password']		= 'Passwort ist erforderlich';
$_['error_certificate']		= 'Pfad zum Zertifikat ist erforderlich';
$_['error_key']				= 'Zertifikatsschl�ssel ist erforderlich';
$_['error_key_pw']			= 'Passwort f�r Zertifikatsschl�ssel ist erforderlich';
$_['error_ca']				= 'CA Zertifikat ist erforderlich';