<?php
  $PAGE = $HTTP_GET_VARS["page"];
  if (empty($PAGE) || strlen($PAGE)>20 || !ctype_alnum($PAGE)) {
    $PAGE = "home";
  }

  $RIGHT = $HTTP_GET_VARS["right"];
  if (empty($RIGHT) || strlen($RIGHT)>20 || !ctype_alnum($RIGHT)) {
    $RIGHT = "right";
  }
?>

<html>
<head>
	<title>Omnest Global Inc.</title>
	<meta http-equiv=Page-Enter content=blendTrans(Duration=0.2)>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST - an Embeddable Discrete Event Simulator Network" />
	<meta name="keywords" content="embeddable discrete event simulator simulation embedding c++ c open source network"  />
	<link rel="stylesheet" type="text/css" href="common/omnest.css">
	<script type="text/javascript" src="common/script.js"></script>
</head>

<body bgcolor="#d9d9d9">

<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#005e77" height="5">
    	<td width="50%"></td>
    	<td width="850" background="images/front_global_back.jpg"><img src="images/spacer.gif" width="850" height="5" alt=""></td>
    	<td width="50%"></td>
    </tr>

    <tr>
    	<!-- Left Side -->
       	<td valign="top" width="50%">
       		<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
       			<tr>
       				<td background="images/front_sides_back.jpg"><img src="images/spacer.gif" width="1" height="600" alt=""><br></td>
       			</tr>
       			<tr>
       				<td height="100%" bgcolor="#005e77" ></td>
       			</tr>
       		</table>
       	</td>

       	<td valign="top" width="850" background="images/front_global_back.jpg">

       		<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">

       		<!-- Top : Start -->
       		<tr bgcolor="#005e77">

       			<!-- Left Margin -->
       			<td width="25"><img src="images/spacer.gif" width="25" height="1" alt=""><br></td>

       			<!-- Logo & News -->
       			<td bgcolor="#cac9c6" background="images/front_top_logo.gif" width="150" height="110"><img src="images/spacer.gif" width="1" height="1" alt=""></td>

       			<!-- Shell -->
       			<td width="260"><img src="images/spacer.gif" width="260" height="1" alt=""><br></td>

       			<!-- Menu 3 -->
       			<td width="390" align="right" valign="bottom" class="Menu3">
       				<?php include("common/topmenu.php")?>
       				<br><img src="images/spacer.gif" width="1" height="10" alt=""><br>
       			</td>

       			<!-- Right Margin -->
       			<td width="25"><img src="images/spacer.gif" width="25" height="1" alt=""><br></td>

       		</tr>
       		<!-- Top : End -->

       		<!-- Menu : Start -->
       		<tr bgcolor="#000000" >

       			<!-- Left Margin -->
       			<td width="25" background="images/front_menu_back.jpg"><img src="images/spacer.gif" width="1" height="1" alt=""><br></td>

       			<!-- Logo & News -->

       			<td width="150" bgcolor="#cac9c6"><a href="index.php"><img title="OMNEST" src="images/front_menu_logo.gif" width="150" height="45" alt="" border="0"></a></td>

       			<!-- Menu -->
       			<td background="images/front_menu_back.jpg" colspan="2">

       				<?php include("common/mainmenu.php")?>

       			</td>

       			<!-- Slogen -->

       			<!-- Right Margin -->
       			<td width="25" background="images/front_menu_back.jpg"><img src="images/spacer.gif" width="1" height="1" alt=""><br></td>

       		</tr>
       		<!-- Menu : End -->

       		<!-- Body : Start -->
       		<tr>

       			<!-- Left Margin -->
       			<td width="25" background="images/front_mid_back.jpg"></td>

       			<!-- Logo & News -->
       			<td width="150" background="images/front_news_back.jpg" bgcolor="#eaeaea" valign="top">
       			    <img src="images/spacer.gif" width="1" height="50" alt=""><br>
       				<?php include("common/news.php")?>
       			</td>

       			<!-- Shell -->
<!--       			<td width="260" background="images/front_mid_back.jpg"><img src="images/front_shell.jpg" width="260" height="395" alt=""></td> -->
       			<td width="260" height="395" background="images/front_shell.jpg"><img src="images/spacer.gif" width="1" height="1" alt=""></td>

       			<!-- Text -->
       			<td width="390" background="images/front_text_back.jpg">
       				<div class="FrontText">
       				We all search for the prize...<br>
       				In a closed system, the solution is well hidden<br>
       				beneath layers of unyielding skin.<br>
       				Of course, you can keep trying the hard way...<br>
       				<br>
       				<div align="right">
       				<b><i>But wouldn't you rather have it OPEN?</i></b><br>
       				</div>
       				</div>
       				<br>
       			</td>

       			<!-- Right Margin -->
       			<td width="25" background="images/front_mid_back.jpg" valign="bottom"><img title="" src="images/front_tm.jpg" width="25" height="80" alt="TM"></td>

       		</tr>
       		<!-- Body : End -->

       		<!-- Bottom : Start -->
       		<tr valign="top" bgcolor="#005e77" height="100%">

       			<!-- Left Margin plus Logo and News-->
       			<td width="435" colspan="3" background="images/front_global_back.jpg"></td>

       			<!-- Slogen -->
       			<td width="390" height="40" background="images/front_bottom.gif" style="background-repeat: no-repeat;"><img src="images/spacer.gif" width="1" height="1" alt="the OPEN Simulator"></td>

       			<!-- Right Margin -->
       			<td width="25"></td>

       		</tr>
       		<!-- Bottom : End -->


       		</table>

       	</td>

       	<!-- Right Side -->
       	<td valign="top" width="50%">
       		<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
       			<tr>
       				<td background="images/front_sides_back.jpg"><img src="images/spacer.gif" width="1" height="600" alt=""><br></td>
       			</tr>
       			<tr>
       				<td height="100%" bgcolor="#005e77" ></td>
       			</tr>
       		</table>
       	</td>

	</tr>
</table>

</body>
</html>
