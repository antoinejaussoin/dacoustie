<?php
/**
* @version		$Id: toolbar.massmail.html.php 10381 2008-06-01 03:35:53Z pasamio $
* @package		Joomla
* @subpackage	Massmail
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
* @package		Joomla
* @subpackage	Massmail
*/
class TOOLBAR_massmail
{
	/**
	* Draws the menu for a New Contact
	*/
	function _DEFAULT() {

		JToolBarHelper::title( JText::_( 'Mass Mail' ), 'massemail.png' );
		JToolBarHelper::custom('send','send.png','send_f2.png','Send Mail',false);
		JToolBarHelper::cancel();
		JToolBarHelper::preferences('com_massmail', 200);
		JToolBarHelper::help( 'screen.users.massmail' );
	}
}