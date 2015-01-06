<?php
/**
*
* @author Tobi Schäfer http://tas2580.de/
*
* @package acp
* @version $Id: acp_ads.php, v1.0.1 2009-01-12 22:09:14 tas2580 $
* @copyright (c) 2007 SEO phpBB http://www.phpbb-seo.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_ads_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_ads',
			'title'		=> 'ADMANAGEMENT',
			'version'	=> '1.0.1',
			'modes'		=> array(
				'html'		=> array('title'	=> 'HTML_AD',		'auth'	=> '',	'cat'	=> array('ACP_BOARD_CONFIGURATION'),),
				'banner'	=> array('title'	=> 'BANNERS_AD',	'auth'	=> '',	'cat'	=> array('ACP_BOARD_CONFIGURATION'),),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}

	function update()
	{
	}
}

?>
