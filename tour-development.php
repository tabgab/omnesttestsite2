<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST Tour - Model Development</title>
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
<?php print_leadin($tour_menu, __FILE__); ?>

<img class="pic right rounded" width=200 src="images/tour/components.png" alt="Component Model" onclick="enlarge(this);"/>
<h1>Component-based modeling lets you build your models from reusable, self-contained blocks</h1>
<p>Simulation models are built from reusable, self-contained components that are
are assembled using a domain-specific language. Due to the component model,
simulation models are easier to understand and maintain and can be combined in unexpected ways
(because components do not interact with each other directly on the C++ level,
only via means provided by OMNEST, e.g. messages).


Components also facilitate code reuse, and also help you
choose the right abstraction level: a component in a model can be later
replaced with a more detailed or a less detailed version,
and you can also replace a single component with a composite one or vice versa.
</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/parametrizable.png" alt="todo" onclick="enlarge(this);"/>
<h1>Easily and concisely parameterizable models reduce your maintenance costs</h1>
<p>Simulation components can (and usually do) expose several parameters to allow configuring
their behaviour. This makes it easier to reuse components for new simulations,
and provides a great degree of freedom. Even for large models, the size of configuration
can be kept manageable due to the use of default values and wildcard assigments.</p>
<div style="clear:both"></div>


<img class="pic right rounded" width=200 src="images/tour/ide-tools.png" alt="todo" onclick="enlarge(this);"/>
<h1>The Simulation IDE provides you with state-of-the-art development tools</h1>
<p>The Simulation IDE with tools for all stages of a simulation project: developing,
assembling, configuring and running simulation models, and analyzing results.

TODO:
State of the art C++ editing.
Models and model components can be edited graphically or in source mode.
Simulations can record a detailed event log that can be visualized as a
sequence chart, facilitating understanding of the model. Simulation results
can be post-processed and plotted in the IDE's analysis tool.
</p>
<div style="clear:both"></div>


<img class="pic right rounded" width=200 src="images/tour/debug.png" alt="todo" onclick="enlarge(this);"/>
<h1>Debugging the model and tracking the simulation during runtime are at your fingertips</h1>
<p>Simulations can be run in an graphical interactive runtime environment that
lets you explore the simulation model,
animates packet transmissions and other events,
lets you pause the model and run it in various modes,
look at logs, peek into queues, buffers, state variables, etc.
This feature helps reduce debugging time, and is also useful when demonstrating the model to 3rd parties.
TODO this is the same as on the next page!</p>
<div style="clear:both"></div>

<!--TODO:
    <li><strong>Source code is provided</strong><br>
    We provide the full source code to increase your understanding of the simulation
    framework, to help in debugging, and to enable you to make modifications should it
    ever become necessary.</li>

    <li><strong>Models are self-documenting</strong><br>
    The documentation tool generates high-quality documentation from commented model source code, with diagrams, tables and cross-references. Integrates well with the Doxygen C++ documentation tool.</li>
-->

<!-- TODO models page
<img class="pic left rounded" width=200 src="images/tour/open-source.png" alt="todo" onclick="enlarge(this);"/>
<h1>Open source code allows you to easily customize and extend existing models at your will</h1>
<p>Models can be customized and extended in unforeseen ways according to your needs.</p>
<div style="clear:both"></div>
-->

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
