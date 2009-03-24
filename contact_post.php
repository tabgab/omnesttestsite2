<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Simulcraft Inc.</title>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST - an Embeddable Discrete Event Simulator Network" />
	<meta name="keywords" content="embeddable discrete event simulator simulation embedding c++ c open source network"  />
	<link rel="stylesheet" type="text/css" href="common/omnest.css">

</head>

<body>

<!-- Start Container -->
<div id="container">

<?php include("common/top_inc.php"); ?>
	</div>
	<!-- End Main Menu -->

	<div style="clear: both;">

	<!-- Start Content -->
	<div id="content">
			<div id="header"><h1>Contact</h1></div>

<?php
$eol = "\n";
$today = date("Y-F-d");
$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$position = $_POST['position'];
$omnetpp_experience = $_POST['omnetpp_experience'];
$cpp_experience = $_POST['cpp_experience'];
$price_list = $_POST['price_list'];
$network_simulation = $_POST['network_simulation'];
$protocols = $_POST['protocols'];
$architecture_verification = $_POST['architecture_verification'];
$discrete_event_simulation = $_POST['discrete_event_simulation'];
$embedding = $_POST['embedding'];
$message = $_POST['message'];
$headers = "From: \"Omnest web contact form on behalf of $name\" <$email>\r\n" .
           "Reply-To: \"$name\" <$email>";

if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {

  if(mail("contact@omnest.com","Omnest web contact","Name: $name". $eol .
"E-mail:  $email". $eol .
"Company: $company". $eol .
"Position: $position". $eol .
$eol .
"OMNeT++ experience: ".  $omnetpp_experience . $eol .
"C++ experience: " . $cpp_experience . $eol .
$eol .
"Interested in:". $eol .
"       $price_list". $eol .
"	$architecture_verification". $eol .
"	$discrete_event_simulation". $eol .
"	$embedding". $eol .
"	$network_simulation Protocols: $protocols". $eol .
"Message: $message", $headers)) { ?>
  	<b>Thank you for your interest in the OMNEST simulator.</b><br><br>We will get back to you with the requested information.<br>

<!-- Google Code for LEAD Conversion Page -->
<script language="JavaScript" type="text/javascript">
<!--
var google_conversion_id = 1067620223;
var google_conversion_language = "en_US";
var google_conversion_format = "1";
var google_conversion_color = "f2f2f2";
if (1) {
  var google_conversion_value = 1;
}
var google_conversion_label = "LEAD";
//-->
</script>
<script language="JavaScript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<img height=1 width=1 border=0 src="http://www.googleadservices.com/pagead/conversion/1067620223/?value=1&label=LEAD&script=0">
</noscript>

<?php
  } else {
  	echo ("<b>Unfortunately our backend is not running currently.</b><br>Please contact us directly via email using <b>info at omnest dot com</b>.");
  }

} else {
  echo "Please provide a valid email address so that we can contact you.";
}
?><br><br>
	</div>
	<!-- End Content -->

	<!-- Start Right -->
	<?php include("common/right_inc.php"); ?>
	<!-- End Right -->
	</div>

</div>
<!-- End Container -->
<?php include("common/footer_inc.php"); ?>
</body>
</html>
