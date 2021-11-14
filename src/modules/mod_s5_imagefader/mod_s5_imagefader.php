<?php
/**
@version 1.0: mod_S5_imagefader
Author: Shape 5 - Professional Template Community
Available for download at www.shape5.com
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

$LiveSite = JURI::base();

$reflection	= $params->get( 'reflection', '' );
$background		= $params->get( 'background', '' );
$pretext		= $params->get( 'pretext', '' );
$tween_time		= $params->get( 'tween_time', '' );
$height		        = $params->get( 'height', '' );
$width   		= $params->get( 'width', '' );
$picture1		= $params->get( 'picture1', '' );
$picture1link		= $params->get( 'picture1link', '' );
$picture1target		= $params->get( 'picture1target', '' );
$picture2		= $params->get( 'picture2', '' );
$picture2link		= $params->get( 'picture2link', '' );
$picture2target		= $params->get( 'picture2target', '' );
$picture3		= $params->get( 'picture3', '' );
$picture3link		= $params->get( 'picture3link', '' );
$picture3target		= $params->get( 'picture3target', '' );
$picture4		= $params->get( 'picture4', '' );
$picture4link		= $params->get( 'picture4link', '' );
$picture4target		= $params->get( 'picture4target', '' );
$picture5		= $params->get( 'picture5', '' );
$picture5link		= $params->get( 'picture5link', '' );
$picture5target		= $params->get( 'picture5target', '' );
$picture6		= $params->get( 'picture6', '' );
$picture6link		= $params->get( 'picture6link', '' );
$picture6target		= $params->get( 'picture6target', '' );
$picture7		= $params->get( 'picture7', '' );
$picture7link		= $params->get( 'picture7link', '' );
$picture7target		= $params->get( 'picture7target', '' );
$picture8		= $params->get( 'picture8', '' );
$picture8link		= $params->get( 'picture8link', '' );
$picture8target		= $params->get( 'picture8target', '' );
$picture9		= $params->get( 'picture9', '' );
$picture9link		= $params->get( 'picture9link', '' );
$picture9target		= $params->get( 'picture9target', '' );
$picture10		= $params->get( 'picture10', '' );
$picture10link		= $params->get( 'picture10link', '' );
$picture10target	= $params->get( 'picture10target', '' );
$display_time   	= $params->get( 'display_time', '' );
$s5_imagefaderstyle = $params->get( 's5_imagefaderstyle', '' );



$tween_time = $tween_time*1000;
$display_time = $display_time*1000;


if ($picture1target == "1") {
$picture1target = "_blank"; }
if ($picture1target == "0") {
$picture1target = "_top"; }
if ($picture2target == "1") {
$picture2target = "_blank"; }
if ($picture2target == "0") {
$picture2target = "_top"; }
if ($picture3target == "1") {
$picture3target = "_blank"; }
if ($picture3target == "0") {
$picture3target = "_top"; }
if ($picture4target == "1") {
$picture4target = "_blank"; }
if ($picture4target == "0") {
$picture4target = "_top"; }
if ($picture5target == "1") {
$picture5target = "_blank"; }
if ($picture5target == "0") {
$picture5target = "_top"; }
if ($picture6target == "1") {
$picture6target = "_blank"; }
if ($picture6target == "0") {
$picture6target = "_top"; }
if ($picture7target == "1") {
$picture7target = "_blank"; }
if ($picture7target == "0") {
$picture7target = "_top"; }
if ($picture8target == "1") {
$picture8target = "_blank"; }
if ($picture8target == "0") {
$picture8target = "_top"; }
if ($picture9target == "1") {
$picture9target = "_blank"; }
if ($picture9target == "0") {
$picture9target = "_top"; }
if ($picture10target == "1") {
$picture10target = "_blank"; }
if ($picture10target == "0") {
$picture10target = "_top"; }


$s5_ifvisible_if = 0;
if ($picture1 != "" && $picture2 == "" && $picture3 == "" && $picture4 == "" && $picture5 == "" && $picture6 == "" && $picture7 == "" && $picture8 == "" && $picture9 == "" && $picture10 == "")  {
$s5_ifvisible_if = 0;}
if ($picture1 != "" && $picture2 != "" && $picture3 == "" && $picture4 == "" && $picture5 == "" && $picture6 == "" && $picture7 == "" && $picture8 == "" && $picture9 == "" && $picture10 == "")  {
$s5_ifvisible_if = 1;} 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 == "" && $picture5 == "" && $picture6 == "" && $picture7 == "" && $picture8 == "" && $picture9 == "" && $picture10 == "")  {
$s5_ifvisible_if = 2;} 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 == "" && $picture6 == "" && $picture7 == "" && $picture8 == "" && $picture9 == "" && $picture10 == "")  {
$s5_ifvisible_if = 3;} 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 != "" && $picture6 == "" && $picture7 == "" && $picture8 == "" && $picture9 == "" && $picture10 == "")  {
$s5_ifvisible_if = 4;} 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 != "" && $picture6 != "" && $picture7 == "" && $picture8 == "" && $picture9 == "" && $picture10 == "")  {
$s5_ifvisible_if = 5;} 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 != "" && $picture6 != "" && $picture7 != "" && $picture8 == "" && $picture9 == "" && $picture10 == "")  {
$s5_ifvisible_if = 6;} 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 != "" && $picture6 != "" && $picture7 != "" && $picture8 != "" && $picture9 == "" && $picture10 == "")  {
$s5_ifvisible_if = 7;} 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 != "" && $picture6 != "" && $picture7 != "" && $picture8 != "" && $picture9 != "" && $picture10 == "")  {
$s5_ifvisible_if = 8;} 
if ($picture1 != "" && $picture2 != "" && $picture3 != "" && $picture4 != "" && $picture5 != "" && $picture6 != "" && $picture7 != "" && $picture8 != "" && $picture9 != "" && $picture10 != "")  {
$s5_ifvisible_if = 9;} 

echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture1_if = '".$picture1."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture2_if = '".$picture2."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture3_if = '".$picture3."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture4_if = '".$picture4."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture5_if = '".$picture5."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture6_if = '".$picture6."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture7_if = '".$picture7."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture8_if = '".$picture8."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture9_if = '".$picture9."';</script>"; 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_picture10_if = '".$picture10."';</script>"; 
   

echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_ifvisible_if = ".$s5_ifvisible_if.";</script>"; 


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


<?php
$br = strtolower($_SERVER['HTTP_USER_AGENT']); // what browser.
if(ereg("msie 7", $br)) {
$iss_ie7 = "yes";
} 
else {
$iss_ie7 = "no";
}
?>



<script type="text/javascript">//<![CDATA[
    document.write('<link href="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/style.css" rel="stylesheet" type="text/css" media="screen" />');
//]]></script>
<?php
echo "<script language=\"javascript\" type=\"text/javascript\" >var display_time = ".$display_time.";</script>";
echo "<script language=\"javascript\" type=\"text/javascript\" >var tween_time = ".$tween_time.";</script>";?>
<script type="text/javascript">//<![CDATA[
    document.write('<style type="text/css">.s5_button_if {background:url(<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/nonactive.png) no-repeat;}</style>');
//]]></script>

<?php if ($iss_ie6 == "yes") { ?>
<script language="javascript" type="text/javascript" src="<?php echo $LiveSite?>modules/mod_s5_imagefader/s5_imagefader/faderie6.js"></script>
<?php } else { ?>
<script language="javascript" type="text/javascript" src="<?php echo $LiveSite?>modules/mod_s5_imagefader/s5_imagefader/fader.js"></script>
<?php } ?>

<?php if ($s5_imagefaderstyle == "0") { ?>





<div style="display:none;">
<?php if ($picture1 != "") { ?>
	<img alt="" src="<?php echo $picture1 ?>"/><?php } ?>
<?php if ($picture2 != "") { ?>
	<img alt="" src="<?php echo $picture2 ?>"/><?php } ?>
<?php if ($picture3 != "") { ?>
	<img alt="" src="<?php echo $picture3 ?>"/><?php } ?>
<?php if ($picture4 != "") { ?>
	<img alt="" src="<?php echo $picture4 ?>"/><?php } ?>
<?php if ($picture5 != "") { ?>
	<img alt="" src="<?php echo $picture5 ?>"/><?php } ?>
<?php if ($picture6 != "") { ?>
	<img alt="" src="<?php echo $picture6 ?>"/><?php } ?>
<?php if ($picture7 != "") { ?>
	<img alt="" src="<?php echo $picture7 ?>"/><?php } ?>
<?php if ($picture8 != "") { ?>
	<img alt="" src="<?php echo $picture8 ?>"/><?php } ?>
<?php if ($picture9 != "") { ?>
	<img alt="" src="<?php echo $picture9 ?>"/><?php } ?>
<?php if ($picture10 != "") { ?>
	<img alt="" src="<?php echo $picture10 ?>"/><?php } ?>
</div>



<div style="height:<?php echo ($height) + 0 ?>px; width:<?php echo ($width) ?>px; overflow:hidden; background:#<?php echo $background ?>">

<div id="s5_wrapper_if" style="position:absolute;z-index:1;overflow:hidden;height:<?php echo ($height) + 0 ?>px; width:<?php echo ($width) ?>px;">

<div style="background-image: url(<?php echo $picture1 ?>);width: <?php echo $width ?>px; height: <?php echo $height ?>px;" id="blenddiv">
  <img src="<?php echo $picture1 ?>" style="border: 0 none; filter: alpha(opacity=0); -moz-opacity: 0; opacity: 0;" id="blendimage" alt="" class="reflect"/>
</div>



<div style="height:20px;margin-top:<?php echo ($height) - 26 ?>px;position:absolute;width:<?php echo ($width) - 5?>px;z-index:2;">
	<?php if ($picture10 != "") { ?>
		<div class="s5_button_if" id="picture9_if" onclick="next_if_10();"></div>
	<?php } ?>	
	<?php if ($picture9 != "") { ?>
		<div class="s5_button_if" id="picture8_if" onclick="next_if_9();"></div>
	<?php } ?>	
	<?php if ($picture8 != "") { ?>
		<div class="s5_button_if" id="picture7_if" onclick="next_if_8();"></div>
	<?php } ?>
	<?php if ($picture7 != "") { ?>
		<div class="s5_button_if" id="picture6_if" onclick="next_if_7();"></div>
	<?php } ?>	
	<?php if ($picture6 != "") { ?>
		<div class="s5_button_if" id="picture5_if" onclick="next_if_6();"></div>
	<?php } ?>
	<?php if ($picture5 != "") { ?>
		<div class="s5_button_if" id="picture4_if" onclick="next_if_5();"></div>
	<?php } ?>
	<?php if ($picture4 != "") { ?>
		<div class="s5_button_if" id="picture3_if" onclick="next_if_4();"></div>
	<?php } ?>
	<?php if ($picture3 != "") { ?>
		<div class="s5_button_if" id="picture2_if" onclick="next_if_3();"></div>
	<?php } ?>
	<?php if ($picture2 != "") { ?>
		<div class="s5_button_if" id="picture1_if" onclick="next_if_2();"></div>
	<?php } ?>
	<div class="s5_button_if" id="picture" onclick="next_if_1();"></div>
</div>

</div>

</div>

<script type="text/javascript">
function picture1_next(id) {
if (s5_thumbchangeon_if == 0) {
<?php if ($picture2 != "") { ?>picture2('picture2');
<?php } else { ?>picture1('picture1'); <?php } ?>}}

function picture2_next(id) {
if (s5_thumbchangeon_if == 0) {
<?php if ($picture3 != "") { ?>picture3('picture3');
<?php } else { ?>picture1('picture1'); <?php } ?>}}

function picture3_next(id) {
if (s5_thumbchangeon_if == 0) {
<?php if ($picture4 != "") { ?>picture4('picture4');
<?php } else { ?>picture1('picture1'); <?php } ?>}}

function picture4_next(id) {
if (s5_thumbchangeon_if == 0) {
<?php if ($picture5 != "") { ?>picture5('picture5');
<?php } else { ?>picture1('picture1'); <?php } ?>}}

function picture5_next(id) {
if (s5_thumbchangeon_if == 0) {
<?php if ($picture6 != "") { ?>picture6('picture6');
<?php } else { ?>picture1('picture1'); <?php } ?>}}

function picture6_next(id) {
if (s5_thumbchangeon_if == 0) {
<?php if ($picture7 != "") { ?>picture7('picture7');
<?php } else { ?>picture1('picture1'); <?php } ?>}}

function picture7_next(id) {
if (s5_thumbchangeon_if == 0) {
<?php if ($picture8 != "") { ?>picture8('picture8');
<?php } else { ?>picture1('picture1'); <?php } ?>}}

function picture8_next(id) {
if (s5_thumbchangeon_if == 0) {
<?php if ($picture9 != "") { ?>picture9('picture9');
<?php } else { ?>picture1('picture1'); <?php } ?>}}

function picture9_next(id) {
if (s5_thumbchangeon_if == 0) {
<?php if ($picture10 != "") { ?>picture10('picture10');
<?php } else { ?>picture1('picture1'); <?php } ?>}}

picture1('picture1');
</script>
<?php } ?>



<?php if ($s5_imagefaderstyle == "1") { ?>

<?php if ($reflection == "0") { ?>
<script language="javascript" type="text/javascript" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/reflection.js"></script>


<div style="height:<?php echo ($height) + 55 ?>px; width:<?php echo $width ?>; overflow:hidden; background:#<?php echo $background ?>">

<?php if ($picture1 != "") { ?>
<div id="picture1" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>px; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($picture1link != "") { ?>
<a href="<?php echo $picture1link ?>" target="<?php echo $picture1target ?>">
<img onclick="window.document.location.href='<?php echo $picture1link ?>'" style="cursor: pointer;border:none;" class="reflect" alt="" src="<?php echo $picture1 ?>" height="<?php echo $height ?>" width="<?php echo $width ?>"></img>
</a>
<?php } ?></div>
<?php } ?>

<?php if ($picture2 != "") { ?>
<div id="picture2" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($picture2link != "") { ?>
<a href="<?php echo $picture2link ?>" target="<?php echo $picture2target ?>">
<?php } ?>
<img onclick="window.document.location.href='<?php echo $picture2link ?>'" style="cursor: pointer;border:none;" class="reflect" alt="" src="<?php echo $picture2 ?>" height="<?php echo $height ?>" width="<?php echo $width ?>"></img>
<?php if ($picture2link != "") { ?>
</a>
<?php } ?></div>
<?php } ?>

<?php if ($picture3 != "") { ?>
<div id="picture3" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($picture3link != "") { ?>
<a href="<?php echo $picture3link ?>" target="<?php echo $picture3target ?>">
<?php } ?>
<img onclick="window.document.location.href='<?php echo $picture3link ?>'" style="cursor: pointer;border:none;" class="reflect" alt="" src="<?php echo $picture3 ?>" height="<?php echo $height ?>" width="<?php echo $width ?>"></img>
<?php if ($picture3link != "") { ?>
</a>
<?php } ?></div>
<?php } ?>

<?php if ($picture4 != "") { ?>
<div id="picture4" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($picture4link != "") { ?>
<a href="<?php echo $picture4link ?>" target="<?php echo $picture4target ?>">
<?php } ?>
<img onclick="window.document.location.href='<?php echo $picture4link ?>'" style="cursor: pointer;border:none;" class="reflect" alt="" src="<?php echo $picture4 ?>" height="<?php echo $height ?>" width="<?php echo $width ?>"></img>
<?php if ($picture4link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>



<?php if ($picture5 != "") { ?>
<div id="picture5" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden; ">
<?php if ($picture5link != "") { ?>
<a href="<?php echo $picture5link ?>" target="<?php echo $picture5target ?>">
<?php } ?>
<img onclick="window.document.location.href='<?php echo $picture5link ?>'" style="cursor: pointer;border:none;" class="reflect" alt="" src="<?php echo $picture5 ?>" height="<?php echo $height ?>" width="<?php echo $width ?>"></img>
<?php if ($picture5link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>



<?php if ($picture6 != "") { ?>
<div id="picture6" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($picture6link != "") { ?>
<a href="<?php echo $picture6link ?>" target="<?php echo $picture6target ?>">
<?php } ?>
<img onclick="window.document.location.href='<?php echo $picture6link ?>'" style="cursor: pointer;border:none;" class="reflect" alt="" src="<?php echo $picture6 ?>" height="<?php echo $height ?>" width="<?php echo $width ?>"></img>
<?php if ($picture6link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>



<?php if ($picture7 != "") { ?>
<div id="picture7" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($picture7link != "") { ?>
<a href="<?php echo $picture7link ?>" target="<?php echo $picture7target ?>">
<?php } ?>
<img onclick="window.document.location.href='<?php echo $picture7link ?>'" style="cursor: pointer;border:none;" class="reflect" alt="" src="<?php echo $picture7 ?>" height="<?php echo $height ?>" width="<?php echo $width ?>"></img>
<?php if ($picture7link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>



<?php if ($picture8 != "") { ?>
<div id="picture8" style="padding:0px; display:block; height:<?php echo ($height) + 55?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($picture8link != "") { ?>
<a href="<?php echo $picture8link ?>" target="<?php echo $picture8target ?>">
<?php } ?>
<img onclick="window.document.location.href='<?php echo $picture8link ?>'" style="cursor: pointer;border:none;" class="reflect" alt="" src="<?php echo $picture8 ?>" height="<?php echo $height ?>" width="<?php echo $width ?>"></img>
<?php if ($picture8link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>


<?php if ($picture9 != "") { ?>
<div id="picture9" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">.
<?php if ($picture9link != "") { ?>
<a href="<?php echo $picture9link ?>" target="<?php echo $picture9target ?>">
<?php } ?>
<img onclick="window.document.location.href='<?php echo $picture9link ?>'" style="cursor: pointer;border:none;" class="reflect" alt="" src="<?php echo $picture9 ?>" height="<?php echo $height ?>" width="<?php echo $width ?>"></img>
<?php if ($picture9link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>


<?php if ($picture10 != "") { ?>
<div id="picture10" style="padding:0px; display:block; height:<?php echo ($height) + 55 ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($picture10link != "") { ?>
<a href="<?php echo $picture10link ?>" target="<?php echo $picture10target ?>">
<?php } ?>
<img onclick="window.document.location.href='<?php echo $picture10link ?>'" style="cursor: pointer;border:none;" class="reflect" alt="" src="<?php echo $picture10 ?>" height="<?php echo $height ?>" width="<?php echo $width ?>"></img>
<?php if ($picture10link != "") { ?>
</a>
<?php } ?>
</div>
<?php } ?>

</div>
<?php }  else {?>


<div style="height:<?php echo $height ?>; width:<?php echo $width ?>; overflow:hidden; background:#<?php echo $background ?>">

<?php if ($picture1 != "") { ?>
<div id="picture1" style="padding:0px; display:none; height:<?php echo $height ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden; background-image: url(<?php echo $picture1 ?>); background-repeat: no-repeat"><?php if ($picture1link != "") { ?><a href="<?php echo $picture1link ?>" target="<?php echo $picture1target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture2 != "") { ?>
<div id="picture2" style="padding:0px; display:none; height:<?php echo $height ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden; background-image: url(<?php echo $picture2 ?>); background-repeat: no-repeat"><?php if ($picture2link != "") { ?><a href="<?php echo $picture2link ?>" target="<?php echo $picture2target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture3 != "") { ?>
<div id="picture3" style="padding:0px; display:none; height:<?php echo $height ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden; background-image: url(<?php echo $picture3 ?>); background-repeat: no-repeat"><?php if ($picture3link != "") { ?><a href="<?php echo $picture3link ?>" target="<?php echo $picture3target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture4 != "") { ?>
<div id="picture4" style="padding:0px; display:none; height:<?php echo $height ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden; background-image: url(<?php echo $picture4 ?>); background-repeat: no-repeat"><?php if ($picture4link != "") { ?><a href="<?php echo $picture4link ?>" target="<?php echo $picture4target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture5 != "") { ?>
<div id="picture5" style="padding:0px; display:none; height:<?php echo $height ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden; background-image: url(<?php echo $picture5 ?>); background-repeat: no-repeat"><?php if ($picture5link != "") { ?><a href="<?php echo $picture5link ?>" target="<?php echo $picture5target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture6 != "") { ?>
<div id="picture6" style="padding:0px; display:none; height:<?php echo $height ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden; background-image: url(<?php echo $picture6 ?>); background-repeat: no-repeat"><?php if ($picture6link != "") { ?><a href="<?php echo $picture6link ?>" target="<?php echo $picture6target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture7 != "") { ?>
<div id="picture7" style="padding:0px; display:none; height:<?php echo $height ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden; background-image: url(<?php echo $picture7 ?>); background-repeat: no-repeat"><?php if ($picture7link != "") { ?><a href="<?php echo $picture7link ?>" target="<?php echo $picture7target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture8 != "") { ?>
<div id="picture8" style="padding:0px; display:none; height:<?php echo $height ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden; background-image: url(<?php echo $picture8 ?>); background-repeat: no-repeat"><?php if ($picture8link != "") { ?><a href="<?php echo $picture8link ?>" target="<?php echo $picture8target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture9 != "") { ?>
<div id="picture9" style="padding:0px; display:none; height:<?php echo $height ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden; background-image: url(<?php echo $picture9 ?>); background-repeat: no-repeat"><?php if ($picture9link != "") { ?><a href="<?php echo $picture9link ?>" target="<?php echo $picture9target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>
<?php if ($picture10 != "") { ?>
<div id="picture10" style="padding:0px; display:none; height:<?php echo $height ?>; opacity:.0; <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden; background-image: url(<?php echo $picture10 ?>); background-repeat: no-repeat"><?php if ($picture10link != "") { ?><a href="<?php echo $picture10link ?>" target="<?php echo $picture10target ?>"><img alt="" style="border:none" src="<?php echo $LiveSite?>/modules/mod_s5_imagefader/s5_imagefader/blank.gif" height="<?php echo $height ?>" width="<?php echo $width ?>"></img></a><?php } ?></div>
<?php } ?>

</div>

<?php }?>


<script type="text/javascript">


function picture1(id) {
        document.getElementById(id).style.display = "block";
	opacity(id, 0, 100, <?php echo $tween_time ?>);
        window.setTimeout('picture1_done()',<?php echo $display_time ?>);
}

function picture1_done(){
	picture1_doneload('picture1');
}

function picture1_doneload(id) {
	opacity(id, 100, 0, <?php echo $tween_time ?>);
        window.setTimeout('picture1_next()',<?php echo $tween_time ?>);
}

function picture1_next(id) {
        document.getElementById('picture1').style.display = "none";
	if (document.getElementById('picture2')) {
		picture2('picture2');
	}
	else {
		picture1('picture1');
	}
}


function picture2(id) {
        document.getElementById(id).style.display = "block";
	opacity(id, 0, 100, <?php echo $tween_time ?>);
        window.setTimeout('picture2_done()',<?php echo $display_time ?>);
}

function picture2_done(){
	picture2_doneload('picture2');
}

function picture2_doneload(id) {
	opacity(id, 100, 0, <?php echo $tween_time ?>);
        window.setTimeout('picture2_next()',<?php echo $tween_time ?>);
}

function picture2_next(id) {
        document.getElementById('picture2').style.display = "none";
	if (document.getElementById('picture3')) {
		picture3('picture3');
	}
	else {
		picture1('picture1');
	}
}


function picture3(id) {
        document.getElementById(id).style.display = "block";
	opacity(id, 0, 100, <?php echo $tween_time ?>);
        window.setTimeout('picture3_done()',<?php echo $display_time ?>);
}

function picture3_done(){
	picture3_doneload('picture3');
}

function picture3_doneload(id) {
	opacity(id, 100, 0, <?php echo $tween_time ?>);
        window.setTimeout('picture3_next()',<?php echo $tween_time ?>);
}

function picture3_next(id) {
        document.getElementById('picture3').style.display = "none";
	if (document.getElementById('picture4')) {
		picture4('picture4');
	}
	else {
		picture1('picture1');
	}
}


function picture4(id) {
        document.getElementById(id).style.display = "block";
	opacity(id, 0, 100, <?php echo $tween_time ?>);
        window.setTimeout('picture4_done()',<?php echo $display_time ?>);
}

function picture4_done(){
	picture4_doneload('picture4');
}

function picture4_doneload(id) {
	opacity(id, 100, 0, <?php echo $tween_time ?>);
        window.setTimeout('picture4_next()',<?php echo $tween_time ?>);
}

function picture4_next(id) {
        document.getElementById('picture4').style.display = "none";
	if (document.getElementById('picture5')) {
		picture5('picture5');
	}
	else {
		picture1('picture1');
	}
}


function picture5(id) {
        document.getElementById(id).style.display = "block";
	opacity(id, 0, 100, <?php echo $tween_time ?>);
        window.setTimeout('picture5_done()',<?php echo $display_time ?>);
}

function picture5_done(){
	picture5_doneload('picture5');
}

function picture5_doneload(id) {
	opacity(id, 100, 0, <?php echo $tween_time ?>);
        window.setTimeout('picture5_next()',<?php echo $tween_time ?>);
}

function picture5_next(id) {
        document.getElementById('picture5').style.display = "none";
	if (document.getElementById('picture6')) {
		picture6('picture6');
	}
	else {
		picture1('picture1');
	}
}


function picture6(id) {
        document.getElementById(id).style.display = "block";
	opacity(id, 0, 100, <?php echo $tween_time ?>);
        window.setTimeout('picture6_done()',<?php echo $display_time ?>);
}

function picture6_done(){
	picture6_doneload('picture6');
}

function picture6_doneload(id) {
	opacity(id, 100, 0, <?php echo $tween_time ?>);
        window.setTimeout('picture6_next()',<?php echo $tween_time ?>);
}

function picture6_next(id) {
        document.getElementById('picture6').style.display = "none";
	if (document.getElementById('picture7')) {
		picture7('picture7');
	}
	else {
		picture1('picture1');
	}
}


function picture7(id) {
        document.getElementById(id).style.display = "block";
	opacity(id, 0, 100, <?php echo $tween_time ?>);
        window.setTimeout('picture7_done()',<?php echo $display_time ?>);
}

function picture7_done(){
	picture7_doneload('picture7');
}

function picture7_doneload(id) {
	opacity(id, 100, 0, <?php echo $tween_time ?>);
        window.setTimeout('picture7_next()',<?php echo $tween_time ?>);
}

function picture7_next(id) {
        document.getElementById('picture7').style.display = "none";
	if (document.getElementById('picture8')) {
		picture8('picture8');
	}
	else {
		picture1('picture1');
	}
}


function picture8(id) {
        document.getElementById(id).style.display = "block";
	opacity(id, 0, 100, <?php echo $tween_time ?>);
        window.setTimeout('picture8_done()',<?php echo $display_time ?>);
}

function picture8_done(){
	picture8_doneload('picture8');
}

function picture8_doneload(id) {
	opacity(id, 100, 0, <?php echo $tween_time ?>);
        window.setTimeout('picture8_next()',<?php echo $tween_time ?>);
}

function picture8_next(id) {
        document.getElementById('picture8').style.display = "none";
	if (document.getElementById('picture9')) {
		picture9('picture9');
	}
	else {
		picture1('picture1');
	}
}


function picture9(id) {
        document.getElementById(id).style.display = "block";
	opacity(id, 0, 100, <?php echo $tween_time ?>);
        window.setTimeout('picture9_done()',<?php echo $display_time ?>);
}

function picture9_done(){
	picture9_doneload('picture9');
}

function picture9_doneload(id) {
	opacity(id, 100, 0, <?php echo $tween_time ?>);
        window.setTimeout('picture9_next()',<?php echo $tween_time ?>);
}

function picture9_next(id) {
        document.getElementById('picture9').style.display = "none";
	if (document.getElementById('picture10')) {
		picture10('picture10');
	}
	else {
		picture1('picture1');
	}
}


function picture10(id) {
        document.getElementById(id).style.display = "block";
	opacity(id, 0, 100, <?php echo $tween_time ?>);
        window.setTimeout('picture10_done()',<?php echo $display_time ?>);
}

function picture10_done(){
	picture10_doneload('picture10');
}

function picture10_doneload(id) {
	opacity(id, 100, 0, <?php echo $tween_time ?>);
        window.setTimeout('picture10_next()',<?php echo $tween_time ?>);
}

function picture10_next(id) {
    document.getElementById('picture10').style.display = "none";
	picture1('picture1');
}



picture1('picture1');

</script>

<?php } ?>