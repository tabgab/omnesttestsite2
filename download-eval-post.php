<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST - an Embeddable Discrete Event Simulator Network" />
	<meta name="keywords" content="embeddable discrete event simulator simulation embedding c++ c open source network"  />
	<link rel="stylesheet" type="text/css" href="common/omnest.css">

	<title>OMNEST Evaluation Download</title>
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

// if the form is modified you should modify also the corresponding parser in sugarcrm (modules/Omnst_OppWebForm/OmnetMailParser.php)

if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
{
    $headers =
        'MIME-Version: 1.0' . $eol .
        'Content-type: text/plain; charset=UTF-8' . $eol .
        'Content-Transfer-Encoding: 8bit' . $eol .
        'From: '.'=?UTF-8?B?'.base64_encode("Omnest web contact form on behalf of $name")."?="." <$email>" . $eol .
        'Reply-To: '.'=?UTF-8?B?'.base64_encode("\"$name\"")."?="." <$email>" . $eol;

    $body =
        "Name: $name". $eol .
        "E-mail:  $email". $eol .
        "Company: $company". $eol .
        "Position: $position". $eol .
        $eol .
        "OMNeT++ experience: ".  $omnetpp_experience . $eol .
        "C++ experience: " . $cpp_experience . $eol .
        "Heard about OMNEST: " . $source . $eol .
        $eol .
        "Interested in:". $eol .
        ($architecture_verification != "" ? "  $architecture_verification". $eol : "") .
        ($discrete_event_simulation != "" ? "  $discrete_event_simulation". $eol : "") .
        ($embedding != "" ? "  $embedding". $eol : "") .
        ($network_simulation != "" ? "  $network_simulation " . $eol : "") .
        ($protocols != "" ? "    Protocols: $protocols". $eol : "") .
        $eol .
        "Problem: $message";

    $destaddr = "eval@omnest.com";

    if(mail($destaddr, "OMNEST Evaluation Request", $body, $headers))
    {
?>
  <div id="header"><h1>Downloading OMNEST Evaluation Version</h1></div>
  <b>Thank you for your interest in the OMNEST simulator.</b><br><br>Please proceed to the <a href="download-eval-2bef15153a2f7c8.php" >Evaluation Download</a> page.<br>

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
        echo ("<div id=\"header\"><h1>Error</h1></div><b>Unfortunately our backend is not running currently.</b><br>Please contact us directly via email using <b>info at omnest dot com</b>.");
    }

} else {
  echo "<div id=\"header\"><h1>Error</h1></div>Please provide a valid email address so that we can contact you if necessary.";
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
