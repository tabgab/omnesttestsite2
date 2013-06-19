<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>
<?php include("common/extlinks_inc.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Simulation Models</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <script type="text/javascript" src="common/collapsible.js"></script>
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<!-- TODO hint: <div style="max-height:30px; overflow:hidden;"> -->


<div id="header"><h1>Simulation Models</h1></div>

<p><b>OMNEST as a product doesn't contain simulation models beyond a few simple code examples,
but you can make use of the models written for OMNeT++, the noncommercial version of OMNEST.</b>
These models have been written by the OMNeT++ user community,and published under various
open-source licenses.</p>

<!-- TODO alternative:
<p><b>OMNEST as a product doesn't contain simulation models beyond code examples,
but you can make use of the large body of simulation models written by the OMNeT++ user community,
published under various open-source licenses.</b> OMNeT++ is the noncommercial version of OMNEST.</p>
-->

<p>Here is an approximate catalog of these simulation models, organized by topics.
If you don't find here what you are looking for, we recommend that you search on the
Internet for the keywords, e.g. <i>"HMIPv6 OMNeT++"</i>.</p>

<!-- TODO alternative:
<p>On this page we list some of these simulation models, organized by topics.
If you don't find here what you are looking for, we recommend that you search on the
Internet for the keywords, e.g. <i>"HMIPv6 OMNeT++"</i>.</p>
-->

<h2 class="framed"><a name="inet">Internet</a></h2>

<div class="collapsible">
<p>The <?php extlink("inet" ); ?> is the best place to begin when you want to simulate
any of the protocols, technologies and applications used on the Internet (or other WANs).</p>

<p>The INET Framework contains approximately the following protocols:
IPv4, IPv6, TCP (several flavors), UDP, SCTP, RTP; Mobile IPv6 (MIPv6);

Differential Services (DiffServ);
MPLS family: RSVP, ....

routing protocols (RIP, OSPF,...)

<p>See the Protocol Matrix on the INET Framework web site for details.</p>

<ul>
  <li>Cleanly programmed and extensively commented models lend themselves to experimentation with protocols and various architectures.
  <li>Several models are ported versions of real-life networking software like the Quagga routing daemon, or the AODV-UU implementation, which guarantees simulation accuracy.
  <li>Existing protocol models can be freely combined to form hosts and network devices
  <li>Emulation / Real-Time simulation / hardware-in-the-loop simulation support
</ul>

<p>Several simulation frameworks take INET as a base, and extend it into various directions:</p>

<ul>
  <li><?php extlink("oversim" ); ?> is an overlay and peer-to-peer network simulation framework.
       The simulator contains several models for structured (e.g. Chord, Kademlia, Pastry)
       and unstructured (e.g. GIA) P2P systems and overlay protocols.
  <li><?php extlink("denacast" ); ?> is a framework for the simulation of peer-to-peer video streaming,
       itself based on OverSim
  <li><?php extlink("ansa" ); ?> is a project for automated analysis of security properties of networks.
       They have implemented several protocols for INET: IS-IS, OSPFv3, RIPng, PIM-DM, MLDv1, MLDv2,
       TRILL, VLAN, STP and possibly others
  <li><?php extlink("rease" ); ?> is a framework for creating realistic network simulation environments.
       ReaSE covers topology generation (AS-level as well as router-level), generation of
       self-similar background traffic, and generation of attack traffic (e.g. DDoS)
  <li><?php extlink("hipsimpp" ); ?> is a Host Identity Protocol (HIP) simulation framework,
       developed for the testing and validation of HIP and its extensions
  <li><?php extlink("mcoapp" ); ?> (<?php extlink("mcoapp-github" ); ?>) extends the Mobile IPv6
       implementation in INET with Multiple Care-of Addresses support (RFC 5648)
  <li><?php extlink("ebitsim" ); ?> is an enhanced BitTorrent simulation with multiple concurrent swarms,
       multiple trackers and a timeslice processing model
  <li><?php extlink("quagga" ); ?> is a port of the Quagga open-source routing suite into the INET Framework
  <li> many of the models listed in further sections are also INET-based
  <li> etc. <i>(search github or the web)</i>
</ul>

<p>Several packages, e.g. xMIPv6, VoIPTool and HTTPTools, used to be separate projects but have been integrated into INET since.</p>
</div>

<h2 class="framed">Wired and Wireless LANs</h2>

<div class="collapsible">
<p>The best choice for simulating LANs with OMNEST is the <?php extlink("inet"); ?> (see <a href="#inet">above</a>).
The INET Framework contains models for Ethernet (including Fast Ethernet, Gigabit Ethernet,
40 and 100 Gigabit Ethernet, duplex and half-duplex) and the IEEE 802.11 wireless LAN standard.
</p>


Ethernet, Wireless LAN 802.11, WiMAX

Switched networks: Ethernet switches, VLAN, Spanning-Tree Protocol (STP), Rapid Spanning-Tree Protocol (RSTP), etc.

See also SAN, Cloud, HPC
</div>


<h2 class="framed"><a name="manets">Mobile Ad-hoc Networks</a></h2>

<p>The best choice for simulating mobile ad-hoc networks (MANETs) with OMNEST
is the <?php extlink("inet"); ?> (see <a href="#inet">above</a>).</p>

<p>An alternative is <?php extlink("mixim"); ?> (<?php extlink("miximsf"); ?>),
which contains a much more detailed physical layer model but has no
models for the upper layers of the protocol stack. If you need both
a detailed physical model and detailed upper layers, you can use
INET and MiXiM together.
As for the future, we plan to integrate MiXiM into the INET Framework;
the result of this work can be expected to be released before the end of 2013.</p>

<p>The INET Framework also has a fork called <?php extlink("inetmanet"); ?>,
which is a superset of INET with many experimental (sometimes <i>very</i> experimental)
MANET-related additions.</p>

<p>If you need to simulate Personal Area Networks (PANs) or Body Area Networks (BANs),
<?php extlink("castalia"); ?> may also be suitable for you.</p>

<p>Other models, including the Mobility Framework (MF) should be considered obsolete.</p>


<h2 class="framed">Sensor Networks</h2>

<p>There are currently three good choices for the simulation of wireless sensor networks (WSNs)
with OMNEST: The <?php extlink("inet"); ?> (see <a href="#inet">above</a>),
<?php extlink("mixim"); ?> (see <a href="#manets">above</a>) and <?php extlink("castalia"); ?>.
The INET Framework is currently missing a battery model, which may or may not be a problem
for your project.</p>

<p>Other frameworks like PAWiS or LSU Sensor Simulator (SenSim) should be considered obsolete.</p>

<p>If your work involves TinyOS, the tool called <?php extlink("nesct"); ?> might be of interest to you.
NesCT is a programming language translator that uses NesC programming language as an input,
and produces OMNeT++ simulation code from it.</p>


<h2 class="framed">Vehicular networks</h2>

<p>Vehicular or inter-vehicle networks are essentially mobile ad-hoc networks,
thus can be simulated with model frameworks capable of simulating MANETs (see <a href="#manets">above</a>).</p>

<p>The recommended framework for simulating vehicular networks is
<?php extlink("veins"); ?>, which combines
a MiXiM-based network simulator with the SUMO road traffic simulator.
</p>

<p>An alternative to Veins is <?php extlink("vns"); ?> (Vehicular Networks Simulator).</p>


<h2 class="framed">In-vehicle networks</h2>

<p>Protocols used in cars (automotive networks: CAN, LIN, DC-Bus, FlexRay,
MOST, TTEthernet, etc.) and in aircraft (avionics networks like AFDX) belong here.
Currently a TTEthernet model named <?php extlink("tt4inet"); ?> is available;
it is based on the INET Framework.
The release of other protocol models is in preparation.</p>

<p>The release of an Ethernet Audio-Video Bridging (AVB) model can also be expected.</p>


<h2 class="framed">Cellular networks</h2>

<p>There are currently two model frameworks for next-generation cellular networks (3GPP/4G/LTE):
<?php extlink("simulte"); ?> and <?php extlink("4gsim"); ?>,
both based on the INET Framework. On the long term, we would like the
two frameworks to converge.</p>


<h2 class="framed">Satellite communications</h2>

<p>For the simulation of satellite communication systems, you can make use of
<?php extlink("os3"); ?>, the Open Source Satellite Simulator.
Its aim was to make evaluating satellite communication protocols as easy as possible.
OS<sup>3</sup> can also automatically import real satellite tracks and weather data
to simulate conditions at a certain point in the past or in the future,
and offers powerful visualization. OS<sup>3</sup> extends the INET Framework.</p>


<h2 class="framed">Optical networks</h2>

<p>
<?php extlink("hnrl"); ?> provides models for network systems, components,
and protocols in both optical and wireless networking and their hybrid.
Currently, the following models and research frameworks have been implemented:
models for the hybrid TDM/WDM-PON under the SUCCESS-HPON architecture;
framework for the equivalent circuit rate (ECR)-based study of next-generation
optical access (NGOA) architectures.</p>

<p>
<?php extlink("epon"); ?> is a simulation model for Ethernet Passive Optical Networks.
OLT and ONU modules are defined and they both suport one or multiple LLIDs.
MPCP protocol has been implemented on OLT and ONU models to assign LLIDs dynamically. </p>

<p>
<?php extlink("obs"); ?> (<?php extlink("obsgithub"); ?>) provides models for
Optical Burst Switching (OBS), a new optical switching technology
capable of supporting a high demand for bandwidth in optical backbones with
Wavelength Division Multiplexing (WDM). OBSModules allows one to study nodes,
edge nodes and core nodes, and link the OBS network with other data networks like IPv4.</p>

<p><?php extlink("phoenixsim"); ?> (see <a href="#nocs">below</a>.) may also be of interest.</p>


<h2 class="framed">Interconnection networks</h2>

<p>An open-source InfiniBand simulation model is available from Mellanox as
<?php extlink("ib_flit_sim"); ?>.
It models the data-path of hosts and switches at the flit transfer level,
and can be used to estimate network performance under configurable hardware
capabilities, timing and topologies.</p>

<p>Although not an open-source model, <?php extlink("venus"); ?> is a simulation tool
developed at IBM Research for performance evaluation high-performance computing systems
and large-scale data center networks. It includes models of various networking technologies,
including 10G Ethernet, InfiniBand, and Myrinet. Venus provides very high flexibility in terms of
network topologies and routing schemes, including built-in support for arbitrary mesh, torus, hypercube,
and fat tree topologies, as well as the possibility to import topology description files of arbitrary
regular and irregular topologies.</p>

<p>Frameworks developed for Network-on-Chip simulations, e.g. <?php extlink("hnocs"); ?> and <?php extlink("phoenixsim"); ?>,
may also be useful in the simulation of interconnection networks (see <a href="#nocs">below</a>.)</p>


<h2 class="framed"><a name="nocs">Networks-on-Chip (NoCs)</a></h2>

<p>There are two model frameworks specifically designed for the simulation of NoCs. One is
<?php extlink("hnocs"); ?>,
a modular simulator for heterogeneous NoCs. HNoCs modules available today implement
wormhole switching, with round-robin or winner-takes-all arbitration.</p>

<p>The other model framework is
<?php extlink("phoenixsim"); ?>
(Photonic and Electronic Network Integration and Execution Simulator), used
for the design of a on- and off-chip photonic communications for multi-processor systems,
and the design of nanophotonic optical broadband switches (NOBS).</p>

<p>When simulating NoCs or SoCs (Systems-on-Chip),
OMNEST's <a href="systemc-integration.php">SystemC extension</a>
may also come handy. It allows for mixing OMNEST and SystemC (or SystemC/TLM) models
in the same simulation, without incurring the severe performance loss that is typical
with co-simulations.</p>


<h2 class="framed">Cloud computing, HPC clusters, SANs</h2>

<?php extlink("icancloud"); ?> and <?php extlink("simcan"); ?> are two simulation frameworks
that can be used to simulate high-performance clusters (HPCs) and cloud computing systems.


iCanCloud is a simulation platform aimed to model and simulate cloud computing systems, which is targeted to those users who deal closely with those kinds of systems. The main objective of iCanCloud is to predict the trade-offs between cost and performance of a given set of applications executed in a specific hardware, and then provide to users useful information about such costs. However, iCanCloud can be used by a wide range of users, from basic active users to developers of large distributed applications

    oth existing and non-existing cloud computing architectures can be modeled and simulated.

    includes a cloud hypervisor module for simulating cloud brokering policies.

    Customizable VMs can be used to quickly simulate uni-core/multi-core systems.

    iCanCloud provides a wide range of configurations for storage systems, which include models for local storage systems, remote storage systems, like NFS, and parallel storage systems, like parallel file systems and RAID systems.

    iCanCloud provides a user-friendly GUI to ease the generation and customization of large distributed models. This GUI is especially useful for: managing a repository of pre-configured VMs, managing a repository of pre-configured Cloud systems, managing a repository of pre-configured experiments, launching experiments from the GUI, and generating graphical reports.

    iCanCloud provides a POSIX-based API and an adapted MPI library for modelling and simulating applications. Also, several methods for modelling applications can be used in iCanCloud: using traces of real applications; using a state graph; and programming new applications directly in the simulation platform.

    New components can be added to the repository of iCanCloud to increase the functionality of the simulation platform.


</p>

<p><?php extlink("simcan"); ?> is a modular simulation platform that can be configured
for modeling a wide range of HPC architectures.
The main characteristics of SIMCAN are the flexibility to model different architectures easily,
and the ability to scale those models keeping a good level of performance and accuracy.
</p>

<p><?php extlink("simsans"); ?>, on the other hand, is tool for detailed simulation of
Storage Area Networks in data centers.
SimSANs is capable of simulating real-world Fibre Channel (FC) and FC over Ethernet (FCoE) SAN environments and SCSI IO applications.
Implemented protocol levels include: FC: FC-FS, FC-LS, FC-GS, FC-SW; FC-BB-5 (FIP and FCoE); and SCSI: SAM, SPC, SBC, FCP.
It also allows simulations of daily SAN administration tasks, provides
protocol analyzer functionality (e.g. Finisar and Xgig), and much more.
It is especially useful in infrastructure design and performance analysis of data center storage networks.
SimSANs is neither open source (please contact the author for source) nor based on INET.
</p>

<p><?php extlink("hecios"); ?> (High-End Computing I/O Simulator), is a trace-driven
parallel file system simulator, developed for simulating PVFS (Parallel Virtual File System).
HECIOS is based on the INET Framework.
(<?php extlink("heciosthesis"); ?>)
</p>

<p><?php extlink("ompcm"); ?> is an implementation of the Palladio Component Model based
on the OMNeT++ simulation framework. As OMNeT++ offers full network simulation support,
the influence of network effects on a modeled system can be investigated.
It uses a specialised representation for description of RD-SEFF behavior called SimCore.
By applying a series of model-transformations, a Palladio model can be transformed fully
automatically to a OMNeT++ network definition file (NED) that uses the developed OMPCM modules.
</p>







HECIOS


Storage Area Networks (SANs): SimSANs




<h2 class="framed">Performance modeling</h2>

Queueinglib; github project...


<?php print_next_links($product_menu, __FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
