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

	<!-- Start Minimenu --><div id="minimenu"><a href="embedding.php"><img src="common/images/minimenu_embedding.gif" width="118" height="44" alt="Discrete Event Simulation" border="0" /></a><a href="discrete-event-simulation.php"><img src="common/images/minimenu_discreteevent.gif" width="118" height="44" alt="Discrete Event Simulation" border="0" /></a></div><!-- End Minimenu -->
	</div>
	<!-- End Main Menu -->



	<div style="clear: both;">

	<!-- Start Content -->

<div id="content">

<div id="header"><h1>Network Simulation</h1></div>

<p><span style="font-weight: bold;">OMNeT++/OMNEST is extensively used for
R&amp;D-type network simulations.</span> Somewhat similarly to ns2, OMNeT++
has an active user community in the Academia, who created a large body of
open-source network simulation models and model frameworks, from ad-hoc and
wireless simulations to MPLS, Diffserv and IPv6.</p>

<p>Simulation models are truly component-based, allowing you to freely
combine existing protocol models to form hosts and network devices. There
is support for real-time simulation and network emulation as well.</p>

<h2>Network Simulation Packages for OMNeT++/OMNEST:</h2>

<ul class="list01">

<li><a href="http://www.inet.omnetpp.org" target="_blank" class="kiemeles">INET Framework</a> -
supports&nbsp;ad-hoc, wireless and wired (LAN, WAN) simulations (802.11,
Ethernet, TCP, IP, IPv6, OSPF, MPLS, RSVP, and other protocols)</li>

<ul class="list03">

<li>Cleanly programmed and extensively commented models lend themselves
to experimentation with protocols and various architectures.</li>

<li>Several models are ported versions of real-life networking software
like the Quagga routing daemon, or the AODV-UU implementation, which
guarantees simulation accuracy.</li>

</ul>

<li><a href="http://www.oversim.org/" target="_blank"
class="kiemeles">OverSim</a> - for overlay and peer-to-peer networks (based on INET)</li>

<li><a href="http://mobility-fw.sourceforge.net/" target="_blank"
class="kiemeles">Mobility Framework</a> - for wireless mobile and ad-hoc
networks</li>

<li><a href="http://mixim.sourceforge.net/" target="_blank"
class="kiemeles">MiXiM</a> - for wireless mobile and ad-hoc
networks (successor of Mobility Framework)</li>

<li><a href="http://castalia.npc.nicta.com.au/" target="_blank"
class="kiemeles">Castalia</a> - a wireless sensor network (WSN) simulator
developed at NICTA Australia</li>

<li><a href="http://pawis.sourceforge.net/" target="_blank"
class="kiemeles">PAWiS</a> - Power Aware Wireless Sensor Networks Simulation Framework</li>

<li><a href="http://nesct.sourceforge.net/" target="_blank"
class="kiemeles">NesCT</a> - for simulating wireless motes running TinyOS</li>

<li><a href="http://www.simsans.org/" target="_blank"
class="kiemeles">SimSANs</a> - for simulating Storage Area Networks </li>

</ul>

<a href="http://www.omnetpp.org/staticpages/index.php?page=20031008083109542"
target="_blank">See other models and frameworks on omnetpp.org</a><img
src="common/images/list_02.gif" alt="" />

<br /><br />

<a href="download-demosim.php">Download the demo of example simulations of the above models</a><img
src="common/images/list_02.gif" alt="" />

<br /><br />

<p>These simulation frameworks have been programmed in C++, and are
distributed in source code form. With the exception of the INET Framework,
these models are maintaned by people independent of Simulcraft Inc, so we
naturally cannot provide any warranty for them. However, their large
exposure to the Academia means that they get reviewed and bugfixed
and improved by many people.</p>

<h2>OMNeT++/OMNEST features relevant to network simulation</h2>

<ul class="list01">

    <li>Existing protocol models can be freely combined to form hosts and network devices</li>

    <li>Graphical tools for simulation building and evaluating results</li>

    <li>Powerful GUI for tracing, debugging and animating your simulations</li>

    <li>Emulation / Real-Time simulation / hardware-in-the-loop simulation support</li>

    <li>Ask for help on the mailing list with 300+ active subscribers</li>

    <li>Responsive and expert commercial support</li>

</ul>

<a href="features.php">Complete feature list</a><img src="common/images/list_02.gif" alt="" />

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
