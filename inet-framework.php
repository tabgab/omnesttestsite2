<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - INET Framework</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>INET Framework</h1></div>

<p>Home page: <a href="http://inet.omnetpp.org" target="_blank" class="kiemeles">inet.omnetpp.org</a></p>

INET Framework is an open-source network simulation framework for OMNeT++ and OMNEST.
INET supports ad-hoc, wireless and wired (LAN, WAN) simulations (802.11,
Ethernet, TCP, IP, IPv6, OSPF, MPLS, RSVP, and other protocols).

<ul>
    <li>Cleanly programmed and extensively commented models lend themselves
    to experimentation with protocols and various architectures.</li>

    <li>Several models are ported versions of real-life networking software
    like the Quagga routing daemon, or the AODV-UU implementation, which
    guarantees simulation accuracy.</li>

    <li>Existing protocol models can be freely combined to form hosts and network devices</li>
    <li>Emulation / Real-Time simulation / hardware-in-the-loop simulation support</li>
</ul>

<p>There are several extensions to the INET Framework:</p>

<ul>
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

<div style="text-align: center">
<iframe title="OMNeT++ Sequence Chart - Wireless MAC" class="youtube-player" width="499" height="306" src="http://www.youtube.com/embed/9yZZFgwl4Ns?hd=1" style="border: 0;"></iframe>
</div>
<br><br>

<h2>A Case Study</h2>

<p>
The following paper by INRIA researchers reports about using the INET Framework
for simulation of a train communication system. It discusses both the advantages
and limitations/difficulties of the INET Framework at the time the article was
written, and lessons learned from the project. It is a worthy read.
</p>

<p class="bibref">
J.-C. Maureira, P. Uribe, O. Dalle, T. Asahi, J. Amaya (INRIA, Sophia Antipolis, France), 2009.
<i>"Component-Based Approach Using OMNeT++ for Train Communication Modeling."</i>,
9th International Conference on Intelligent Transport Systems Telecommunications(ITST),
Lille, 20-22 Oct. 2009.
</p>

<p><a href="pdf/maureir2010.pdf">Read the article (pdf)</a></p>

<?php print_next_links($product_menu, __FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>

