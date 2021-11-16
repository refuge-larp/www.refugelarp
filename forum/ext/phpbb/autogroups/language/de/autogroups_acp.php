<?php
/**
*
* Auto Groups extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_AUTOGROUPS_MANAGE'			=> 'Verwalte die Auto Groups',
	'ACP_AUTOGROUPS_MANAGE_EXPLAIN'	=> 'Mit diesem Formular könnt ihr neue Auto Group Konfigurationen anlegen und bestehende bearbeiten oder auch löschen.',
	'ACP_AUTOGROUPS_ADD'			=> 'Erstelle Auto Groups',
	'ACP_AUTOGROUPS_EDIT'			=> 'Bearbeite Auto Groups',

	'ACP_AUTOGROUPS_GROUP_NAME'				=> 'Group',
	'ACP_AUTOGROUPS_GROUP_NAME_EXPLAIN'		=> 'Wähle eine Gruppe für die automatische Löschung oder für das automatische hinzufügen von Usern aus.',
	'ACP_AUTOGROUPS_CONDITION_NAME'			=> 'Auto Group Typ',
	'ACP_AUTOGROUPS_CONDITION_NAME_EXPLAIN'	=> 'Wähle die Bediengung Anhand derer die User einer Gruppe hinzugefügt oder entfernt werden.',
	'ACP_AUTOGROUPS_MIN_VALUE'				=> 'Minimalwert',
	'ACP_AUTOGROUPS_MIN_VALUE_EXPLAIN'		=> 'User werden zu der Gruppe hinzugefügt, wenn diese den Minimalwert erreichen.',
	'ACP_AUTOGROUPS_MAX_VALUE'				=> 'Maximalwert',
	'ACP_AUTOGROUPS_MAX_VALUE_EXPLAIN'		=> 'User werden aus dieser Gruppe entfernt, wenn diese den Maximalwert erreichen. Lasse das Feld leer, wenn du nicht willst, dass User entfernt werden.',
	'ACP_AUTOGROUPS_DEFAULT'				=> 'Standard Gruppe',
	'ACP_AUTOGROUPS_DEFAULT_EXPLAIN'		=> 'Mache diese Gruppe zur neuen Standardgruppe der User.',
	'ACP_AUTOGROUPS_DEFAULT_EXEMPTION'		=> 'Dies hat keine Auswirkungen auf Benutzer, deren Standardbenutzergruppe eine der folgenden ist: <samp>%s</samp>.',
	'ACP_AUTOGROUPS_NOTIFY'					=> 'User Benachrichtigung',
	'ACP_AUTOGROUPS_NOTIFY_EXPLAIN'			=> 'Sende eine Benachrichtigung an den User nachdem er automatisch einer Gruppe hinzugefügt oder entfernt wurde.',

	'ACP_AUTOGROUPS_EXEMPT_GROUP'			=> 'Erstelle Standardgruppen Ausnahme.',
	'ACP_AUTOGROUPS_EXEMPT_GROUP_EXPLAIN'	=> 'Auto Groups wird die Standardgruppe eines User’s nicht ändern wenn diese in dieser Liste ausgewählt ist. Wähle mehrere Gruppen durch halten der <samp>CTRL</samp> (oder <samp>&#8984;CMD</samp> on Mac) und wähle die Gruppe aus.',

	'ACP_AUTOGROUPS_CREATE_RULE'	=> 'Erstelle eine neue Auto Gruppe',
	'ACP_AUTOGROUPS_SUBMIT_SUCCESS'	=> 'Auto Gruppe erfolgreich konfiguriert.',
	'ACP_AUTOGROUPS_DELETE_CONFIRM'	=> 'Bist du sicher das du diese Auto Gruppen Konfiguration löschen willst?',
	'ACP_AUTOGROUPS_DELETE_SUCCESS'	=> 'Auto Gruppe erfolgreich gelöscht.',
	'ACP_AUTOGROUPS_EMPTY'			=> 'Es gibtkeine Auto Gruppen.',
	'ACP_AUTOGROUPS_NO_GROUPS'		=> 'Keine Gruppen vorhanden',
	'ACP_AUTOGROUPS_INVALID_GROUPS'	=> 'Ein Fehler ist aufgetreten. Es wurde keine gültige Gruppe ausgewählt.<br />Auto Groups kann nur mit selbsterstellten Gruppen verwendet werden, welche über die Gruppenverwaltung erstellt werden können.',
	'ACP_AUTOGROUPS_INVALID_RANGE'	=> 'Ein Fehler ist aufgetreten. Minimal- und Maximalwerte können nicht auf den gleichen Wert eingestellt werden.',

	// Conditions
	'AUTOGROUPS_TYPE_BIRTHDAYS'		=> 'User Alter',
	'AUTOGROUPS_TYPE_LASTVISIT'		=> 'Tage seit dem letzten Besuch',
	'AUTOGROUPS_TYPE_MEMBERSHIP'	=> 'Dauer der Mitgliedschaft',
	'AUTOGROUPS_TYPE_POSTS'			=> 'Posts',
	'AUTOGROUPS_TYPE_WARNINGS'		=> 'Verwarnungen',
));
