<?php
/**
 * @version     $Id$ 2.0.1 0
 * @package     Joomla
 * @copyright   Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license     GNU/GPL, see LICENSE.php
 *
 * added/fixed in version 2.0.1
 * - added link to whois.domaintools.com to see more informations about the sender's IP
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<?php 
	// header of the adminForm
	// don't remove this line
	echo $this->getTmplHeader();
?>

<table>
	<tr><td width="100%"><h3><?php echo JText::_( 'Messages' ); ?></h3></td></tr>
	<tr><td>
		<table border="0" cellpadding="0" cellspacing="2">
			<tr>
				<td>
					<?php echo JText::_( 'Name' ); ?>
				</td>
				<td>
					<input type="text" name="filter_string" id="filter_string" value="<?php echo $this->filter_string;?>" class="text_area" onchange="document.adminForm.submit();" title="<?php echo JText::_( 'Filter by name' );?>"/>
				</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>
					<?php echo JText::_( 'Email' ); ?>
				</td>
				<td>
					<input type="text" name="filter_email" id="filter_email" value="<?php echo $this->filter_email;?>" class="text_area" onchange="document.adminForm.submit();" title="<?php echo JText::_( 'Filter by email' );?>"/>
				</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>
					<?php echo JText::_( 'Subject' ); ?>
				</td>
				<td>
					<input type="text" name="filter_subject" id="filter_subject" value="<?php echo $this->filter_subject;?>" class="text_area" onchange="document.adminForm.submit();" title="<?php echo JText::_( 'Filter by subject' );?>"/>
				</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>
					<?php echo JText::_( 'Profile' ); ?>
				</td>
				<td>
					<?php echo $this->filter_profile; ?>
				</td>
				<td>&nbsp;&nbsp;&nbsp;</td>
				<td>
					<button onclick="this.form.submit();"><?php echo JText::_( 'Go' ); ?></button>
					<button onclick="document.getElementById('filter_string').value='';document.getElementById('filter_email').value='';document.getElementById('filter_subject').value='';document.getElementById('filter_profile').value='0';document.getElementById('filter_order').value='';document.getElementById('filter_order_Dir').value='';this.form.submit();"><?php echo JText::_( 'Reset' ); ?></button>
				</td>
			</tr>
		</table>
	</td></tr>
</table>

<table class="adminlist" cellspacing="1">
<thead>
	<tr>
		<th width="1">
			<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->rows); ?>);" />
		</th>
		<th class="title">
			<?php echo JHTML::_('grid.sort', JText::_( 'Name' ), 'name', @$this->filter_order_Dir, @$this->filter_order ); ?>
		</th>
		<th width="120" nowrap="nowrap">
			<?php echo JHTML::_('grid.sort', JText::_( 'Email' ), 'email', @$this->filter_order_Dir, @$this->filter_order ); ?>
		</th>
		<th nowrap="nowrap">
			<?php echo JHTML::_('grid.sort', JText::_( 'Subject' ), 'subject', @$this->filter_order_Dir, @$this->filter_order ); ?>
		</th>
		<th width="80" nowrap="nowrap">
			<?php echo JHTML::_('grid.sort', JText::_( 'Sent to sender' ), 'send_to_sender', @$this->filter_order_Dir, @$this->filter_order ); ?>
		</th>
		<th width="80" nowrap="nowrap">
			<?php echo JHTML::_('grid.sort', JText::_( 'Sender\'s ip' ), 'sender_ip', @$this->filter_order_Dir, @$this->filter_order ); ?>
		</th>
		<th>
			<?php echo JHTML::_('grid.sort', JText::_( 'Profile' ), 'profile', @$this->filter_order_Dir, @$this->filter_order ); ?>
		</th>
		<th>
			<?php echo JHTML::_('grid.sort', JText::_( 'Replyed' ), 'message_reply', @$this->filter_order_Dir, @$this->filter_order ); ?>
		</th>
		<th width="60" nowrap="nowrap">
			<?php echo JHTML::_('grid.sort', JText::_( 'ID' ), 'id', @$this->filter_order_Dir, @$this->filter_order ); ?>
		</th>
		<th align="center" width="80">
			<?php echo JHTML::_('grid.sort', JText::_( 'Date added' ), 'date_added', @$this->filter_order_Dir, @$this->filter_order ); ?>
		</th>
	</tr>
</thead>
<tfoot>
	<tr>
		<td colspan="10">
			<?php echo $this->pageNav->getListFooter(); ?>
		</td>
	</tr>
</tfoot>
<tbody>
	<?php
	if (count($this->rows) == 0) {
	?>
		<tr><td colspan="10" id="no_record">
			<?php echo JText::_( 'No record found !' ); ?>
		</td></tr>
	<?php
	} else {
		$k = 0;
		$i = 0;

		if ($this->_config_values['activate_ip_ban']) {
			// get the array with banned ips
			$ips_banned = explode(';',$this->_config_values['ban_ips']);
			$img_banned = JURI::root().'administrator/components/com_aicontactsafe/images/ip_banned.gif';
		}

		foreach($this->rows as $row) {
			$checked = JHTML::_('grid.id', $i, $row->id, false, 'cid');
			if ($row->send_to_sender) {
				$img = JURI::root().'administrator/components/com_aicontactsafe/images/ok.gif';
				$alt = JText::_( 'Sent to sender' );
			} else {
				$img = JURI::root().'administrator/components/com_aicontactsafe/images/not_ok.gif';
				$alt = JText::_( 'Not sent to sender' );
			}
			if (strlen(trim($row->message_reply)) > 0) {
				$img_reply = JURI::root().'administrator/components/com_aicontactsafe/images/ok.gif';
				$alt_reply = JText::_( 'Replyed' );
			} else {
				$img_reply = JURI::root().'administrator/components/com_aicontactsafe/images/blank.gif';
				$alt_reply = '&nbsp;';
			}
			$ip_banned = '';
			if ($this->_config_values['activate_ip_ban']) {
				// check if the sender's ip is banned
				$sender_ip_arr = explode('.',$row->sender_ip);
				// generate the array with posibile notations of an ip to ban it
				$check_sender_ip = array();
				$check_sender_ip[] = $sender_ip_arr[0].'.'.$sender_ip_arr[1].'.'.$sender_ip_arr[2].'.'.$sender_ip_arr[3];
				$check_sender_ip[] = $sender_ip_arr[0].'.'.$sender_ip_arr[1].'.'.$sender_ip_arr[2].'.*';
				$check_sender_ip[] = $sender_ip_arr[0].'.'.$sender_ip_arr[1].'.*.'.$sender_ip_arr[3];
				$check_sender_ip[] = $sender_ip_arr[0].'.*.'.$sender_ip_arr[2].'.'.$sender_ip_arr[3];
				$check_sender_ip[] = '*.'.$sender_ip_arr[1].'.'.$sender_ip_arr[2].'.'.$sender_ip_arr[3];
				$check_sender_ip[] = $sender_ip_arr[0].'.'.$sender_ip_arr[1].'.*.*';
				$check_sender_ip[] = $sender_ip_arr[0].'.*.'.$sender_ip_arr[2].'.*';
				$check_sender_ip[] = '*.'.$sender_ip_arr[1].'.'.$sender_ip_arr[2].'.*';
				$check_sender_ip[] = $sender_ip_arr[0].'.*.*.'.$sender_ip_arr[3];
				$check_sender_ip[] = '*.'.$sender_ip_arr[1].'.*.'.$sender_ip_arr[3];
				$check_sender_ip[] = '*.*.'.$sender_ip_arr[2].'.'.$sender_ip_arr[3];
				$check_sender_ip[] = $sender_ip_arr[0].'.*.*.*';
				$check_sender_ip[] = '*.'.$sender_ip_arr[1].'.*.*';
				$check_sender_ip[] = '*.*.'.$sender_ip_arr[2].'.*';
				$check_sender_ip[] = '*.*.*.'.$sender_ip_arr[3];
				$check_sender_ip[] = '*.*.*.*';
				$response_array = array_intersect($check_sender_ip,$ips_banned);
				if (count($response_array)>0) {
					$ip_banned = '<div class="ip_banned"><img border="0" src="' . $img_banned . '" alt="' . JText::_( 'Banned' ) . '" title="' . JText::_( 'Banned' ) . '" /></div>';
				}
			}
			?>
			<tr class="row<?php echo $k; ?>">
				<td width="1" align="center"><?php echo $checked; ?></td>
				<td><a href="<?php echo $row->view; ?>" class="aicontactsafe_edit"><?php echo $row->name; ?></a></td>
				<td align="left"><?php echo $row->email; ?></td>
				<td align="left"><?php echo $row->subject; ?></td>
				<td align="center">
					<img src="<?php echo $img;?>" width="16" height="16" border="0" alt="<?php echo $alt; ?>" />
				</td>
				<td align="left"><a class="aiContactSafe" href="http://whois.domaintools.com/<?php echo $row->sender_ip; ?>" target="_blank"><?php echo $row->sender_ip; ?></a>&nbsp;&nbsp;<?php echo $ip_banned; ?></td>
				<td align="left"><?php echo $row->profile; ?></td>
				<td align="center">
					<img src="<?php echo $img_reply;?>" width="16" height="16" border="0" alt="<?php echo $alt_reply; ?>" />
				</td>
				<td align="center"><?php echo $row->id; ?></td>
				<td nowrap="nowrap" align="center">
					<?php echo JHTML::_('date',  $row->date_added, $this->_config_values['date_format'] ); ?>
				</td>
			</tr>
			<?php
			$k = 1 - $k;
			$i += 1;
		}
	}
	?>
</tbody>
</table>

<?php 
	// footer of the adminForm
	// don't remove this line
	echo $this->getTmplFooter();
?>
