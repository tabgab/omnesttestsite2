<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - SystemC Support</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>SystemC Support</h1></div>

<img src="images/misc/systemc_logo.gif" class="right"/>

<p>
OMNEST makes it possible to create simulations that mix SystemC&#8482;
code and native OMNEST models. This feature is useful
if you have existing SystemC code (e.g. developed in-house or purchased as
IP blocks) that you would like to incorporate in OMNEST simulations. A
possible scenario is to test a wireless chip's SystemC IP block in an
OMNEST simulation, where radio channel modeling and higher-layer protocols
come from OMNEST network modeling frameworks. It is possible to embed both
RTL and higher-level (e.g. TLM) models; the latter is usually a
better choice. SystemC is a system specification and simulation library
from the Open SystemC Initiative (OSCI, <a href="http://www.systemc.org"
target="_blank">www.systemc.org</a>). </p>

<div class="pic left">
<img src="images/misc/systemc-integration.png" alt=""/>
<div style="width:270px">Using SystemC blocks in an OMNEST simulation</div>
</div>


<p><b>High Performance.</b> When running a mixed SystemC / OMNEST model
using our integration feature, SystemC and OMNEST modules will be part of
the same program, and will execute in the same OS process. This usually
results in orders of magnitude higher simulation speeds than distributed
solutions like co-simulation or HLA, and also allows simpler and more
fine-grained communication between modules. </p>

<p><b>How does it work?</b> SystemC models are C++ code and SystemC itself
is a C++ library, so SystemC models can be compiled/linked into existing
OMNEST simulations to form a single executable. Because both OMNEST modules
and SystemC modules are C++ objects, they can communicate via C++ method
calls. Timestamp-ordered execution of SystemC and OMNEST events is ensured
by a custom OMNEST scheduler. </p>

<p><b>As an extra benefit</b>, SystemC code embedded in an OMNEST simulation
has access to advanced OMNEST facilities like result recording, model
parameterization, random variable generation, and so on; even parallel
distributed simulation is possible.
</p>

<p>The OMNEST package contains several examples for mixed OMNEST-SystemC
simulations.
</p>

<?php print_leadout(); ?>
</body>
</html>
