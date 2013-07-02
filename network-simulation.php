<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Simulation of Wireless and Wired Networks</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Simulation of Wireless and Wired Networks</h1></div>

<img class="right" src="images/misc/network.png" alt="">

<p><b>The largest application area for OMNEST is the simulation of
various communication networks,</b> such as wired and wireless networks,
mobile ad-hoc networks, sensor networks, vehicular networks and others.
</p>

<h2>Simulation Models</h2>

<p>OMNEST is compatible with the vast body of open-source simulation models
that have been written by researchers for the OMNeT++ simulation framework.
</p>

<p>The list of simulation models and model frameworks is available on the
<a href="simulation-models.php">Simulation Models</a> page.</p>

<h2>Benefits</h2>

<p>Models such as the INET Framework or Castalia are <i>frameworks</i>,
having been written with the express purpose of making it easy to extend
and build on top of them.</p>

<p>Due to OMNEST's component architecture, you can combine existing blocks
(protocol models, application models, queues, etc.) and your custom blocks
to form models of arbitrary hosts, routers, switches and other network devices.
Protocol models may also be mixed with other kinds of simulation models
such as queueing or resource allocation models.</p>


<!--
<p>A more complete list of models and frameworks is available on the
<a href="http://www.omnetpp.org/models" target="_blank">OMNeT++ web site</a>.</p>
-->

<h2>Case Studies</h2>

<ul>
<li><a href="casestudy-boss.php">The Celtic BOSS Project (Railway on-board wireless secured video surveillance)</a>
<li><a href="casestudy-adhoc.php">Detailed Cross-Layer Simulator for Content Transmission over Wireless Ad-Hoc Networks</a>
<li><a href="casestudy-lrwpan.php">Simulation Study of IEEE 802.15.4 LR-WPAN for Industrial Applications</a>
</ul>

<!--
<?php print_next_link("simulation-models.php", "Simulation Models"); ?>
<?php print_next_link("application-areas.php", "Back to Application Areas"); ?>
-->

<?php print_leadout(); ?>
</body>
</html>
