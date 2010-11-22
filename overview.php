<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Overview and Benefits</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>OMNEST &ndash; Overview and Benefits</h1></div>

<p>
OMNEST is the commercial version of the OMNeT++ object-oriented discrete
event simulation framework. The framework has a generic architecture,
which allows it to be applied to various problem domains where complex behavior
needs to be simulated with high performance: protocol modeling, validation
of hardware architectures, modeling of wired and wireless communication networks,
to name a few.  The noncommercial version, OMNeT++ has a huge
<a href="community.php">user community</a>
in the Academia, with several groups publishing and supporting
simulation models, and nearly a hundred papers published each year on
on the simulation of wireless networks and other topics.</p>

<div class="pic left">
<img src="images/misc/overview-modules.png" alt=""/>
<div style="width:300px">OMNEST models are composed of nested
modules that primarily communicate by exchanging messages</div>
</div>

<p>
<b>Infrastructure.</b> One of the fundamentals of the
OMNEST framework is the component-based architecture for simulation models.
Models are built from reusable components, so called modules, which can be
combined in various ways. The depth of module nesting is not limited.
Modules communicate primarily by message passing, via connections or direct sending.
Module behavior can be programmed in C++, using the simulation infrastructure
OMNEST provides. The framework includes services like module parameterization,
random numbers, result recording, publish-subscribe communication, logging,
dynamic module and link creation, topology extraction and many others.
</p>

<p>
<img src="images/misc/overview-ide.png" class="right rounded" />
<b>IDE.</b> Simulation models can be designed and evaluated in an Eclipse-based
integrated Simulation IDE, and can be run utilizing various interfaces:
from simple command-line interfaces that are ideally suited for batch execution,
to sophisticated graphical animated user interfaces which can
be used for debugging or demonstration purposes. You can also extend the IDE
with software from the Eclipse Marketplace and other Eclipse plug-in sites.</p>

<p>
<b>Scalability, extensibility, SystemC, HLA</b>. OMNEST simulations run very efficiently, due
to the use of C++ and the careful design of the simulation library.
Simulation models can also be executed using parallel distributed simulation,
to gain speed-up or to distribute memory requirements.
Real-time execution and emulation (hardware-in-the-loop) are supported as well.
The OMNEST-SystemC integration capability allows OMNEST simulations to directly
incorporate parts written in SystemC, without loss of performance. OMNEST
simulations can also participate in HLA federations.</p>

<p>
You can create your own applications that may rely on the OMNEST simulation
kernel internally for simulation functions. OMNEST is written with such embedding
scenarios in mind. The simulation kernel, modules, even whole simulations can be
embedded into your program as C++ libraries.</p>


<div class="framed">

<h2 style="color:#e54426">What Our Users Say</h2>

<p>When we asked our customers and users why they chose OMNEST (or OMNeT++)
for their work or research, they brought up the following reasons (most of this
was personal communication via email and at the annual OMNeT++ workshops):</p>

<ul>
  <li><b>very efficient</b> -- OMNEST simulations execute fast and scale very well,
      which can be surprising given the amount of features in the simulation library

  <li><b>fast learning</b> -- some C++ knowledge is required, but the programming model and
      the API can be picked up quickly, and one can become productive in a short time

  <li><b>great community</b> -- OMNeT++ has a huge user community, and a lot of information
      is freely available on the Internet; this is very useful when one bumps into a problem,
      as the solution is often just a web search away (compare that with proprietary
      tools where publicly available information is often limited to marketing materials)

  <li><b>component model</b> -- simulation models are easier to understand and maintain
      and can be combined in unexpected ways (because components do not interact with
      each other directly on the C++ level, only via means provided by OMNEST, e.g. messages)

  <li><b>not limiting</b> -- the simulator and models can be extended in unforeseen ways;
      exotic scenarios such as interfacing with other simulators
      and external systems, parallel simulation, emulation, and combinations of the above,
      can be realized; and when something doesn't work as expected, the full source code
      is there to study and debug
</ul>

</div>

<br>

<h2>Read more</h2>

<ul class="links">
  <li>Next: <a href="features.php">OMNEST Features</a>
</ul>

<?php print_leadout(); ?>
</body>
</html>
