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
	<meta http-equiv=Page-Enter content=blendTrans(Duration=0.1)>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST - an Embeddable Discrete Event Simulator Network" />
	<meta name="keywords" content="embeddable discrete event simulator simulation embedding c++ c open source network"  />
	<link rel="stylesheet" type="text/css" href="common/omnest.css">
	<script type="text/javascript" src="common/script.js"></script>
</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td width="50%"></td>
	<td width="850" background="images/front_global_back.jpg"><img src="images/spacer.gif" width="850" height="20" alt=""><br></td>
	<td width="50%"></td>
</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">

<!-- Top : Start -->
<tr>

	<!-- Left Side -->
	<td width="50%"></td>

	<!-- Left Margin -->
	<td width="25"><img src="images/spacer.gif" width="25" height="1" alt=""><br></td>

	<!-- Logo & News -->
	<td width="150"><img src="images/front_top_logo.gif" width="150" height="110" alt=""><br></td>

	<!-- Shell -->
	<td width="30"><img src="images/spacer.gif" width="30" height="1" alt=""><br></td>

	<!-- Menu 3 -->
	<td width="620" align="right" valign="bottom" class="Menu3">
		<?php include("common/topmenu.php")?>
		<img src="images/spacer.gif" width="620" height="10" alt=""><br>
	</td>

	<!-- Right Margin -->
	<td width="25"><img src="images/spacer.gif" width="25" height="1" alt=""><br></td>

	<!-- Right Side -->
	<td width="50%"></td>

</tr>
<!-- Top : End -->

<!-- Menu : Start -->
<tr>

	<!-- Left Side -->
	<td width="50%" background="images/side_menu_back.jpg"><img src="images/spacer.gif" width="1" height="1" alt=""><br></td>

	<!-- Left Margin -->
	<td width="25" background="images/side_menu_back.jpg"><img src="images/spacer.gif" width="1" height="1" alt=""><br></td>

	<!-- Logo & News -->
	<td width="150"><a href="index.php"><img src="images/side_menu_logo.gif" width="150" height="45" alt="" border="0"></a></td>

	<!-- Menu -->
	<td background="images/side_menu_back.jpg" colspan="2">
		<?php include("common/mainmenu.php")?>
	</td>

	<!-- Slogen -->

	<!-- Right Margin -->
	<td width="25" background="images/side_menu_back.jpg"><img src="images/spacer.gif" width="1" height="1" alt=""><br></td>

	<!-- Right Side -->
	<td width="50%" background="images/side_menu_back.jpg"><img src="images/spacer.gif" width="1" height="1" alt=""><br></td>

</tr>
<!-- Menu : End -->

<!-- Body : Start -->
<tr>

	<!-- Left Side -->
	<td width="50%" bgcolor="#E5E5E5" valign="top">
		<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td background="images/side_over_back.jpg"><img src="images/spacer.gif" width="1" height="50" alt=""><br></td></tr></table>
	</td>

	<!-- Left Margin -->
	<td width="25" bgcolor="#E5E5E5" valign="top"><img src="images/side_over_back.jpg" alt="" width="25" height="50" border="0"><br></td>

	<!-- Logo & News -->
	<td width="150" background="images/side_news_back.jpg" valign="top">
		<img src="images/side_news_top.jpg" width="150" height="50" alt=""><br>
		<img src="images/side_news.jpg" width="150" height="35" alt=""><br>
		<?php include("common/news.php")?>

	</td>

	<!-- Separator -->
	<td bgcolor="E5E5E5" valign="top"><img src="images/side_over_back.jpg" width="30" height="50" alt=""><br></td>

	<!-- Text -->
	<td bgcolor="E5E5E5" valign="top"><img src="images/side_over_back.jpg" width="620" height="50" alt=""><br>

	<div class="content">
	<?php include($PAGE.".html")?>
	</div>
	<br/>

	</td>

	<!-- Right Margin -->
	<td width="25" bgcolor="#E5E5E5" valign="top"><img src="images/side_over_back.jpg" alt="" width="25" height="50" border="0"><br></td>

	<!-- Right Side -->
	<td width="50%" bgcolor="#E5E5E5" valign="top">
		<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td background="images/side_over_back.jpg"><img src="images/spacer.gif" width="1" height="50" alt=""><br></td></tr></table>
	</td>

</tr>
<!-- Body : End -->

<!-- Bottom : Start -->
<tr>

	<!-- Left Side -->
	<td width="50%"></td>

	<!-- Middle -->
	<td width="850" height="110" colspan="5" align="center" valign="top" background="images/front_global_back.jpg">
		<font size="2" color="#C0C0C0" >Copyright &copy; 2004 Omnest Global Inc.</font>

	</td>

	<!-- Right Side -->
	<td width="50%"></td>

</tr>
<!-- Bottom : End -->

</table>

</body>
</html>
