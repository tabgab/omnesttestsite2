<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Discrete Event Simulation</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Discrete Event Simulation</h1></div>

<p><strong>With OMNeT++/OMNEST you can simulate</strong> anything that can
be mapped into a number of entities sending messages to each other. What the
entities and messages mean is up to you. That is, one can simulate queueing
networks ("jobs" or "customers" travelling among queues), computer networks
(computers exchanging packets), businesses (employees sending documents and
files to each other and making phone calls), hardware architectures (e.g.
a CPU making requests to the disk, or units communicating on a bus) and
many other systems.</p>

<p>You assemble the simulated "network" from components written in C++ (by
you or by someone else). Once the components are present, no further C++
programming necessary to build simulations from them - you will use a
high-level declarative language for this task, or the graphical editor.
OMNEST/OMNeT++ provides the simulation library (simulation kernel) and the
execution environment, and various GUI and non-GUI tools for creating and
running the model, and evaluating the results.</p>

<p>The OMNEST/OMNeT++ simulation kernel is very extensible, and can
accommodate special needs such as parallel/distributed simulation,
real-time simulation (emulation), database integration, and embedding. OMNEST/OMNeT++ comes
with source code to make custom model development easier and faster, and is backed with
superior support.</p>


<h2>Features</h2>

<ul>
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

<?php print_next_links($product_menu, __FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
