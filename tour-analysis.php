<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST Tour - Result Analysis</title>
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

<img class="pic right rounded" width=200 src="images/tour/analysis.png" alt="Statistical Analysis Tool" onclick="enlarge(this);"/>
<h1>The result analysis tool helps you make the right decisions based on the collected data</h1>
<p>The result analysis tool in the IDE allows you to process and plot simulation results in various ways. Simulation results (scalars, summary statistics, histograms, time series, etc.) are written into result files during execution; these files also record various details about the simulation run, such as the time of execution, and the name of the network and its parameterization. The result analysis tool allows you to select a subset of all result files to work with, and displays their contents organized in various ways. You can filter the result items you are interested in, and plot them. Processing steps such as averaging or smoothing vector data can also be applied before plotting. Data and graphics can be exported in various formats, and the way the plots have been produced (data filter, processing operations, chart type, chart attributes, etc.) can be saved as recipes, which makes it easy to reproduce the same plots after re-running the simulation.</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/seqchart.png" alt="Sequence Chart Tool" onclick="enlarge(this);"/>
<h1>The sequence chart helps you understand the dynamic behaviour of your model</h1>
<p>
Simulations can record a detailed event log that can be visualized as a sequence chart, facilitating understanding of the model.
One of the unrivalled features of OMNEST is being able to record the simulation history and visualize it on an interactive sequence chart in the IDE. The sequence chart includes simulation events, messages sent between simulation components and C++ method calls across components. The sequence chart can be zoomed, panned, filtered, etc. The default time-to-coordinate mapping is nonlinear; it compresses very long time gaps and enhances small ones in order to make them fit and remain observable on the finite-size screen. Images can be saved in several formats, including SVG. Special care was taken to ensure that the tool remains useful for large simulation models and log files: chart contents can be filtered in many ways (by modules and module types, event types, message types, time, etc) to reduce the amount of information to be plotted to a manageable volume; compound modules can be collapsed into single axes; various details can be turned on and off. Due to random access and lazy loading, the tool remains useful for file sizes beyond 4GB as well. The sequence chart tool can be invaluable help in tracking down protocol errors, and in showing off and documenting model operation.</p>
<div style="clear:both"></div>

<img class="pic right rounded" width=200 src="images/tour/integration.png" alt="todo" onclick="enlarge(this);"/>
<h1>Integration with industry standard analysis tools allows you get the best of all</h1>
<p>todo</p>
<div style="clear:both"></div>

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
