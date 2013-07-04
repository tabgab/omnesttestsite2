<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST Tour - OMNEST Integrates</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($tour_menu, __FILE__); ?>

<img class="pic right rounded" width="200" src="images/tour/puzzle.png" alt=""/>
<h1>Open and well-documented file formats let you integrate OMNEST into your workflow</h1>
<p class="lefttext">All model files and output files are plain text to make it easier for you to generate and/or process them
with your own custom tools or 3rd party software. OMNEST also provides command-line tools and C++ libraries to manipulate them.</p>
<div style="clear:both"></div>

<img class="pic left rounded" width="200" src="images/tour/systemc-etc.png" alt=""/>
<h1>Integration with existing simulation software using SystemC or HLA gives you interoperability</h1>
<p class="righttext">OMNEST allows you to mix native and SystemC modules in the same simulation
without the performance penalty usually associated with co-simulation.
OMNEST can also take part in HLA federations, and can be extended to interoperate with other simulators by other means.</p>
<div style="clear:both"></div>

<img class="pic right rounded" width="200" src="images/misc/omnest-engine.png" alt=""/>
<h1>Seamless embedding into your proprietary software makes you even more competitive</h1>
<p class="lefttext">Simulations can be redistributed, and your users will be able to run them with different
parameter settings. The simulation kernel, model components or whole simulations can even be
embedded as libraries into your software products, as some of our customers have.</p>
<div style="clear:both"></div>

<img class="pic left rounded" width="200" src="images/tour/eclipse.png" alt=""/>
<h1>Eclipse-based Simulation IDE allows you to extend it with 3rd party and in-house tools and functions</h1>
<p class="righttext">The OMNEST IDE is based on Eclipse, a software product that many companies use
as an integration platform. 3rd party extensions, such as UML tools and source code analyzers,
are available from the Eclipse Marketplace.
You can also extend the Simulation IDE and its tools with new functions,
for example domain-specific model validation.</p>
<div style="clear:both"></div>

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
