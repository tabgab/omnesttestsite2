<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>
<?php include("common/casestudies_inc.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Network Simulation Case Studies</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
    <script src="common/enlargeit.js" type="text/javascript"></script>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Case Study &ndash; Detailed Cross-Layer Simulator for Content Transmission over Wireless Ad-Hoc Networks</h1></div>

<div class="pic right" >
<img src="images/misc/massin2009fig-thumb.png" alt="Overall protocol achitecture" onclick="enlarge(this);" longdesc="images/misc/massin2009fig.png"/>
<div>Protocol architecture (XLI=cross-layer interface)<br>(figure from the paper; click to enlarge)</div>
</div>

<p>
Thales Group researchers Rapha&euml;l Massin and his colleagues
developed a OMNeT++-based simulation framework to enable the study of
data and multimedia content transmission over hybrid wired/wireless ad-hoc
networks, as well as the design of innovative radio accesss schemes. To
achieve this goal, the complete protocol stack from the application to the
physical layer is simulated, and the real bits and bytes of the messages
transferred on the radio channel are exchanged. To ensure that this
framework was reusable and extensible in future studies and projects, a
modular software and protocol architecture was defined, using facilities
provided by OMNeT++. The work has already provided valuable results
concerning cross-layer HARQ/MAC protocol performance and video transmission
over the wireless channel.
</p>

<p><a href="pdf/massin2009.pdf">Read the full text (pdf)</a></p>

<p class="bibref">
R. Massin, C. Lamy-Bergot, C. J. Le Martret, and R. Fracchia (Thales Communications),
2010. <i>"OMNeT++-Based Cross-Layer Simulator for Content Transmission over Wireless Ad Hoc Networks."</i>
EURASIP Journal on Wireless Communications and Networking, vol. 2010, Article ID 502549.
doi:10.1155/2010/502549</p>

<?php print_next_casestudy_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>

