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
are assembled using a domain-specific language. Components facilitate code reuse, and also help you
choose the right abstraction level: a component in a model can be later
replaced with a more detailed or a less detailed version.
</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/ide-tools.png" alt=""/>
<h1>The Simulation IDE provides you with state-of-the-art development tools</h1>
<p>There are tools for all stages of a simulation project: developing C++ code,
assembling, configuring and running simulation models, and analyzing results. 
The IDE provides modern C++ editing, both graphical and text editing for 
networks, both form based and text editing for parametrization, with many useful and widely used functions.
</p>
<div style="clear:both"></div>

<img class="pic right rounded" width=200 src="images/tour/debug.png" alt=""/>
<!--<h1>Debugging the model and tracking the simulation during runtime are at your fingertips</h1>-->
<!--<h1>The C++ debugger and the graphical simulation runtime helps you hunt down bugs easily</h1>-->
<h1>The Simulation IDE provides you with an advanced domain specific debugger</h1>
<h1>The C++ debugger and the graphical simulation runtime forms an advanced domain specific debugger</h1>
<p>
todo
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
