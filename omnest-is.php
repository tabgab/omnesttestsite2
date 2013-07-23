<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST Is...</title>
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

<?php
print_next_link_small($touritems[0]["link"], "Take the Product Tour!");
?>

<div id="header"><h1 style="background-color: transparent;">OMNEST Is...</h1></div>

<img class="pic left" style="margin-top: 4px;" src="images/tour/omnest-network-simulator.png" width="200">
<h1>A Network Simulator Platform</h1>
<p class="righttext">It provides generic infrastructure for creating, running and evaluating simulations.
OMNEST can cater for the simulation of communication networks including
wired and wireless networks, mobile ad-hoc networks and sensor networks;
hardware like high-speed interconnects and networks-on-chip;
it can be used for performance modeling of clouds and other HPC systems;
and for much more.</p>
<div class="separator"></div>

<img class="pic right" style="margin-top: -8px; margin-bottom: 20px;" src="images/tour/omnest-for-research.png" width="200">
<h1>For R&amp;D</h1>
<p class="lefttext">Researchers and R&amp;D people need to investigate deeper than just parameterizing existing systems.
Expect frameworks and open-source tweakable models instead of "canned" models, a very extensible
simulation framework, and many ways to automate your work.</p>
<div class="separator"></div>

<img class="pic left" style="margin-top: -12px; margin-bottom: 24px;" src="images/tour/omnest-performance.png" width="200">
<h1>High Performance</h1>
<p class="righttext">Models are written in C++, and execute on top of
a streamlined simulation kernel to provide high event throughput.
Diagnostic and animation features pose minimal overhead when not in use.</p>
<div class="separator"></div>

<img class="pic right" style="margin-top: -26px;" src="images/tour/omnest-trusted.png" width="200">
<h1>Trusted by Industry Leaders</h1>
<p class="lefttext">Many large companies are relying on OMNEST in their R&amp;D for exploring problems
and design alternatives using network simulation. Several have created their own internal simulation models
or model libraries that they can turn to whenever new challenges appear.</p>
<div class="separator"></div>

<img class="pic left" style="margin-top: -12px;" src="images/tour/omnest-flexible.png" width="200">
<h1>Flexible</h1>
<p class="righttext">Simulation models are built from self-contained blocks that can be combined in many ways.
You can explore, modify and enhance models, because you have access to the source code and to platform infrastructure.
You can also get the simulator work together with other software in your toolbox: external simulators, Matlab, SystemC, HLA, you name it.</p>
<div class="separator"></div>

<img class="pic right" style="margin-top: 16px;" src="images/tour/omnest-open.png" width="200">
<h1>Open</h1>
<p class="lefttext">Open culture, open interfaces! OMNEST has started as an open-source project, and it shows.
We do not hide any source code from you or lock down any part of the product.
Well-documented extension APIs, plain-text input and output file formats make it easy to accommodate special needs.
Simulations can be run on a multitude of platforms.</p>
<div class="separator"></div>

<img class="pic left" style="margin-top: 16px;" src="images/tour/omnest-community.png" width="200">
<h1>Well Embedded in the Scientific Community</h1>
<p class="righttext">Under the name OMNeT++, OMNEST is a well-established tool in the scientific community.
Over 200 papers are published each year at various conferences and in journals, and
dedicated workshops take place annually with peer-reviewed submissions. The community mailing list
is busier than ever, and there are dozens of OMNeT++-related web sites (projects, blogs, etc).
For you, this means you have access to a huge pool of talent and a wealth of information on the Internet.</p>
<div class="separator"></div>

<img class="pic right" style="margin-top: 14px;" src="images/tour/omnest-models.png" width="200">
<h1>A Wealth of Open-Source Simulation Models</h1>
<p class="lefttext">As a result of the strong user community, there is an ever-growing number of open-source simulation models
available to you, covering very diverse domains from internet routing to ad-hoc and sensor networks, in-car networks,
4G, photonic on-chip networks and so on.
These models can give you a jump-start when building your simulation model to solve the problem at hand.</p>
<div class="separator"></div>

<?php
print_next_link($touritems[0]["link"], "Take the Product Tour!");
?>

<?php print_leadout(); ?>
</body>
</html>
