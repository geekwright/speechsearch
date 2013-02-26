<?php
/**
 * admin - index
 *
 * @copyright	Geekwright, LLC http://geekwright.com
 * @license	GNU General Public License (GPL)
 * @since	1.0
 * @author	Richard Griffith richard@geekwright.com
 * @package	speechsearch
 *
**/

include 'header.php';

	if($xoop25plus) echo $moduleAdmin->addNavigation('index.php') ;
	else adminmenu(1);

	if($xoop25plus) {
		echo $moduleAdmin->renderIndex();
	}
	else { // !$xoop25plus
		echo'<table width="100%" border="0" cellspacing="1" class="outer">';
		echo '<tr><th>'._AM_SPEECHSEARCH_ADMENU_ABOUT.'</th></tr><tr><td width="100%" >';
		echo '<center><br /><b>'. _AM_SPEECHSEARCH_ADMENU_DESC . '</b></center><br />';
		echo '<center>Brought to you by <a href="http://www.geekwright.com/" target="_blank">geekwright, LLC</a></center><br />';
		echo '</td></tr>';
		echo '</table>';
	}
	

include "footer.php";
?>
