<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - What's New in the IDE in the 4.1 Version</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>What's New in OMNEST 4.1</h1></div>

<h2>Simulation Core</h2>

<p>A very brief summary of the changes and new features in the simulation core:</p>

<ul>
  <li>introduction of a signals framework
  <li>signals-based result recording
  <li>declared statistics in NED files
  <li>statistics configurability in ini files
  <li>channel statistics
  <li>countless other improvements (check the change log included with OMNEST)
</ul>


<h2>NED Editor</h2>

<ul class ="list04">
<li><strong>New Eclipse Platform</strong><br />
<p>The IDE is now based on Eclipse 3.5.2 and CDT 6.0.2.</p>
<img src="images/whatsnew-41/41-version.png">
<br />
<br />
<li><strong>Manual Palette Filtering</strong><br />
<p>Palette items in NED editor can be filtered with a substring search.</p>
<img src="images/whatsnew-41/41-ned-palette-filter.png"/>
<br />
<br />
<li><strong>Adaptive Palette Ordering</strong><br />
<p>Submodule types that are related to the currently
used compound module and its submodules are displayed first in the NED editor palette.
Submodules that are already used in the compound module are placed at the top.
The <b>@labels</b> properties on the gates are also used to decide which other
submodules can be connected to the current ones.</p>
<img src="images/whatsnew-41/41-ned-palette-adaptive.png"/>
<br />
<br />
<li><strong>Connection Chooser Enhancements</strong><br />
<p>When two modules are connected with a connection, the editor
tries to guess which gates must be connected, based on <b>@labels</b> gate properties.</p>
<img src="images/whatsnew-41/41-ned-labels1.png"/>
<br />
<br />
<li><strong>Connection Rendering Enhancements</strong><br />
<p>Multiple and conditional connections can now be visually distinguished in the graphical editor.</p>
<img src="images/whatsnew-41/41-ned-connection-loop.png"/>
<br />
<br />
<li><strong>New Parameter Editor Dialog</strong> <br />
<p>A parameter editor dialog has been added for channel and module
parameters. It can be accessed using the context menu of the submodule or connection.</p>
<img src="images/whatsnew-41/41-ned-parameter-dialog.png"/>
<br />
<br />
<li><strong>Content Assist for Connections</strong> <br />
<p>Content assist is now supported for connection parameters (delay, datarate etc.).</p>
<img src="images/whatsnew-41/41-ned-channel-assist.png"/>
</td></tr>
<br />
<br />
<li><strong>Content Assist for Icons</strong> <br />
<p>Content assist is available for icons by pressing Ctrl+Space inside a display string.</p>
<img src="images/whatsnew-41/41-ned-icon-assist.png"/>
<br />
<br />
<li><strong>Content Assist for Colors</strong> <br />
<p>Content assist is available for colors by pressing Ctrl+Space inside a display string.</p>
<img src="images/whatsnew-41/41-ned-color-assist.png"/>
<br />
<br />
<li><strong>Content Assist for Statistics</strong> <br />
<p>Content assist is available for statistics by pressing
Ctrl+Space inside a <b>@statistic</b> property definition.</p>
<img src="images/whatsnew-41/41-ned-statistic-assist.png"/>
<br />
<br />
<li><strong>Support for @dynamic Property</strong> <br />
<p>Modules can be tagged with the <b>@dynamic</b> property. Dynamic modules are handled
exactly the same way as normal modules (i.e. content assist, validation and parameter lookup is working correctly),
except that the simulation kernel does not instantiate them automatically during network setup. Dynamic modules
are displayed as semi-transparent in the NED editor.</p>
<img src="images/whatsnew-41/41-ned-dynamic-module.png"/>
</ul>
<br /><br /><br />
<h2>INI Editor</h2>
<ul class ="list04">
<li><strong>Enhanced Content Assist in Ini Files</strong> <br />
<p>Content assist is now available for ini parameters and configuration options.
For parameter values, content assist also offers the list of NED functions.</p>
<img src="images/whatsnew-41/41-ini-content-assist.png"/>
<br />
<br />
<li><strong>Channel Parameters in Ini Files</strong> <br />
<p>Channel parameters can be set in ini files, too, using
the <b>**.channel.parametername =</b> syntax.</p>
<img src="images/whatsnew-41/41-ini-channel-assist.png"/>
<br />
<br />
<li><strong>Statistics Configuration from Ini File</strong> <br />
<p>Statistics can be configured in an ini file. Content assist is available for statistics-related options.</p>
<img src="images/whatsnew-41/41-ini-statistic-assist.png"/>
</ul>
<br /><br /><br />
<h2>Module Hierarchy view</h2>
<ul class ="list04">
<li><strong>Statistics and Signals in Module Hierarchy</strong> <br />
<p>In addition to parameters, the Module Hierarchy view
now also displays the @statistic and @signal properties of the modules.</p>
<img src="images/whatsnew-41/41-module-view.png"/>
</ul>
<br /><br /><br />
<h2>Launcher</h2>
<ul class ="list04">
<li><strong>Better Error Checking</strong> <br />
<p>The simulation launcher now checks for errors in open projects
before starting a simulation, and warns if there are any.</p>
<img src="images/whatsnew-41/41-errors-in-project.png"/>
</ul>
<br /><br /><br />
<h2>Sequence Chart</h2>
<ul class ="list04">
<li><strong>Attach Vectors to Sequence Charts</strong> <br />
<p>Attaching vectors to a Sequence Chart is more intuitive now.</p>
<img src="images/whatsnew-41/41-seq-vector-attach.png"/>
<br />
<br />
<li><strong>Show Related Vectors Only</strong> <br />
<p>After choosing a vector file, the IDE only offers the vectors
related to the selected module axis.</p>
<img src="images/whatsnew-41/41-seq-vector-attach2.png"/>
<br />
<br />
<li><strong>Method Calls on Sequence Charts</strong> <br />
<p>Direct method calls can be shown in the sequence chart.
Method calls are not displayed automatically, but can be turned on on the toolbar or in the
sequence chart context menu.</p>
<img src="images/whatsnew-41/41-seq-methodcalls.png"/>
</ul>
<br /><br /><br />
<h2>Result Analysis</h2>
<ul class ="list04">
<li><strong>New Tree View in Browse Data</strong> <br />
<p>An "All" tab has been added to the Browse Data page, showing all simulation results in a tree. The tree can
be configured freely to group the data several in different ways. Use the context menu to configure
the levels in the tree view.</p>
<img src="images/whatsnew-41/41-ana-browse-data.png"/>
<br />
<br />
<li><strong>Redesigned Filter</strong> <br />
<p>The filter interface on the Browse Data page has been reorganized to provide more space. Fields are also resizable by dragging the separators.</p>
<img src="images/whatsnew-41/41-ana-filter.png"/>
<br />
<br />
<li><strong>Properties for Dataset Nodes</strong> <br />
<p>Property View for nodes on the Dataset page.</p>
<img src="images/whatsnew-41/41-ana-properties.png"/>
<br />
<br />
<li><strong>Properties for Data Items</strong> <br />
<p>Property View for the data items on the Browse Data page</p>
<img src="images/whatsnew-41/41-ana-properties2.png"/>
<br />
<br />
<li><strong>Chart Sheet Columns</strong> <br />
<p>The number of chart columns can be set for a Chart Sheet.</p>
<img src="images/whatsnew-41/41-ana-sheet-columncount.png"/>
<br />
<br />
<li><strong>Separate Horizontal and Vertical Zoom</strong> <br />
<p>Separate horizontal and vertical zoom actions are available on the toolbar
and in the context menu. The context menu has been reorganized for better usability.</p>
<img src="images/whatsnew-41/41-ana-new-zoom.png"/>
<br />
<br />
<li><strong>>Charts on Sheet Fill the Window</strong> <br />
<p>Charts in a Chart Sheet fill the window horizontally. The minimum chart width is also configurable.</p>
<img src="images/whatsnew-41/41-ana-fillwindow.png"/>
<br />
<br />
<li><strong>Chart SVG Export 1</strong> <br />
<p>Charts can be exported in SVG format from the Dataset page's context menu.</p>
<img src="images/whatsnew-41/41-ana-export-chart.png"/>
<br />
<br />
<li><strong>Chart SVG Export 2</strong> <br />
Charts can be exported in SVG format from the chart context menu.</p>
<img src="images/whatsnew-41/41-ana-export-chart-from-sheet.png"/>
<br />
<br />
<li><strong>Editable Chart Line Titles</strong> <br />
<p>Line titles on charts are editable now.</p>
<img src="images/whatsnew-41/41-ana-editable-line-titles.png"/>
</ul>
<br /><br /><br />
<h2>Wizards</h2>
<ul class ="list04">
<li><strong>Add Your Own Wizards to the IDE</strong> <br />
<p>New wizards can be contributed by open projects. (In the screenshot, the
"New Queueing Model" wizard was contributed by the "queueinglib" sample project.)</p>
<img src="images/whatsnew-41/41-wiz-queueing.png"/>
<br />
<br />
<li><strong>Custom Wizard Pages</strong> <br />
<p>Wizards contributed by projects may contain their own custom wizard pages.</p>
<img src="images/whatsnew-41/41-wiz-queueing2.png"/>
<br />
<br />
<li><strong>Topology Generation using Wizards</strong> <br />
<p>The IDE also contributes several generic topology generator wizards.</p>
<img src="images/whatsnew-41/41-wiz-topology.png"/>
<br />
<br />
<li><strong>Custom Page for each Topology Generator</strong> <br />
<p>Each topology generator has its own wizard page for configuration.</p>
<img src="images/whatsnew-41/41-wiz-topology-page.png"/>
<br />
<br />
<li><strong>Topology Import</strong> <br />
<p>Importing a topology from an external file is also possible.</p>
<img src="images/whatsnew-41/41-wiz-topology-import.png"/>
<br />
<br />
<li><strong>Wizard Wizards</strong> <br />
<p>There are several wizards that help in creating other wizards. It is possible to
create wizards based on an already existing simulation directory, or based on an other wizard.
Example wizards are also provided to help you quickly create your first wizard...</p>
<img src="images/whatsnew-41/41-wiz-wiz-menu.png"/>
<br />
<br />
<li><strong>New Wizard from an Existing One</strong> <br />
<p>New wizards can be created by either copying and modifying an existing similar one or
by generating some example code.</p>
<img src="images/whatsnew-41/41-wiz-wiz-selection.png"/>
<br />
<br />
<li><strong>New Wizards by Specifying their Widgets</strong> <br />
<p>New wizards can be created by including some specific widgets as a starting point...</p>
<img src="images/whatsnew-41/41-wiz-wiz-controls.png"/>
<br />
<br />
<li><strong>New Wizards by Specifying their Variables</strong> <br />
<p>New wizards can be created by textually specifying their input variables and the associated widget types.</p>
<img src="images/whatsnew-41/41-wiz-wiz-variables.png"/>
<br />
<br />
<li><strong>Wizard Cloning</strong> <br />
<p>Existing wizards can be cloned and used as a starting point.</p>
<img src="images/whatsnew-41/41-wiz-wiz-clone.png"/>
<br />
<br />
<li><strong>Wizard Page Editor</strong> <br />
<p>The wizard page (XSWT) editor and preview are available by double-clicking on XSWT files.</p>
<img src="images/whatsnew-41/41-wiz-xswt.png"/>
<br />
<br />
<li><strong>Wizard Template Editor</strong> <br />
<p>Template editor with syntax highlight and content assist support is available
to help you author new wizard content templates.</p>
<img src="images/whatsnew-41/41-wiz-ftl.png"/>
</ul>
<br /><br /><br />
<h2>Extending the IDE</h2>
<ul class ="list04">
<li><strong>Automatic Plugin Activation</strong> <br />
<p>in a project's "plugins" folder. This feature allows you to distribute IDE extensions together
with your project, and they will be automatically loaded and activated when your users open
the project.</p>
<img src="images/whatsnew-41/41-plugin-running.png"/>
</ul>

<br/>
<h2><a href="whatsnew-40.php">What's New in OMNEST 4.0 <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></h2>

<?php print_leadout(); ?>
</body>
</html>
