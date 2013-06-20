<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST Overview</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>OMNEST Overview</h1></div>

<p><b>OMNEST is an object-oriented discrete event network simulation framework.</b>
The framework has a generic architecture,
which allows it to be applied to various problem domains where complex behavior
needs to be simulated with high performance: protocol modeling,
modeling of wired and wireless communication networks, architectural
simulation of high-performance clusters, to name a few.</p>

<p>The noncommercial version, OMNeT++, has a huge academic
user community, with several groups publishing and supporting
simulation models, and several hundred papers published each year
on the simulation of wireless networks and other topics.</p>

<p>Our users commonly mention the following items when asked why they
chose OMNEST (or OMNeT++):</p>

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
      and can be combined in unexpected ways (because components usually do not interact with
      each other directly on the C++ level, only via means provided by OMNEST, e.g. messages)

  <li><b>flexible</b> -- the simulator and models can be extended in unforeseen ways;
      exotic scenarios such as interfacing with other simulators and external systems,
      parallel simulation, emulation, and combinations of the above, can be realized;
      and the full source code is there to study and debug when needed
</ul>


<h3>COMPONENT MODEL</h3>

<div class="pic right">
<img src="images/misc/overview-modules.png" alt=""/>
<div style="width:300px">OMNEST models are composed of nested
modules that primarily communicate by exchanging messages</div>
</div>

<p>One of the fundamentals of the OMNEST framework is the component-based
architecture for simulation models. Models are built from reusable
components, called modules, which can be combined in various ways. The
depth of module nesting is not limited. Modules communicate primarily by
message passing, via connections or direct sending. Module behavior can be
programmed in C++, using the simulation infrastructure OMNEST provides.</p>

<p>Component architecture provides multiple benefits:</p>

<ul>
   <li>simulation models are easier to understand and maintain, and can be combined in unexpected ways,
       (because components do not interact with each other directly on the C++ level,
       only via means provided by OMNEST, e.g. messages).
   <li>facilitates code reuse
   <li>helps you choose the right abstraction level: a component in a model can be later
       replaced with a more detailed or a less detailed version,
       and you can also replace a single component with a composite one or vice versa.
</ul>

<p>Components are assembled using a domain-specific language, NED, that can
be edited both graphically and in source. The NED language defines the
appearance, parameters and connection points of components (<i>modules</i>),
and also the submodules and internal connections (netlist).
NED has support for parametric topologies, packages, inheritance, interfaces,
metadata annotation, documentation comments, and many other language features
necessary for creating and working with large model frameworks.</p>

<p>Simulation models can be parameterized via module parameters. Module parameters
can carry simple (int, double, string, bool) and compound data types (e.g. XML),
and can be set to values like <i>normal(1.0,0.3)</i> to act as random number sources.
To reduce the amount of configuration needed to parameterize a model, parameters
may have default values, and both NED and configuration files allows several model
parameters to be set together by using wildcard patterns.</p>

<p>Configuration files also let you define parameter studies, that is, multiple runs
that iterate over several values of a parameter (or parameters), each repeated N
times with different random number seeds.</p>

<h3>THE SIMULATION LIBRARY</h3>

<p>Simple modules are programmed in C++, using the APIs provided by the simulation
library. This functionality includes:</p>

<ul>
    <li><strong>Message passing</strong><br>
    Modules communicate primarily by message passing, via connections or direct sending.
    Messages may represent jobs, network packets, control information or other entities.
    OMNEST provides support for generating C++ message classes (e.g. packet headers)
    from compact descriptions. Timers are also represented with messages that a module sends to itself.
    </li>

    <li>random numbers, TODO!
    <li>logging,
    <li>access and runtime manipulation of models,
    <li>topology extraction
    <li>many others.

    <li><strong>Publish-subscribe communication</strong><br>
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

<h3>PERFORMANCE, INTEGRATION AND EXTENSIBILITY</h3>

<p>OMNEST allows many interesting possiblities:</p>

<ul>
    <li><strong>Open interfaces</strong><br>
    All model files and output files are plain text to make it easier for you to process
    them with your own custom or 3rd party tools. We also provide command-line tools
    and libraries to manipulate them.</li>

    <li><strong>Extensible</strong><br>
    C++ plug-in interfaces are made available to customize various aspects of the simulation kernel:
    event scheduling, configuration and model parameterization, result recording and more.

    <li><strong><a href="embedding.php">Embeddable simulation kernel</a></strong><br>
    You can create your own applications that rely on the OMNEST simulation
    kernel internally for simulation functions: the simulation kernel, model components
    or even whole simulations can be embedded into your program as C++ libraries.
    <a href="systemc-integration.php">Read more&nbsp;&raquo;</a>

    <li><strong>Parallel simulation</strong><br>
    Simulation models can be executed using parallel distributed simulation
    on clusters or multicore/multiprocessor architectures,
    to speed up the simulations or to distribute memory requirements.
    Simulation models don't need to be instrumented for parallel simulation, but they need
    to obey certain restrictions (e.g. no global variables and no direct access of
    components that are instantiated in a different partition)

    <li><strong>Multiple Replications in Parallel</strong><br>
    OMNEST lets you speed up steady-state simulations using the
    <a href="http://www.cosc.canterbury.ac.nz/research/RG/net_sim/simulation_group/akaroa/about.chtml" target="_blank">Akaroa</a>
    package. Akaroa runs multiple replications of the model on nodes of a computing cluster.
    (Akaroa license needs to be obtained separately from its authors.)</li>

    <li><strong>Real-time and hardware-in-the-loop simulation</strong><br>
    The simulation kernel supports real-time and hardware-in-the loop simulation
    via a plugin interface. A functioning and extensively commented source code
    example will help you to quickly implement your own application-specific
    hardware-in-the-loop simulation.

    <li><strong>Network emulation capabilities</strong><br>
    Available as part of model packages like the INET Framework.

    <li><strong><a href="systemc-integration.php">SystemC integration</a></strong><br>
    The OMNEST-SystemC integration feature
    allows for mixing OMNEST and SystemC modules in the same simulation program,
    without the performance loss usually characteristic of co-simulation solutions.
    <a href="systemc-integration.php">Read more&nbsp;&raquo;</a>

    <li><strong>HLA support</strong><br>
    Allows for connecting OMNEST with other simulators via HLA / IEEE 1516.

</ul>

<h3>PLATFORMS</h3>

<p>Simulations can be run on Windows and practically in any Unix-like environment
that is powerful enough and has a modern C++ compiler, including Mac OS X and Linux.</p>

<p>The Simulation IDE is currently available on Windows, Mac OS X and Linux.</p>

<br>

<?php print_next_links($product_menu, __FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
