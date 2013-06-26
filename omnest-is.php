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

<!-- TODO: the position and style of the following link looks weird -->

<?php
print_next_link_small($touritems[0]["link"], "Take the Product Tour!");
?>

<div id="header"><h1 style="background-color: transparent;">OMNEST Is...</h1></div>

<!--TODO now that the headers are not aligned vertically, we should consider putting
the "OMNEST is" prefix into each one of them -->

<img class="pic left" src="images/tour/network.png" width=150> <!-- network? -->
<h1>a network simulator platform</h1>
It provides generic infrastructure for creating, running and evaluating simulations.
OMNEST can cater for the simulation of communication networks including
wired and wireless networks, mobile ad-hoc networks and sensor networks;
hardware like high-speed interconnects and networks-on-chip;
it can be used for performance modeling of clouds and other HPC systems;
and for much more.</p>
<div style="clear:both"></div>

<img class="pic right" src="images/tour/r-n-d.png" width=150>
<h1>for R&amp;D</h1>
Researchers and R&amp;D people need to investigate deeper than just parameterizing existing systems.
Expect frameworks and open-source tweakable models instead of "canned" models.</p>
<div style="clear:both"></div>

<img class="pic left" src="images/tour/swiss-army-knife.png" width=150> <!-- swiss army knife -->
<h1>flexible</h1>
TODO: COMPONENT ARCHITECTURE: MODELS CAN BE COMBINED FREELY.

You can explore, modify and enhance simulation models, because you have access to model source and platform infrastructure.
You can also get the simulator work together with other software in your toolbox: external simulators, Matlab, SystemC, HLA, you name it.
</p>
<div style="clear:both"></div>

<img class="pic right" src="images/tour/performance.png" width=150>  <!-- car? fighter plane? -->
<h1>high performance</h1>
Models are written in C++, and execute on top of a streamlined simulation kernel to provide high event throughput.
Diagnostic and animation features pose minimal overhead when not in use.</p>
<div style="clear:both"></div>

<img class="pic left" src="images/tour/trusted.png" width=150>  <!-- tick? -->
<h1>trusted by industry leaders</h1>
Many large companies are relying on OMNEST in their R&amp;D for exploring large-scale
problems using network simulation. Several have created their own internal simulation models
or model libraries that they can turn to whenever new challenges appear.
</p>
<div style="clear:both"></div>

<img class="pic right" src="images/tour/open.png" width=150> <!-- open door? open book? open box? palms? -->
<h1>open</h1>
Open culture, open interfaces! OMNEST has started as an open-source project, and it shows. We do not hide any
source code from you or lock down any part of the product. Well-documented extension APIs, plain-text input
and output file formats make it easy to accommodate special needs.
TODO: supports nearly all platforms</p>
<div style="clear:both"></div>

<img class="pic left" src="images/tour/community.png" width=150> <!-- graduation hat? kemcso+lombik? atom? community/users? einstein? -->
<h1>well embedded in the scientific community</h1>
Under the name OMNeT++, OMNEST is a well-established tool in the scientific community.
Over 200 papers are published each year at various conferences and in journals, and
dedicated workshops take place annually with peer-reviewed submissions. The community mailing list
is busier than ever, and there are dozens of OMNeT++-related web sites (projects, blogs, etc).
For you, this means you have access to a huge pool of talent and a wealth of information on the Internet.
(Search with the keyword "OMNeT++".)</p>
<div style="clear:both"></div>

<img class="pic right" src="images/tour/wealth-of-models.png" width=150>  <!-- community icon? github icon? open source logo? -->
<h1>wealth of open-source simulation models</h1>
As a result of the strong user community, there is an ever-growing number of open-source simulation models
available to you, covering very diverse domains from internet routing to ad-hoc and sensor networks, in-car networks,
4G, photonic on-chip networks and so on.
These models can give you a jump-start when building your simulation model to solve the problem at hand.
</p>
<div style="clear:both"></div>

<?php
print_next_link($touritems[0]["link"], "Take the Product Tour!");
?>

<?php print_leadout(); ?>
</body>
</html>
