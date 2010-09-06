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

	<?php minimenu(array('overview', 'architecture-verification', 'network-simulation')); ?>
	</div>
	<!-- End Main Menu -->



	<div style="clear: both;">

	<!-- Start Content -->
	<div id="content">

<div id="header"><h1>Performance Modeling</h1></div>

<!--
     this page is for those who are already familiar with these kinds of models,
     so we don't need to show example models etc...
-->

<p><b>OMNEST is the commercial version of the OMNeT++ simulation framework.</b>
The generic architecture of the simulation framework allows OMNEST to be
applied to various problem domains where <i>complex behavior</i> needs to be
simulated with <i>high performance</i>, for example protocol modeling,
simulation of hardware architectures and computer networks.</p>

<p>
<img src="images/misc/queueing-network.png" style="float:right; margin-left:10px;"/>
<b>Classic performance models</b> are built from more-or-less standardized
components that have relatively simple behavior (cf. with the TCP protocol
or a CPU core!): queues, resource allocation/deallocation, splitting and joining
jobs, updating variables, etc. If your model is like that, you probably don't
need OMNEST because you cannot make use of its competitive advantage
(simulating complex behavior with high performance). However, if you need
to simulate a piece of complex technology and not a hamburger bar,
things are never going to be that simple.
</p>

<p><b>Current technology is incredibly complex,</b> and in order to keep complexity
manageable, it is built from layers upon layers, each with a different
abstraction level: transistors, logic gates, functional units, CPU,
assembly language, operating system, processes and threads,
programming language, libraries, APIs, higher layer APIs, applications
and so on, just to follow one cross-section. If you want to simulate it,
it is best to start simple and leave room for infinite refinement,
depending on what you learn along the way and what demands arise.
</p>

<h2 style="color:#e54426">Here is where OMNEST can help you:</h2>

<p class="emphasize">
<b>We provide you with building blocks</b> to create build an initial performance
model with the "classic" approach, so that you quickly have some approximate results.
<b>Then you can start refining the original model, and add more details</b>.
You can build upon our blocks (C++ class inheritance), or just copy and
modify their sources as if they were written by you. Our performance
modeling library can thus <b>give you a head-start for building detailed,
high-performance simulation models.</b>
</p>

<p><center><img src="images/misc/allocdealloc.png"/></center></p>

<p class="emphasize">
The fact that OMNEST models are written in C++ can be very useful here
(in addition to the obvious reason, performance): this allows you
to <b>seamlessly integrate "foreign" C or C++ code into the simulation</b>,
such as production code from your company's products or an open-source
protocol implementation.
</p>

<h2 style="color:#e54426">Why not <i>&lt;name-of-another-simulation-package&gt;</i>?</h2>

<p>Why not choose a simulation package based on Java or a special-purpose
simulation language, or a "no-programming" GUI simulation software?
If you can, why not indeed. However, consider this:</p>

<ul>
  <li><b>If your model cannot fit into the natural concepts of the simulation package,
      performance will suffer.</b> And maybe you will suffer implementing the model, too.
      If your model is behaviorally complex, you will need to write additional
      code because you cannot express behavior using the building blocks provided
      by the tool alone. Special-purpose simulation languages are often not very good at
      expressing general programming concepts or when they do, performance is
      often not as great as with C/C++. Performance may also be a problem with
      Java code. You need to consider what performance you want to get out of your
      simulator to be able to successfully use it in your project.
  <li><b>Do you have C/C++ code that you may want to integrate into the simulation?</b>
      Enough said. Non-C++ based simulators may be able to provide the possibility
      to integrate C/C++ code, but it is never as easy as when the whole simulation
      is already in C++ as in OMNEST.
  <li><b>Do you expect that you'll need to interface your simulation with
      external systems?</b> (Other simulators, real-time, hardware-in-the-loop, etc).
      If so, then double-check if the simulation package allows it.
      With OMNEST, the whole simulator is completely open for extension
      via C/C++, so you <u>know</u> for sure that you will be able to do
      whatever you need to do.
  <li><b>Does your simulation potentially involve data communication or computer
      networks?</b> When modeling an IT system, a SOA architecture or something similar,
      network performance and the behavior of network protocols may be
      an important factor in the overall performance so that they need to be
      simulated explicitly at some point. (For example, TCP can exhibit very
      complex stateful nonlinear behavior when it experiences congestion.)
      In such simulations, the large body of
      <a href="network-simulation.php">protocol simulation frameworks</a>
      that exist for OMNEST can be very useful, as they can be used as
      building blocks in your simulation.
</ul>

<br>
<br>

<table width="90%">
<tr>
  <td>
    <a href="queueinglib.php"><img src="images/misc/perflib.png" alt="" border="0"></a>
  </td>
  <td>
    <font size="+1"><a href="queueinglib.php">Read more about the OMNEST<br/> performance modeling library</a></font>
  </td>
</tr>
</table>

<br>
<br>


<!-- common footer for all "landing" pages -->
<hr style="color:red">
<br>

<img src="common/images/list_01.gif" alt="" border="0">
<a href="overview.php">Read more about the OMNEST simulation environment</a>
<br><br>

<img src="common/images/list_01.gif" alt="" border="0">
<a href="download-eval.php">Download the evaluation version!</a>

<br><br><br><br>

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
