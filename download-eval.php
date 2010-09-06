<?php
error_reporting(0); // turn off warning when id parameter is missing
if ($_GET['id'] != "2bef15153a2f7c8") {
  header("HTTP/1.1 307 Temporary Redirect");
  header("Location: download-eval-request.php");
  exit();
}
?>
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


<div id="header"><h1>OMNEST Evaluation Download</h1></div>

<p>Evaluation versions are full OMNEST installations, including the simulation
libraries, tools, the IDE, sample simulations and documentation.</p>

<p>Limitations:</p>

<ul>
 <li>No source code is provided for the simulation kernel.</li>
 <li>Simulations are limited to 10,000,000 events and 1000 modules.</li>
</ul>

<p>The Evaluation version comes in two flavours:
<a href="#livecd">Live CD image</a> and
<a href="#installer">Windows installer</a>.</p>

<p><b>Please bookmark this page so that you will be able to come back to it later.</b></p>

<p>If you need an unlimited version of OMNEST for your evaluation, please <a href="contact.php">contact us</a>.</p>

<h1><a name="livecd"></a>Live CD Image</h1>

<p>This download is a Linux Live CD image that contains a fully functional OMNEST installation.
You can run and modify all the provided samples and create your own small simulations.
You can also download OMNeT++ models from the web, and install and try them.
</p>

<table cellspacing="0" cellpadding="0">
  <tr>
	<td><img src="images/misc/live-cd.png"/></td>
	<td>
		<table cellspacing="0" cellpadding="0">
		<tr>
		<td id="button-left" style="vertical-align: middle"/>
		<td id="button"><a href="/download/free/omnest41-demo.iso" onClick="javascript: pageTracker._trackPageview(this.href);"><strong>Download OMNEST 4.1 Evaluation Live CD</strong></a></td>
		<td id="button-right"/></tr>
		</table>
	</td>
  </tr>
</table>

<br/>

<p>You can burn this ISO image to a CD and boot from it, but we recommend that
you try it in a virtual machine such as
<a href="http://www.virtualbox.org/" target="_blank">VirtualBox</a> or
<a href="http://www.vmware.com/products/player/" target="_blank">VMware Player</a>.
Set up a new virtual machine with <u>at least 1.5GB</u> system memory and mount
the downloaded ISO image in the CDROM device. Start the virtual machine.</p>

<small>This image is a Live CD running only from the system RAM. It will
not write anything to your hard disk. This means that files written to the
filesystem will be lost upon shutdown. If you want to keep your files,
we recommend that you 'suspend' your virtual machine instead of shutting it
down.</small>

<br/>
<br/>
<br/>


<h1><a name="installer"></a>Windows Installer</h1>

<p>This download contains OMNEST Evaluation for Windows 32-bit (Windows 7, Vista, XP).
You can run and modify all the provided samples and create your own small simulations.
You can also download OMNeT++ models from the web, and install and try them.
</p>

<table cellspacing="0" cellpadding="0">
  <tr>
	<td><img src="images/misc/omnest-installer-thumb.jpg"/></td>
	<td>
		<table cellspacing="0" cellpadding="0">
		<tr>
		<td id="button-left" style="vertical-align: middle"/>
		<td id="button"><a href="/download/free/omnest-4.1-eval-win32.exe" onClick="javascript: pageTracker._trackPageview(this.href);"><strong>Download OMNEST 4.1 Evaluation for Windows</strong></a></td>
		<td id="button-right"/></tr>
		</table>
	</td>
  </tr>
</table>

<br/>

<p>A C++ compiler and binaries are included for compiling simulation models
from source (MinGW version of gcc); also included are the simulation libraries for
various versions of Microsoft Visual C++ (must be preinstalled on your system.)

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
<img height=1 width=1 border=0 src="http://www.googleadservices.com/pagead/conversion/1067620223/?value=1&label=DEFAULT&script=0">
</noscript>

<br /><br />
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
