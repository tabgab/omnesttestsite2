<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>OMNEST - The Open Simulator</title>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST - an Embeddable Discrete Event Simulator Network" />
	<meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework"  />
	<link rel="stylesheet" type="text/css" href="common/omnest.css">

</head>

<body>

<!-- Start Container -->
<div id="container">

<?php include("common/top_inc.php"); ?>

</div>
	<!-- End Main Menu -->



	<div style="clear: both;">

	<!-- Start Content -->
	<div id="content">

<div id="header"><h1>OMNEST Documentation</h1></div>

<p>OMNEST comes with the following documentation. Note: network simulation
frameworks have their own documentation, they are not listed here.
Most documents are available via the html-based Help system of
the Simulation IDE as well.</p>

<table class="fancytable">
  <thead>
    <tr>
      <th>Document</th>
      <th>Format</th>
      <th>Description</th>
    </tr>
  </thead>

  <tbody>

    <tr class="sep"><td colspan="3">Base</td></tr>

    <tr>
      <td class="doctitle">Installation Guide</td>
      <td>pdf</td>
      <td>
        Provides instructions on how to install OMNEST on Windows, Mac OS X and
        selected Linux distributions. Also gives directions on how to build and
        install OMNEST on other Linux distributions and arbitrary Unix and
        Unix-like systems.
      </td>
    </tr>

    <tr>
      <td class="doctitle">OMNEST Manual</td>
      <td>pdf, html</td>
      <td>
        A comprehensive and in-depth description on using OMNEST, from principles
        to programming, parameterizing and running simulations and evaluating results.
        Also covers advanced topics like parallel distributed simulation, extending
        the simulator with custom schedulers, and embedding simulations into 3rd party
        applications. Does not cover the Simulation IDE (see IDE User Guide).
      </td>
    </tr>

    <tr>
      <td class="doctitle">Simulation API&nbsp;Reference</td>
      <td>html</td>
      <td>
        A cross-referenced HTML documentation of the C++ simulation library,
        generated from header files and source comments.</td>
    </tr>

    <tr>
      <td class="doctitle">NEDXML API&nbsp;Reference</td>
      <td>html</td>
      <td>A rarely-needed cross-referenced HTML documentation of the library that
      lets you programmatically access and manipulate NED source files.</td>
    </tr>

    <tr class="sep"><td colspan="3">IDE</td></tr>

    <tr>
      <td class="doctitle">IDE User Guide</td>
      <td>pdf, html</td>
      <td>
        Provides a detailed coverage of using the Simulation IDE and its
        functionality. Covers model (NED) editing; C++ editing and build; parameterizing
        and configuring models; launching simulations; debugging, tracing and
        inspecting simulations; visualizing simulation history on sequence charts;
        analysing simulation results; generating model documentation; and other tasks.

      </td>
    </tr>

    <tr>
      <td class="doctitle">IDE Customization Guide</td>
      <td>pdf, html</td>
      <td>
        Describes how one can create custom wizards that appear under the
        <i>File &gt; New</i> menu of the IDE. These wizards can generate projects,
        networks, network nodes, C++ sources and other files. No Java or
        C++ programming is required for authoring such wizards, and they
        require no installation in the IDE.
      </td>
    </tr>

    <tr>
      <td class="doctitle">IDE Developers Guide</td>
      <td>pdf, html</td>
      <td>
        Documents how one can extend the Eclipse-based Simulation IDE by writing
        plug-ins in Java. Contains installation instructions for the Eclipse PDE
        (Plug-in Development Environment), and gives an overview of the
        additional APIs exposed by OMNEST plug-ins. (Detailed API documentation
        is provided in the form of Javadoc comments.)
      </td>
    </tr>

    <tr class="sep"><td colspan="3">Introductory</td></tr>

    <tr>
      <td class="doctitle">IDE Overview</td>
      <td>pdf</td>
      <td>
        A short document that introduces the main functionality (editors, views, etc.)
        of the Simulation IDE; illustrated with many screenshots.</td>
    </tr>

    <tr>
      <td class="doctitle">Tictoc Tutorial</td>
      <td>html</td>
      <td>
        A short tutorial for programming simulations in OMNEST. It takes
        the user through 15+ simulations with increasing complexity,
        introducing new features at each step.
      </td>
    </tr>

    <tr class="sep"><td colspan="3">Migration</td></tr>

    <tr>
      <td class="doctitle">Migration Guide</td>
      <td>pdf, html</td>
      <td>
        Provides an overview and instructions on how to migrate simulations
        written for earlier (3.x) versions of OMNEST or OMNeT++, using
        the provided migration tools and some manual work.
      </td>
    </tr>

    <tr>
      <td class="doctitle">API Changes</td>
      <td>txt</td>
      <td>
        Enumerates the list of simulation API changes in each OMNEST version.
        Items are classified as <i>new feature</i>, <i>incompatible change</i>,
        <i>incompatible but minor change</i>, <i>deprecation</i>,
        <i>removal of deprecated item</i>, <i>informational note</i>.
      </td>
    </tr>

  </tbody>
</table>

<br /><br />

	</div>
	<!-- End Content -->

	<!-- Start Right -->
	<?php include("common/right_inc.php"); ?>
	<!-- End Right -->



		</div>

</div>
<!-- End Container -->

<?php include("common/footer_inc.php"); ?>

</body>
</html>
