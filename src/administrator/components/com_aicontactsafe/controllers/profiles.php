<?php
/**
 * @version     $Id$ 2.0.1 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// define the default aiContactSafe controller class
class AiContactSafeControllerProfiles extends AiContactSafeController {

	// function to duplicate a profile
	function copyProfile() {
		$model = &$this->getModel( $this->_sTaskModel, '', $this->_parameters );
		$model->copyProfile();
		$link = $model->getReturnLink();
		$msg = JText::_('Profile copied !');
		$msgType = 'message';
		$this->setRedirect($link, $msg, $msgType);
	}

	// function the set the css code
	function setCSS() {
		$model = &$this->getModel( $this->_sTaskModel, '', $this->_parameters );
		$css_code = $model->getCSS();
		echo $css_code;
	}
}

?>
