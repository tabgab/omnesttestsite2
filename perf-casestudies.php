<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Performance Modeling Case Studies</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Performance Modeling &ndash; Case Studies</h1></div>

<h2>Modeling Avionics Full-Duplex Switched Ethernet</h2>

<div class="pic right">
<img src="images/misc/airplane.png"/>
<div>AFDX End Systems in an Aircraft</div>
</div>

<p><i>In one of our projects, we helped a client build a simulation model
for aircraft on-board data networks based on the AFDX standard. The model
would be used for various purposes including performance evaluation and
reliability analysis. The base of the model was the <a
href="queueinglib.php">OMNEST performance modeling library</a>. The library
allowed us to create the model quickly, and leaves room for gradual refinement
and extension in various directions.</i></p>

<p><b>Introduction.</b> AFDX provides networking services for internal aircraft communication. To
reduce costs, it is based on the Ethernet standard and deploys a switched
Ethernet network topology to deliver reliable and redundant data
transmission services for aircraft end systems (ES). Determining the
reliability and performance of complex AFDX networks with hundreds or
thousands of ESs is not an easy task. OMNEST was used to create a
simulation library that provides configurable ESs and switches that
can be used as building blocks for large AFDX networks. Models can be used
for system reliability and redundancy analysis by inserting link and
component failures, and can be invaluable when determining the packet
delays and jitters at various points in the system. A network configuration
is usually determined by the number of  ESs and the applications
running on them plus the physical and virtual connections among them. (AFDX
uses preconfigured virtual circuits to deliver data between ESs.)</p>

<p><b>Considerations.</b> As a first step in our modeling process, we
investigated what model components are readily available for OMNEST. Because
AFDX uses Ethernet as the base technology and uses higher layer protocols
like TCP when transmitting data between applications, we considered <a
href="inet-framework.php">INET Framework</a>. INET contains both Ethernet
modules and higher layer protocols like IP, TCP and UDP. We concluded using
INET Framework would give a too detailed model and would deliver answers to
questions we are not really interested in (like how the upper level
protocols like TCP behave in an AFDX network). Ethernet in AFDX is also so
simple (full-duplex without contention or auto-configuration, etc.) that we
did not need the complex implementation found in INET.</p>

<div class="pic left rounded">
<img src="images/misc/afdx-network.png"/>
<div>A Minimal Redundant AFDX Network</div>
</div>

<p> Our next take was the <a href="queueinglib.php">Performance Modeling
Library</a> delivered with OMNEST as a "sample simulation". This library is a complete
implementation of several simple blocks (with source code) that can be used
to build up queueing networks. Queues, servers, classifiers, switches and
resource management blocks were all readily available. It was exactly at
the level of detail we needed, but we were concerned what would happen if we
needed some functionality that could not be expressed using the pre-built
blocks. Some simulation software forces you to express all model
behavior using predefined blocks, which may turn into a "graphical
programming" nightmare if there is an "impedance mismatch" between the
functionality to be implemented and the vehicles the simulation tool
provides. However, in OMNEST these problems can be solved by customizing
the library blocks (by C++ inheritance or directly changing the source code)
or replacing a block with an alternative implementation while keeping its
external interface.</p>

<div class="pic right rounded">
<img src="images/misc/afdx-endsystem.png"/>
<div>Model of an AFDX End System</div>
</div>

<p><b>Creating the model.</b> First we created a rough implementation using
the pre-built blocks. The first model was showing signs of life in less
than 4 hours. After that we started refining the blocks. We added AFDX
specific data (virtual link and partition IDs, etc.) to the source packet
generators, then we refined our Ethernet MAC module which was originally
just a stock Server block. At first we had also a Switch implementation
that had hard coded virtual link routing information, but later changed
this to read the link information from a configuration file. </p>

<p><b>Conclusion.</b> We found that using the queueing library was very
rewarding in our simulation model, as it allowed us to build a model at the
right level of abstraction. The top-down design method in OMNEST made it possible
to refine the model gradually, without having to fight unnecessary
complexity or suffer performance overhead from an excessively detailed
model. It was useful to have a complete control over the behavior of the
model, by being able to modify or replace the initial building blocks.</p>

<h2>Some use cases for gradual improvement</h2>

<ul>
  <li>network communication in a system can be initially modeled as a queue
      with a fixed bandwidth, and later replaced with detailed protocol models</li>
  <li>parallel processing of jobs: initially modeled as a multi-server queue;
      or later one can explicitly model communication, CPU, disk access etc.</li>
  <li>routing can be first a simple hardcoded function; later a table-driven,
      proper implementation (as was suggested in the above AFDX model)</li>
  <li>user behavior can be easily modeled a Poisson process and later replaced
      as something more sophisticated (like modeling web browsing behavior)</li>
</ul>

<h2>Read more</h2>

<ul class="links">
  <li>Next: <a href="queueinglib.php">The performance modeling library</a>
</ul>

<?php print_leadout(); ?>
</body>
</html>

