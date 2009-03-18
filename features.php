<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Simulcraft Inc.</title>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST - an Embeddable Discrete Event Simulator Network" />
	<meta name="keywords" content="embeddable discrete event simulator simulation embedding c++ c open source network"  />
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

			<div id="header"><h1>OMNEST<SUP>TM</SUP>/OMNeT++ Features</h1></div>

    <p>OMNEST is an open, versatile, component-based simulation environment
    with a modular architecture, strong GUI support and an embeddable
    simulation kernel. Source code is provided to give you full control
    of your software.
    </p>

<h2>General</h2>
<ul class="list03">
	<li><strong>Hierarchical, component-based modelling</strong><br />
	You build models from self-contained components using a high-level declarative language (NED), with arbitrary levels of nesting. Use the graphical editor or your favourite text editor.</li>

	<li><strong>C++-based, high performance simulation kernel</strong><br />
	Atomic components are programmed in C++, using a well-defined API to the simulation library. The use of C++, together with the streamlined simulation kernel, provides high event/sec throughput.</li>

	<li><strong>Wide range of applicability</strong><br />
	OMNEST/MNeT++ has proven itself in the simulation of queuing networks, business processes and high-level architectures. In the academia, it is mostly used for simulating wired and wireless communication networks.</li>

	<li><strong>Models are self-documenting</strong><br />
	The documentation tool generates high-quality documentation from commented model source code, with diagrams, tables and cross-references. Integrates well with the Doxygen C++ documentation tool.</li>

	<li><strong>Source code is provided</strong><br />
	Well-documented source code to increase your understanding, help debugging, and enable modifications is provided</li>

	<li><strong>Standards support, open interfaces</strong><br />
	Input and output can be plain text and/or XML, making it easy to process with 3rd party tools. Database integration is also possible.</li>

	<li><strong>Graphical tools for simulation building and evaluating results</strong><br />
	Apart from the GUI, command line, batch and API access is provided to all features, allowing for extremely versatile and powerful simulation control and management.</li>

	<li><strong>Powerful GUI for tracing, debugging and animating your simulations</strong><br />
	In addition to animation and sophisticated logging, you can peek into objects and variables in the C++ code, even change them on the fly.</li>

	<li><strong>Responsive and expert support</strong><br />
	Your requests are answered directly by the developers, not by techsup personnel.</li>
</ul>

<h2>Network simulation</h2>
<ul class="list03">
	<li><strong>Wide range of open-source simulation models</strong><br />
	TCP/IP, IPv6, MPLS, wireless, mobile and ad-hoc simulations, TinyOS, port of the FreeBSD networking stack, queueing and several other open-source models are available from www.omnetpp.org and other websites.</li>

	<li><strong>Emulation / Real-Time simulation / hardware-in-the-loop simulation support</strong><br />
	The simulation kernel supports real-time and hardware-in-the loop simulation via a plugin interface. A functioning and extensively commented source code example will help you to quickly implement your own application-specific hardware-in-the-loop simulation.</li>
</ul>

<h2>Advanced</h2>
<ul class="list03">
	<li><strong>Embeddable simulation kernel</strong><br />
	The simulation kernel can be embedded into 3rd party products as a C++ class library. See our References for companies who have already done that.</li>

	<li><strong>Parallel simulation</strong><br />
	Parallel simulation on clusters or multiprocessors, with MPI and powerful conservative synchronization. Using named pipes or other communication means instead of MPI is also possible.</li>

	<li><strong>Extensibility</strong><br />
	C++ plug-in interfaces are made available to customize features of the simulation kernel.</li>

	<li><strong>Database support</strong><br />
	Network topology and model configuration may come from a database, and results can be recorded into a database -- without changing a line in the model itself.</li>

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
