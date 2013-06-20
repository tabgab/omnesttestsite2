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
<p>Simulation programs can record all kinds of data: scalars, summary statistics,
histograms, time series, etc. The result analysis tool in the IDE allows you to
browse, filter, process and plot these results in various ways, and even lets you
store the "recipes" to avoid repeated work. Data and graphics can also be exported in
various formats, ready for inclusion in your reports.</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/seqchart.png" alt="Sequence Chart Tool" onclick="enlarge(this);"/>
<h1>The sequence chart helps you understand the dynamic behavior of your model</h1>

<span style="color: red;">TODO: this explanation is simply too long</span>

<p>
Simulations can record a detailed event log that can be visualized as a sequence
chart, facilitating understanding of the model. One of the unrivalled features of
OMNEST is being able to record the simulation history and visualize it on an
interactive sequence chart in the IDE. The sequence chart includes simulation
events, messages sent between simulation components and C++ method calls across
components. The sequence chart can be zoomed, panned, filtered, etc. The default
time-to-coordinate mapping is nonlinear; it compresses very long time gaps and
enhances small ones in order to make them fit and remain observable on the
finite-size screen. Images can be saved in several formats, including SVG. Special
care was taken to ensure that the tool remains useful for large simulation models
and log files: chart contents can be filtered in many ways (by modules and module
types, event types, message types, time, etc) to reduce the amount of information to
be plotted to a manageable volume; compound modules can be collapsed into single
axes; various details can be turned on and off. Due to random access and lazy
loading, the tool remains useful for file sizes beyond 4GB as well. The sequence
chart tool can be invaluable help in tracking down protocol errors, and in showing
off and documenting model operation.</p>
<div style="clear:both"></div>

<img class="pic right rounded" width=200 src="images/tour/integration.png" alt="todo" onclick="enlarge(this);"/>
<h1>Integration with industry standard analysis tools allows you get the best of all</h1>
<p>todo</p>
<div style="clear:both"></div>

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
