<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST Tour - High-Performance Simulation</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($tour_menu, __FILE__); ?>

<img class="pic right rounded" width=200 src="images/misc/omnest-engine.png" alt=""/>
<h1>High-performance simulation kernel lets you fully utilize your hardware</h1>
<p>Models are written in C++, and execute on top of a streamlined simulation kernel
to provide high event throughput. Diagnostic and animation features are optional and
pose minimal overhead when not in use.

OMNEST simulations execute fast and scale very well, which can be surprising
given the amount of features in the simulation library. TODO revise <!--TODO ez copy/paste a 'what is' oldalrol -->
</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/insight.png" alt=""/>
<h1>Graphical simulation runtime environment gives you a deep insight into running simulations</h1>
<p>Simulations can be run in a graphical interactive runtime environment that
lets you explore the simulation model,
animates packet transmissions and other events,
lets you pause the model and run it in various modes,
look at logs, peek into queues, buffers, state variables, etc.
This feature helps you understand the model, and it is also useful when demonstrating to 3rd parties.</p>
<div style="clear:both"></div>

<img class="pic right rounded" width=200 src="images/tour/parallel.png" alt=""/>
<h1>Parallel simulation allows you to use all of your computing power simultaneously</h1>
<p>
Often you can utilize parallel simulation on clusters or multicore/multi&shy;processor architectures to
speed up execution or to distribute memory requirements.
Parallel simulation doesn't require models to be instrumented.</p>

<!--
Models don't need to be instrumented for parallel simulation, but they need
to obey certain restrictions.</p>
-->

<div style="clear:both"></div>


<img class="pic left rounded" width=200 src="images/tour/hardware.png" alt=""/>
<h1>Real-time hardware-in-the-loop simulation allows you to test the models with the real thing</h1>
<p>The simulation kernel supports real-time and hardware-in-the loop simulation
via a plugin interface. Functioning, extensively commented source code examples
will help you quickly implement your own application-specific hardware-in-the-loop simulation.
Network emulation capability is available as part of model packages like the INET Framework.</p>
<div style="clear:both"></div>

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
