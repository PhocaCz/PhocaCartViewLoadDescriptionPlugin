<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;
jimport( 'joomla.plugin.plugin' );
jimport( 'joomla.filesystem.file');
jimport( 'joomla.html.parameter' );


JLoader::registerPrefix('Phocacart', JPATH_ADMINISTRATOR . '/components/com_phocacart/libraries/phocacart');

class plgPCVLoad_Description extends JPlugin
{
	function __construct(& $subject, $config) {
		parent :: __construct($subject, $config);

	}

	public function PCVonItemsBeforeLoadColumns($context, &$options, $eventData) {
		$options['columns'] = array('a.description', 'a.description_long', 'a.features');
		return true;
	}
	
	public function PCVonCategoryBeforeLoadColumns($context, &$options, $eventData) {
		$options['columns'] = array('a.description', 'a.description_long', 'a.features');
		return true;
	}
	
	public function PCVonCategoriesBeforeLoadColumns($context, &$options, $eventData) {
		//$options['columns'] = array('c.id');
		return true;
	}
	
	public function PCVonItemBeforeLoadColumns($context, &$options, $eventData) {
		//$options['columns'] = array('i.id');
		return true;
	}
	
	public function PCVonProductBeforeLoadColumns($context, &$options, $eventData) {
		//$options['columns'] = array('i.id');
		return true;
	}
	
	public function PCVonProductsBeforeLoadColumns($context, &$options, $eventData) {
		$options['columns'] = array('a.features');
		return true;
	}


}
?>
