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

<img class="pic left rounded" width=200 src="images/tour/puzzle.png" alt="todo" onclick="enlarge(this);"/>
<h1>Open and well-documented file formats let you integrate OMNEST into your workflow</h1>
<p>All model files and output files are plain text to make it easier for you to generate and/or process them
with your own custom tools or 3rd party software. We also provide command-line tools and libraries to manipulate them.</p>
<div style="clear:both"></div>

<img class="pic right rounded" width=200 src="images/tour/systemc-etc.png" alt="todo" onclick="enlarge(this);"/>
<h1>Integration with existing simulation software using SystemC or HLA gives you interoperability</h1>
<p>OMNEST allows you to mix native and SystemC modules in the same simulation program,
without the performance penalty usually associated with co-simulation.
For example, this allows you to place your transaction-level or register-level SystemC models
into OMNEST network simulations or architectural models. OMNEST can also take part in HLA federations,
and can be extended to interoperate with other simulators as well.</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/cogwheel.png" alt="todo" onclick="enlarge(this);"/>
<h1>Seamless embedding into your proprietary software makes you even more competitive</h1>
<p>Simulations can be redistributed, and your users will be able to run them with different
parameter settings. The simulation kernel, model components or whole simulations can even be
embedded as libraries into your software products -- check our References for companies that
have already done that.</p>
<div style="clear:both"></div>

<img class="pic right rounded" width=200 src="images/tour/eclipse.png" alt="todo" onclick="enlarge(this);"/>
<h1>Eclipse-based IDE lets you integrate all your GUI tools in a single platform</h1>
<p>The OMNEST IDE is based on Eclipse, an integration platform many companies have decided to standardize on for their tooling.
Eclipse also has tremendous 3rd party extensions support, available at the Eclipse Marketplace.
TODO And you can also extend the IDE, contribute tools to OMNEST editors, etc!!!
</p>
<div style="clear:both"></div>

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
