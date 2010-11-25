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
and software systems, for example supercomputer architectures, on-chip networks,
multiprocessor systems, SOA architectures, and in general, problem domains
where a complex system's behavior needs to be simulated with high performance.
</p>

<p>See our <a href="archver-casestudies.php">case studies</a> on how others used
OMNEST to solve their problems.
</p>


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
and still have the flexibility to modify it later.
</p>


<p>Simulation <b>performance</b> is ensured by careful design and the use of C++
for both models and the simulation kernel and library.
If you are simulating hardware architectures, OMNEST's <b>SystemC</b> integration feature
can be extremely useful.  Both RTL and higher-level SystemC modules
can be used in OMNEST simulations without loss of performance.
When needed, distributed parallel simulation capability is available for
speeding up model execution and for distributing memory requirements. The simulation
model does not need to be instrumented for parallel simulation, but it needs
to obey certain restrictions (e.g. no global variables and no direct access of
components that may be instantiated in a different partition). Hardware-in-the-loop
and connecting an OMNEST simulation to other simulators (co-simulation)
are also supported. 
</p>


<h2>Read more</h2>

<ul class="links">
  <li>Next: <a href="archver-casestudies.php">Selected case studies</a>
  <li>Related: <a href="performance-modeling.php">Performance modeling with OMNEST</a>,
        <a href="network-simulation.php">Network simulation with OMNEST</a>
</ul>

<?php print_leadout(); ?>
</body>
</html>
