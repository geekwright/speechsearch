<?php
/**
 * index.php - an unused blank main page for speechsearch module
 *
 * @copyright	Geekwright, LLC http://geekwright.com
 * @license	GNU General Public License (GPL)
 * @since	1.0
 * @author	Richard Griffith richard@geekwright.com
 * @package	speechsearch
 **/

include '../../mainfile.php';
$GLOBALS['xoopsOption']['template_main'] = 'speechsearch_index.html';
include(XOOPS_ROOT_PATH."/header.php");

if(isset($body)) $xoopsTpl->assign('body', $body);

include(XOOPS_ROOT_PATH."/footer.php");
?>
