<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - What's New in the 6.0 Version</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>What's New in OMNEST 6.0.3</h1></div>

<div id="content">

<p>This is a maintenance release, with several performance improvements in the simulation kernel and further adjustments.</p>

<p>Documentation:</p>
<ul>
    <li>Updated install instructions for macOS to support installing on aarch64 based computers using Homebrew.</li>
</ul>

<p>IDE:</p>
<ul>
    <li>Updated to Eclipse 4.30, CDT 11.4, Pydev 11.0</li>
    <li>IDE is now fully supported on macOS/aarch64</li>
    <li>Model installation dialogs: If the IDE was installed using opp_env, tell the user to install the model with opp_env, too.</li>
    <li>Some reported issues were also fixed.</li>
</ul>


<br>

<h2><a href="whatsnew-602">What's New in OMNEST 6.0.2 <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></h2>

<?php print_leadout(); ?>
</body>
</html>

