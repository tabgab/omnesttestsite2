<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Download Evaluation Version</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>OMNEST Evaluation Download</h1></div>

<?php
// if the form is modified you should modify also the corresponding parser in sugarcrm (modules/Omnst_OppWebForm/OmnetMailParser.php)

error_reporting(0); // turn off all errors and warnings (including notices caused by unfilled form fields)

$download_url = "http://omnest.com/download-eval.php?id=2bef15153a2f7c8";

function maildummy($to, $subject, $message, $additional_headers)
{
    echo "<pre>To: $to\nSubject: $subject\n$additional_headers\n\n===Message===\n$message\n===End===\n</pre>\n";
    return true;
}

// send two e-mails. One to the contact@omnest.com containing all details and an other as a confirmation letter to the user
function send_mails()
{
    global $download_url;
    $destaddr = "eval@omnest.com";
    $eol = "\n";
    $today = date("Y-F-d");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $omnetpp_experience = $_POST['omnetpp_experience'];
    $cpp_experience = $_POST['cpp_experience'];
    $source = $_POST['source'];
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
        'From: '.'=?UTF-8?B?'.base64_encode("OMNEST Evaluation Request on behalf of $name")."?="." <$email>" . $eol .
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
        ($architecture_verification != "" ? "  $architecture_verification". $eol : "") .
        ($performance_modeling != "" ? "  $performance_modeling". $eol : "") .
        ($embedding != "" ? "  $embedding". $eol : "") .
        ($network_simulation != "" ? "  $network_simulation " . $eol : "") .
        ($protocols != "" ? "    Protocols: $protocols". $eol : "") .
        "Newsletter: ".  ($newsletter != "" ? "Yes" : "No") . $eol .
        $eol .
        "Message: $message";

    $from_email = "eval@omnest.com";
    $confirm_headers =
            'MIME-Version: 1.0' . $eol .
            'Content-type: text/plain; charset=UTF-8' . $eol .
            'Content-Transfer-Encoding: 8bit' . $eol .
            'From: '.'=?UTF-8?B?'.base64_encode("OMNEST Eval")."?="." <$from_email>" . $eol .
            'Reply-To: '.'=?UTF-8?B?'.base64_encode("OMNEST Eval")."?="." <$from_email>";

    $confirm_body = "Dear Sir / Madam,"  . $eol . $eol .
    "This is an automatically generated message in response to your request to download and evaluate OMNEST."  . $eol . $eol .
    "Thank you for your interest in the OMNEST Simulation Framework. You can download the evaluation version of the software " .
    "from the link below. Our normal evaluation term is 30 days, during which we will be happy to support you via e-mail. " .
    "If you have questions regarding the software, please write an e-mail to eval@omnest.com" . $eol . $eol .
    "Download link: $download_url" . $eol . $eol .
    "With best regards,"  . $eol .
    "The OMNEST Team" . $eol;

    //dbg: return maildummy($destaddr, "OMNEST Evaluation Request", $body, $headers) && maildummy($email, "OMNEST Evaluation Download", $confirm_body, $confirm_headers);
    return mail($destaddr, "OMNEST Evaluation Request", $body, $headers) && mail($email, "OMNEST Evaluation Download", $confirm_body, $confirm_headers);
}

if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $_POST['email']) < 1) {
    echo "Please press the back button on your browser and provide a valid email address so that we can send you the download location of the evaluation version.";
} else if (strpos($_POST['message'],"http:") !== false) {
    echo ("Urls are not allowed in the message. Thank you for your understanding.");
} else if (!send_mails()) {
    echo ("<b>Unfortunately our backend is not running currently.</b><br>Please contact us directly via email using <b>info at omnest dot com</b> or try again later.");
} else {
    //note: our emails apparently don't always get through to the user's mailbox, so we also display the download URL here
    //echo ("<b>Thank you for your interest in the OMNEST Simulator.</b><br><br>We have sent an e-mail to you containing the download address of the OMNEST Simulator evaluation version.<br>");
    echo ("<b>Thank you for your interest in the OMNEST Simulator.</b><br><br>You can download your evaluation copy from <a href=\"$download_url\">$download_url</a>; we have also sent you an e-mail with this URL.<br>");
} ?>

<?php print_leadout(); ?>
</body>
</html>
