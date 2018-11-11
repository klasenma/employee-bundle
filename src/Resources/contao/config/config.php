<?php

/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 1, array
(
	'employee' => array
	(
		'tables'      => array('tl_employee'),
		'icon'       => 'bundles/contaoemployee/employee.png'
	)
));


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 2, array
(
	'employee' => array
	(
		'employeelist'    => 'ModuleEmployeeList'
	)
));


$GLOBALS['TL_CSS'][] = 'bundles/contaoemployee/style.css|static';