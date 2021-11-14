<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );
define( 'TEMPLATEPATH', dirname(__FILE__) );
/*
-----------------------------------------
new_architect - November 2008 Shape 5 Club Template
-----------------------------------------
Site:      www.shape5.com
Email:     contact@shape5.com
@license:  Copyrighted Commercial Software
@copyright (C) 2008 Shape 5

*/
// Template Configuration    

	$s5_menu = $this->params->get ("xml_s5_menu"); 
	$s5_body_width = $this->params->get ("xml_s5_body_width");
	$s5_left_width = $this->params->get ("xml_s5_left_width");
	$s5_right_width = $this->params->get ("xml_s5_right_width");
	$s5_tooltips = $this->params->get ("xml_s5_tooltips");
	$s5_lytebox = $this->params->get ("xml_s5_lytebox");
	$s5_repeatback = $this->params->get ("xml_s5_repeatback");	
	$s5_colorback = $this->params->get ("xml_s5_colorback");	
	$s5_clr_fix = $this->params->get ("xml_s5_clr_fix");	
	$s5_tab2 = $this->params->get ("xml_s5_tab2");	
	$s5_position = $this->params->get ("xml_s5_position");
	$s5_inset_width = $this->params->get ("xml_s5_inset_width");	
	$s5_inset_height = $this->params->get ("xml_s5_inset_height");
	$s5_inset_position = $this->params->get ("xml_s5_inset_position");
	$s5_tab1  = $this->params->get ("xml_s5_tab1");
	$s5_tab3 = $this->params->get ("xml_s5_tab3");
	$s5_tab3_out = $this->params->get ("xml_s5_tab3_out");
	$s5_registerlink = $this->params->get ("xml_s5_registerlink");

////////////////////////  DO NOT EDITBELOW THIS  ////////////////////////
	
// Middle content calculations
if (!$this->countModules("left") && !$this->countModules("right")) { $s5_mainbody_width = (($s5_body_width) - 2); }
else if ($this->countModules("left") && !$this->countModules("right")) { $s5_mainbody_width = $s5_body_width - ($s5_left_width + 2);}
else if (!$this->countModules("left") && $this->countModules("right")) { $s5_mainbody_width = $s5_body_width - ($s5_right_width + 2);}
else if ($this->countModules("left") && $this->countModules("right")) { $s5_mainbody_width = $s5_body_width - (($s5_left_width + $s5_right_width) + 2); }


// advert 1, 2, and 3 collapse calculations 
if ($this->countModules("advert1") && $this->countModules("advert2")  && $this->countModules("advert3")) { $advert="33"; }
else if ($this->countModules("advert1") && $this->countModules("advert2") && !$this->countModules("advert3")) { $advert="50"; }
else if ($this->countModules("advert1") && !$this->countModules("advert2") && $this->countModules("advert3")) { $advert="50"; }
else if (!$this->countModules("advert1") && $this->countModules("advert2") && $this->countModules("advert3")) { $advert="50"; }
else if ($this->countModules("advert1") && !$this->countModules("advert2") && !$this->countModules("advert3")) { $advert="100"; }
else if (!$this->countModules("advert1") && $this->countModules("advert2") && !$this->countModules("advert3")) { $advert="100"; }
else if (!$this->countModules("advert1") && !$this->countModules("advert2") && $this->countModules("advert3")) { $advert="100"; }

// advert 4, 5, and 6 collapse calculations 
if ($this->countModules("advert4") && $this->countModules("advert5")  && $this->countModules("advert6")) { $advert2="33"; }
else if ($this->countModules("advert4") && $this->countModules("advert5") && !$this->countModules("advert6")) { $advert2="50"; }
else if ($this->countModules("advert4") && !$this->countModules("advert5") && $this->countModules("advert6")) { $advert2="50"; }
else if (!$this->countModules("advert4") && $this->countModules("advert5") && $this->countModules("advert6")) { $advert2="50"; }
else if ($this->countModules("advert4") && !$this->countModules("advert5") && !$this->countModules("advert6")) { $advert2="100"; }
else if (!$this->countModules("advert4") && $this->countModules("advert5") && !$this->countModules("advert6")) { $advert2="100"; }
else if (!$this->countModules("advert4") && !$this->countModules("advert5") && $this->countModules("advert6")) { $advert2="100"; }

