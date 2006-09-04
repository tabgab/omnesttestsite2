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

<? include("common/top_inc.php"); ?>
	</div>
	<!-- End Main Menu -->

	<div style="clear: both;">

	<!-- Start Content -->
	<div id="content">

			<div id="header"><h1>Contact</h1></div>

<?php
$eol = '\n';
$today = date("Y-F-d");
$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$position = $_POST['position'];
$price_list = $_POST['price_list'];
$network_simulation = $_POST['network_simulation'];
$architecture_verification = $_POST['architecture_verification'];
$discrete_event_simulation = $_POST['discrete_event_simulation'];
$embedding = $_POST['embedding'];
$message = $_POST['message'];
$headers = "From: Omnest web contact form on behalf of $name <$email>\n\r"; 
if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {

  if(mail("contact@omnest.com","Omnest web contact","Name: $name". $eol .
"E-mail: $email". $eol .
"Company: $company". $eol .
"Position: $position". $eol .
"Pricing: $price_list". $eol .
"Interested in:". $eol .
"	$network_simulation". $eol .
"	$architecture_verification". $eol .
"	$discrete_event_simulation". $eol .
"	$embedding". $eol .
"Message: $message", $headers)) {
  	echo ("<b>Thank you for your interest in the OMNEST simulator.</b><br><br>We will get back to you with the requested information.<br>");
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
	<? include("common/right_inc.php"); ?>
	<!-- End Right -->


	</div>

</div>
<!-- End Container -->




<? include("common/footer_inc.php"); ?>



</body>
</html>
