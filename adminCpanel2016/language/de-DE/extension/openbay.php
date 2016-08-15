<?php
/**
 * @version		$Id: openbay.php 3755 2014-10-02 08:55:51Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']						= 'OpenBay Pro';

// Buttons
$_['button_retry']						= 'Wiederholen';
$_['button_faq_clear']					= 'Löschen';
$_['button_update']						= 'Update';
$_['button_patch']						= 'Patch';
$_['button_ftp_test']					= 'Verbindungstest';
$_['button_faq']						= 'Ansehen';

// Tab
$_['tab_setting']						= 'Einstellungen';
$_['tab_update']						= 'Updates';
$_['tab_patch']							= 'Patch';

// Text
$_['text_success']						= 'Einstellungen erfolgriech gespeichert';
$_['text_products']						= 'Artikel';
$_['text_orders']						= 'Aufträge';
$_['text_manage']						= 'Bearbeiten';
$_['text_help']							= 'Hilfe';
$_['text_tutorials']					= 'Anleitungen';
$_['text_suggestions']					= 'Vorschläge';
$_['text_version_latest']				= 'Aktuellste Version ist in Verwendung';
$_['text_version_check']				= 'Überprüfe Version';
$_['text_version_installed']			= 'Installierte Version von OpenBay Pro: v';
$_['text_version_current']				= 'Installierte Version ist';
$_['text_version_available']			= 'die Neueste ist';
$_['text_language']						= 'API Antwortsprache';
$_['text_getting_messages']				= 'Hole OpenBay Pro Nachrichten';
$_['text_complete']						= 'Fertig';
$_['text_test_connection']				= 'Teste FTP-Verbindung';
$_['text_run_update']					= 'Update durchführen';
$_['text_patch']						= 'Patch anführen';
$_['text_patch_complete']				= 'Patch wurde angewendet';
$_['text_connection_ok']				= 'Verbindung OK. Shopverzeichnisse gefunden';
$_['text_updated']						= 'Module wurden aktualisiert (v.%s)';
$_['text_update_description']			= 'Das Updatetool wird Änderungen an diversen Dateien durchführen. ZUvor sollte eine Komplettsicherung durchgeführt werden!';
$_['text_clear_faq']					= 'Ausgeblendete FAQ-PopUs löschen';
$_['text_clear_faq_complete']			= 'Anmerkungen werden wieder angezeigt';
$_['text_install_success']				= 'Marktplart erfolgriech installiert';
$_['text_uninstall_success']			= 'Marktplatz  erfolgreich entfernt';
$_['text_title_messages']				= 'Nachrichten';
$_['text_marketplace_shipped']			= 'Auftragsstatus wird auf Marktplatz auf "versendet" aktualisiert';

// Column
$_['column_name']						= 'Pluginname';
$_['column_status']						= 'Status';
$_['column_action']						= 'Aktion';

// Entry
$_['entry_ftp_username']				= 'FTP Benutzername';
$_['entry_ftp_password']				= 'FTP Passwort';
$_['entry_ftp_server']					= 'FTP Serveradresse';
$_['entry_ftp_root']					= 'FTP Stammordner auf Server';
$_['entry_ftp_admin']					= 'Adminordner';
$_['entry_ftp_pasv']					= 'PASV Modus';
$_['entry_ftp_beta']					= 'Verwendet Betaversion';
$_['entry_courier']						= 'Dienst';
$_['entry_courier_other']				= 'Anderer Dienst';
$_['entry_tracking']					= 'Nachverfolgungsnr.';

// Error
$_['error_username']					= 'FTP Benutzername erforderlich';
$_['error_password']					= 'FTP Passwort erforderlich';
$_['error_server']						= 'FTP Server erforderlich';
$_['error_admin']						= 'Adminordner erforderlich';
$_['error_no_admin']					= 'verbindung OK, aber Adminordner nicht gefunden';
$_['error_no_files']					= 'Verbdindung OK, aber keine Shopordner gefunden. Ist der Stammordner richtig?';
$_['error_ftp_login']					= 'Kein Zugriff für diesen Benutzer';
$_['error_ftp_connect']					= 'Keine Verbindung zum Server möglich';
$_['error_failed']						= 'Daten konnten nicht geladen werden, nochmal versuchen?';
$_['error_tracking_id_format']			= 'Nachverfolgungsnr. darf keine > oder < enthalten';
$_['error_tracking_courier']			= 'Für die Nachverfolgungsnr. muss ein Dienst ausgewählt werden';
$_['error_tracking_custom']				= 'Feld für Dienst leer lassen wenn ein eigener Dienst verwendet wird';
$_['error_permission']					= 'Keine Rechte für diese Aktion';

// Help
$_['help_ftp_username']					= 'FTP Benutzername für die Verbindung';
$_['help_ftp_password']           		= 'FTP Passwort für die Verbindung';
$_['help_ftp_server']					= 'Entweder IP-Adresse oder Servername';
$_['help_ftp_root']						= 'Keinen abschließenden Slash (z.B. httpdocs/www)';
$_['help_ftp_admin']					= 'Wurder der Adminordner umbenannt,d ann hier neuen Namen angeben';
$_['help_ftp_pasv']						= 'Verwendet FTP-Verbindung im Passivmodus';
$_['help_ftp_beta']						= 'Achtung! Die Betaversion arbeitet möglicherweise nicht korrekt!';
$_['help_patch']						= 'Wird das Update über FTP gemacht, zum Fertigstellen das Patch anwenden';
$_['help_clear_faq']					= 'Zeige wieder alle Nachrichten';