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

<?php print_next_tourstep_links_small(__FILE__); ?>

<img class="pic right rounded" style="margin-top: 26px;" width="200" src="images/tour/tour-analysis-record.png" alt=""/>
<h1>Simulation models can be easily set up to record useful statistics</h1>
<p class="lefttext">Support for statistics recording can be easily added to model components
(if not built-in already), and the actual amount and form of data to be recorded
to disk can be dynamically configured.
OMNEST allows you to record time series, histograms, statistical summaries, and
simple scalars like count or average, and you can also turn recording on/off globally,
by modules or by statistics.

<!--
<p>Components can be easily instrumented to produce raw statistical data,
and the simulation framework can record them in different forms:
as a time series, histogram, statistical summary, or simple scalar like count or average.

<p>Components can be easily instrumented to produce raw statistical data,
and the simulation framework can record them in different forms:
as a time series, histogram, statistical summary, or simple scalar like count or average.
-->

</p>
<div class="separator"></div>

<img class="pic left rounded" style="margin-top: 12px;" width="200" src="images/tour/tour-analysis-tool.png" alt=""/>
<h1>The result analysis tool helps you make the right decisions based on the collected data</h1>
<p class="righttext">The result analysis tool in the OMNEST IDE allows you to
browse, filter, process, and plot simulation results in various ways, and even lets you
automate the process of producing the charts. Charts are also interactive and let you zoom
into interesting areas. Data and graphics can be exported in
various formats, ready for inclusion into your reports.</p>
<div class="separator"></div>

<img class="pic right rounded" style="margin-top: 12px; margin-right: 10px;" width="200" src="images/tour/tour-analysis-integration.png" alt=""/>
<h1>Integration with industry-standard analysis tools allows more freedom</h1>
<p class="lefttext">You can harness the power of your favorite statistics package (Matlab, Python/SciPy/Pandas,
GNU R, and others) for a detailed evaluation of your simulation results. OMNEST records results in
open file formats and provides export/import functions and extension packages to help you process
them in the tool of your choice.</p>
<div class="separator"></div>

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
