<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>OMNEST - The Open Simulator</title>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST Discrete Event Network Simulator" />
	<meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework"  />
	<link rel="stylesheet" type="text/css" href="common/omnest.css">

</head>

<body>

<!-- Start Container -->
<div id="container">

<?php include("common/top_inc.php"); ?>

	<?php minimenu(array('overview', 'architecture-verification', 'performance-modeling')); ?>
	</div>
	<!-- End Main Menu -->



	<div style="clear: both;">

	<!-- Start Content -->

<div id="content">

<div id="header"><h1>Simulation of Wireless and Wired Networks</h1></div>

<p><b>OMNEST is the commercial version of the OMNeT++ simulation framework.</b>
The generic architecture of the simulation framework allows OMNEST
to be applied to various problem domains where complex behavior needs
to be simulated with high performance, such as the simulation of network
protocols or hardware architectures.
</p>

<p>OMNEST as a product does not contain simulation models
above and beyond what is available for OMNeT++, but
<b>the vast body of open-source simulation models that have been written by
researchers for OMNeT++ are available for OMNEST users as well.</b> These
simulation models are being used by hundreds of researchers every day, and
simulation results are being
<a href="http://omnetpp.org/publications" target="_blank">published</a>
in leading conferences and journals as well as at the annual
<a href="http://www.omnet-workshop.org" target="_blank">International
OMNeT++ Workshop</a>, a joint event of the ICST SimuTools conference.</p>

<!-- TODO make a "note" class from this style -->
<p style="font-size: 11px; border-top: 2px solid #e54426; border-bottom: 2px solid #e54426;">
As network simulation frameworks are being developed and released
by independent groups, we cannot offer commercial support for them.
However, this does not mean you are on your own, because you can get informal support
via the OMNeT++ mailing list and other forums. Using these
forums works best if you are a good citizen in the open-source world,
i.e. give back something to the community by contributing bug reports or
code, and occasionally help out others on the mailing list.
</p>

<p>Simulation models are truly <b>component-based</b>, meaning that you are
able to combine existing blocks (protocol models, application models, queues, etc)
and your custom blocks to form models of arbitrary hosts, routers, switches
and other network devices. Another distinguishing feature of OMNEST/OMNeT++
models is the <b>framework approach</b>, meaning that models such as MiXiM
and INET are <i>frameworks</i>, having been written with the express purpose of
making it easy to extend and build on top of them. Also, protocol models may
be <b>mixed</b> with other kinds of simulation models such as performance models or
architectural models.
</p>

<p>The rest of the page describes the main network simulation frameworks for OMNeT++.


<h1 style="color:#e54426">INET / INETMANET</h1>

<p>Home page: <a href="http://inet.omnetpp.org" target="_blank" class="kiemeles">inet.omnetpp.org</a></p>

The INET Framework supports ad-hoc, wireless and wired (LAN, WAN) simulations (802.11,
Ethernet, TCP, IP, IPv6, OSPF, MPLS, RSVP, and other protocols).

<ul class="list03">

<li>Cleanly programmed and extensively commented models lend themselves
to experimentation with protocols and various architectures.</li>

<li>Several models are ported versions of real-life networking software
like the Quagga routing daemon, or the AODV-UU implementation, which
guarantees simulation accuracy.</li>

<!--
TODO For TCP, traffic, one can choose between OMNeT++,  Linux, FreeBSD and LWIP...<br>
-->

<li>Existing protocol models can be freely combined to form hosts and network devices</li>
<li>Emulation / Real-Time simulation / hardware-in-the-loop simulation support</li>
</ul>

<p>There are several extensions to the INET Framework:</p>

<ul class="list03">
  <li><a href="http://wiki.github.com/inetmanet/inetmanet" target="_blank" class="kiemeles">INETMANET</a>
     adds support for mobile and ad-hoc networks to INET.</li>
  <li><a href="http://www.oversim.org/" target="_blank" class="kiemeles">OverSim</a>
     is an open-source overlay and peer-to-peer network simulation framework.
     The simulator contains several models for structured (e.g. Chord, Kademlia, Pastry)
     and unstructured (e.g. GIA) P2P systems and overlay protocols.</li>
  <li><a href="http://www.kn.e-technik.tu-dortmund.de/content/view/232/lang,de/" target="_blank" class="kiemeles">xMIPv6</a>
     an accurate and extensible Mobile IPv6 (xMIPv6) simulation model for OMNeT++/INET.</li>
  <li><a href="https://i72projekte.tm.uka.de/trac/ReaSE" target="_blank" class="kiemeles">ReaSE</a>
     is a framework for creating realistic network simulation environments.
     ReaSE covers topology generation (AS-level as well as router-level),
     generation of self-similar background traffic, and generation of attack traffic (e.g. DDoS).</li>
  <li><a href="http://www.ict-optimix.eu/index.php/HIPSim" target="_blank" class="kiemeles">HIPSim++</a>
     is a Host Identity Protocol (HIP) Simulation Framework for INET/OMNeT++,
     developed to provide a flexible toolset for testing and validation of
     HIP and its extensions.</li>
  <li><a href="http://www7.informatik.uni-erlangen.de/~sommer/omnet/traci/" target="_blank" class="kiemeles">TraCI</a>:
     <i>Veins</i> (Vehicles in Network Simulation) is an Inter-Vehicular Communication (IVC)
     simulation framework. Veins is made up of two distinct simulators, OMNeT++/INET for network
     simulation, and SUMO for road traffic simulation. To perform IVC evaluations, both simulators
     are running in parallel, connected via a TCP socket. The protocol for this communication
     has been standardized as the Traffic Control Interface (TraCI).</li>
  <li><a href="http://www.tkn.tu-berlin.de/research/omnetVoipTool/" target="_blank" class="kiemeles">VoIPTool</a>
     is a VoIP traffic generator that creates realistic VoIP packet streams
     thanks to the utilization of real audio data and an existing VoIP standard codec.
     Moreover, by applying ITU-T's perceptual evaluation of speech quality (PESQ)
     approach at the sink, the perceived quality of a transmitted VoIP stream can be
     determined.</li>
  <li><a href="http://code.google.com/p/omnet-httptools/" target="_blank" class="kiemeles">HTTPTools</a>
     provides a set of components for detailed HTTP traffic simulation.</li>
