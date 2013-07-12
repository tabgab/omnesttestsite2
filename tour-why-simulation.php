<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST Tour - Why Simulation</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($tour_menu, __FILE__); ?>

<img class="pic right rounded" width="200" src="images/tour/tour-whysim-blueprints.png" alt=""/>
<h1>Simulation lets you experiment with systems that don't exist yet</h1>
<p class="leftext">You can explore the merits of alternative designs without actually physically constructing the systems.
By investigating the effects of specific design decisions during the design phase rather than the construction phase,
the overall cost of building the system diminishes significantly.</p>
<div style="clear:both"></div>

<img class="pic left rounded" width="200" src="images/tour/tour-whysim-largescale.png" alt=""/>
<h1>Simulation lets you try large-scale scenarios without having to build them</h1>
<p class="righttext">todo</p>
<div style="clear:both"></div>

<img class="pic right rounded" width="200" src="images/tour/tour-whysim-reproduce.png" alt=""/>
<h1>Simulation lets you synthesize scenarios that are not easily produceable with the real system</h1>
<p class="lefttext">
e.g. often not easy to set up the exact synchronization or sequence of events;
e.g. not easy to induce certain behaviour in systems where you don't have access to internals;
not easy to reproduce same the radio signal propagation multiple times;
etc</p>
<div style="clear:both"></div>

<img class="pic left rounded" width="200" src="images/tour/tour-whysim-details.png" alt=""/>
<h1>Simulation lets you investigate details that are normally not accessible</h1>
<p class="righttext">
internal state of equipment, e.g. variables or buffers;
exact timing relationships of events;
todo</p>
<div style="clear:both"></div>

<img class="pic right rounded" width="200" src="images/tour/tour-whysim-verify.png" alt=""/>
<h1>Simulation lets you verify and validate a product early in the development</h1>
<p class="lefttext">Simulations may incorporate production code embedded in the system.
In that case, system-level simulations can be used to ensure
the correctness and performance of your product even before moving on
to later phases of product development such as prototyping.
Running system-level simulations with predefined test vectors
lets you discover and rectify defects early in the development,
leading to cost saving and improvement in product quality.</p>
<div style="clear:both"></div>

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>

