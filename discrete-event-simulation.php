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

	<!-- Start Minimenu --><div id="minimenu"><a href="network-simulation.php"><img src="common/images/minimenu_networksim.gif" width="118" height="44" alt="Network Simulation" border="0" /></a><a href="embedding.php"><img src="common/images/minimenu_simkernel.gif" width="118" height="44" alt="Simulation Library" border="0" /></a></div><!-- End Minimenu -->
	</div>
	<!-- End Main Menu -->



	<div style="clear: both;">

	<!-- Start Content -->
	<div id="content">

			<div id="header"><h1>Discrete Event Simulation</h1></div>

			<p><strong>With OMNeT++/OMNEST you can simulate</strong> anything that can be mapped into a number of entities, sending messages to each other. What entities and messages mean is up to you. That is, one can simulate queueing networks ("jobs" or "customers" travelling among queues), computer networks (computers exchanging packets), businesses (employees sending documents and files to each other and making phone calls) , hardware architectures (e.g. a CPU making requests to the disk, or units communicating on a bus) and many other systems.</p>

<p>You assemble the simulated "network" from components written in C++ (by you or by someone else). Once the components are present, no further C++ programming necessary to build simulations from them - you will use a high-level declarative language for this task, or the graphical editor. OMNEST/OMNeT++ provides the simulation library (simulation kernel) and the execution environment, and various GUI and non-GUI tools for creating and running the model, and evaluating the results.</p>

<p>The OMNEST/OMNeT++ simulation kernel is very extensible, and can accommodate special needs such as parallel/distributed simulation, real-time simulation (emulation), database integration, embedding, comes with source code to increase your degree of freedom, and is backed with superior support.</p>



			<h2>Features</h2>

<ul class="list01">
	<li>Hierarchical, component-based modelling</li>
	<li>C++-based, high performance simulation kernel</li>
	<li>Wide range of applicability</li>
	<li>Models are self-documenting</li>
	<li>Source code is provided</li>
	<li>Standards support, open interfaces</li>
	<li>Graphical tools for simulation building and evaluating results</li>
	<li>Powerful GUI for tracing, debugging and animating your simulations</li>
	<li>Responsive and expert support</li>
	<li>Parallel simulation and other advanced features</li>
</ul>

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
