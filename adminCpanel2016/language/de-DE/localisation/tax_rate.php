<?php
/**
 * @version		$Id: tax_rate.php 3758 2014-10-02 10:29:50Z mic $
 * @package		Language Translation German Backend
 * @author		mic - http://osworx.net
 * @copyright	2014 OSWorX - http://osworx.net
 * @license		GPL - www.gnu.org/copyleft/gpl.html
 */

// Heading
$_['heading_title']			= 'Steuersätze';

// Text
$_['text_success']			= 'Datensatz erfolgreich bearbeitet';
$_['text_list']				= 'Übersicht';
$_['text_add']				= 'Neu';
$_['text_edit']				= 'Bearbeiten';
$_['text_percent']			= 'Prozent';
$_['text_amount']			= 'Fixbetrag';

// Column
$_['column_name']			= 'Name';
$_['column_rate']			= 'Betrag';
$_['column_type']			= 'Berechnungsart';
$_['column_geo_zone']		= 'Geozone';
$_['column_date_added']		= 'Erstellt';
$_['column_date_modified']	= 'Geändert';
$_['column_action']			= 'Aktion';

// Entry
$_['entry_name']			= 'Name (Begriff wie er im Warenkorb, Rechnung usw. angezeigt wird)';
$_['entry_rate']			= 'Betrag (Abhängig von der Berechnungsart hier Wert angeben - nur Zahlen &amp; Punkt)';
$_['entry_type']			= 'Berechnungsart (Fixbetrag oder Prozent - jeweils gerechnet vom Nettowarenwert';
$_['entry_customer_group']	= 'Kundengruppe (Für welche Kundengruppe(n) soll dieser Steuersatz gelten)';
$_['entry_geo_zone']		= 'Geozone';

// Error
$_['error_permission']		= 'Keine Rechte für diese Aktion';
$_['error_tax_rule']		= 'Achtung: Betrag kann nicht gelöscht werden da er aktuell %s Steuerklasse(n) zugeordnet ist';
$_['error_name']			= 'Name muss zwischen 3 und 32 Zeichen lang sein';
$_['error_rate']			= 'Betrag erforderlich';