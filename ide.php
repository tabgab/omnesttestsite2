<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Tour of the Simulation IDE</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
    <style type="text/css">
.row td {
    border-bottom: 1px solid lightgray;
    padding-bottom: 20px;
}
    </style>
    <script src="common/enlargeit.js" type="text/javascript"></script>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Tour of the Simulation IDE</h1></div>

<p>The OMNEST Simulation IDE supports all stages of a simulation project:
developing, building, configuring and running simulation models, and
analyzing results. It also supports visualizing simulation execution traces
as sequence charts, and generating documentation. This page is intended
to give you a brief overview of the Simulation IDE.</p>

<h2>Model Editing</h2>

<img class="pic left rounded" width=200 src="images/screenshots/network-editor-thumb.png" alt="Network Editor" onclick="enlarge(this);" longdesc="images/screenshots/network-editor.png"/>

<p>Networks and other components can be edited in the NED (NEtwork Description)
editor graphically or in source mode. Changes made in one
representation are immediately reflected in the other. The NED language
defines the appearance, parameters and connection points of module components
(termed <i>modules</i>), and also the submodules and internal connections (netlist).
NED has support for parametric topologies, interfaces, inheritance, hierarchical
packages and many other language features necessary for creating and
working with large model frameworks. The source editor offers live error
markers, intelligent Content Assist, Go To Declaration, Inheritance View
and other convenience features.</p>

<div style="clear:both"></div>

<h2>C++ Editing</h2>

<img class="pic left rounded" width=200 src="images/screenshots/cc-editor-thumb.png" alt="C++ Editing" onclick="enlarge(this);" longdesc="images/screenshots/cc-editor.png"/>

<p>Simulation components are implemented in C++, using the OMNEST simulation
library. OMNEST relies on Eclipse's C/C++ Development Tooling (CDT),
one of the finest C++ IDEs in existence, for efficient editing.
CDT offers content assist, navigation, code templates, refactoring and
many other features. Makefiles and the C++ build are managed automatically,
but can be manually tweaked if necessary.</p>

<div style="clear:both"></div>

<h2>Configuration Editor</h2>

<img class="pic left rounded" width=200 src="images/screenshots/config-editor-thumb.png" alt="Configuration Editor" onclick="enlarge(this);" longdesc="images/screenshots/config-editor.png"/>

<p>Simulation models and the simulation kernel can be configured and parameterized
using configuration files. The configuration editor provides a form-based
view of all configuration options, grouped by topics. The configuration can
also be edited in source mode; changes made in one representation are immediately
reflected in the other. Configuration file syntax allows several model
parameters to be set together by using wildcard patterns for the parameter's name and location,
avoiding repetition and redundancy. It also lets you define parameter studies,
that is, multiple runs that iterate over several values of a parameter (or parameters),
each repeated <i>N</i> times with different random number seeds.
The editor offers live error markers, content assist, informative tooltips,
view of the parameterized module tree, and many other useful features.</p>

<div style="clear:both"></div>

<h2>Graphical Runtime Environment</h2>

<img class="pic left rounded" width=200 src="images/screenshots/runtime-thumb.png" alt="Graphical Runtime Environment" onclick="enlarge(this);" longdesc="images/screenshots/runtime.png"/>

<p>Simulations can be run under several user interfaces, including a command-line
interface for batch execution and a graphical interactive runtime environment.
The graphical runtime allows the user to explore the simulation model and
stop, resume or single-step execution; animates packet transmissions and other events;
displays log messages from model components; allows the user to peek into queues, buffers,
state variables and other objects; and provides other useful features.</p>

<div style="clear:both"></div>

<h2>Sequence Chart</h2>

<img class="pic left rounded" width=200 src="images/screenshots/seqchart-thumb.png" alt="Sequence Chart" onclick="enlarge(this);" longdesc="images/screenshots/seqchart.png"/>

<p>One of the unrivalled features of OMNEST is being able to record the
simulation history and visualize it on an interactive sequence chart in
the IDE. The sequence chart includes simulation events, messages
sent between simulation components and C++ method calls across components.
The sequence chart can be zoomed, panned, filtered, etc. The default
time-to-coordinate mapping is nonlinear; it compresses very long
time gaps and enhances small ones in order to make them fit and remain
observable on the finite-size screen. Images can be saved in several formats,
including SVG. Special care was taken to ensure that the tool remains useful for
large simulation models and log files: chart contents can be filtered
in many ways (by modules and module types, event types, message types,
time, etc) to reduce the amount of information to be plotted to a manageable volume;
compound modules can be collapsed into single axes; various details
can be turned on and off. Due to random access and lazy loading, the tool
remains useful for file sizes beyond 4GB as well.
The sequence chart tool can be invaluable help in tracking down protocol errors,
and in showing off and documenting model operation.
</p>

<div style="clear:both"></div>

<h2>Result Analysis</h2>

<img class="pic left rounded" width=200 src="images/screenshots/scave-thumb.png" alt="Result Analysis" onclick="enlarge(this);" longdesc="images/screenshots/scave.png"/>

<p>The result analysis tool in the IDE allows you to process and plot simulation
results in various ways. Simulation results (scalars, summary statistics,
histograms, time series, etc.) are written into result files during execution;
these files also record various details about the simulation run, such as
the time of execution, and the name of the network and its parameterization.
The result analysis tool allows you to select a subset of all result files
to work with, and displays their contents organized in various ways.
You can filter the result items you are interested in, and plot
them. Processing steps such as averaging or smoothing vector data
can also be applied before plotting. Data and graphics can be exported
in various formats, and the way the plots have been produced
(data filter, processing operations, chart type, chart attributes, etc.)
can be saved as recipes, which makes it easy to reproduce the
same plots after re-running the simulation.
</p>

<div style="clear:both"></div>

<h2>Generating Documentation</h2>

<img class="pic left rounded" width=200 src="images/screenshots/neddoc-thumb.png" alt="Documentation Generator" onclick="enlarge(this);" longdesc="images/screenshots/neddoc.png"/>

<p>The IDE allows you to generate hyperlinked HTML documentation from simulation
models and model frameworks. The documentation is generated from the network
description (NED) files and their comments much the same way as Javadoc for
Java or Doxygen for C++. The documentation will contain network diagrams,
inheritance and usage diagrams, and other useful diagrams as well, and
includes references to Doxygen-generated C++ documentation of the underlying
C++ model code.</p>

<div style="clear:both"></div>

<h2>Installing 3rd-party Eclipse Software</h2>

<img class="pic left rounded" width=200 src="images/screenshots/install-software-thumb.png" alt="Installing Software" onclick="enlarge(this);" longdesc="images/screenshots/install-software.png"/>

<p>Since the OMNEST Simulation IDE is a customized Eclipse instance,
you can install 3rd-party software into it from the
<a href="http://marketplace.eclipse.org" target="_blank">Eclipse Marketplace</a>
and other Eclipse plug-in sites with just a few clicks.</p>

<div style="clear:both"></div>

<h2>Read more</h2>

<ul class="links">
  <li>Next: <a href="demo-videos.php">Demo Videos</a>
</ul>

<?php print_leadout(); ?>
</body>
</html>
