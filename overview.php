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

	<?php minimenu(array('architecture-verification', 'performance-modeling', 'network-simulation')); ?>
	</div>
	<!-- End Main Menu -->



	<div style="clear: both;">

	<!-- Start Content -->
	<div id="content">

	<div id="header"><h1>OMNEST<sup>TM</sup> &ndash; Overview and Benefits</h1></div>

<p><b>
OMNEST is the commercial version of the OMNeT++ object-oriented discrete
event simulation framework. The framework has a generic architecture,
which allows it to be applied to various problem domains where <i>complex behavior</i>
needs to be simulated with <i>high performance</i>: protocol modeling, validation
of hardware architectures, modeling of wired and wireless communication networks,
to name a few.</b></p>

<p>
<img src="images/misc/overview-modules.png" style="float:left; margin-right:10px;"/>
OMNEST is not a simulator itself, but rather it provides a
framework and tools to write simulations. One of the fundamentals of the
OMNEST framework is the <b>component-based architecture</b>
for simulation models: A model can be combined in various ways from
reusable components, so called modules. The noncommercial version, OMNeT++, has a huge user community
in the Academia, with several groups publishing and supporting
<a href="network-simulation.php">simulation</a>
<a href="http://www.omnetpp.org/models" target="_blank">models</a>,
and nearly a hundred <a href="http://www.omnetpp.org/publications" target="_blank">papers</a>
published each year on wireless network simulation and other topics.</p>

<p>
<img src="images/misc/overview-ide.png" style="float:right; margin-left:10px;"/>
Simulations can be designed and evaluated in an integrated <b>Simulation IDE</b>,
and can be run utilizing various interfaces:
from simple command-line interfaces that are ideally suited for batch execution,
to sophisticated graphical animated user interfaces which can
be used for debugging or demonstration purposes.</p>

<p>
<img src="images/misc/systemc_etc.png" style="float:left; margin-right:10px;"/>
OMNEST simulations are very <b>scalable and run efficiently</b>, due to the use of C++.
Simulation models can also be executed using parallel distributed simulation.
Real-time execution and emulation (hardware-in-the-loop) are supported as well.
The OMNEST-SystemC integration facility allows OMNEST simulations to directly
incorporate parts written in SystemC, without loss of performance. OMNEST
simulations can also participate in a HLA federation.</p>

<p>If you'd like to create application programs that internally rely on simulation,
OMNEST allows that: the simulation kernel, modules and whole simulations can be
embedded into your program as C++ libraries.</p>

<table cellspacing="0" cellpadding="0"><tr>
<td id="button-left" style="vertical-align: middle"/>
<td id="button"><a href="/download/free/omnest-whitepaper.pdf" onClick="javascript: pageTracker._trackPageview(this.href);"><strong>Download the OMNEST<sup>TM</sup> White Paper</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td id="button-right"/></tr>
</table>

<br><br>
Also:<br>

<img src="common/images/list_01.gif" alt="" border="0">
<a href="web-demos.php">Demo videos and presentations</a>
<br>

<img src="common/images/list_01.gif" alt="" border="0">
<a href="features.php">Features in nutshell</a>
<br>

<img src="common/images/list_01.gif" alt="" border="0">
<a href="embedding.php">Embedding OMNEST simulations into applications</a>
<br>

<img src="common/images/list_01.gif" alt="" border="0">
<a href="documentation.php">OMNEST documentation</a>
<br>

<img src="common/images/list_01.gif" alt="" border="0">
<a href="comparison.php">What's the difference between OMNeT++ and OMNEST<sup>TM</sup>?</a>
<br>
<br>


<h2 style="color:#e54426">Why Is OMNEST Good for Me?</h2>

<p>When we asked experts why they chose OMNEST or OMNeT++ for their work or research,
they brought up the following reasons (most of this was personal communication via email
and at the annual <a href="http://omnet-workshop.org" target="_blank">OMNeT++ workshops</a>):</p>

<ul>
  <li>very efficient -- OMNEST simulations execute fast and scale very well,
      which can be surprising given the amount of features in the simulation library

  <li>fast learning -- some C++ knowledge is required, but the programming model and
      the API can be picked up quickly, and one can become productive in a short time

  <li>great community -- OMNeT++ has a huge user community, and a lot of information
      is freely available on the Internet; this is very useful when one bumps into a problem,
      as the solution is often just a web search away (compare that with proprietary
      tools where publicly available information is often limited to marketing materials)

  <li>component model -- other people's simulation models are easier to understand
      and can be combined in unexpected ways, because components do not interact with
      each other directly on the C++ level, only via means provided by OMNEST
      (e.g. messages)

  <li>not limiting -- the simulator and models can be extended in unforeseen ways;
      exotic scenarios, such as network emulation, interfacing with other simulators
      and other external systems, parallel simulation, and combinations of the above,
      can be realized; and when something doesn't work as expected, the full source code
      is there to study and debug
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