//user1 and 2 calculations
if ($this->countModules("user1") && $this->countModules("user2")) { $user23="50"; }
else if (!$this->countModules("user1") && $this->countModules("user2")) { $user23="100";  }
else if ($this->countModules("user1") && !$this->countModules("user2")) { $user23="100";  }

//user3, 4, 5, 6 and 7 calculations
if ($this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7")) { $bottom4="20"; }
else if ($this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && !$this->countModules("user7")) { $bottom4="25"; }
else if ($this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && !$this->countModules("user6") && $this->countModules("user7")) { $bottom4="25"; }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7")) { $bottom4="25"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7")) { $bottom4="25"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7")) { $bottom4="25"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7")) { $bottom4="33";  }
else if ($this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7")) { $bottom4="33";  }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7")) { $bottom4="33";  }
else if ($this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7")) { $bottom4="33";  }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7")) { $bottom4="33";  }
else if (!$this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7")) { $bottom4="33";  }
else if (!$this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && $this->countModules("user6") && $this->countModules("user7")) { $bottom4="33";  }
else if ($this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7")) { $bottom4="33";  }
else if ($this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && $this->countModules("user7")) { $bottom4="33";  }
else if (!$this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7")) { $bottom4="50"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7")) { $bottom4="50"; }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7")) { $bottom4="50"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7")) { $bottom4="50"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7")) { $bottom4="50"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7")) { $bottom4="50"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7")) { $bottom4="50"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7")) { $bottom4="50"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7")) { $bottom4="50"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && $this->countModules("user7")) { $bottom4="50"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7")) { $bottom4="100"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7")) { $bottom4="100"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7")) { $bottom4="100"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7")) { $bottom4="100"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7")) { $bottom4="100"; }


if (($s5_menu  == "1") || ($s5_menu  == "3")){ 
require( TEMPLATEPATH.DS."s5_no_moo_menu.php");
}
else if ($s5_menu  == "2")  {
require( TEMPLATEPATH.DS."s5_suckerfish.php");
}
$menu_name = $this->params->get ("xml_menuname");
$LiveSiteUrl = JURI::base();
$s5_inset_shad_width = 0;
$s5_inset_shad_width = ($s5_inset_width) - 114;

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<jdoc:include type="head" />
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="<?php echo $LiveSiteUrl ?>/templates/new_architect/css/template_css.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $LiveSiteUrl ?>/templates/new_architect/css/editor.css" rel="stylesheet" type="text/css" media="screen" />
<?php if ($s5_lytebox  == "yes") { ?>
<link href="<?php echo $LiveSiteUrl ?>/templates/new_architect/css/lytebox.css" rel="stylesheet" type="text/css" media="screen" />
<?php } ?>
<?php if (($s5_menu  == "1") || ($s5_menu  == "2") || ($s5_menu  == "3") ) { ?>
<link href="<?php echo $LiveSiteUrl ?>/templates/new_architect/css/suckerfish.css" rel="stylesheet" type="text/css" media="screen" />
<?php } ?>
<script type="text/javascript" src="<?php echo $LiveSiteUrl ?>/templates/new_architect/js/s5_effects.js"></script>
<?php if (($s5_menu  == "1") || ($s5_menu  == "2") || ($s5_menu  == "3")) { ?>
<script type="text/javascript" src="<?php echo $LiveSiteUrl ?>/templates/new_architect/js/IEsuckerfish.js"></script>
<?php } ?>
<?php if ($s5_lytebox  == "yes") { ?>
<script type="text/javascript" src="<?php echo $LiveSiteUrl ?>/templates/new_architect/js/lytebox.js"></script>
<?php } ?>

<script type="text/javascript">
var s5_bg = "url(<?php echo $s5_repeatback;?>)";
</script>

