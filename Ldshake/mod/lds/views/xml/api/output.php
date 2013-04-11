<?php
/**
 * Elgg XML output
 * This outputs the api as XML
 *
 * @package Elgg
 * @subpackage Core
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Curverider Ltd
 * @copyright Curverider Ltd 2008
 * @link http://elgg.org/
 *
 */

$result = $vars['result'];
$export = $result->export();

echo '<?xml version="1.0" encoding="UTF-8"?>'."\n";
echo ldshake_array_to_xml($export->result);
