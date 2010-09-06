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

	<?php minimenu(array('overview', 'performance-modeling', 'network-simulation')); ?>
	</div>
	<!-- End Main Menu -->



	<div style="clear: both;">

	<!-- Start Content -->
	<div id="content">

<div id="header"><h1>Architecture Verification</h1></div>

<p><b>OMNEST is the commercial version of the OMNeT++ simulation framework.</b>
The generic architecture of the simulation framework allows OMNEST
to be applied to various problem domains where <b>complex behavior needs
to be simulated with high performance</b>, such as hardware architectures
and complex IT systems.
</p>

<p>OMNEST helps you fight complexity by providing a <b>component architecture</b>
that allows you to build the model hierarchically in a top-down or
bottom-up fashion. Components can represent any <b>level of detail</b> that is
appropriate for your simulation study, from cycle-accurate models to
high-level functional models. The component architecture also makes it possible
to have multiple implementations with varying level of detail for a given
component, or to replace a single component with a composite one.
</p>

<p><b>OMNEST integrates well with SystemC.</b> SystemC modules, both RTL or higher-level
functional ones, can be used in OMNEST simulations without loss of performance.
The simulation kernel will process OMNEST and SystemC events in the appropriate,
increasing timestamp order.
</p>

<p>These features allow you to write the simulation model on the right level
of detail, and still have flexibility to modify it later. <b>Simulation performance
is ensured by the use of C++</b> for both models and the simulation kernel and library.
When needed, <b>distributed parallel simulation capability</b> is available for
speeding up model execution and for distributing memory requirements. The simulation
model does not need to be instrumented for parallel simulation, but it needs
to obey certain restrictions (e.g. no global variables and no direct access of
components that may be instantiated in a different partition). <b>Hardware-in-the-loop
and connecting an OMNEST simulation to other simulators</b> (co-simulation)
is also supported. (Some details like the specifics of talking to the particular
external device or simulator needs to be filled in by you, of course, but
our team can help you with that.)
</p>

<!--
<p>TODO One can utilize the protocol library as well; for example the Proc/B model...</p>
-->

<p>OMNEST has been applied in several problem domains, such as optimizing supercomputer
architectures, on-chip networks, multiprocessor systems and SOA architectures. See our
case studies below.
</p>

<br>
<br>

<hr>
<table>
  <tr>
    <td>
      &nbsp;&nbsp;&nbsp;&nbsp;<a href="archver-casestudies.php"><img src="images/misc/papers.png" alt="" border="0"></a>
    </td>
    <td>
      <font size="+1">&nbsp;&nbsp;<a href="archver-casestudies.php">Selected Case Studies</a></font>
    </td>
  </tr>
</table>
<hr>

<br>
<br>


<h1 style="color:#e54426">SystemC Integration</h1>

<img src="images/misc/systemc_logo.gif" style="float:right; margin-left:10px;"/>

<p><b>OMNEST makes it possible to run simulations that mix
SystemC<sup>TM</sup> and native OMNEST models.</b> SystemC modules may be
cycle-accurate RTL models or higher-level functional models (e.g. those
using TLM), it does not matter. SystemC is a system specification and
simulation library from the Open SystemC Initiative (OSCI,
<a href="http://www.systemc.org" target="_blank">www.systemc.org</a>).
</p>

<p>SystemC itself comes as a C++ library. SystemC models are C++ code, and as
such, SystemC models can be link-edited into OMNEST simulations. Because both
OMNEST modules and SystemC modules are C++ objects, they can communicate
via C++ method calls. Timestamp-ordered execution of SystemC and OMNEST
events is ensured by a custom OMNEST scheduler.
</p>

<p>Using the solution described here, SystemC and OMNEST modules will be part
of the same program, and will execute in the same OS process. This usually
results in orders of magnitude higher simulation speeds than distributed
solutions like co-simulation or HLA, and also allows simpler and more fine-
grained communication between modules.
</p>

<p><b>This solution also allows SystemC code to have access to advanced OMNEST
facilities</b> like random number and random variable generation, statistical
classes, flexible result recording, parameterization via an external
configuration, reading XML files or even parallel distributed simulation.
</p>

<p>SystemC and OMNEST modules can talk to each other during the simulation
in several ways. It is recommended that you create a wrapper OMNEST module
for each SystemC module that you want to appear in the OMNEST simulation as
one unit. If a SystemC module knows the pointer of its wrapper OMNEST module,
the SystemC module can send OMNEST messages from the wrapper OMNEST module,
can access the wrapper module's parameters, and make use of other OMNEST
facilities. Likewise, the wrapper OMNEST module can also interact with its
SystemC module by accessing its data members, calling its methods and so on.
For example, if a method thread in the SystemC module is blocked on an event,
the OMNEST module can notify() that event and allow the code to continue.
</p>


<p>The OMNEST package contains several examples for mixed OMNEST-SystemC
simulations.
</p>

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
