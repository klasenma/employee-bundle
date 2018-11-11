<?php

namespace Contao;

use Contao\CoreBundle\Exception\PageNotFoundException;
use Patchwork\Utf8;


/**
 * Front end module
 */
class ModuleEmployeeList extends \Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_employeelist';


	/**
	 * Generate the module
	 */
	protected function compile()
	{
		$this->Template->employee = array();
		$this->Template->empty = $GLOBALS['TL_LANG']['MSC']['emptyList'];

		// Select all employee
		$objEmployee = $this->Database->query("SELECT * FROM tl_employee");
		$this->Template->employee = $objEmployee->fetchAllAssoc();
	}
}
