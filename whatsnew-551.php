<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - What's New in the 5.5 Version</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>What's New in OMNEST 5.5.1</h1></div>

<div id="content">

<div class="sect1">
  <div class="sectionbody">
  <div class="paragraph"><p>This release contains several
important fixes like JDK 11 and osgEarth 2.10 compatibility, a workaround
for long CDT indexing times, and several improvements in the simulation library.
</p></div>

  <div class="paragraph"><p>Core:</p></div>
  <div class="ulist"><ul>
    <li><p>Added the intuniformexcl() NED and C++ function. It returns a random integer with uniform distribution over [a,b), that is, including a and excluding b.</p></li>
    <li><p>The contents of resultfilters.h and resultrecorders.h are now public API, i.e. part of \<omnetpp.h>. This change allows one to derive new result filters/recorders by subclassing the built-in ones.</p></li>
    <li><p>A description string can now be specified when registering new result filters and recorders. New registration macros have been added for this purpose.</p></li>
    <li><p>cXMLElement was optimized to use less memory when large files are loaded.</p></li>
    <li><p>cHistogram now collects the number of positive and negative infinity values separately.</p></li>
    <li><p>SimTime: Added preciseDiv() for a precise division of an integer and a simulation time.</p></li>
    <li><p>cQueue, cPacketQueue: Added a constructor that accepts a comparator object (not just a function).</p></li>
    <li><p>cModule: Added containsModule() method.</p></li>
  </ul></div>

  <div class="paragraph"><p>Other:</p></div>
  <div class="ulist"><ul>
    <li><p>Several Qtenv-related fixes and improvements.</p></li>
    <li><p>Added support for osgEarth 2.10 and above.</p></li>
    <li><p>Updated IDE to Eclipse 4.11. This resolves compatibility issues with JDK 11.</p></li>
    <li><p>Workaround for long C++ indexer runtimes in the IDE.</p></li>
  </ul></div>

  </div>
  </div>

<br/>
<h2><a href="whatsnew-541.php">What's New in OMNEST 5.4.1 <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></h2>

<?php print_leadout(); ?>
</body>
</html>

