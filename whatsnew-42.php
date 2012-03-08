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

<div id="header"><h1>What's New in OMNEST 4.2</h1></div>

<h2>Simulation Core &amp; Tools</h2>

<p>A very brief summary of the changes and new features in the simulation core and tools:</p>

<ul>
  <li>revised and expanded User Guide and User Manual
  <li>improved C++ debugging experience for standard containers
  <li>enabled pretty-printing of variables in gdb using Python scripts (pretty printers are available for certain OMNEST classes)
  <li>64-bit executables on OS X
  <li>updated MSYS and MinGW binaries in the Windows distribution
  <li>improvements in iteration variable handling in Ini files
  <li>users can now contribute their own result filters and NED functions
  <li>changed and expanded measurement unit support
  <li>improved message compiler (opp_msgc)
  <li>bugfixes and other smaller improvements
</ul>

<h2>Eclipse Platform</h2>

<ul>

<li><b>Updated Eclipse Platform
</b><br/><p>The IDE is now based on <a href="http://download.eclipse.org/eclipse/downloads/drops/R-3.7-201106131736/eclipse-news-part1.html">Eclipse 3.7.1</a>
and <a href="http://wiki.eclipse.org/CDT/User/NewIn80">CDT 8.0.1.</a>
(Click on the links to review the changes in Eclipse and CDT.)</p>
<img src="images/whatsnew-42/42-version.png" border="0">
<br/><br/>

<li><b>Eclipse Marketplace
</b><br/><p>You can use the Eclipse Marketplace to install additional
features into the IDE by selecting <strong>Help | Eclipse Marketplace...</strong></p>
<img src="images/whatsnew-42/42-marketplace.png" border="0">
<br/><br/>

</ul>

<h2>NED Editor</h2>

<ul>


<li><b>Error Markers on Connections
</b><br/><p>Connections with an error are now annotated with a marker
in the graphical editor.</p>
<img src="images/whatsnew-42/42-ned-connection-errormarker.png" border="0">
<br/><br/>

<li><b>Package Names in Graphical Editor
</b><br/><p>The graphical editor now displays the package
name at the top of the canvas.</p>
<img src="images/whatsnew-42/42-ned-packagename.png" border="0">
<br/><br/>

<li><b>Visible Self-connections
</b><br/><p>Connections that start and end at the same module are now
represented by arcs in the top-right corner of the module. Previously, self-connections
were represented only by a small arrow head. </p>
<img src="images/whatsnew-42/42-ned-selfconnection.png" border="0">
<br/><br/>

<li><b>Rearranged Context Menu
</b><br/><p>The context menu in the graphical editor has been rearranged
to increase its usability.</p>
<img src="images/whatsnew-42/42-ned-context-menu.png" border="0">
<br/><br/>

<li><b>Changing the Visual Appearance of the Modules
</b><br/><p>A new Properties dialog has been introduced that lets you
change the name, type, vector size and visual appearance of modules and channels.
The dialog is accessible from the context menu or by pressing
<strong>Ctrl-Enter</strong> after selecting an item or several items together.
</p>
<img src="images/whatsnew-42/42-ned-properties.png" border="0" width="640">
<br/><br/>

<li><b>Changing Module Type and Vector Index
</b><br/><p>The 'General' tab in the properties dialog
allows you to change the name, vector size and type of a module.
</p>
<img src="images/whatsnew-42/42-ned-properties2.png" border="0">
<br/><br/>

<li><b>Enhanced Type Selection Dialog
</b><br/><p>The Open NED Type dialog now shows you the project name where
the opened type is defined. This is especially useful if you are working with
multiple open projects.</p>
<img src="images/whatsnew-42/42-ned-typeselectiondialog.png" border="0">
<br/><br/>

<li><b>Excluding NED Packages
</b><br/><p>The IDE now allows you to exclude specific NED packages
from the NED path. NED files in those packages will not generate errors and they
cannot be edited in the NED editor. This feature is useful for disabling certain
parts of your project.</p>
<img src="images/whatsnew-42/42-ned-folderexclusion.png" border="0">
<br/><br/>


</ul>


<h2>C++ Development</h2>

<ul>


<li><b>Clean Local Project Only
</b><br/><p>The new '<strong>Clean Local</strong>' action on the project context menu
allows you to clean only the selected project without invoking the 'Clean' action
on referenced projects. This is useful if your project references a third party project
(e.g. the INET Framework) and you want to clean only your own project, but not the
third party one.</p>
<img src="images/whatsnew-42/42-cpp-clean-local.png"/>
<br/><br/>

<li><b>Partition your Project into Features
</b><br/><p>The IDE now allows you to partition your projects into smaller
parts called 'Features'. Features can depend on each other and can be enabled/disabled
independently. The IDE handles the C++ source and NED package exlusion/inclusion
automatically, based on your feature selection. Features can also define macros which
will be passed to the compiler, so it is possible to write conditional code that depends
on the enablement of certain features. This is especially useful for large projects
like the INET Framework. See the User Guide for further details.</p>
<img src="images/whatsnew-42/42-cpp-features.png" width="640"/>
<br/><br/>

</ul>

<h2>INI Editor</h2>

<ul>


<li><b>Rearranged INI Editor Pages
</b><br/><p>The pages in the form based INI editor have been rearranged
for better usability.</p>
<img src="images/whatsnew-42/42-ini-rearranged-editor-tree.png" width="640"/>
<br/><br/>

</ul>

<h2>Launcher</h2>

<ul>


<li><b>Getting the Command Line
</b><br/><p>The IDE launcher now prints out the command line to the console
before starting your simulation. You can use this information to start
your simulation from the command prompt.</p>
<img src="images/whatsnew-42/42-launcher-commandline.png"/>
<br/><br/>

<li><b>Profiling with Valgrind
</b><br/><p>On Linux systems, the IDE now allows you to start and profile
your program using 'valgrind'. This allows you to detect memory errors and other
programming mistakes. This feature is available only on Linux systems where
valgrind is installed.</p>
<img src="images/whatsnew-42/42-launcher-profiling.png"/>
<br/><br/>

</ul>

<h2>Sequence Chart</h2>

<ul>


<li><b>Enhanced Navigation
</b><br/><p>The context menu now contains additional actions to move to a
certain simulation event or simulation time.</p>
<img src="images/whatsnew-42/42-seq-gotoevent.png"/>
<br/><br/>

</ul>
<br/>
<h2><a href="whatsnew-41.php">What's New in OMNEST 4.1 <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></h2>

<?php print_leadout(); ?>
</body>
</html>
