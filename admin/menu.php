<?php
/**
 * admin - menu
 *
 * @copyright	Geekwright, LLC http://geekwright.com
 * @license	GNU General Public License (GPL)
 * @since	1.0
 * @author	Richard Griffith richard@geekwright.com
 * @package	speechsearch
 *
**/

$adminmenu[1] = array(
	'title'	=> _MI_SPEECHSEARCH_HOME ,
	'link'	=> 'admin/index.php' ,
	'desc'	=> _MI_SPEECHSEARCH_HOME_DESC,
	'icon'	=> 'images/admin/home.png'
) ;
if (!defined('ICMS_ROOT_PATH')) {
$adminmenu[] = array(
	'title'	=> _MI_SPEECHSEARCH_ABOUT ,
	'link'	=> 'admin/about.php' ,
	'desc'	=> _MI_SPEECHSEARCH_ABOUT_DESC,
	'icon'	=> 'images/admin/about.png'
) ;
}
?>
