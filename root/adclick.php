<?php

/**
*
* @author Tobi Schäfer http://tas2580.net/
*
* @package phpBB3
* @version $Id: adclick.php, v0.2.1 2008-12-15 19:35:19 tas2580 $
* @copyright (c) 2007 SEO phpBB
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

$id	= request_var('id', 0);

$sql = 'SELECT url
	FROM ' . AD_TABLE . '
	WHERE ad_id = ' . $id;
$result = $db->sql_query($sql);
$row = $db->sql_fetchrow($result);

$db->sql_query('UPDATE ' . AD_TABLE . ' SET clicks = clicks + 1 WHERE ad_id = ' . $id);

header("Status: 301 Permanently Moved");
header("Location: {$row['url']}");

?>