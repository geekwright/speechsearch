<?php
/**
 * xoops_version
 *
 * @copyright	Geekwright, LLC http://geekwright.com
 * @license	GNU General Public License (GPL)
 * @since	1.0
 * @author	Richard Griffith richard@geekwright.com
 * @package	speechsearch
 **/
if (!defined("XOOPS_ROOT_PATH")) die("Root path not defined");

$modversion['name'] = _MI_SPEECHSEARCH_NAME;
$modversion['dirname'] = basename( dirname( __FILE__ ) ) ;
$modversion['version'] = '1.0';
$modversion['description'] = _MI_SPEECHSEARCH_DESC;
$modversion['author'] = "Richard Griffith (geekwright.com)";
$modversion['credits'] = "Google sample code, Module icon adapted from IconEden.com";
$modversion['help'] = 'page=help';
$modversion['license'] = "GPL V2 or later";
$modversion['license_url'] = 'www.gnu.org/licenses/gpl-2.0.html';
$modversion['official'] = 0;
if (defined("ICMS_ROOT_PATH")) $modversion['image'] = "images/icon_big.png";
else $modversion['image'] = "images/icon.png";

//about
$modversion['release_date']     = '2013/03/01';
$modversion["module_website_url"] = "geekwright.com";
$modversion["module_website_name"] = "geekwright.com";
$modversion["module_status"] = "Final";
$modversion['min_php']='5.2';
$modversion['min_xoops']='2.5';
$modversion['system_menu'] = 1;

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 0;

// Search
$modversion['hasSearch'] = 0;

// comments
$modversion['hasComments'] = 0;
// notification
$modversion['hasNotification'] = 0;

//$modversion['onInstall'] = 'include/install.php';
//$modversion['onUpdate'] = 'include/update.php';
//$modversion['onUninstall'] = 'include/uninstall.php';
// Config

/*$modversion['config'][1]=array(
  'name' => 'limit_referer',
  'title' => '_MI_SPEECHSEARCH_',
  'description' => '_MI_SPEECHSEARCH__DESC',
  'formtype' => 'yesno',
  'valuetype' => 'int',
  'default' => '1');
*/
// Blocks
$modversion['blocks'][1] = array(
  'file' => 'blocks.php',
  'name' => _MI_SPEECHSEARCH_BLOCK,
  'description' => _MI_SPEECHSEARCH_BLOCK_DESC,
  'show_func' => 'b_speechsearch_show',
  'edit_func' => 'b_speechsearch_edit',
  'options' => 'en-US|1',
  'template' => 'speechsearch_block.html');

// Templates
$modversion['templates'][1]['file'] = 'speechsearch_index.html';
$modversion['templates'][1]['description'] = 'Module Index';

?>