<?php
$br = strtolower($_SERVER['HTTP_USER_AGENT']); // what browser.
if(ereg("msie 6", $br)) {
$is_ie6 = "yes";
} 
else {
$is_ie6 = "no";
}

$br = strtolower($_SERVER['HTTP_USER_AGENT']); // what browser.
if(ereg("safari", $br)) {
$is_safari = "yes";
} 
else {
$is_safari = "no";
}

$br = strtolower($_SERVER['HTTP_USER_AGENT']); // what browser.
if(ereg("msie 7", $br)) {
$is_ie7 = "yes";
} 
else {
$is_ie7 = "no";
}
?>


<style type="text/css"> 
#s5_subheaderwrap_spacer2  {
	width:<?php echo ($s5_body_width);?>px;}	
.s5_wrap {
	width:<?php echo ($s5_body_width);?>px;}

#s5_middlemenu {
	width:<?php echo ($s5_body_width) - 26;?>px;}		
	
	.s5_backmiddlemiddle_m {
	width:<?php echo ($s5_mainbody_width) - 0;?>px;}	
	.s5_backmiddleleft_m {
	width:<?php echo ($s5_mainbody_width) - 0;?>px;}	
	.s5_backmiddleright_m {
	width:<?php echo ($s5_mainbody_width) - 0;?>px;}	
#s5_subheaderwrap {
background: <?php echo $s5_colorback; ?> url(<?php echo $s5_repeatback; ?>) repeat-x;}
	
	#s5_footermiddle {
	width:<?php echo ($s5_body_width);?>px;}

</style>
<?php if ($is_ie6 == "yes") { ?>
<style type="text/css"> 
#s5_logo  {
	margin-left:4px;
	background:none;
	}
#s5_shadowleft {
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl ?>/templates/new_architect/images/s5_na_image_bleftshadow.png', sizingmethod='crop');}
#s5_shadowright {
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl ?>/templates/new_architect/images/s5_na_image_brightshadow.png', sizingmethod='crop');}
#s5_shadowmiddle {
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl ?>/templates/new_architect/images/s5_na_image_bmshadow.png', sizingmethod='scale');}
.s5_tab_left {
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl ?>/templates/new_architect/images/s5_na_tab_left.png', sizingmethod='crop');}
.s5_tab_right {
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl ?>/templates/new_architect/images/s5_na_tab_right.png', sizingmethod='crop');}
.s5_tab_middle {
	margin-right:-1px;
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl ?>/templates/new_architect/images/s5_na_tab_middle.png', sizingmethod='scale');}
#s5_boxbottomback {
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl ?>/templates/new_architect/images/s5_s5bottom.png', sizingmethod='crop');}
#s5_boxleftback {
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl ?>/templates/new_architect/images/s5_s5left-37.png', sizingmethod='crop');}
#s5_boxrightback {
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl ?>/templates/new_architect/images/s5_s5right-39.png', sizingmethod='crop');}
#s5_navv ul li ul li, #s5_navv ul li ul li:hover, #s5_navv ul li li.over {
	margin-top:-1px;
		background:none;}
#s5_navv ul li ul li a {
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl ?>/templates/new_architect/images/s5_na_menuitem_back.png', sizingmethod='scale');}
#s5_navv ul li ul li a:hover, #s5_navv ul li ul li a.over {
	background:none;}
#s5_navv ul li.s5_menubottom, #s5_fm_ul0 ul li.s5_menubottom, #s5_navv ul li.s5_menubottom:hover, #s5_fm_ul0 ul li.s5_menubottom:hover  {
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl ?>/templates/new_architect/images/s5_na_menubottom.png', sizingmethod='crop');}
* html #s5_navv ul li.s5_toparrow, * html #s5_navv ul li ul li.s5_toparrow:hover {
	height:7px;
	margin-top:-7px;
	background:transparent url(<?php echo $LiveSiteUrl ?>/templates/new_architect/images/s5_na_menutoparrow.jpg) no-repeat  16pt 7pt;}
	
