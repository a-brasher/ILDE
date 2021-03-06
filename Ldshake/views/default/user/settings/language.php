<?php
	/**
	 * Provide a way of setting your language prefs
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */

	global $CONFIG;
	$user = page_owner_entity();
	
	if ($user) {
?>
	<h3><?php echo T("Language settings"); ?></h3>
	<p>
	
		<?php echo T("Your language"); ?>: <?php

			$value = $CONFIG->language;
			if ($user->language)
				$value = $user->language;
			
			echo elgg_view("input/pulldown", array('internalname' => 'language', 'value' => $value, 'options_values' => get_installed_translations()));
		
		 ?> 

	</p>

<?php } ?>