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
<?php print_leadin($purchase_menu, __FILE__); ?>

<div id="header"><h1>Try OMNEST!</h1></div>

<p>Evaluation versions are full OMNEST installations, including the simulation
libraries, tools, the IDE, sample simulations and documentation.
</p>

<div class="next" style="text-align:right"><a href="download-eval-request.php">Proceed to Downloads <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></div>

<h2>Windows Installer</h2>

<table>
  <tr>
    <td style="width:130px; vertical-align: top">
      <a href="download-eval-request.php"><img src="images/misc/download-win-eval.png"/></a>
    </td>
    <td style="vertical-align: top">
      <p>Installs OMNEST Evaluation on a Windows machine (Windows 8, 7 or XP).
      You can run and modify all the provided samples and create your own small simulations.
      You can also download, install and try OMNeT++ models from the web.
      </p>

      <p>A C++ compiler and binaries are included for compiling simulation models
      from source (MinGW version of gcc); also included are the simulation libraries for
      various versions of Microsoft Visual C++ (must be preinstalled on your system.)
    </td>
  </tr>

  <tr>
    <td colspan=2>
      <h2>Other Platforms</h2>
    </td>
  </tr>
  <tr>
    <td style="width:130px; vertical-align: top">
      <center><img src="images/misc/osx-linux-logo.png"></center>
    </td>
    <td style="vertical-align: top">
      OMNEST has wide platform support. In addition to Windows, the IDE is also available on Mac OS X and Linux,
      and simulations can be run on virtually any platform that is powerful enough and has a standards-compliant C++ compiler.
      If you wish to evaluate OMNEST on Mac OS X or Linux, please <a href="contact.php">contact us</a>.
    </td>
  </tr>


</table>

<br>

Note:
<ul>
 <!-- <li>If you need to evaluate OMNEST on Mac OS X or Linux, please <a href="contact.php">contact us</a>.</li> -->
 <li>Limitations of the evaluation version: (1) no source code is provided for the simulation kernel;
    (2) simulations are limited to 10,000,000 events and 1000 modules.</li>
 <li>Network simulation models are not included, they need to be downloaded separately;
     <a href="simulation-models.php">read more here</a>.</li>
</ul>

<div class="next" style="text-align:right"><a href="download-eval-request.php">Proceed to Downloads <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></div>

<br><br>

<?php print_leadout(); ?>
</body>
</html>