</style> 
<?php } ?>

</head>
<body id="s5_bodyrepeatback">

<!--

<?php if ($this->countModules("user1") && $this->countModules("user2")) { ?>
<span>Deux modules user1 et user2</span>
<?php } ?>

<?php if (!$this->countModules("user1") && $this->countModules("user2")) { ?>
<span>Module User2 seulement</span>
<?php } ?>

<?php if ($this->countModules("user1") && !$this->countModules("user2")) { ?>
<span>Module User1 seulement</span>
<?php } ?>

-->

<!-- Menu and Search -->
<div id="s5_headerwrap">


	<div class="s5_wrap">
	<?php if (($s5_menu  == "1") || ($s5_menu  == "2") || ($s5_menu  == "3")) { ?>	
	<!-- Start Menu -->
		<div id="s5_menuleft">
		<div id="s5_navv">


					<?php mosShowListMenu($menu_name);	?>
					<?php if ($s5_menu  == "1") { ?>
						<script type="text/javascript" src="<?php echo $LiveSiteUrl ?>/templates/new_architect/js/s5_no_moo_menu.js"></script>																		
					<?php } ?>
					<?php if ($s5_menu  == "3") { ?>
						<script type="text/javascript" src="<?php echo $LiveSiteUrl ?>/templates/new_architect/js/s5_fading_no_moo_menu.js"></script>																		
					<?php } ?>	
					


			</div>	
		</div>
	<!-- End Menu -->
	<?php } ?>
		<?php if($this->countModules('top')) { ?>	
		<div id="s5_menuright">
			<div id="s5_searchbox">
				<jdoc:include type="modules" name="top" style="xhtml" />	
			</div>
		</div>
		<?php } ?>
	</div>


</div>
<!-- End Menu and Search -->

<div id="s5_subheaderwrap_spacer"></div>

<!-- Logo -->
<div id="s5_subheaderwrap" style="<?php if($this->countModules('inset')) { ?>height:<?php echo ($s5_inset_height) + 30;?>px;<?php } ?>">
	<div id="s5_subheaderwrap_spacer2">



		<?php if($this->countModules('cpanel')) { ?>
		<div class="s5_tabs" >
			<div class="s5_tab_left"></div>
				<div class="s5_tab_middle" onclick="shiftOpacity('s5_loginpop');" onmouseover="Tip('Click here to <?php  $user =& JFactory::getUser();  $user_id = $user->get('id');  if ($user_id) { echo $s5_tab3_out;} else {  echo $s5_tab3; }?>.', WIDTH, 140, OPACITY, 80, ABOVE, true, OFFSETX, 1, FADEIN, 200, FADEOUT, 300,SHADOW, true, SHADOWCOLOR, '#000000',SHADOWWIDTH, 2, BGCOLOR, '#000000',BORDERCOLOR, '#000000',FONTCOLOR, '#FFFFFF', PADDING, 9)">
				   	<?php   $user =& JFactory::getUser();  $user_id = $user->get('id');  if ($user_id) { echo $s5_tab3_out; } else { echo $s5_tab3; }?>
				</div>
			<div class="s5_tab_right"></div>
			
			<div id="s5_loginpop">
				<jdoc:include type="modules" name="cpanel" style="xhtml" />	
			</div>
		</div>
		<?php } ?>
		
		<?php  $user =& JFactory::getUser();   
  $user_id = $user->get('id');   
  if ($user_id) { } else { ?>
		<?php if ($s5_tab2 != '') {?>
		<div class="s5_tabs" onclick="window.document.location.href='<?php echo $s5_registerlink;?>'" onmouseover="Tip('Click here to <?php echo $s5_tab2; ?>.', WIDTH, 140, OPACITY, 80, ABOVE, true, OFFSETX, 1, FADEIN, 200, FADEOUT, 300,SHADOW, true, SHADOWCOLOR, '#000000',SHADOWWIDTH, 2, BGCOLOR, '#000000',BORDERCOLOR, '#000000',FONTCOLOR, '#FFFFFF', PADDING, 9)">
			<div class="s5_tab_left"></div>
				<div class="s5_tab_middle">
				  <?php echo $s5_tab2; ?>
				</div>
			<div class="s5_tab_right"></div>
		</div>
		<?php } ?>
		<?php } ?>
		
		
		<?php if($this->countModules('toolbar')) { ?>
		<div class="s5_tabs" onclick="shiftOpacity1('popup_div');shiftOpacity2('popup_outer');show_popup()" onmouseover="Tip('Click here to show the <?php echo $s5_tab1; ?>.', WIDTH, 140, OPACITY, 80, ABOVE, true, OFFSETX, 1, FADEIN, 200, FADEOUT, 300,SHADOW, true, SHADOWCOLOR, '#000000',SHADOWWIDTH, 2, BGCOLOR, '#000000',BORDERCOLOR, '#000000',FONTCOLOR, '#FFFFFF', PADDING, 9)">
			<div class="s5_tab_left"></div>
				<div class="s5_tab_middle">
					 <?php echo $s5_tab1; ?>
				</div>
			<div class="s5_tab_right"></div>
		</div>
		<?php } ?>
		
	</div>
	<div class="s5_wrap">
		<div id="s5_logo" style="cursor:pointer;<?php if ($s5_position == "left") { ?>float:right;<?php } ?>" onclick="window.document.location.href='index.php'"></div>
		<br/>
		<div style="clear:both;"></div>
		<?php if($this->countModules('banner')) { ?>	
		<div id="s5_banner" style="<?php if($this->countModules('inset')) { ?>width:<?php echo $s5_body_width - ($s5_inset_width + 66) ?>px;<?php } ?><?php if ($s5_position == "left") { ?>float:right;<?php } ?>;">
				<jdoc:include type="modules" name="banner" style="rounded" />
			</div>
		<?php } ?>
	</div>
