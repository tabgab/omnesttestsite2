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
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="revisit-after" content="30" />
<meta name="description" content="OMNEST - an Embeddable Discrete Event Simulator Network" />
<meta name="keywords" content="embeddable discrete event simulator simulation embedding c++ c open source network"  />
<link rel="stylesheet" type="text/css" href="common/omnest.css">
<script type="text/javascript" src="common/script.js"></script>
</head>


<body bgcolor="#FFFFFF" text="#000000" link="#00607B" vlink="#808080" alink="#FF0000" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">

<?php include("common/header.php")?>


<!-- BODY : Start -->

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>



<!-- Left In Spacer -->
	<td width="20"><img src="images/pixel.gif" width="20" height="1" alt="" border="0"><br></td>

<!-- MIDDLE : Start -->
<td width="100%" valign="top">
<?php include($PAGE.".html")?>
</td>
<!-- MIDDLE : End -->

<!-- Right In Spacer -->
	<td width="23"><img src="images/pixel.gif" width="23" height="1" alt="" border="0"><br></td>

<?php include("common/".$RIGHT.".php")?>

  </tr>

</table>

<!-- BODY : End -->


<?php include("common/footer.php")?>


</body>
</html>
