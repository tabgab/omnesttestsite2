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
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>OMNEST Evaluation Download</h1></div>

<p><b>Please bookmark this page so that you will be able to come back to it later.</b></p>

<p>Evaluation versions are full OMNEST installations, including the simulation
libraries, tools, the IDE, sample simulations and documentation.
The Evaluation version comes in two flavours, as a Live CD image
and as a Windows installer. You can run and modify all the provided samples and create your own small simulations.
You can also download OMNeT++ models from the web, install and try them.</p>

<h2><a name="livecd"></a>Live CD Image</h2>

      <a href="download/free/omnest41-demo.iso"><img class="left" src="images/misc/download-linux-eval.png"></a>
      <p><a href="download/free/omnest41-demo.iso" ><tt>omnest41-demo.iso</tt></a></p>
      <p>This is a Linux Live CD image that contains a fully functional OMNEST installation.
      You can burn this ISO image to a CD and boot from it, but we recommend that
      you try it in a virtual machine such as
      <a href="http://www.virtualbox.org/" target="_blank">VirtualBox</a> or
      <a href="http://www.vmware.com/products/player/" target="_blank">VMware Player</a>.
      </p>

      <small>NOTE: Set up a new virtual machine with <u>at least 1.5GB</u> system memory and mount
      the downloaded ISO image in the CDROM device. Start the virtual machine.
      This image is a Live CD running only from the system RAM. It will
      not write anything to your hard disk. This means that files written to the
      filesystem will be lost upon shutdown. If you want to keep your files,
      we recommend that you 'suspend' your virtual machine instead of shutting it
      down.</small>

<h2><a name="installer"></a>Windows Installer</h2>

<a href="download/free/omnest-4.1-eval-win32.exe"><img class="left" src="images/misc/download-win-eval.png"/></a>
      <p><tt><a href="download/free/omnest-4.1-eval-win32.exe">omnest-4.1-eval-win32.exe</a></tt></p>
      <p>This is a program that installs OMNEST Evaluation on a 32-bit Windows system (Windows 7, Vista or XP).
      </p>

      <small>NOTE: A C++ compiler and binaries are included for compiling simulation models
      from source (MinGW version of gcc); also included are the simulation libraries for
      various versions of Microsoft Visual C++ (must be preinstalled on your system.)
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
