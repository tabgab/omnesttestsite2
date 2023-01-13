<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - What's New in the IDE in the 4.3 Version</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>What's New in OMNEST 4.3.1</h1></div>

<p>We are happy to announce the first update to OMNEST 4.3.
The focus of this update is to help first-time users get familiar with OMNEST;
it also contains some bug fixes and smaller improvements to the IDE.
There is no change in the simulation kernel and tools. Read on for details.</p>

<p>The IDE was made more friendly to first-time users:</p>

<ul>
  <li>When the IDE is started with an empty workspace (e.g. on first-time launch), it
  offers the user the following options: (1) Import the OMNEST sample simulations
  into the workspace; and (2) Download and install the INET Framework.</li>

  <li>The latter function is also available via the Help &gt; Install Simulation Models...
  menu item. The menu item brings up a dialog with the list of simulation models
  available for automated installation, and lets the user choose. Currently only
  the INET Framework is listed there, but it is planned to add further models.</li>

  <li>When the IDE is started for the first time, it now displays some helpful
  introductory pages in the editor area: "Getting Started" (practical advice
  for getting past the first 10 minutes spent in the IDE); "At a Glance"
  (explains the common file types like NED, msg and ini, and their purposes);
  "OMNEST Samples" (describes each example simulation in two sentences, then provides
  links for opening the project, viewing the README, launching the simulation, etc.)
  These pages are also available from the Help system (except the last one, which
  has a dedicated menu item under the Help menu.)</li>
</ul>

<p>Further IDE improvements:</p>

<ul>
  <li>IDE launcher script: fixed #670 (vmargs conflict between omnetpp.ini and the launcher script). This bug could cause IDE crashes by PermGenSpace exhaustion.</li>
  <li>Analysis Tool, Output Vector View: show "Go to" actions in the context menu (instead of the view's pulldown menu)</li>
  <li>Analysis Tool: fixed #389 (Useless items in the Statistic Name filter): The filter hints of combos is now computed from the result items filtered by the other 2 combos.</li>
  <li>Analysis Tool: fixed #388 (add '*.host[*].*' variant to module filter hints)</li>
  <li>Ability to import sample projects even if workspace is different from omnetpp/samples</li>
  <li>Trying to launch a closed project will now offer opening it</li>
  <li>NED documentation generator: fixed #672 (Illegal group reference error)</li>
  <li>Changed default appearance of the main welcome page to be more user friendly</li>
  <li>Some other bug fixes</li>
</ul>

<br/>
<h2><a href="whatsnew-43">What's New in OMNEST 4.3 <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></h2>

<?php print_leadout(); ?>
</body>
</html>

