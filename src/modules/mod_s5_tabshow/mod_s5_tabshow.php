<?php
/**
@version 1.0: mod_S5_tabshow
Author: Shape 5 - Professional Template Community
Available for download at www.shape5.com
Copyright Shape 5 LLC
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
$LiveSite = JURI::base();
$pretext		= $params->get( 'pretext', '' );
$height		    = $params->get( 's5_height', '' );
$buttonheight	= $params->get( 's5_buttonheight', '' );
$lineheight		= $params->get( 's5_lineheight', '' );
$text1line		= $params->get( 'text1line', '' );
$text2line		= $params->get( 'text2line', '' );
$text3line		= $params->get( 'text3line', '' );
$text4line		= $params->get( 'text4line', '' );
$text5line		= $params->get( 'text5line', '' );
$text6line		= $params->get( 'text6line', '' );
$text7line		= $params->get( 'text7line', '' );
$text8line		= $params->get( 'text8line', '' );
$text9line		= $params->get( 'text9line', '' );
$text10line		= $params->get( 'text10line', '' );
$s5_buttoncolor = $params->get( 's5_buttoncolor', '' );
$s5_hoverimage = $params->get( 's5_hoverimage', '' );
$s5_hovercolor = $params->get( 's5_hovercolor', '' );
$s5_buttonimage = $params->get( 's5_buttonimage', '' );
$width  = $params->get( 's5_width', '' );
$s5_buttoncolumnwidth = ($width) - 10;
$s5_contentwidth = ($width - $s5_buttoncolumnwidth) - 60;
$s5_aligncolumn = $params->get( 's5_aligncolumn', '' );
$s5_fontcolor = $params->get( 's5_fontcolor', '' );
$s5_javascript = $params->get( 's5_javascript', '' );
$s5_mootoolsmouse = $params->get( 's5_mootoolsmouse', '' );
$s5_effectsani = $params->get( 's5_effectsani', '' );
$s5_effectmouse = $params->get( 's5_effectmouse', '' );


$s5_ifvisible = 0;
if ($text1line != "" && $text2line == "" && $text3line == "" && $text4line == "" && $text5line == "" && $text6line == "" && $text7line == "" && $text8line == "" && $text9line == "" && $text10line == "")  {
$s5_ifvisible = 1;
}
if ($text1line != "" && $text2line != "" && $text3line == "" && $text4line == "" && $text5line == "" && $text6line == "" && $text7line == "" && $text8line == "" && $text9line == "" && $text10line == "")  {
$s5_ifvisible = 2;
} 
if ($text1line != "" && $text2line != "" && $text3line != "" && $text4line == "" && $text5line == "" && $text6line == "" && $text7line == "" && $text8line == "" && $text9line == "" && $text10line == "")  {
$s5_ifvisible = 3;
} 
if ($text1line != "" && $text2line != "" && $text3line != "" && $text4line != "" && $text5line == "" && $text6line == "" && $text7line == "" && $text8line == "" && $text9line == "" && $text10line == "")  {
$s5_ifvisible = 4;
} 
if ($text1line != "" && $text2line != "" && $text3line != "" && $text4line != "" && $text5line != "" && $text6line == "" && $text7line == "" && $text8line == "" && $text9line == "" && $text10line == "")  {
$s5_ifvisible = 5;
} 
if ($text1line != "" && $text2line != "" && $text3line != "" && $text4line != "" && $text5line != "" && $text6line != "" && $text7line == "" && $text8line == "" && $text9line == "" && $text10line == "")  {
$s5_ifvisible = 6;
} 
if ($text1line != "" && $text2line != "" && $text3line != "" && $text4line != "" && $text5line != "" && $text6line != "" && $text7line != "" && $text8line == "" && $text9line == "" && $text10line == "")  {
$s5_ifvisible = 7;
} 
if ($text1line != "" && $text2line != "" && $text3line != "" && $text4line != "" && $text5line != "" && $text6line != "" && $text7line != "" && $text8line != "" && $text9line == "" && $text10line == "")  {
$s5_ifvisible = 8;
} 
if ($text1line != "" && $text2line != "" && $text3line != "" && $text4line != "" && $text5line != "" && $text6line != "" && $text7line != "" && $text8line != "" && $text9line != "" && $text10line == "")  {
$s5_ifvisible = 9;
} 
if ($text1line != "" && $text2line != "" && $text3line != "" && $text4line != "" && $text5line != "" && $text6line != "" && $text7line != "" && $text8line != "" && $text9line != "" && $text10line != "")  {
$s5_ifvisible = 10;
} 

echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_ifvisible = ".$s5_ifvisible.";</script>";

?>

<?php if ($pretext != "") { ?>
<br />
<?php echo $pretext ?>
<br /><br />
<?php } ?>


<?php
$br = strtolower($_SERVER['HTTP_USER_AGENT']); // what browser.
if(ereg("msie 6", $br)) {
$iss_ie6 = "yes";
} 
else {
$iss_ie6 = "no";
}
?>

<?php if ($iss_ie6 == "yes") { ?>
<script type="text/javascript">//<![CDATA[
    document.write('<link href="<?php echo $LiveSite;?>/modules/mod_s5_tabshow/s5_tabshow/stylesie6.css" rel="stylesheet" type="text/css" media="screen" />');
//]]></script><?php } ?>
<?php if ($iss_ie6 == "no") { ?>
<script type="text/javascript">//<![CDATA[
    document.write('<link href="<?php echo $LiveSite;?>/modules/mod_s5_tabshow/s5_tabshow/styles.css" rel="stylesheet" type="text/css" media="screen" />');
//]]></script><?php } ?><script type="text/javascript">//<![CDATA[
    document.write("<style type='text/css'>#s5_button_frame ul li {color:<?php echo $s5_fontcolor ?>;line-height:<?php echo $lineheight ?>;height:<?php echo $buttonheight ?>;background:<?php echo $s5_buttoncolor ?> url(images/tab_nonactive.png) repeat-x;}</style>");
//]]></script><script type="text/javascript">//<![CDATA[
    document.write("<style type='text/css'>#s5_button_frame ul li:hover, #s5_button_frame ul li.over {color:<?php echo $s5_fontcolor ?>;background:<?php echo $s5_hovercolor ?> url(images/tab_active.png) repeat-x;}</style>");
//]]></script>



<?php if ($iss_ie6 == "yes") { ?>	
<script language="javascript" type="text/javascript">

startList = function() {
	var sfElss = document.getElementById("s5navfs").getElementsByTagName("LI");
	for (var ii=0; ii<sfElss.length; ii++) {
		sfElss[ii].onmouseover=function() {
			this.className+=" over";
			this.className+=" sfhover";
		}
		sfElss[ii].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" over\\b"), "");
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");

		}
	}
}
if (window.attachEvent) window.attachEvent("onload", startList);

</script>
<?php } ?>


<?php if ($s5_javascript == "mootools") { ?>
<script type="text/javascript" src="<?php echo $LiveSite?>/modules/mod_s5_tabshow/s5_tabshow/mootoolsv11.js"></script>
<script type="text/javascript" src="<?php echo $LiveSite?>/modules/mod_s5_tabshow/s5_tabshow/iCarousel.js"></script>
<script language="javascript" type="text/javascript" >
window.addEvent("domready", function() {
	var s5Carousel = new iCarousel("s5_button_content", {
		idPrevious: "s5_button_previous",
		idNext: "",
		idToggle: "",
		item: {
			klass: "s5_button_item",
			size: <?php echo ($width) + 4 ?>},
		animation: {
			type: "scroll",
			duration: 1000,
			amount: 1 }
	});
	<?php if ($text1line != "") { ?>
	$("thumb0").addEvent("<?php if ($s5_mootoolsmouse == "click") { ?>click<?php } else {?>mouseover<?php }?>", function(event){new Event(event).stop();s5Carousel.goTo(0)});<?php } ?>	 
	<?php if ($text2line != "") { ?>
	$("thumb1").addEvent("<?php if ($s5_mootoolsmouse == "click") { ?>click<?php } else {?>mouseover<?php }?>", function(event){new Event(event).stop();s5Carousel.goTo(1)});<?php } ?>	 
	<?php if ($text3line != "") { ?>
	$("thumb2").addEvent("<?php if ($s5_mootoolsmouse == "click") { ?>click<?php } else {?>mouseover<?php }?>", function(event){new Event(event).stop();s5Carousel.goTo(2)});<?php } ?>	 
	<?php if ($text4line != "") { ?>
	$("thumb3").addEvent("<?php if ($s5_mootoolsmouse == "click") { ?>click<?php } else {?>mouseover<?php }?>", function(event){new Event(event).stop();s5Carousel.goTo(3)});<?php } ?>	 
	<?php if ($text5line != "") { ?>
	$("thumb4").addEvent("<?php if ($s5_mootoolsmouse == "click") { ?>click<?php } else {?>mouseover<?php }?>", function(event){new Event(event).stop();s5Carousel.goTo(4)});<?php } ?>	 
	<?php if ($text6line != "") { ?>
	$("thumb5").addEvent("<?php if ($s5_mootoolsmouse == "click") { ?>click<?php } else {?>mouseover<?php }?>", function(event){new Event(event).stop();s5Carousel.goTo(5)});<?php } ?>	 
	<?php if ($text7line != "") { ?>
	$("thumb6").addEvent("<?php if ($s5_mootoolsmouse == "click") { ?>click<?php } else {?>mouseover<?php }?>", function(event){new Event(event).stop();s5Carousel.goTo(6)});<?php } ?>	 
	<?php if ($text8line != "") { ?>
	$("thumb7").addEvent("<?php if ($s5_mootoolsmouse == "click") { ?>click<?php } else {?>mouseover<?php }?>", function(event){new Event(event).stop();s5Carousel.goTo(7)});<?php } ?>	 
	<?php if ($text9line != "") { ?>
	$("thumb8").addEvent("<?php if ($s5_mootoolsmouse == "click") { ?>click<?php } else {?>mouseover<?php }?>", function(event){new Event(event).stop();s5Carousel.goTo(8)});<?php } ?>	 
	<?php if ($text10line != "") { ?>
	$("thumb9").addEvent("<?php if ($s5_mootoolsmouse == "click") { ?>click<?php } else {?>mouseover<?php }?>", function(event){new Event(event).stop();s5Carousel.goTo(9)});<?php } ?>
});	
</script>
<?php } ?>	 

<?php if ($s5_javascript == "s5effects") { ?>
<?php if ($s5_effectsani == "snap") { ?>
<script type="text/javascript" src="<?php echo $LiveSite?>/modules/mod_s5_tabshow/s5_tabshow/s5_effects_snap.js"></script>
<?php } ?>	

<?php if ($s5_effectsani == "fade") { ?>
<script type="text/javascript" src="<?php echo $LiveSite?>/modules/mod_s5_tabshow/s5_tabshow/s5_effects_fade.js"></script>
<?php } ?>	
<?php } ?>	 
		


<div style="width:<?php echo ($width) + 10?>px;height:32px;position:relative;top:8px;z-index:2;">
	<div id="s5_button_frame">  
       <ul id="s5navfs">  	 
		<?php if ($text1line != "") { ?>
             <li id="thumb0" style="color:<?php echo $s5_fontcolor ?>;" <?php if ($s5_javascript == "s5effects") { ?><?php if ($s5_effectmouse == "click") { ?>onclick<?php } else {?>onmouseover<?php }?>="<?php if ($s5_effectsani == "fade") { ?>s5thumb0op();shiftOpacity_ts('s5_button_item1');<?php } ?>s5thumb0();"<?php } ?>><a href="#"><?php echo $text1line ?></a></li>  
		<?php } ?>  
		<?php if ($text2line != "") { ?>
			<li id="thumb1" <?php if ($s5_javascript == "s5effects") { ?><?php if ($s5_effectmouse == "click") { ?>onclick<?php } else {?>onmouseover<?php }?>="<?php if ($s5_effectsani == "fade") { ?>s5thumb1op();shiftOpacity_ts('s5_button_item2');<?php } ?>s5thumb1();"<?php } ?>><a href="#"><?php echo $text2line ?></a></li>  
        <?php } ?>
		<?php if ($text3line != "") { ?>
			<li id="thumb2" <?php if ($s5_javascript == "s5effects") { ?><?php if ($s5_effectmouse == "click") { ?>onclick<?php } else {?>onmouseover<?php }?>="<?php if ($s5_effectsani == "fade") { ?>s5thumb2op();shiftOpacity_ts('s5_button_item3');<?php } ?>s5thumb2();"<?php } ?>><a href="#"><?php echo $text3line ?></a></li>  
        <?php } ?>
		<?php if ($text4line != "") { ?> 
			<li id="thumb3" <?php if ($s5_javascript == "s5effects") { ?><?php if ($s5_effectmouse == "click") { ?>onclick<?php } else {?>onmouseover<?php }?>="<?php if ($s5_effectsani == "fade") { ?>s5thumb3op();shiftOpacity_ts('s5_button_item4');<?php } ?>s5thumb3();"<?php } ?>><a href="#"><?php echo $text4line ?></a></li>  
        <?php } ?>
		<?php if ($text5line != "") { ?>
			<li id="thumb4" <?php if ($s5_javascript == "s5effects") { ?><?php if ($s5_effectmouse == "click") { ?>onclick<?php } else {?>onmouseover<?php }?>="<?php if ($s5_effectsani == "fade") { ?>s5thumb4op();shiftOpacity_ts('s5_button_item5');<?php } ?>s5thumb4();"<?php } ?>><a href="#"><?php echo $text5line ?></a></li>  
        <?php } ?>
		<?php if ($text6line != "") { ?>
			<li id="thumb5" <?php if ($s5_javascript == "s5effects") { ?><?php if ($s5_effectmouse == "click") { ?>onclick<?php } else {?>onmouseover<?php }?>="<?php if ($s5_effectsani == "fade") { ?>s5thumb5op();shiftOpacity_ts('s5_button_item6');<?php } ?>s5thumb5();"<?php } ?>><a href="#"><?php echo $text6line ?></a></li>  
        <?php } ?>
		<?php if ($text7line != "") { ?> 
			<li id="thumb6" <?php if ($s5_javascript == "s5effects") { ?><?php if ($s5_effectmouse == "click") { ?>onclick<?php } else {?>onmouseover<?php }?>="<?php if ($s5_effectsani == "fade") { ?>s5thumb6op();shiftOpacity_ts('s5_button_item7');<?php } ?>s5thumb6();"<?php } ?>><a href="#"><?php echo $text7line ?></a></li>  
		<?php } ?>
		<?php if ($text8line != "") { ?>
			<li id="thumb7" <?php if ($s5_javascript == "s5effects") { ?><?php if ($s5_effectmouse == "click") { ?>onclick<?php } else {?>onmouseover<?php }?>="<?php if ($s5_effectsani == "fade") { ?>s5thumb7op();shiftOpacity_ts('s5_button_item8');<?php } ?>s5thumb7();"<?php } ?>><a href="#"><?php echo $text8line ?></a></li>  
		<?php } ?>
		<?php if ($text9line != "") { ?>
			<li id="thumb8" <?php if ($s5_javascript == "s5effects") { ?><?php if ($s5_effectmouse == "click") { ?>onclick<?php } else {?>onmouseover<?php }?>="<?php if ($s5_effectsani == "fade") { ?>s5thumb8op();shiftOpacity_ts('s5_button_item9');<?php } ?>s5thumb8();"<?php } ?>><a href="#"><?php echo $text9line ?></a></li>  
		<?php } ?>
		<?php if ($text10line != "") { ?>
			<li id="thumb9" <?php if ($s5_javascript == "s5effects") { ?><?php if ($s5_effectmouse == "click") { ?>onclick<?php } else {?>onmouseover<?php }?>="<?php if ($s5_effectsani == "fade") { ?>s5thumb9op();shiftOpacity_ts('s5_button_item10');<?php } ?>s5thumb9();"<?php } ?>><a href="#"><?php echo $text10line ?></a></li>  
        <?php } ?>
		</ul>  
     </div>  
</div>


<div id="s5_buttonswrap_ts">
<div id="s5_tabshow_topleft"></div>
<div id="s5_tabshow_topmiddle" style="width:<?php echo ($width) + 0 ?>px;"></div>
<div id="s5_tabshow_topright"></div>
</div>
<div style="clear:both;"></div>

<div id="s5_tabshow_left" style="width:<?php echo ($width) + 0 ?>px;">
<div id="s5_tabshow_right" style="width:<?php echo ($width) + 5 ?>px;">
	<div style="width:<?php echo $width ?>px;height:<?php echo $height ?>;overflow:hidden;">
	 <div id="s5_button" style="width:<?php echo $width ?>px;height:<?php echo $height ?>;">  
	     <ul id="s5_button_content">  
			<?php if ($text1line != "") { ?>
				<li class="s5_button_item" <?php if ($s5_javascript == "s5effects") { ?>id="s5_button_item1" style="left:0px;display:block;"<?php } ?>><div style="width:<?php echo$width ?>px;height:<?php echo $height ?>;padding:6px;"><?php
$myblurb_modules = &JModuleHelper::getModules( 's5_tab1' );
foreach ($myblurb_modules as $myblurb) {
$_options = array( 'style' => 'xhtml' );
echo JModuleHelper::renderModule( $myblurb, $_options );
}
?></div> </li> 
			<?php } ?>
			<?php if ($text2line != "") { ?>		 
				<li class="s5_button_item" <?php if ($s5_javascript == "s5effects") { ?>id="s5_button_item2" style="<?php if ($s5_effectsani == "fade") { ?>opacity:.0; <?php if ($is_ie6 == "yes" || $is_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?><?php } ?>left:0px;display:none;"<?php } ?>><div style="width:<?php echo ($width) - 12 ?>px;height:<?php echo $height ?>;padding:6px;"><?php
$myblurb_modules = &JModuleHelper::getModules( 's5_tab2' );
foreach ($myblurb_modules as $myblurb) {
$_options = array( 'style' => 'xhtml' );
echo JModuleHelper::renderModule( $myblurb, $_options );
}
?></div></li>  
			<?php } ?>
			<?php if ($text3line != "") { ?>        
				<li class="s5_button_item" <?php if ($s5_javascript == "s5effects") { ?>id="s5_button_item3" style="<?php if ($s5_effectsani == "fade") { ?>opacity:.0; <?php if ($is_ie6 == "yes" || $is_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?><?php } ?>left:0px;display:none;"<?php } ?>><div style="width:<?php echo ($width) - 12?>px;height:<?php echo $height ?>;padding:6px;"><?php
$myblurb_modules = &JModuleHelper::getModules( 's5_tab3' );
foreach ($myblurb_modules as $myblurb) {
$_options = array( 'style' => 'xhtml' );
echo JModuleHelper::renderModule( $myblurb, $_options );
}
?></div></li>  
			<?php } ?>
			<?php if ($text4line != "") { ?>        
				<li class="s5_button_item" <?php if ($s5_javascript == "s5effects") { ?>id="s5_button_item4" style="<?php if ($s5_effectsani == "fade") { ?>opacity:.0; <?php if ($is_ie6 == "yes" || $is_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?><?php } ?>left:0px;display:none;"<?php } ?>><div style="width:<?php echo ($width) - 12 ?>px;height:<?php echo $height ?>;padding:6px;"><?php
$myblurb_modules = &JModuleHelper::getModules( 's5_tab4' );
foreach ($myblurb_modules as $myblurb) {
$_options = array( 'style' => 'xhtml' );
echo JModuleHelper::renderModule( $myblurb, $_options );
}
?></div></li>  
			<?php } ?>
			<?php if ($text5line != "") { ?>        
				<li class="s5_button_item" <?php if ($s5_javascript == "s5effects") { ?>id="s5_button_item5" style="<?php if ($s5_effectsani == "fade") { ?>opacity:.0; <?php if ($is_ie6 == "yes" || $is_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?><?php } ?>left:0px;display:none;"<?php } ?>><div style="width:<?php echo ($width) - 12 ?>px;height:<?php echo $height ?>;padding:6px;"><?php
$myblurb_modules = &JModuleHelper::getModules( 's5_tab5' );
foreach ($myblurb_modules as $myblurb) {
$_options = array( 'style' => 'xhtml' );
echo JModuleHelper::renderModule( $myblurb, $_options );
}
?></div></li>  
			<?php } ?>
			<?php if ($text6line != "") { ?>        
				<li class="s5_button_item" <?php if ($s5_javascript == "s5effects") { ?>id="s5_button_item6" style="<?php if ($s5_effectsani == "fade") { ?>opacity:.0; <?php if ($is_ie6 == "yes" || $is_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?><?php } ?>left:0px;display:none;"<?php } ?>><div style="width:<?php echo ($width) - 12 ?>px;height:<?php echo $height ?>;padding:6px;"><?php
$myblurb_modules = &JModuleHelper::getModules( 's5_tab6' );
foreach ($myblurb_modules as $myblurb) {
$_options = array( 'style' => 'xhtml' );
echo JModuleHelper::renderModule( $myblurb, $_options );
}
?></div></li>  
			<?php } ?>
			<?php if ($text7line != "") { ?>        
				<li class="s5_button_item" <?php if ($s5_javascript == "s5effects") { ?>id="s5_button_item7" style="<?php if ($s5_effectsani == "fade") { ?>opacity:.0; <?php if ($is_ie6 == "yes" || $is_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?><?php } ?>left:0px;display:none;"<?php } ?>><div style="width:<?php echo ($width) - 12?>px;height:<?php echo $height ?>;padding:6px;"><?php
$myblurb_modules = &JModuleHelper::getModules( 's5_tab7' );
foreach ($myblurb_modules as $myblurb) {
$_options = array( 'style' => 'xhtml' );
echo JModuleHelper::renderModule( $myblurb, $_options );
}
?></div></li>  
			<?php } ?>
			<?php if ($text8line != "") { ?>		
				<li class="s5_button_item" <?php if ($s5_javascript == "s5effects") { ?>id="s5_button_item8" style="<?php if ($s5_effectsani == "fade") { ?>opacity:.0; <?php if ($is_ie6 == "yes" || $is_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?><?php } ?>left:0px;display:none;"<?php } ?>><div style="width:<?php echo ($width) - 12 ?>px;height:<?php echo $height ?>;padding:6px;"><?php
$myblurb_modules = &JModuleHelper::getModules( 's5_tab8' );
foreach ($myblurb_modules as $myblurb) {
$_options = array( 'style' => 'xhtml' );
echo JModuleHelper::renderModule( $myblurb, $_options );
}
?></div></li>  
			<?php } ?>
			<?php if ($text9line != "") { ?>		
				<li class="s5_button_item" <?php if ($s5_javascript == "s5effects") { ?>id="s5_button_item9" style="<?php if ($s5_effectsani == "fade") { ?>opacity:.0; <?php if ($is_ie6 == "yes" || $is_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?><?php } ?>left:0px;display:none;"<?php } ?>><div style="width:<?php echo ($width) - 12 ?>px;height:<?php echo $height ?>;padding:6px;"><?php
$myblurb_modules = &JModuleHelper::getModules( 's5_tab9' );
foreach ($myblurb_modules as $myblurb) {
$_options = array( 'style' => 'xhtml' );
echo JModuleHelper::renderModule( $myblurb, $_options );
}
?></div></li>  
			<?php } ?>
			<?php if ($text10line != "") { ?>		
				<li class="s5_button_item" <?php if ($s5_javascript == "s5effects") { ?>id="s5_button_item10" style="<?php if ($s5_effectsani == "fade") { ?>opacity:.0; <?php if ($is_ie6 == "yes" || $is_ie7 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?><?php } ?>left:0px;display:none;"<?php } ?>><div style="width:<?php echo ($width) - 12 ?>px;height:<?php echo $height ?>;padding:6px;"><?php
$myblurb_modules = &JModuleHelper::getModules( 's5_tab10' );
foreach ($myblurb_modules as $myblurb) {
$_options = array( 'style' => 'xhtml' );
echo JModuleHelper::renderModule( $myblurb, $_options );
}
?></div></li>  
			<?php } ?>
	     </ul>  
	 </div>
	</div>
</div>
</div>

<div id="s5_tabshow_bottomleft"></div>
<div id="s5_tabshow_bottommiddle" style="width:<?php echo ($width) - 7 ?>px;"></div>
<div id="s5_tabshow_bottomright"></div>


