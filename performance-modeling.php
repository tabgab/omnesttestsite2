<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Performance Modeling</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Performance Modeling</h1></div>

<p><b>OMNEST lets you build queueing and resource allocation based performance models
easily by combining existing blocks,</b> and when more details need to be accommodated into the model,
OMNEST helps you by allowing you to refine, specialize, enhance or replace
model blocks, and you can also create new blocks.</p>

<img class="right" src="images/misc/performance-modeling.png" alt="">

<h2>Approach</h2>

<p>We provide you with queueing and resource allocation building blocks
to create an initial performance model, so that you quickly have approximate results.
</p>

<p>Then you can start refining the original model, and add more details.
You can build upon our blocks using C++ class inheritance, or you can
just copy and modify their sources. Our performance modeling library
can thus give you a head-start for building detailed, high-performance
simulation models.</p>

<p>One approach for modeling software-hardware systems such as clouds is
to model hardware (memory, disk, CPU cycles, etc.) as resources, and
software (e.g. web requests) as transactions that allocate and deallocate
resources as they are being processed. See the <i>cloud simulation case study</i> below
for illustration of this idea.</p>

<h2>Models</h2>

<p>Click for the overview of the <a href="queueinglib">OMNEST performance modeling library (queueinglib)</a>.
Existing <a href="simulation-models#cloud">simulation models</a> for cloud computing,
storage area networks (SANs) and other domains may also be useful.</p>


<div class="pic right rounded">
<img src="images/misc/terminal.png"/>
<div>An example OMNEST performance model</div>
</div>

<h2>Benefits</h2>

<ul>
  <li>Enjoy the expressiveness and performance of C++!
      The fact that OMNEST models are written in C++ also allows you
      to seamlessly integrate foreign C or C++ code into the simulation.
  <li>Enjoy OMNEST's extensibility (e.g. co-simulation)
  <li>Enjoy the accessibility of other simulation models available for OMNEST (e.g. network protocols)
  <li>Enjoy the facilities provided by the OMNEST simulation engine
  <li>Reuse models for the next project
</ul>


<h2>Case Studies</h2>

<ul>
<li><a href="casestudy-cloud">Performance Simulation of Clouds at IBM Research</a>
<li><a href="casestudy-afdx">High-Level Modeling of AFDX Networks</a>
</ul>

<!-- <?php print_next_links($product_menu, __FILE__); ?> -->

<?php print_leadout(); ?>
</body>
</html>
