<?php
/**
 * @version     $Id$ 2.0.0 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<?php 
	// header of the adminForm
	// don't remove this line
	echo $this->getTmplHeader();
?>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td width="50%" valign="top">
			<img src="<?php echo JURI::root().'administrator/components/com_aicontactsafe/images/logo.gif' ;?>" border="0" /><br/>
			<br/>
			<?php echo JText::_( 'AI_DESCRIPTION' ); ?><br/>
			<?php echo JText::_( 'Version' ); ?>&nbsp;<?php echo $this->_version; ?><br/>
			<?php echo JText::_( 'AI_PROGRAMMER' ); ?><br/>
			<br/>
			<div style="margin-left:0px; margin-right:auto; width:120px; height:90px;"><iframe src="http://www.algisinfo.com/donate/" style="width:120px; height:90px; border:0px solid #FFFFFF;"><a href="http://www.algisinfo.com/donate/" target="_blank">You can help us</a></iframe></div>
		</td>
		<td width="50%" valign="top">
			<?php echo JText::_( 'AI_CREDITS' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_CAPTCHA' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_ICONS' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_DANISH' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_GERMAN' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_GREEK' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_ENGLISH' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_ENGLISH_INSTRUCTIONS' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_SPANISH' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_FRENCH' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_ITALIAN' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_DUTCH' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_POLISH' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_BRAZILIAN' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_RUSSIAN' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_SERBIAN_CYRILLIC' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_SWEDISH' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_TURKISH' ); ?><br/>
			<br/>
			<?php echo JText::_( 'AI_CREDITS_UKRAINIAN' ); ?><br/>
			<br/>
			<br/>
		</td>
	</tr>
</table>

<?php 
	// footer of the adminForm
	// don't remove this line
	echo $this->getTmplFooter();
?>
