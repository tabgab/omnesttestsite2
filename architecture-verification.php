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

<div id="header"><h1>Architecture Verification</h1></div>

<p>The OMNEST simulation framework's component-oriented architecture
makes it ideally suited to architectural simulation of complex hardware
and software systems, for example HPC systems, networks-on-chip,
and in general, problem domains where a complex system's behavior
needs to be simulated with high performance.</p>

<h2>Benefits</h2>

<div class="pic right">
<img src="images/misc/arch-example-switch.png" width=300>
<div>Illustration: an example switch architecture</div>
</div>

<p>OMNEST helps you deal with complexity by providing a <b>component architecture</b>
that allows you to build the model hierarchically in a top-down or
bottom-up fashion. Components can represent any level of detail that is
appropriate for your simulation study, from cycle-accurate models to
high-level functional models. The component architecture also makes it possible
to have multiple implementations with varying level of detail for a given
component, or to replace a single component with a composite one.
These features allow you to write the simulation model on the appropriate abstraction level
and still have the flexibility to modify it later.</p>

<p><b>Existing model frameworks</b> (e.g. for NoC simulation) may be useful for your project;
see the <a href="simulation-models.php#nocs">Simulation Models</a> page for more information.</p>

<p>Simulation <b>performance</b> is ensured by careful design and the use of C++
for both models and the simulation kernel and library.
When needed, distributed parallel simulation capability is available for
speeding up model execution and for distributing memory requirements.</p>

<p>If you are simulating <b>hardware architectures</b>, OMNEST's
<a href="systemc-integration.php">SystemC integration feature</a>
can be extremely useful.  Both RTL and higher-level SystemC modules
can be used in OMNEST simulations without loss of performance.</p>

<p><b>Hardware-in-the-loop</b> (emulation), and <b>co-simulation</b> (connecting
an OMNEST simulation to other simulators) are also within reach.</p>


<h2>Case Studies</h2>

<ul>
<li><a href="casestudy-ibmzurich.php">Simulation of Next-Generation Supercomputing Systems at IBM Research</a>
<li><a href="casestudy-photonic.php">Architectural Exploration of Chip-Scale Photonic Interconnection Networks</a>
<li><a href="casestudy-infiniband.php">Improving the Performance of InfiniBand in a Supercomputing Cluster</a>
</ul>

<br>

<?php print_next_link("application-areas.php", "Back to Application Areas"); ?>

<?php print_leadout(); ?>
</body>
</html>
