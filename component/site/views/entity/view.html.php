<?php

/**
* @copyright	Copyright (C) 2009 - 2012 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* @package 		@prefix_constant@
* @subpackage	Back-end
* @contact		team@readybytes.in
*/

// no direct access
if(!defined( '_JEXEC' )){
	die( 'Restricted access' );
}

/** 
 * @entity@ Html View
* @author @author@
 */
require_once dirname(__FILE__).'/view.php';
class @prefix@SiteView@entity@ extends @prefix@SiteBaseView@entity@
{	
	public function display()
	{		
		return true;
	}

	public function _basicFormSetup()
	{
		return true;
	}
}
