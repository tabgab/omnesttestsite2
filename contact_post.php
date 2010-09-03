<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>OMNEST - The Open Simulator</title>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST Discrete Event Network Simulator" />
	<meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework"  />
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
// if the form is modified you should modify also the corresponding parser in sugarcrm (modules/Omnst_OppWebForm/OmnetMailParser.php)

error_reporting(0); // turn off all errors and warnings (including notices caused by unfilled form fields)

function maildummy($to, $subject, $message, $additional_headers)
{
    echo "<pre>To: $to\nSubject: $subject\n$additional_headers\n\n===Message===\n$message\n===End===\n</pre>\n";
    return true;
}

// send two e-mails. One to the contact@omnest.com containing all details and an other as a confirmation letter to the user
function send_mails()
{
    $destaddr = "contact@omnest.com";
    $eol = "\n";
    $today = date("Y-F-d");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $omnetpp_experience = $_POST['omnetpp_experience'];
    $cpp_experience = $_POST['cpp_experience'];
    $source = $_POST['source'];
    $price_list = $_POST['price_list'];
    $network_simulation = $_POST['network_simulation'];
    $protocols = $_POST['protocols'];
    $architecture_verification = $_POST['architecture_verification'];
    $performance_modeling = $_POST['performance_modeling'];
    $embedding = $_POST['embedding'];
    $message = $_POST['message'];
    $newsletter = $_POST['newsletter'];

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
        "Source: " . $source . $eol .
        $eol .
        "Interested in:". $eol .
        ($price_list != "" ? "  $price_list". $eol : "") .
        ($architecture_verification != "" ? "  $architecture_verification". $eol : "") .
        ($performance_modeling != "" ? "  $performance_modeling". $eol : "") .
        ($embedding != "" ? "  $embedding". $eol : "") .
        ($network_simulation != "" ? "  $network_simulation " . $eol : "") .
        ($protocols != "" ? "    Protocols: $protocols". $eol : "") .
        "Newsletter: ".  ($newsletter != "" ? "Yes" : "No") . $eol .
        $eol .
        "Message: $message";

    $form_email = "info@omnest.com";
    $confirm_headers =
            'MIME-Version: 1.0' . $eol .
            'Content-type: text/plain; charset=UTF-8' . $eol .
            'Content-Transfer-Encoding: 8bit' . $eol .
            'From: '.'=?UTF-8?B?'.base64_encode("OMNEST Contact")."?="." <$form_email>" . $eol .
            'Reply-To: '.'=?UTF-8?B?'.base64_encode("OMNEST Contact")."?="." <$form_email>";

    $confirm_body = "Dear Sir / Madam,". $eol . $eol .
        "This is an automatically generated message to let you know that we have received and processed your request. You will be hearing from us shortly. Thank you for your interest in OMNEST." . $eol . $eol .
        "With best regards,". $eol .
	"The OMNEST Team". $eol;

    //dbg: return maildummy($destaddr, "Omnest web contact", $body, $headers) && maildummy($email, "Contacting OMNEST", $confirm_body, $confirm_headers);
    return mail($destaddr, "Omnest web contact", $body, $headers) && mail($email, "Contacting OMNEST", $confirm_body, $confirm_headers);
}

if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $_POST['email']) < 1) {
    echo "Please provide a valid email address so that we can contact you.";
} else if (!send_mails()) {
    echo ("<b>Unfortunately our backend is not running currently.</b><br>Please contact us directly via email using <b>info at omnest dot com</b>.");
} else {
    echo ("<b>Thank you for your interest in the OMNEST Simulator.</b><br><br>We will get back to you with the requested information.<br>");
} ?>

<br><br>
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
