<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Architecture Verification</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Architectural Exploration</h1></div>

<!--XXX
<p>OMNEST is well suited to the architectural simulation of complex hardware
and software systems, for example HPC systems, networks-on-chip,
and in general, problem domains where a complex system's behavior
needs to be simulated with high performance.</p>
-->

<p><b>Several customers use OMNEST for the architectural exploration of
high-performance computing systems,</b> such as the design of fast interconnects,
network-on-chip architectures and more.</p>

<img class="right" src="images/misc/architecture-verification.png" alt="">


<h2>Benefits</h2>

<p>The component architecture helps you deal with complexity by allowing
you to build the model hierarchically in a top-down or
bottom-up fashion. Components can represent any level of detail that is
appropriate for your simulation study, from high-level functional models
down to cycle-accurate models. The component architecture also makes it possible
to have multiple implementations with varying level of detail for a given
component, or to replace a single component with a composite one.
These features allow you to write the simulation model on the appropriate abstraction level
and still have the flexibility to modify it later.</p>

<p>Some more points to consider:</p>

<ul>
<li><b>Existing models</b> may be useful for your project; see the
<a href="simulation-models.php#nocs">Simulation Models</a> page for more information.

<li><b>Simulation performance</b> is ensured by careful design and the use of C++
for both models and the simulation kernel and library.

<li><b>Parallel simulation</b> capability is available for speeding up model execution
and for distributing memory requirements when needed.</p>

<li><b>SystemC integration</b>. If you are simulating hardware,
OMNEST's <a href="systemc-integration">SystemC integration feature</a>
can be useful.  Both RTL and higher-level SystemC modules can be used in
OMNEST simulations, without any performance loss.</p>

<li><b>Hardware-in-the-loop</b> (emulation), and <b>co-simulation</b> (connecting
an OMNEST simulation to other simulators) are also within reach.</p>
</ul>

<div class="pic right">
<img src="images/misc/arch-example-switch.png" width=300>
<div>Illustration: an example switch architecture</div>
</div>

<h2>Case Studies</h2>

<ul>
<li><a href="casestudy-ibmzurich">Simulation of Next-Generation Supercomputing Systems at IBM Research</a>
<li><a href="casestudy-photonic">Architectural Exploration of Chip-Scale Photonic Interconnection Networks</a>
<li><a href="casestudy-infiniband">Improving the Performance of InfiniBand in a Supercomputing Cluster</a>
</ul>

<div style="clear:both"></div>

<br>

<!-- <?php print_next_link("application-areas", "Back to Application Areas"); ?> -->

<?php print_leadout(); ?>
</body>
</html>
