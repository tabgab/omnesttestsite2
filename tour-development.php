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
</head>

<body>
<?php print_leadin($tour_menu, __FILE__); ?>

<img class="pic right rounded" width=200 src="images/tour/components.png" alt=""/>
<h1>Component-based modeling lets you build your models from reusable, self-contained blocks</h1>
<p>Simulation models are built from reusable, self-contained components that
are assembled using a domain-specific language. 

<!--
Due to the component model,
simulation models are easier to understand and maintain. They can be combined in unexpected ways

<span style="color: red;">TODO: the following statement is false</span>

(because components do not interact with each other directly on the C++ level,
only via means provided by OMNEST, e.g. messages).
-->

Components facilitate code reuse, and also help you
choose the right abstraction level: a component in a model can be later
replaced with a more detailed or a less detailed version.
<!--
and you can also replace a single component with a composite one or vice versa.
-->
</p>
<div style="clear:both"></div>


<img class="pic left rounded" width=200 src="images/tour/ide-tools.png" alt=""/>

<h1>The Simulation IDE provides you with state-of-the-art development tools</h1>
<p>There are tools for all stages of a simulation project: developing,
assembling, configuring and running simulation models, and analyzing results.

<!--
TODO:
State of the art C++ editing.
Models and model components can be edited graphically or in source mode.
Simulations can record a detailed event log that can be visualized as a
sequence chart, facilitating understanding of the model. Simulation results
can be post-processed and plotted in the IDE's analysis tool.
-->
</p>
<div style="clear:both"></div>


<img class="pic right rounded" width=200 src="images/tour/debug.png" alt=""/>
<h1>Debugging the model and tracking the simulation during runtime are at your fingertips</h1>
<p>
todo
<!--
THIS is a duplicate of another in the High-Performance section

Simulations can be run in a graphical interactive runtime environment that
lets you explore the simulation model,
animates packet transmissions and other events,
lets you pause the model and run it in various modes,
look at logs, peek into queues, buffers, state variables, etc.
This feature reduces debugging time, and is also useful when demonstrating the model to 3rd parties.
TODO this is the same as on the next page!
-->

</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/understand.png" alt=""/>
<h1>The sequence chart helps you understand the dynamic behavior of your model</h1>
<p>You can configure simulations to record a detailed history, and visualize it on an
interactive sequence chart in the IDE. The chart includes 
events, messages sent between components, C++ method calls across
components, etc. This tool can be an invaluable help in tracking down
model errors, and in showing off and documenting model operation.</p>
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
<img class="pic left rounded" width=200 src="images/tour/open-source.png" alt=""/>
<h1>Open source code allows you to easily customize and extend existing models at your will</h1>
<p>Models can be customized and extended in unforeseen ways according to your needs.</p>
<div style="clear:both"></div>
-->

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