</div>
<!-- End Logo -->



<!-- Main Body -->
<div id="s5_mainbodywrap">
	<div class="s5_wrap">
		<?php if($this->countModules('inset')) { ?>
		<div id="s5_imagefloat" style="left:<?php echo $s5_inset_position?>;<?php if ($s5_position == "left") { ?>margin-left:-<?php echo $s5_inset_width;?>px;<?php } ?>margin-top:-<?php echo $s5_inset_height;?>px;width:<?php echo ($s5_inset_width) + 30;?>px;">
			<div style="background:#E2E1E1;width:<?php echo ($s5_inset_width) + 30;?>px;">
				<div style="width:<?php echo $s5_inset_width;?>px;" id="s5_imageouter">
					<div id="s5_imageinner" style="height:<?php echo $s5_inset_height;?>px;">
						<jdoc:include type="modules" name="inset" style="rounded" />
					</div>
				</div>
				<div id="s5_imagebottommiddle">
					<div id="s5_imagebottomleft"></div>
					<div id="s5_imagebottomright"></div>
				</div>
			</div>	
			<div id="s5_shadowleft"></div>
			<div id="s5_shadowmiddle" style="width:<?php echo $s5_inset_shad_width;?>px;"></div>
			<div id="s5_shadowright"></div>	
		</div>
		<?php } ?>


	
<!-- Start Main Body -->
<?php if($this->countModules('left')) { ?>	
<?php if ($s5_position == "left") { ?>
	<?php if($this->countModules('inset')) { ?>
	<br /><br /><br /><br /><br /><br />
	<?php } ?>
<?php } ?>
<div id="s5_leftcolumn" style="width:<?php echo ($s5_left_width) + 1;?>px;">
		<div class="s5_backmiddlemiddle_l" id="s5_modleft" style="padding-right:14px;">	
				<jdoc:include type="modules" name="left" style="rounded" />
			<div style="clear:both;"></div>		
		</div>
</div>
<?php } ?>

