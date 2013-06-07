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

<!--
     this page is for those who are already familiar with these kinds of models,
     so we don't need to show example models etc...
-->

<p>OMNEST is a component-oriented network simulation framework.
The generic architecture of the simulator allows OMNEST to be
applied to various problem domains where complex behavior needs to be
simulated with high performance; for example protocol modeling,
simulation of hardware architectures and computer networks.</p>

<p>
<img src="images/misc/queueing-network.png" class="right"/>
Classic performance models are built from more-or-less standardized
components that have relatively simple behavior: queues, resource
allocation/deallocation, splitting and joining jobs, updating variables,
etc. If your model is of this type, you probably don't need OMNEST
because you cannot make use of its competitive advantage (simulating
complex behavior with high performance). However, if you need to simulate a
complex, real-world system, chances are you cannot
express its behavior with standardized performance modeling components
alone.
</p>

<p>
Today's technology is incredibly complex, and it can be a difficult task to
find the right abstraction level for the simulation model. If the model is
too detailed, it takes a long time to develop and validate, and it also
runs slower. If it is too simple and ignores something important, your
results may not have anything to do with the real system. It is a valid
approach to start the model simple (so you have quickly have some initial
results), and refine it gradually by adding details, depending on what you
learn along the way about the system.
</p>

<h2>The OMNEST Approach</h2>

<div class="pic right rounded">
<img src="images/misc/terminal.png"/>
<div>An example OMNEST performance model</div>
</div>

<p>
We provide you with building blocks to create an initial performance
model with the "classic" approach, so that you quickly have approximate results.
Then you can start refining the original model, and add more details.
You can build upon our blocks using C++ class inheritance, or you can
just copy and modify their sources. Our performance modeling library
can thus give you a head-start for building detailed, high-performance
simulation models.
</p>

<p>
The fact that OMNEST models are written in C++ also allows you
to seamlessly integrate "foreign" C or C++ code into the simulation,
such as production code from your company's products or an open-source
protocol implementation.
</p>

<h2>Why not <i>&lt;name-of-another-simulation-package&gt;</i>?</h2>

<p>Why not choose a simulation package based on Java or a special-purpose
simulation language, or a "no-programming" GUI simulation software?
One of these other solutions may work for you; however, consider this:</p>

<ul>
  <li><p><b>If your model cannot fit within the natural concepts of the simulation package,
      performance will suffer.</b> And maybe you will also struggle implementing the model.
      If your model is behaviorally complex, you will need to write additional
      code because you cannot express behavior using the building blocks provided
      by the tool alone. Special-purpose simulation languages are often not very good at
      expressing general programming concepts or when they do, performance is
      often not as great as with C/C++. Performance may also be a problem with
      Java code. You need to consider what performance you want to get out of your
      simulator.</p>
  <li><p><b>Do you have C/C++ code that you may want to integrate into the simulation?</b>
      If you choose a non-C/C++ based simulator, you may still be able to integrate
      your C/C++ code into the simulation, but it is never as easy as when
      the whole simulation is already in C++ as in OMNEST.</p>
  <li><p><b>Do you expect that you'll need to interface your simulation with
      external systems?</b> Connect to other simulators, perform real-time
      hardware-in-the-loop simulations, and so on.
      If so, then double-check if the simulation package allows it.
      With OMNEST, the entire simulator is completely open for extension
      via C/C++, so you <i>know</i> for sure that you will be able to do
      whatever you need to do.</p>
  <li><p><b>Does your simulation potentially involve data communication or computer
      networks?</b> When modeling an IT system (e.g. a SOA application), network
      performance and the behavior of network protocols may be an important factor
      in the overall performance, so that they need to be simulated explicitly at some point.
      (For example, TCP can exhibit very complex stateful nonlinear behavior
      when it experiences congestion.)
      In such simulations, the large body of protocol simulation frameworks
      that exist for OMNEST can be very useful, as they can be used as
      building blocks in your simulation.</p>
</ul>

<p>Why not write a monolithic C program?</p>

<ul>
  <li><p><b>You may end up reinventing the wheel.</b> Simulation time
      management, reading parameters from file, random number generation,
      recording results and plotting results, etc. are tasks that OMNEST solves,
      and solves them well. So why would you spend time implementing them from
      scratch?</p>
  <li><p><b>Debugging and validation will also take longer.</b> Why?
      OMNEST provides tools to step through, animate, trace and visualize
      a simulation model using a graphical runtime environment. An unrivalled
      feature of OMNEST is that it can visualize simulation execution on
      interactive sequence charts drawn from recorded log files -- this feature
      alone can be indispensable for debugging and validating nontrivial simulation
      models.</p>
  <li><p><b>It will be difficult to reuse the same program for similar simulation
      projects, or adapt to variations in the current project.</b> OMNEST simulations
      are composed of modules, which are natural units of reuse, reduce
      inter-dependencies between parts of the model, and also make graphical
      editing possible. Compared to using plain C or C++, OMNEST modules make
      your simulation models a lot easier to reconfigure and to adapt to your
      next simulation project.</p>
</ul>

<h2>Case Studies</h2>

<ul>
<li><a href="casestudy-afdx.php">Modeling Avionics Full-Duplex Switched Ethernet (AFDX) Networks</a>
</ul>

<?php print_next_links($product_menu, __FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
