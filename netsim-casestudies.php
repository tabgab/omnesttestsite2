<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

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

<div id="header"><h1>Network Simulation &ndash; Case Studies</h1></div>

<!-- <p>TODO There are countless papers on omnetpp.org - - here we single out some, related to
EU projects and industry uses...  They are using OMNeT++ because such stories
are more accessible (already public), but they equally apply to OMNEST (the two
packages are fully compatible.) The companies mentioned below possess OMNEST licenses.</p>
-->

<div class="toc">
  <p>Contents:</p>
  <ol>
    <li><a href="#boss">The Celtic BOSS Project (Railway on-board wireless secured video surveillance)</a></li>
    <li><a href="#adhoc">Detailed Cross-Layer Simulator for Content Transmission over Wireless Ad-Hoc Networks</a></li>
    <li><a href="#lrwpan">Simulation Study of IEEE 802.15.4 LR-WPAN for Industrial Applications</a></li>
  </ol>
</div>

<h2><a name="boss"></a>The Celtic BOSS Project (Railway on-board wireless secured video surveillance)</h2>

<p>The purpose of the BOSS project was the design and prototype development
of an efficient railway communication system. This system was aimed to
support the high demands of an audio/video surveillance system in a rolling
train from a control center on the wayside, and also to address related
issues, such as predictive maintenance. The system is based on WiMAX/HSUPA
(outdoors, towards the control center) and WiFi (indoors) networks.
</p>

<div class="pic right" style="width:290px">
<img src="images/misc/celtic-boss.jpg"/>
<div>Screenshot of the BOSS simulation, with transmitted video and mobility displays</div>
</div>

<p>The functional architecture had been developed into a full communication
architecture as an OMNeT++ simulation model. The model was enriched
through the project lifetime by the modules and algorithms developed
within the project's technical packages on radio communications,
signalling, adaptation to impairments, efficient multimedia compression,
and abnormal events detection.</p>

<p><i>"The OMNeT++ simulator was a key element to ensure firstly validation of the
system before prototyping, secondly establishment of initial working
settings for the demonstration phase, and thirdly measurement and
assessment of techniques that will not be realistically implantable in the
BOSS demonstrator,"</i> they write.</p>

<p>The BOSS consortium consists of THALES Communications France,
Alstom-Transport, SNCF, INRETS, UPMC (France), UCL, BARCO-SILEX (Belgium),
TELEFONICA I+D, Arteixo-Telecom, INECO (Spain), BME, E-GROUP (Hungary).
</p>

<p>Read the full article in the November 2008 issue of <i>Celtic News</i>
(<a href="pdf/CN-2008-3pdf.pdf">pdf</a>).
</p>

<p>A video demonstration of the BOSS project (unfortunately without the simulation)
can be viewed <a href="http://www.dailymotion.com/video/x9hnje_boss-traindemonstration2009_tech" target="_blank">here</a>.</p>


<h2><a name="adhoc"></a>Detailed Cross-Layer Simulator for Content Transmission over Wireless Ad-Hoc Networks</h2>

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


<h2><a name="lrwpan"></a>Simulation Study of IEEE 802.15.4 LR-WPAN for Industrial Applications</h2>

<p>
The IEEE 802.15.4 protocol has become the primary solution for many
Low-Rate Wireless Personal Area Network (LR-WPAN) applications. This is
especially the case for industrial sensor network applications such as
automation control. Researchers from Siemens and University of
Erlangen-Nuremberg performed a series of OMNeT++-based simulation
experiments that contribute to a better understanding of IEEE 802.15.4
behavior. The results outline the capabilities of this protocol in the
selected scenarios, and also the limitations. They
investigated the dependency of the protocol on protocol-inherent
parameters such as the beacon order and the superframe order, and also to
different traffic load. The results can be used for planning and deploying
IEEE 802.15.4 based sensor networks with specific performance demands. A
special focus was put on application scenarios in industrial sensor network
applications. The primary requirements were reduced end-to-end latency and
energy consumption. The results were obtained with the authors' new
implementation of IEEE 802.15.4 developed for OMNeT++.
</p>

<p><a href="pdf/chen2010simulation.pdf">Read the full text (pdf)</a></p>

<p class="bibref">
Feng Chen, Nan Wang, Reinhard German and Falko Dressler, 2010.
<i>"Simulation study of IEEE 802.15.4 LR-WPAN for industrial applications."</i>
Wiley Wireless Communications and Mobile Computing (WCMC), vol. 10 (5), pp. 609-621, May 2010.
</p>

<h2><a name="more"></a>More...</h2>

<p>You can find more accounts on research done with OMNeT++ in papers in the
<a href="http://omnetpp.org/publications" target="_blank">omnetpp.org publications database</a>.</p>

<?php print_next_links($product_menu, __FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>