</ul>

<p>Here is a video showing the exploration of a wireless INET simulation in the
OMNeT++ Sequence Chart tool (switch to full screen and HD for viewing):</p>

<center>
<object width="499" height="306"><param name="movie" value="http://www.youtube.com/v/9yZZFgwl4Ns&amp;hl=en_US&amp;fs=1?hd=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/9yZZFgwl4Ns&amp;hl=en_US&amp;fs=1?hd=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="499" height="306"></embed></object>
</center>
<br><br>

<h1 style="color:#e54426">MiXiM</h1>

<p>Home page: <a href="http://mixim.sourceforge.net" target="_blank" class="kiemeles">mixim.sourceforge.net</a></p>

<p>MiXiM is an OMNeT++ modeling framework created for mobile and
fixed wireless networks (wireless sensor networks, body area networks,
ad-hoc networks, vehicular networks, etc.). It offers detailed models of
radio wave propagation, interference estimation, radio transceiver power
consumption and wireless MAC protocols (e.g. Zigbee). Documentation (tutorials,
examples, etc.) is available on the web site.
</p>


<h1 style="color:#e54426">Castalia</h1>

<p>Home page: <a href="http://castalia.npc.nicta.com.au" target="_blank" class="kiemeles">castalia.npc.nicta.com.au</a></p>

<p>
Castalia is a simulator developed at NICTA Australia for Wireless Sensor
Networks (WSN), Body Area Networks (BAN) and generally networks of
low-power embedded devices. It is based on the OMNeT++ platform and can be
used by researchers and developers who want to test their distributed
algorithms and/or protocols in realistic wireless channel and radio models,
with a realistic node behavior especially relating to access of the radio.
Castalia can also be used to evaluate different platform characteristics
for specific applications, since it is highly parametric, and can simulate
a wide range of platforms. The main features of Castalia are:
</p>

<ul class="list03">
    <li>Advanced <b>channel model</b> based on empirically measured data</li>
    <ul type="circle">
      <li level2="">Model defines a map of path loss, not simply connections between nodes</li>

      <li level2="">Complex  model for temporal variation of path loss</li>
      <li level2="">Fully supports mobility of the nodes</li>
      <li level2="">Interference is handled as received signal strength, not as separate feature</li>
    </ul>

    <li>Advanced <b>radio model</b> based on real radios for low-power communication</li>

    <ul type="circle">
      <li level2="">Probability of reception based on SINR, packet size, modulation type. PSK FSK supported, custom modulation allowed by defining SNR-BER curve</li>
      <li level2="">Multiple TX power levels with individual node variations allowed</li>
      <li level2="">States with different power consumption and delays switching between them</li>
      <li level2="">Flexible carrier sensing (polling-based and interrupt-based)</li>
    </ul>
    <li>Extended <b>sensing</b> modeling provisions </li>

    <ul type="circle">
      <li level2="">Highly flexible physical process model</li>
      <li level2="">Sensing device noise, bias, and power consumption</li>
    </ul>
    <li>Node <b>clock drift</b>, CPU power consumption.</li>
    <li>MAC and routing protocols available</li>

    <li>Designed for <b>adaptation</b> and <b>expansion</b>.</li>
</ul>

<p>
Concerning the last bullet, Castalia was designed right from the beginning
so that users can easily implement/import their algorithms and
protocols into Castalia while making use of the features the simulator
provides. Proper modularization and a configurable, automated build
procedure make this easier.
</p>



<h1 style="color:#e54426">More...</h1>

<ul>
  <li><a href="http://www.simsans.org/" target="_blank" class="kiemeles">SimSANs</a>
      - for simulating Storage Area Networks
  <li><a href="http://lightwave.ee.columbia.edu/?s=research&p=phoenixsim" target="_blank" class="kiemeles">PhoenixSim</a>
      - for physical-layer simulation of photonic networks
</ul>

<p><a href="http://www.omnetpp.org/models" target="_blank">
A more complete list of models and frameworks is available on omnetpp.org</a>
</p>


<!-- common footer for all "landing" pages -->
<hr style="color:red">
<br>

<img src="common/images/list_01.gif" alt="" border="0">
<a href="overview.php">Read more about the OMNEST simulation environment</a>
<br><br>

<img src="common/images/list_01.gif" alt="" border="0">
<a href="download-eval.php">Download the evaluation version!</a>

<br><br><br><br>

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
