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
</head>

<body>
<?php print_leadin($tour_menu, __FILE__); ?>

<img class="pic right rounded" width="200" src="images/tour/disk.png" alt=""/>
<h1>Simulation models can be easily set up to record useful statistics</h1>
<p class="lefttext">Support for statistics recording can be easily added to model components
(if not built in already), and the actual amount and form of data to be recorded
to disk can be dynamically configured.

You can record time series, histograms, statistical summaries, and
simple scalars like count or average, and you can also turn recording on/off globally,
by modules or by statistics.

<!--
<p>Support for statistics recording can be easily added to model components
(if not built in already), and the actual amount and form of data to be recorded
to disk can be dynamically configured.

You can record time series, histograms, statistical summaries, and
simple scalars like count or average, and you can also turn recording on/off globally,
by modules or by statistics.
-->

<!--
You can turn recording on/off globally,
by modules or by statistics, and configure the detail level:
as time series, histogram, statistical summary, or simple scalars
like count or average.

<p>Components can be easily instrumented to produce raw statistical data,
and the simulation framework can record them in different forms:
as time series, histogram, statistical summary, or simple scalar like count or average.

ComponentsSimulations can be easily instrumented to produce data el

<p>Components can be easily instrumented to produce raw statistical data,
and the simulation framework can record them in different forms:
as time series, histogram, statistical summary, or simple scalar like count or average.

record all kinds of data: scalars, summary statistics, histograms, time series, etc.

The amount and form of data to be actually recorded to disk can be dynamically configured
-->

</p>
<div style="clear:both"></div>

<img class="pic left rounded" width="200" src="images/tour/analysis.png" alt=""/>
<h1>The result analysis tool helps you make the right decisions based on the collected data</h1>
<p class="righttext">The result analysis tool in the IDE allows you to
browse, filter, process and plot simulation results in various ways, and even lets you
automate the process of producing the charts. Charts are also interactive, and let you zoom
into interesting areas. Data and graphics can be exported in
various formats, ready for inclusion into your reports.</p>
<div style="clear:both"></div>

<img class="pic right rounded" width="200" src="images/tour/integration.png" alt=""/>
<h1>Integration with industry standard analysis tools allows you get the best of all</h1>
<p class="lefttext">You can harness the power of your favourite statistics program (Matlab, GNU R and others)
for processing OMNEST simulation results. We use open file formats,
and provide export/import functions and extension packages to help you make this work.</p>
<!--
<p>Open and easy-to-parse output file formats allow you to import simulation results
into your favourite statistics program, such as Matlab, R or Python packages,
for further analysis. OMNEST provides tools to facilitate this process,
such as CSV export and an R package to directly read result files into R.</p>
-->
<div style="clear:both"></div>

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
