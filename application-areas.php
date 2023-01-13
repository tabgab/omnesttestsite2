<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Typical Application Areas</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Typical Application Areas</h1></div>


<h2><a href="network-simulation">Simulation of Communication Networks</a></h2>

<p><img class="right" src="images/misc/network.png" alt="">
The largest application area for OMNEST is the simulation of various
communication networks, such as wired and wireless networks, mobile ad-hoc networks,
sensor networks, vehicular networks and others.</p>
<p><a href="network-simulation">Read more&nbsp;&raquo;</a></p>
<div style="clear:both"></div>

<hr>

<h2><a href="architecture-verification">Architectural exploration of high-speed interconnections, HPC and other systems</a></h2>

<p><img class="left" src="images/misc/architecture-verification.png" alt="" width="180px"/>
Several customers use OMNEST for the architectural exploration of high-performance computing systems:
fast interconnects, network-on-chip architectures and more.</p>
<p><a href="architecture-verification">Read more&nbsp;&raquo;</a></p>
<div style="clear:both"></div>

<hr>

<h2><a href="performance-modeling">Queueing-Based Performance Modeling</a></h2>

<p><img class="right" src="images/misc/performance-modeling.png" alt="">
You can build queueing and resource allocation based performance models easily,
and when more details need to be accommodated into the model, OMNEST helps you
by allowing you to refine, specialize, enhance or replace model blocks.</p>
<p><a href="performance-modeling">Read more&nbsp;&raquo;</a></p>
<div style="clear:both"></div>

<hr>

<h2><a href="embedding">As an Embeddable Simulation Library</a></h2>

<p><img class="left" src="images/misc/omnest-engine.png" alt="" width="180px">
Several customers have chosen to embed the OMNEST simulation kernel into their
products. By doing so, one can benefit from its functionality and high performance,
while still being able to develop and test models in the OMNEST Simulation IDE.</p>
<p><a href="embedding">Read more&nbsp;&raquo;</a></p>
<div style="clear:both"></div>


<?php print_next_links($product_menu, __FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
