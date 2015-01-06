<?php
/**
*
* @author Tobi Schäfer http://tas2580.de/
*
* @package language
* @version $Id: acp_ads.php, v0.2.1 2008-12-15 19:35:19 tas2580 $
* @copyright (c) 2007 SEO phpBB http://www.phpbb-seo.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
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

// Bot settings
$lang = array_merge($lang, array(
	'ADMANAGEMENT'			=> 'Ad Management',
	'NEED_CODE'				=> 'Gib einen Namen und Code für die Werbung ein!',
	'NEED_IMAGE'			=> 'Gib einen Namen, eine URL und ein Bild für den Banner an.',
	'ADDED'					=> 'Der Banner wurde zum System hinzugefügt',
	'UPDATED'				=> 'Die Werbung wurde erfolgreich geändert',
	'DELETED'				=> 'Die Werbung wurde erfolgreich aus dem System gelöscht!',
	'REALY_DELETE'			=> 'Soll die Werbung wirklich gelöscht werden?',
	'AD'					=> 'Werbung',
	'AD_DESC'				=> 'Hier kann die Werbung verwaltet werden, du kannst mehrere Banner hinzufügen die dann abwechselnd angezeigt werden.',
	'NEW_AD'				=> 'Werbung hinzufügen',
	'EDIT_AD'				=> 'Werbung bearbeiten',
	'NAME'					=> 'Name',
	'NAME_DESC'				=> 'Gib einen Namen für den Banner ein.',
	'CODE'					=> 'Adcode',
	'CODE_DESC'				=> 'Code für die Werbung',
	'FORUMS_DESC'			=> 'Gib die ID der Foren ein, in den die Werbung angezeigt werden soll, <br />	mehrere Foren m&uuml;ssen durch ein Komma getrennt werden.',
	'GROUPS_DESC'			=> 'Wähle aus für welche Gruppen die Werbung angezeigt werden soll. Die Webung wird angezeigt sobald ein Benuter Mitglied in einer der gewählten Gruppen ist.',
	'AD_VIEWS'				=> 'Banner Views',
	'AD_VIEWS_DESC'			=> 'Die Anzahl der Einblendungen für die Werbung',
	'AD_MAX_VIEWS'			=> 'Maximale Views',
	'AD_MAX_VIEWS_DESC' 	=> 'Die Anzahl der Maximalen Einblendungen für die Werbung, für unbegrenzt 0 eingeben.',
	'POSITION'				=> 'Position',
	'POSITION_DESC'			=> 'An welcher Position soll die Werbung angezeigt werden?',
	'POSITION1'				=> 'Nach jedem ersten Beitrag',
	'POSITION2'				=> 'Nach jedem Beitrag',
	'POSITION3'				=> 'Über den Beiträgen',
	'POSITION4'				=> 'Unter den Beiträgen',
	'POSITION5'				=> 'Im Forenheader',
	'POSITION6'				=> 'Im Forenfooter',
	'AD_IN_SYSTEM'			=> 'Banner im System',
	'AD_IN_SYSTEM_DESC'		=> 'Die hier aufgelisteten Banner sind im System vorhanden',
	'SHOW_IN_ALL_FORUMS'	=> 'In allen Foren anzeigen',

	'BANNER_AD'				=> 'Banner Werbung',
	'HTML_AD'				=> 'HTML Werbung',
	'IMAGE_DESC'			=> 'Gib die URL zu dem Banner-Bild an',
	'URL'					=> 'URL',
	'URL_DESC'				=> 'Gib eine URL an auf die der Banner verlinken soll',
	'SIZE'					=> 'Bannergröße',
	'SIZE_DESC'				=> 'Gib an wie groß der Banner ist',
	'HEIGHT'				=> 'Höhe',
	'WIDTH'					=> 'Breite',
	'PIXEL'					=> 'Pixel',
	'START_DATE'			=> 'Start Datum',
	'START_DATE_DESC'		=> 'Ab diesem Datum wird die Werbung angezeigt.',
	'END_DATE'				=> 'End Datum',
	'END_DATE_DESC'			=> 'Bis zu diesem Datum wird die Werbung angezeigt.',
	'AD_CLICKS'				=> 'Klicks',
	'AD_CLICKS_DESC'		=> 'Wie oft wurde der Banner angeklickt?',
	'MAX_AD_CLICKS'			=> 'Maximale Klicks',
	'MAX_AD_CLICKS_DESC'	=> 'Bis zu wievielen Klicks soll die Werbung angezeigt werden? Für unbegrenzt 0 eingeben.',
	'SHOW_OPTIONS'			=> 'Anzeige Einstellungen',
	'RANKS'					=> 'Ränge',
	'RANKS_DESC'			=> 'Für welche Ränge soll die Werbung angezeigt werden? Um die Werbung für alle Ränge anzuzeigen wähle alle Ränge aus.',
	'NO_RANK'				=> 'Benutzer ohne Rang',
));

?>