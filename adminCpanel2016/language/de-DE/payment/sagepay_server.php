<?php
/**
 * @version		$Id: sagepay_server.php 3754 2014-10-01 20:12:29Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'SagePay Server';

// Text
$_['text_payment']			= 'Zahlung';
$_['text_success']			= 'Datensatz erfolgreich bearbeitet';
$_['text_edit']				= 'Bearbeiten';
$_['text_sagepay_server']	= '<a href="https://support.sagepay.com/apply/default.aspx?PartnerID=E511AF91-E4A0-42DE-80B0-09C981A3FB61" target="_blank"><img src="view/image/payment/sagepay.png" alt="SagePay" title="SagePay" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_sim']				= 'Simulator';
$_['text_test']				= 'Test';
$_['text_live']				= 'Live';
$_['text_defered']			= 'Verz�gert';
$_['text_authenticate']		= 'Genehmigen';
$_['text_release_ok']		= 'Freigabe erfolgreich';
$_['text_release_ok_order']	= 'Freigabe erfolgreich durchgef�hrt, Auftragsstatus angepasst';
$_['text_rebate_ok']		= 'Erm�ssigung erfolgreich';
$_['text_rebate_ok_order']	= 'Erm�ssigung erfolgreich durchgef�hrt, Auftragsstatus angepasst';
$_['text_void_ok']			= 'Ung�ltig erfolgreich, Auftragsstatus angepasst';
$_['text_payment_info']		= 'Zahlungsinfo';
$_['text_release_status']	= 'Zahlung freigegeben';
$_['text_void_status']		= 'Zahlung ung�ltig';
$_['text_rebate_status']	= 'Zahlugn erm�ssigt';
$_['text_order_ref']		= 'Auftragsreferenz';
$_['text_order_total']		= 'Gesamt genehmigt';
$_['text_total_released']	= 'Gesamt freigegeben';
$_['text_transactions']		= 'Transaktionen';
$_['text_column_amount']	= 'Betrag';
$_['text_column_type']		= 'Art';
$_['text_column_date_added']= 'Erstellt';
$_['text_confirm_void']		= 'Sicher diese Zahlung ung�ltig erkl�ren?';
$_['text_confirm_release']	= 'Sicher diese Zahlung freigeben?';
$_['text_confirm_rebate']	= 'Sicher diese Zahlung erm�ssigen?';

// Entry
$_['entry_vendor']			= 'H�ndler';
$_['entry_test']			= 'Testmodus';
$_['entry_transaction']		= 'Transaktionsart';
$_['entry_total']			= 'Gesamt';
$_['entry_order_status']	= 'Auftragsstatus';
$_['entry_geo_zone']		= 'Geozone';
$_['entry_status']			= 'Status';
$_['entry_sort_order']		= 'Reihenfolge';
$_['entry_debug']			= 'Berichte aktiv';
$_['entry_card']			= 'Speichere Karten';
$_['entry_cron_job_token']	= 'Geheimbegriff';
$_['entry_cron_job_url']	= 'URL f�r Cronjob';
$_['entry_last_cron_job_run']	= 'Cronjob letzte Durchf�hrung';

// Help
$_['help_total']			= 'Mindestgesamtsumme der Warenkorb aufweisen muss damit diese Zahlungsart angezeigt wird';
$_['help_debug']			= 'Berichte aktivieren speichert auch sensible Daten - nur aktivieren f�r Fehlersuche';
$_['help_transaction']		= 'Transaktionsart <b>muss</b> auf Zahlung gesetzt sein um Abozahlungen zu erm�glichen';
$_['help_cron_job_token']	= 'Ein m�glichst schwer zu erratender Begriff';
$_['help_cron_job_url']		= 'URL um Cronjob aufrufen zu k�nnen';

$_['btn_release']			= 'Freigeben';
$_['btn_rebate']			= 'Erm�ssigen / R�ckerstatten';
$_['btn_void']				= 'Ung�ltig';

// Error
$_['error_permission']		= 'Keine Rechte f�r diese Aktion';
$_['error_vendor']			= 'H�ndlernummer erforderlich';