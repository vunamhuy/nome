<?php
/**
 * @version		$Id: language.php 3758 2014-10-02 10:29:50Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']		= 'Sprache';

// Text
$_['text_success']		= 'Datensatz erfolgreich geändert';
$_['text_list']			= 'Übersicht';
$_['text_add']			= 'Neu';
$_['text_edit']			= 'Bearbeiten';

// Column
$_['column_name']		= 'Name';
$_['column_code']		= 'Code';
$_['column_sort_order']	= 'Reihenfolge';
$_['column_action']		= 'Aktion';

// Entry
$_['entry_name']		= 'Name';
$_['entry_code']		= 'Code';
$_['entry_locale']		= 'Lokale Einst.';
$_['entry_image']		= 'Bild';
$_['entry_directory']	= 'Ordner';
$_['entry_filename']	= 'Dateiname';
$_['entry_status']		= 'Status';
$_['entry_sort_order']	= 'Reihenfolge';

// Help
$_['help_code']			= 'Nicht ändern wenn dies die Standardsprache ist.<br />Wird u.a. zur Sprachenkennung im Browser verwendet und muss XHTML-Konform sein.<br />Beispiel: de, de-DE oder de_DE';
$_['help_locale']		= 'Wird zur Browsererkennung verwendet, Beispiel: de,de_de,de-DE,de_DE<br />(mehrere mit Komma trennen)';
$_['help_image']		= 'Wird zur Anzeige der Flaggen verwendet.<br />Sollte nicht größer als 16x16px sein und als .png vorliegen';
$_['help_directory']	= 'Verzeichnis in welchem sich die Sprachdateien befinden (Groß-/Kleinschreibung beachten)<br />Beispiel: de_DE [Standard] oder de';
$_['help_filename']		= 'Name der Hauptsprachendatei ohne Dateierweiterung<br />(kann gleich lauten wie der Ordner, z.B. de_DE)';
$_['help_status']		= 'Im Shop bei Sprachenauswahl zeigen/verbergen';

// Error
$_['error_permission']	= 'Keine Rechte für diese Aktion';
$_['error_name']		= 'Titel muss zwischen 3 und 32 Buchstaben lang sein';
$_['error_code']		= 'Sprachcode muss aus mindestens zwei Buchstaben bestehen';
$_['error_locale']		= 'Lokalisierung erforderlich';
$_['error_image']		= 'Name der Bilddatei muss zwischen 3 und 64 Zeichen lang sein';
$_['error_directory']	= 'Verzeichnis erforderlich';
$_['error_filename']	= 'Dateiname muss zwischen 3 und 64 Zeichen lang sein';
$_['error_default']		= 'Sprache kann nicht gelöscht werden da als Standardsprache des Shops definiert';
$_['error_admin']		= 'Sprache ist aktuell die Standardsprache der Verwaltung und kann daher nicht gelöscht werden';
$_['error_store']		= 'Sprache kann nicht gelöscht werden da sie aktuell %s Shop(s) zugeordnet ist';
$_['error_order']		= 'Sprache kann nicht gelöscht werden weil sie noch %s Aufträgen zugeordnet ist';