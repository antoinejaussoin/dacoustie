<?php // no direct access
defined('_JEXEC') or die('Restricted access'); 

$LiveSite = JURI::base();
$messageyn = $params->def('messageyn', 1);
$message = $params->def('message', 1);
$username = $params->def('username', 1);
$password = $params->def('password', 1);
$forgotu = $params->def('forgotu', 1);
$forgotp = $params->def('forgotp', 1);
$name = $params->def('name', 1);
$morebutton	= $params->get( 'morebutton', '' );

?>



<?php if($type == 'logout') : ?>
<form action="index.php" method="post" name="login">
<div style="margin:0 auto;text-align:left;padding-left:10px;margin-top:5px;font-weight:bold">
<?php if ($params->get('greeting')) : ?>


	<?php
	if ( $name == "1" ) { ?>

	<?php echo $user->get('name'); ?>

		<?php
	}
	?>		


	<?php
	if ( $name == "0" ) { ?>

	<?php echo $user->get('username'); ?>

		<?php
	}
	?>	


<?php endif; ?>

	<?php
	if ( $messageyn == "1" ) { ?>

<?php echo $message ?>&nbsp;

		<?php
	}
	?>
	<div id="s5_submit_NA_outer" style="float:left;">
		<input type="submit" name="Submit" class="button" style="margin:0px; margin-bottom:3px" value="<?php echo JText::_( 'Logout'); ?>" />
	</div>

	<input type="hidden" name="option" value="com_user" />
	<input type="hidden" name="task" value="logout" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
</div>
</form>
<?php else : ?>

<div>

<script type="text/javascript" src="<?php echo $LiveSite?>modules/mod_s5_horizontal_login_NA/s5_horizontal_login_NA/s5_effects.js"></script>


<?php
$brr_NA = strtolower($_SERVER['HTTP_USER_AGENT']); // what browser.
if(ereg("msie 6", $brr_NA)) {
$iss_ie6_s5_NA = "yes";
} 
else {
$iss_ie6_s5_NA = "no";
}
?>
<script type="text/javascript">//<![CDATA[
    document.write('<link href="<?php echo $LiveSite?>modules/mod_s5_horizontal_login_NA/s5_horizontal_login_NA/style.css" rel="stylesheet" type="text/css" media="screen" />');
//]]></script>

<?php if ($iss_ie6_s5_NA == "yes") { ?>
<style type="text/css">
	#s5_submit_NA_outer {
	background: url(<?php echo $LiveSite?>/modules/mod_s5_horizontal_login_NA/s5_horizontal_login_NA/s5_na_loginbutton.gif) no-repeat;}
		
		
	.s5_username_NA {
	background: url(<?php echo $LiveSite?>/modules/mod_s5_horizontal_login_NA/s5_horizontal_login_NA/s5_na_input_back.gif) no-repeat;}

</style>
<?php } ?>


<form action="index.php" method="post" name="login" >

	<?php echo $params->get('pretext'); ?>
	
			
			<div style="float:left;height:23px;">
			<div class="s5_username_NA">
				<?php if ($iss_ie6_s5_NA == "yes") { ?>
				<div style="position:absolute;">
				<?php } ?>
					<input onclick="username_clear();" class="inputbox-s5_NA" type="text" name="username" alt="<?php echo JText::_( 'Username' ); ?>" value="<?php echo $username ?>..." size="10" />
				<?php if ($iss_ie6_s5_NA == "yes") { ?>
				</div>
				<?php } ?>
			</div>
			&nbsp;
		</div>
		


		<div style="float:left;height:23px;">
			<div class="s5_username_NA">
				<?php if ($iss_ie6_s5_NA == "yes") { ?>
				<div style="position:absolute;">
				<?php } ?>
					<input type="password" onclick="password_clear();" class="inputbox-s5_NA" name="passwd" size="10" value="<?php echo $password ?>" alt="<?php echo JText::_( 'Password' ); ?>" />
				<?php if ($iss_ie6_s5_NA == "yes") { ?>
				</div>
				<?php } ?>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;
		</div>	

			
		<?php
			if ( $morebutton == "1" ) { ?>
		<div id="s5_morebutton">	
			<?php if ($iss_ie6_s5_NA == "yes") { ?>&nbsp;&nbsp;<?php } ?><a href="javascript:;" onclick="opendiv();">MORE</a>
		</div>
		<?php } ?>
		
		<div style="float:left; margin-top:-2px;">
			<div id="s5_submit_NA_outer">
				<?php if ($iss_ie6_s5_NA == "yes") { ?>
				<div style="position:relative;">
				<?php } ?>
					<input type="submit" id="s5_submit_NA" name="Submit"  value="<?php echo JText::_( 'Login'); ?>" />
				<?php if ($iss_ie6_s5_NA == "yes") { ?>
				</div>
				<?php } ?>
			</div>
       </div>
			
			

			
<div id="s5_opendivoptions">	
			<label for="mod_login_remember">
				<span style="color:#FFFFFF;font-size:11px;">
					<input type="checkbox" name="remember" id="mod_login_remember" style="color:#000000;border:none; margin: 0px" value="yes" alt="<?php echo JText::_( 'Remember me' ); ?>" />
				&nbsp;<label for="mod_login_remember" style="color:#000000;"><?php echo JText::_( 'Remember me' ); ?></label>&nbsp;&nbsp;		
				</span>
			</label>

			
			


			<a href="<?php echo JRoute::_( 'index.php?option=com_user&view=reset' ); ?>">
				<?php echo $forgotp ?>
			</a>

			<a href="<?php echo JRoute::_( 'index.php?option=com_user&view=remind' ); ?>">
				<?php echo $forgotu ?>
			</a>

	<?php
	$usersConfig = &JComponentHelper::getParams( 'com_users' );
	if ($usersConfig->get('allowUserRegistration')) : ?>

			&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo JRoute::_( 'index.php?option=com_user&task=register' ); ?>">
				<?php echo JText::_('Register'); ?>
			</a>

	<?php endif; ?>

	<?php echo $params->get('posttext'); ?>

	<input type="hidden" name="option" value="com_user" />
	<input type="hidden" name="task" value="login" />
	<input type="hidden" name="return" value="<?php echo $return; ?>" />
	<input type="hidden" name="<?php echo JUtility::getToken(); ?>" value="1" />
</div>
</form>
</div>
<?php endif; ?>
