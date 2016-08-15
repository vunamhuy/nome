<?php
/**
 * @version		$Id: installer.php 3758 2014-10-02 10:29:50Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'Erweiterungen Installieren';

// Text
$_['text_success']			= 'Erweiterung wurde erfolgreich installiert';
$_['text_list']				= 'Übersicht';
$_['text_unzip']			= 'Entpacke Dateien';
$_['text_ftp']				= 'Kopiere Dateien';
$_['text_sql']				= 'Führe SQL-Befehle aus';
$_['text_xml']				= 'Wende Anpassungen an';
$_['text_php']				= 'Führe PHP aus';
$_['text_remove']			= 'Entferne temporäre Dateien';
$_['text_clear']			= 'Temporäre Dateien erfolgreich entfernt';

// Entry
$_['entry_upload']			= 'Lade Datei hoch';
$_['entry_overwrite']		= 'Dateien welche überschrieben werden';
$_['entry_progress']		= 'Ausführen';

// Help
$_['help_upload']			= 'Benötigt entweder eine <b>.zip oder .xml</b> Datei, die Endung muss lauten <b>.ocmod.zip</b> oder <b>.ocmod.xml</b><br />Mehr dazu <a href="https://github.com/opencart/opencart/wiki/Modification-System" target="_blank">hier</a><br />War das Hochladen erfolgreich, muß um die Anpassungen anzuwenden anschließend das Menü <b>Anpassungen</b> aufgerufen werden, die gewünschte Anpassung auswählen und den Button <b>Aktualisieren</b> anklicken';

// Error
$_['error_permission']		= 'Hinweis: keine Rechte zur Ausführung dieser Aktion';
$_['error_temporary']		= 'Achtung: es befinden sich einige temporäre Dateien im Verzeichnis, zum Löschen den Button <b>Bereinigen</b> anklicken';
$_['error_upload']			= 'Datei konnte nicht hochgeladen werden';
$_['error_filetype']		= 'Ungültige Dateiart';
$_['error_file']			= 'Datei nicht gefunden';
$_['error_unzip']			= 'Zipdatei konnte nicht geöffnet werden';
$_['error_directory']		= 'Ordner <b>upload</b> mit Dateien zum hochladen konnte nicht gefunden werden';
$_['error_ftp_connection']	= 'FTP-Verbindung auf <b>%s:%s</b> nicht möglich';
$_['error_ftp_login']		= 'FTP-Anmeldung als <b>%s</b> nicht möglich';
$_['error_ftp_root']		= 'Hauptverzeichnis <b>%s</b> konnte nicht bestimmt werden';
$_['error_ftp_directory']	= 'Verzeichniswechsel nach <b>%s</b> nicht möglich';
$_['error_ftp_file']		= 'Datei <b>%s</b> konnte nicht hochgeladen werden';