<?php if ($s5_position == "right") { ?>
	<?php if($this->countModules('inset')) { ?>
	<br /><br /><br /><br /><br /><br />
	<?php } ?>
<?php } ?>
	
	<div class="s5_backmiddleright_m" style="float:left;">
		<div class="s5_backmiddlemiddle_m" id="s5_modmiddle">	
				<?php if($this->countModules('user1') || $this->countModules('user2')) { ?>	
					<div id="s5_positions">
								<?php if($this->countModules('user1')) { ?>	
								<div id="s5_user1_<?php echo $user23; ?>">
									<jdoc:include type="modules" name="user1" style="rounded" />
								</div>
								<?php } ?>
								<?php if($this->countModules('user2')) { ?>	
								<div id="s5_user2_<?php echo $user23; ?>">
									<jdoc:include type="modules" name="user2" style="rounded" />
								</div>
							<?php } ?>
					</div>
					<div style="clear:both;"></div>	
				<?php } ?>	
								
		<jdoc:include type="message" />
		<jdoc:include type="component" />
		<div style="clear:both;"></div>
		
		
	<?php if($this->countModules('advert1') || $this->countModules('advert2') || $this->countModules('advert3')) { ?>	
	<!-- Start User 1-3 -->
		<div class="s5_backmiddlemiddle">
						<?php if($this->countModules('advert1')) { ?>	
						<div id="s5_advert1_<?php echo $advert; ?>">
							<jdoc:include type="modules" name="advert1" style="rounded" />	
						</div>
						<?php } ?>
						<?php if($this->countModules('advert2')) { ?>	
						<div id="s5_advert2_<?php echo $advert; ?>">	
							<jdoc:include type="modules" name="advert2" style="rounded" />
						</div>
						<?php } ?>
						<?php if($this->countModules('advert3')) { ?>	
						<div id="s5_advert3_<?php echo $advert; ?>">
							<jdoc:include type="modules" name="advert3" style="rounded" />
						</div>
						<?php } ?>		
				<div style="clear:both;"></div>		
		</div>
	<div style="clear:both;padding-bottom:12px;"></div>
	<!-- EndUser 1-3 -->
	<?php } ?>	
		
		
		
		</div>
	</div>
	
<?php if($this->countModules('right')) { ?>	

<div id="s5_rightcolumn" style="width:<?php echo ($s5_right_width) + 1;?>px;<?php if ($s5_position == "left") { ?>margin-top:-56px;<?php } ?>">
		<div class="s5_backmiddlemiddle_r" id="s5_modright" style="padding-left:14px;">	
			<jdoc:include type="modules" name="right" style="rounded" />
			<div style="clear:both;"></div>
		</div>
</div>	
<?php } ?>
<div style="clear:both;padding-bottom:12px;"></div>
<!-- End Main Body -->
	
	
	
	
<!-- Start User 3-7 -->

	<?php if($this->countModules('user3') || $this->countModules('user4') || $this->countModules('user5') || $this->countModules('user6') || $this->countModules('user7')) { ?>
	<div class="s5_backtopmiddle">
	<div class="s5_backtopleft"></div>
	<div class="s5_backtopright"></div>
	</div>	

	<div style="clear:both;"></div>
	
		<div class="s5_backmiddleleft">
		<div class="s5_backmiddleright">
		<div class="s5_backmiddlemiddle">
		<?php if ($is_ie6 == "yes") { ?>
			<div style="position:relative;">
			<table>
			<?php } ?>
			<?php if($this->countModules('user3')) { ?>	
				<div id="s5_user3_<?php echo $bottom4; ?>">
					<jdoc:include type="modules" name="user3" style="rounded" />
				</div>
			<?php } ?>
			<?php if($this->countModules('user4')) { ?>	
				<div id="s5_user4_<?php echo $bottom4; ?>">
				<jdoc:include type="modules" name="user4" style="rounded" />
				</div>
			<?php } ?>
			<?php if($this->countModules('user5')) { ?>	
				<div id="s5_user5_<?php echo $bottom4; ?>">
				<jdoc:include type="modules" name="user5" style="rounded" />
				</div>
			<?php } ?>
			<?php if($this->countModules('user6')) { ?>	
				<div id="s5_user6_<?php echo $bottom4; ?>">
				<jdoc:include type="modules" name="user6" style="rounded" />
				</div>
			<?php } ?>
			<?php if($this->countModules('user7')) { ?>	
				<div id="s5_user7_<?php echo $bottom4; ?>">
			<jdoc:include type="modules" name="user7" style="rounded" />
				</div>
			<?php } ?>
			<?php if ($is_ie6 == "yes") { ?>
			</table>
			</div>
			<?php } ?>
			
	
		<div style="clear:both;"></div>
		</div>
		</div>
		
		</div>
		
	<div style="clear:both;"></div>
	
	<div class="s5_backbottommiddle">
	<div class="s5_backbottomleft"></div>
	<div class="s5_backbottomright"></div>
	</div>
	
	<div style="clear:both;padding-bottom:22px;"></div>
	<!-- EndUser 3-7 -->
	<?php } ?>	
	
	
		
	</div>
