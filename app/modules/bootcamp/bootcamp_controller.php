<?php 

/**
 * Boot Camp status module class
 *
 * @package munkireport
 * @author
 **/
class Bootcamp_controller extends Module_controller
{
	
	/*** Protect methods with auth! ****/
	function __construct()
	{
		// Store module path
		$this->module_path = dirname(__FILE__);
	}

	/**
	 * Default method
	 *
	 * @author Richard Lafontaine
	 **/
	function index()
	{
		echo "You've loaded the Boot Camp module!";
	}

	
} // END class default_module