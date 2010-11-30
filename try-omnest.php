<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Try OMNEST!</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Try OMNEST!</h1></div>

<p>Evaluation versions are full OMNEST installations, including the simulation
libraries, tools, the IDE, sample simulations and documentation.
The Evaluation version comes in two forms; as a Live CD image
and as a Windows installer.</p>

<div class="next" style="text-align:right"><a href="download-eval-request.php">Proceed to Downloads <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></div>

<h2>Live CD Image</h2>

<table>
  <tr>
    <td style="width:130px; vertical-align: top">
      <a href="download-eval-request.php"><img src="images/misc/download-linux-eval.png"></a>
    </td>
    <td style="vertical-align: top">
      <p>This is a Linux Live CD image that contains a fully functional OMNEST installation.
      You can burn this ISO image to a CD and boot from it, but we recommend that
      you try it in a virtual machine such as
      <a href="http://www.virtualbox.org/" target="_blank">VirtualBox</a> or
      <a href="http://www.vmware.com/products/player/" target="_blank">VMware Player</a>.
      You can run and modify all the provided samples and create your own small simulations.
      You can also download OMNeT++ models from the web, and install and try them.
      </p>
    </td>
  </tr>
</table>


<h2>Windows Installer</h2>

<table>
  <tr>
    <td style="width:130px; vertical-align: top">
      <a href="download-eval-request.php"><img src="images/misc/download-win-eval.png"/></a>
    </td>
    <td style="vertical-align: top">
      <p>This is a program that installs OMNEST Evaluation on a 32-bit Windows system (Windows 7, Vista or XP).
      You can run and modify all the provided samples and create your own small simulations.
      You can also download OMNeT++ models from the web, and install and try them.
      </p>

      <p>A C++ compiler and binaries are included for compiling simulation models
      from source (MinGW version of gcc); also included are the simulation libraries for
      various versions of Microsoft Visual C++ (must be preinstalled on your system.)
    </td>
  </tr>
</table>

<br>

Note:
<ul>
 <li>Limitations of the evaluation version: (1) no source code is provided for the simulation kernel;
    (2) simulations are limited to 10,000,000 events and 1000 modules.</li>
 <li>Network simulation models are not included; they need to be downloaded separately;
     <a href="network-simulation.php">read more here</a>.</li>
</ul>

<div class="next" style="text-align:right"><a href="download-eval-request.php">Proceed to Downloads <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></div>

<br><br>

<?php print_leadout(); ?>
</body>
</html>
