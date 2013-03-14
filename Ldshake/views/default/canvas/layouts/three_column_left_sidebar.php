<?php

	/**
	 * Elgg 3 column left sidebar canvas layout
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 */

?>
<!-- left sidebar -->
<div id="three_column_left_sidebar">

    <?php

    	if (isset($vars['area3'])) echo $vars['area3']; 
     
	?>

</div><!-- /two_column_left_sidebar -->

<!-- main content -->
<div id="three_column_left_sidebar_maincontent">

<?php if (isset($vars['area2'])) echo $vars['area2']; ?>

</div><!-- /two_column_left_sidebar_maincontent -->

<!-- right sidebar -->
<div id="three_column_right_sidebar">

<?php if (isset($vars['area1'])) echo $vars['area1']; ?>

</div><!-- /two_column_right_sidebar -->
