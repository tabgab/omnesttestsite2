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
    <style type="text/css">
.row td {
    border-bottom: 1px solid lightgray;
    padding-bottom: 20px;
}
    </style>
    <script src="common/enlargeit.js" type="text/javascript"></script>
</head>

<body>
<?php print_leadin($tour_menu, __FILE__); ?>

<img class="pic right rounded" width=200 src="images/misc/omnest-engine.png" alt="todo" onclick="enlarge(this);"/>
<h1>High-performance simulation kernel lets you utilize your hardware</h1>
<p>Models are written in C++, and execute on top of a streamlined simulation kernel
to provide high event throughput. Diagnostic and animation features pose minimal
overhead when not in use.

OMNEST simulations execute fast and scale very well, which can be surprising
given the amount of features in the simulation library. TODO revise <!--TODO ez copy/paste a 'what is' oldalrol -->
</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/insight.png" alt="Runtime Environment" onclick="enlarge(this);"/>
<h1>Graphical simulation runtime environment gives you a deep insight into running simulations</h1>
<p>Simulations can be run in an graphical interactive runtime environment that
lets you explore the simulation model,
animates packet transmissions and other events,
lets you pause the model and run it in various modes,
look at logs, peek into queues, buffers, state variables, etc.
This feature helps reduce debugging time, and is also useful when demonstrating the model to 3rd parties.</p>
<div style="clear:both"></div>

<img class="pic right rounded" width=200 src="images/tour/parallel.png" alt="todo" onclick="enlarge(this);"/>
<h1>Parallel simulation allows you to use all of your computing power at once</h1>
<p>Simulation models that meet the requirements can be run in parallel on clusters or multiprocessors.
Parallel simulation runs on top of MPI, and employs conservative synchronization.
Using named pipes or other communication means instead of MPI is also possible.</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/hardware.png" alt="todo" onclick="enlarge(this);"/>
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
