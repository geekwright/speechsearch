<?php
/**
 * admin/footer.php
 *
 * @copyright	Geekwright, LLC http://geekwright.com
 * @license	GNU General Public License (GPL)
 * @since	1.0
 * @author	Richard Griffith richard@geekwright.com
 * @package	speechsearch
 *
**/

echo "<div align=\"center\"><a href=\"http://geekwright.com/\" target=\"_blank\"><img src=\"../images/admin/gwlogo-small.png\" alt=\"geekwright\" title=\"geekwright\"></a></div>";
echo "<div align=\"center\"><small><strong>" . $xoopsModule->getVar("name") . "</strong> is maintained by <a class='tooltip' rel='external' href='http://geekwright.com/'>geekwright, LLC</a></small></div>";

if (defined("ICMS_ROOT_PATH")) icms_cp_footer();
else xoops_cp_footer();
?>
