<?php
/**
 * language - modinfo
 *
 * @copyright	Geekwright, LLC http://geekwright.com
 * @license	GNU General Public License (GPL)
 * @since	1.0
 * @author	Richard Griffith richard@geekwright.com
 * @package	speechsearch
 * @version	$Id$
 */
if (!defined('XOOPS_ROOT_PATH')) die('Root path not defined');
if (!defined('_MI_SPEECHSEARCH_NAME')) {
// Module Info

// The name and description of module
define('_MI_SPEECHSEARCH_NAME', 'Web Speech Search');;
define('_MI_SPEECHSEARCH_DESC', 'Search with Web Speech API Input for XOOPS and ImpressCMS');

// Blocks
define('_MI_SPEECHSEARCH_BLOCK', 'Speech Search');
define('_MI_SPEECHSEARCH_BLOCK_DESC', 'Search with Web Speech API Input Option');

// admin menu
define('_MI_SPEECHSEARCH_HOME', 'Home');
define('_MI_SPEECHSEARCH_HOME_DESC', 'Index');

define('_MI_SPEECHSEARCH_ABOUT', 'About');
define('_MI_SPEECHSEARCH_ABOUT_DESC', 'About Speech Search');
}
?>
