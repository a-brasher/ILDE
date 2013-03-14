<?php

	/**
	 * Elgg profile submenu links
	 * These sit in the submenu when the profile editing is on view
	 *
     * @file modified by Interactive Technologies Group (GTI)
     * @authors (alpha. order) Abenia, P., Carralero, M.A., Chacón, J., Hernández-Leo, D., Moreno, P..
     * @Copyright (C) 2009-2012, Universitat Pompeu Fabra, Barcelona.
     * @based on:
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 * 
	 */
	 
?>

<ul>
    <li><a href="<?php echo $CONFIG->wwwroot . "mod/profile/edit.php"; ?>"><?php echo elgg_echo('profile:details'); ?></a></li>
    <li><a href="<?php echo $CONFIG->wwwroot."mod/profile/editicon.php"; ?>"><?php echo T("Edit profile icon"); ?></a></li>
    <li><a href="<?php echo $CONFIG->wwwroot."pg/profile/" . $_SESSION['user']->username; ?>"><?php echo elgg_echo('profile:back'); ?></a></li>
</ul>