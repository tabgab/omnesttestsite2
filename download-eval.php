<?php
error_reporting(0); // turn off warning when id parameter is missing
if ($_GET['id'] != "2bef15153a2f7c8") {
  header("HTTP/1.1 307 Temporary Redirect");
  header("Location: download-eval-request.php");
  exit();
}
?>
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
<?php print_leadin($purchase_menu, __FILE__); ?>

<div id="header"><h1>OMNEST Evaluation Download</h1></div>

<p><b>Please bookmark this page so that you will be able to come back to it later.</b></p>

<p>The evaluation version is a full OMNEST installation, including the simulation
libraries, tools, the IDE, sample simulations and documentation.
You can run and modify all the provided samples and create your own small simulations.
You can also download, install and try OMNeT++ models from the web.</p>

<h2><a name="installer"></a>Windows Installer</h2>

<a class="noicon" href="download/free/omnest-4.5-win32-eval.exe"><img class="left" src="images/misc/download-win-eval.png"/></a>
      <p><tt><a href="download/free/omnest-4.5-win32-eval.exe">omnest-4.5-win32-eval.exe</a></tt>
      &nbsp;&nbsp;&nbsp;&nbsp;<small>(md5sum: 895a90ebe5be886f9f6e0b8b87dfa9e5)</small></p>
      <p>This program installs OMNEST Evaluation on a Windows machine (Windows 8, 7 or XP).
      For compiling models, OMNEST can use a preinstalled copy of Microsoft Visual C++ or
      the bundled <a href='http://mingw.org/' target='_blank'>MinGW</a> compiler.
      </p>

      <small>NOTE: Some antivirus software may raise false alarms for some files in the
      package, especially MinGW-compiled executables. If this causes inconveniences for you,
      select the Visual C++ compiler in the installer, and remove MinGW-related files
      after installation (store/mingw-bin.tgz, mingw/).
      </small>

<div style="clear: both"></div>

<h2>Limitations</h2>

<p>The only limitations of the evaluation version are:</p>

<ul>
 <li>No source code is provided for the simulation kernel.</li>
 <li>Simulations are limited to 10,000,000 events and 1000 modules.</li>
</ul>

<p>If you need an unlimited version of OMNEST for your evaluation,
please <a href="contact.php">contact us</a>.</p>


<!-- Google Code for DEFAULT Conversion Page -->
<script language="JavaScript" type="text/javascript">

<!--
var google_conversion_id = 1067620223;
var google_conversion_language = "en_US";
var google_conversion_format = "1";
var google_conversion_color = "f2f2f2";

if (1) {
  var google_conversion_value = 1;
}

var google_conversion_label = "DEFAULT";
//-->

</script>
<script language="JavaScript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>

<noscript>
<img height=1 width=1 src="http://www.googleadservices.com/pagead/conversion/1067620223/?value=1&label=DEFAULT&script=0">
</noscript>

<?php print_leadout(); ?>
</body>
</html>