</div>


	
	
<!-- Start Footer -->	
<div class="s5_wrap" style="margin:0 auto;">
	<div style="clear:both;"></div>
	<div id="s5_footerleft"></div>
	<div id="s5_footermiddle">
		<?php if($this->countModules('bottom')) { ?>	
			<div id="s5_footermenu">
				<jdoc:include type="modules" name="bottom" style="xhtml" />	
			</div>
		<?php } ?>
		<div id="s5_footercopyright">
		<?php include("templates/new_architect/footer.php"); ?>
		</div>
	</div>
	<!-- <div id="s5_footerlogo" style="cursor:pointer;" onclick="window.document.location.href='index.php'"></div> -->
	<div id="s5_footerright"></div>
	<div style="clear:both;height:40px;"></div>
</div>
<!-- End Footer -->


<?php if($this->countModules('toolbar')) { ?>
<!-- S5 Box -->
<div onclick="shiftOpacity1('popup_div');shiftOpacity2('popup_outer')" id="popup_outer" style="cursor:pointer;display:none;background:#000000; opacity:.0; <?php if ($is_ie6 == "yes" || $is_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> height: 0px; z-index:80; 
<?php if ($is_ie6 == "yes") { ?>
position:absolute; 
<?php } ?>
<?php if ($is_ie6 == "no") { ?>
position:fixed; 
<?php } ?>
width: 100%; margin: 0px; padding: 0px; left: 0px; top:0px"></div>

<div id="popup_div" style="top:-351px;height:332px;">
<div id="s5_boxleftback"></div>
<div id="s5_boxmiddleback">
<div style="clear:both;height:16px;"></div>
<div id="s5_boxtop">
<jdoc:include type="modules" name="toolbar" style="xhtml" />	

<script type="text/javascript">//<![CDATA[
            document.write('</div>');
            //]]></script>

<div id="s5_boxbottom">
	<div id="close_popup_div" style="cursor:pointer;" onclick="shiftOpacity1('popup_div');shiftOpacity2('popup_outer')">Close</div>
</div>
</div>
<div id="s5_boxrightback"></div>
<div style="clear:both;<?php if ($is_ie6 == "no") { ?>height:0px;<?php } ?>"></div>
<div id="s5_boxbottomback" <?php if ($is_ie6 == "yes") { ?>style="margin-top:-10px;"<?php } ?>></div>
</div>
<!-- End S5 Box -->
<?php } ?>

<?php if (($s5_clr_fix  == "enabled")) { ?>
<script type="text/javascript" src="<?php echo $LiveSiteUrl ?>/templates/new_architect/js/s5_clr_fix.js"></script>
<?php } ?>
<?php if ($s5_tooltips  == "yes") { ?>
<script type="text/javascript" src="<?php echo $LiveSiteUrl ?>/templates/new_architect/js/tooltips.js"></script>
<?php } ?>

</div>					<script type="text/javascript">
						s5_load_bg();
					</script>
  <script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write("\<script src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'>\<\/script>" );
  </script>
  <script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-3229313-1");
	pageTracker._initData();
	pageTracker._trackPageview();
  </script>

</body>
</html>