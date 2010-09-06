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


		<div id="header"><h1>OMNEST - OMNeT++ Comparison</h1></div>

		<p>OMNEST and OMNeT++ are largely identical, and simulation models written
		for one are guaranteed to compile and run with the other. Differences
		apply to licensing, packaging, and certain features only.</p>

        <table id="features" border="1" width="90%" cellspacing="0" cellpadding="4">
          <tr> <th></th>  <th width="25%">OMNeT++</th>  <th width="25%">OMNEST</th> </tr>
          <tr>
              <td>License</td>
              <td><a href="http://www.omnetpp.org/license" target="_blank">Academic Public License</a><sup>1</sup></td>
              <td><a href="license.php" target="_blank">Commercial License</a></td>
          </tr>
          <tr>
              <td>Commercial use</td>
              <td><span class="no">not allowed</span><sup>1</sup></td>
              <td><span class="yes">allowed</span></td>
          </tr>
          <tr>
              <td>Simulation kernel, tools, examples, documentation</td>
              <td><span class="yes">yes</span></td>
              <td><span class="yes">yes</span></td>
          </tr>
          <tr>
              <td>Eclipse-based Simulation IDE</td>
              <td><span class="yes">yes</span></td>
              <td><span class="yes">yes</span></td>
          </tr>
          <tr>
              <td>Support for all major operating systems<sup>2</sup></td>
              <td><span class="yes">yes</span></td>
              <td><span class="yes">yes</span></td>
          </tr>
          <tr>
              <td>Windows installer</td>
              <td><span class="no">no</span> (distributed as zip)</td>
              <td><span class="yes">yes</span></td>
          </tr>
          <tr>
              <td>Pre-compiled (and tested) simulation libraries for Windows</td>
              <td><span class="no">no</span></td>
              <td><span class="yes">yes</span><sup>3</sup></td>
          </tr>
          <tr>
              <td>Support for Microsoft Visual C++</td>
              <td><span class="no">no</span></td>
              <td><span class="yes">yes</span></td>
          </tr>
          <tr>
              <td>Support for the GCC Compiler<sup>4</sup></td>
              <td><span class="yes">yes</span></td>
              <td><span class="yes">yes</span></td>
          </tr>
          <tr>
              <td>Documentation Generation <br/><small>(example: <a href="http://inet.omnetpp.org/doc/INET" target="_blank">INET</a>)</small></td>
              <td><span class="yes">yes</span> -- under <span class="no">Creative Commons</span><sup>5</sup></td>
              <td><span class="yes">yes</span></td>
          </tr>
          <tr>
              <td>SVG Image Export<sup>6</sup></td>
              <td><span class="no">no</span></td>
              <td><span class="yes">yes</span></td>
          </tr>
          <tr>
              <td>SystemC Integration<sup>7</sup></td>
              <td><span class="no">no</span></td>
              <td><span class="yes">yes</span></td>
          </tr>
          <tr>
              <td>HLA Support<sup>8</sup></td>
              <td><span class="no">no</span></td>
              <td><span class="yes">yes</span></td>
          </tr>
<!--
          <tr>
              <td>Database Integration<sup>9</sup></td>
              <td><span class="no">no</span></td>
              <td><span class="yes">yes</span></td>
          </tr>
-->
          <tr>
              <td>Support</td>
              <td>informal, via the mailing list</td>
              <td>guaranteed 48-hour email support available</td>
          </tr>
          <tr>
              <td>Service Releases</td>
              <td>informal</td>
              <td>guaranteed after significant fixes, but at least every 6 months</td>
          </tr>
        </table>

        <ul>
            <sup>1</sup> if you are unsure whether you need a commercial license, please check the <a href="licensingfaq.php">Licensing FAQ</a>
            <br/>
            <sup>2</sup> the IDE is supported on Linux, Mac OS&nbsp;X and Windows; the simulation kernel and models can be compiled on other platforms as well
            <br/>
            <sup>3</sup> for MinGW and recent versions of Visual C++
            <br/>
            <sup>4</sup> including MinGW on Windows
            <br/>
            <sup>5</sup> with OMNeT++, generated documentation is under the <a href="http://creativecommons.org/" target="_blank">Creative Commons</a> license. OMNEST does not contain this limitation.
            <br/>
            <sup>6</sup> for models and sequence charts
            <br/>
            <sup>7</sup> allows for mixing OMNEST and SystemC modules in the same simulation program
            <br/>
            <sup>8</sup> allows OMNEST simulations to join HLA (IEEE 1516) federates
<!--
            <br/>
            <sup>9</sup> supports reading network topology and configuration from database, and writing simulation results to database
-->
        </ul>

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
