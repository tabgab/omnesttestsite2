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

<img class="pic right rounded" style="margin-top: 12px;" width="200" src="images/tour/tour-whysim-blueprints.png" alt=""/>
<h1>Simulation lets you experiment with systems that don't exist yet</h1>
<p class="leftext">You can explore the merits of alternative designs without actually physically constructing the systems.
By investigating the effects of specific design decisions during the design phase rather than the construction phase,
the overall cost and risk of building the system diminishes significantly.</p>
<div class="separator"></div>

<img class="pic left rounded" style="margin-top: 12px;" width="200" src="images/tour/tour-whysim-largescale.png" alt=""/>
<h1>Simulation lets you try large-scale scenarios without having to build them</h1>
<p class="righttext">How will your system scale from a few users to a few hundred,
a few thousand or a couple of million? Where are the bottlenecks? How should you handle them?
Which architecture is best? What components should you use?
Using hardware to find out the answers to these questions comes with prohibitive costs and
problems will pop up only when time is in very short supply.
Using simulations, you can prepare in advance and mitigate any risks before they spoil the day.</p>
<div class="separator"></div>

<img class="pic right rounded" style="margin-top: 12px;" width="200" src="images/tour/tour-whysim-reproduce.png" alt=""/>
<h1>Simulation let you synthesize scenarios that are hard to reproduce with the physical system</h1>
<p class="lefttext">Often, you want to find out the exact border conditions where your system encounters problems
and ensure you never encounter them. In physical systems,simulating these exact conditions - often involving multiple
hardware components is very difficult. Radio propagation, message conflicts, processor cycles,
these are very difficult to control in physical systems, but they are easy to access in simulations where
you can set up components to behave exactly how you want them to.
This way, even obscure or low probability failures can be simulated and properly mitigated.</p>
<div class="separator"></div>

<img class="pic left rounded" style="margin-top: 12px;" width="200" src="images/tour/tour-whysim-details.png" alt=""/>
<h1>Simulation lets you investigate details that are normally not accessible</h1>
<p class="righttext">
In an OMNEST simulation, you are the master of time. You can stop the system at any given moment and examine where each bit is,
what the internal buffers contain, check for the state of the system or &quot;watch&quot; for a condition.
No physical system will give you this level of insight and control. You can produce sequence charts and other output to easily find
and remove bugs in the system, ensuring that you can approach the next production phase with confidence and less risk of costly iterations. </p>
<div class="separator"></div>

<img class="pic right rounded" style="margin-top: 10px;" width="200" src="images/tour/tour-whysim-verify.png" alt=""/>
<h1>Simulation lets you verify and validate a product early in the development</h1>
<p class="lefttext">Simulations may incorporate production code embedded in the system.
In that case, system-level simulations can be used for functional and performance testing of your product even before moving on
to later phases of  development such as prototyping.
Running system-level simulations with predefined test vectors
lets you discover and rectify defects early in the development,
leading to cost saving and improvement in product quality.</p>
<div class="separator"></div>

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>

