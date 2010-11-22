<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Features</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>OMNEST Features</h1></div>

<h3>GENERAL</h3>

<ul>
    <li><strong>Hierarchical, component-based modeling</strong><br>
    Models are built from reusable, self-contained components; this feature
    provides flexibility and reduces maintenance costs. Models are defined
    using a high-level declarative language (NED), and can be edited
    graphically or in source mode. NED provides packages, inheritance,
    interfaces, parametric types, metadata annotation and other features
    that make it scale.</li>

    <li><strong>C++-based, high performance simulation kernel</strong><br>
    Atomic components are programmed in C++, using a well-defined API to the simulation library.
    The use of C++, together with the streamlined simulation kernel, provide high event/sec throughput.</li>

    <li><strong>Integrated, extensible Simulation IDE</strong><br>
    The Eclipse-based OMNEST Simulation IDE supports all phases of designing, running and evaluating
    simulations. The IDE is extensible with 3rd party software from the Eclipse Marketplace and other
    Eclipse plug-in sites.</li>

    <li><strong>Powerful GUI for tracing, debugging and animating your simulations</strong><br>
    Simulations can be run under an graphical interactive runtime environment or a
    command-line interface for batch execution. The graphical runtime environment provides
    animation and tracing, and lets you peek into objects and variables in the C++ code
    while the simulation executes.</li>

    <li><strong>Wide range of applicability</strong><br>
    OMNEST/OMNeT++ has proven itself in the simulation of wired and wireless communication networks,
    high-level architectural simulation of hardware/software systems, performance modeling
    (queueing networks) and other areas.</li>

    <li><strong>Models are self-documenting</strong><br>
    The documentation tool generates high-quality documentation from commented model source code, with diagrams, tables and cross-references. Integrates well with the Doxygen C++ documentation tool.</li>

    <li><strong>Responsive and expert support</strong><br>
    Your requests are answered directly by the developers, not by tech-support personnel.</li>

</ul>

<h3>PROGRAMMING MODEL AND FACILITIES</h3>

<ul>
    <li><strong>Message passing</strong><br>
    Modules communicate primarily by message passing, via connections or direct sending.
    Messages may represent jobs, network packets, control information or other entities.
    OMNEST provides support for generating C++ message classes (e.g. packet headers)
    from compact descriptions. Timers are also represented with messages that a module sends to itself.
    </li>

    <li><strong>Parameters</strong><br>
    Simulation models can be parameterized via module parameters. Module parameters
    can carry simple (int, double, string, bool) and compound data types (e.g. XML),
    and can be set to values like <i>normal(1.0,0.3)</i> to act as random number sources.
    To reduce the amount of configuration needed to parameterize a model, parameters
    may have default values, and multiple parameters can be set together by using
    wildcard patterns for the parameter's name and location.</li>

    <li><strong>Signals framework</strong><br>
    OMNEST provides a signals framework that is used for publish-subscribe
    communication among modules, obtaining notification about structural model changes,
    exposing statistics, and so on. Signals emitted from a module propagate up to the
    root in the module hierarchy, and modules and other code can subscribe to selected
    signals at any level.</li>

    <li><strong>Result recording</strong><br>
    Model code can record simulation results directly, or expose them as signals and let
    the simulation framework take care of recording them in the appropriate form and
    level of detail. Results can be recorded as scalars (e.g. the sum, count, average,
    other other property of the values), as histograms, as statistical summaries,
    or all values as vectors (i.e. time series). Result files can be plotted using
    the IDE, or programmatically from GNU R (we have an R package that understands
    result files) or other programming environments.</li>
</ul>

<h3>OPENNESS</h3>

<ul>
    <li><strong>Source code is provided</strong><br>
    We provide the full source code to increase your understanding of the simulation
    framework, to help in debugging, and to enable you to make modifications should it
    ever become necessary.</li>

    <li><strong>Open interfaces</strong><br>
    All model files and output files are plain text to make it easier for you to process
    them with your own custom tools or 3rd party ones. We also provide command-line tools
    and libraries to manipulate them.</li>

    <li><strong>Open-source simulation models</strong><br>
    Many open-source, community-supported simulation models and model frameworks are available from omnetpp.org and other websites.</li>

    <li><strong>Extensible</strong><br>
    C++ plug-in interfaces are made available to customize various aspects of the simulation kernel:
    event scheduling, configuration and model parameterization, result recording and so on.</li>
</ul>

<h3>ADVANCED</h3>

<ul>
    <li><strong>Multiple Replications in Parallel</strong><br>
    OMNEST lets you speed up steady-state simulations using the Akaroa package.
    Akaroa runs multiple replications of the model on nodes of a computing cluster.</li>

    <li><strong>Real-time and hardware-in-the-loop simulation</strong><br>
    The simulation kernel supports real-time and hardware-in-the loop simulation
    via a plugin interface. A functioning and extensively commented source code
    example will help you to quickly implement your own application-specific
    hardware-in-the-loop simulation.</li>

    <li><strong>Network emulation capabilities</strong><br>
    Available as part of model packages like the INET Framework.</li>

    <li><strong>Parallel simulation</strong><br>
    Parallel simulation on clusters or multiprocessors, with MPI and powerful
    conservative synchronization. Using named pipes or other communication means
    instead of MPI is also possible.</li>

    <li><strong>SystemC integration</strong><br>
    Allows for mixing OMNEST and SystemC modules in the same simulation program,
    without losing performance. (Co-simulation solutions found in other products
    usually incur quite significant performance penalty.)</li>

    <li><strong>HLA support</strong><br>
    Allows for connecting OMNEST with other simulators via HLA / IEEE 1516.</li>

<!-- TODO
    <li><strong>Java integration</strong><br>
    It is possible to develop simulation models in Java as well.</li>
-->

    <li><strong>Embeddable simulation kernel</strong><br>
    The simulation kernel can be embedded into 3rd party products as a C++ class library.
    See our References for companies that have already done so.</li>
</ul>

<h2>Read more</h2>

<ul class="links">
  <li>Next: <a href="references.php">References</a>
</ul>

<?php print_leadout(); ?>
</body>
</html>

