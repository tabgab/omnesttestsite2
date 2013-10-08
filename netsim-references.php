<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Network Simulation References</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Network Simulation Reference Projects</h1></div>

<p>OMNeT++ was used in several EU-sponsored research projects:</p>


<hr>

<img class="pic left" src="images/researchprojects/geysers.png">

<p><b>GEYSERS.</b> The vision of the GEYSERS (Generalized Infrastructure for Dynamic
Infrastructure Services, <a target="_blank" href="http://geysers.eu">geysers.eu</a>)
FP7 project is to qualify optical infrastructure providers and network
operators with a new architecture, to enhance their traditional business
operations. Infrastructure Providers will compose virtual infrastructures
and rent them out to Virtual Infrastructure Operators, which will run
cost-efficient, dynamic and mission-specific infrastructures by means of
integrated control and virtualization management techniques.</p>

<p>University of Ghent as a project partner developed a simulation
framework built on OMNeT++ for performance studies of the GEYSERS
architecture. The GEYSERS model is based on the MPLS, RSVP and LDP protocol
implementations in the INET Framework.</p>

<p class="bibref">
De Leenheer, M.; Buysse, J. et al., 2011.
"Design and Implementation of a Simulation Environment for Network Virtualization".
In proceedings of the IEEE 16th International Workshop on Computer Aided Modeling
and Design of Communication Links and Networks (CAMAD), 10-11 June 2011, Kyoto, Japan.
[<a target="_blank" href="http://users.atlantis.ugent.be/cdvelder/papers/2011/deleenheer2011camad.pdf">pdf</a>]
</p>

<hr>

<img class="pic left" src="images/researchprojects/pursuit.png">

<p><b>PURSUIT.</b> The PURSUIT (Publish Subscribe Internet Technology,
<a target="_blank" href="http://fp7-pursuit.eu">fp7-pursuit.eu</a>)
FP7 project is concerned with a system-level approach to re-designing the
major function of the current Internet, namely the internetworking layer.
PURSUIT directly builds on the vision and results from the former FP7 project
PSIRP.
</p>

<p>OMNeT++ was mainly used for the development of simulators for the
proposed name resolution solutions. The base module developed for this
purpose was H-Pastry, a hierarchical version of the Pastry Distributed Hash
Table (DHT) overlay. H-Pastry was developed as an extension of the Pastry
DHT simulator that comes with the Oversim package of overlay networks for
OMNeT++. Another simulator module was developed in OMNeT++ for evaluating
Selective Neighbour Caching (SNC).</p>

<p class="bibref">
Janne Riihij&auml;rvi et al, 2012. PURSUIT project deliverable D4.4,
"Description of Validation and Simulation Tools in PURSUIT Context",
Section 2.3 "OMNeT++ Simulator", pp.10.
[<a target="_blank" href="http://wiki.fp7-pursuit.eu/uploads/4/45/INFSO-ICT-257217_PURSUIT_D4_4_v1_0_final.pdf">pdf</a>]

</p>
<hr>

<img class="pic left" src="images/researchprojects/uloop.png">

<p><b>ULOOP.</b> The ULOOP (User-centric Wireless Local Loop,
<a target="_blank" href="http://uloop.eu">uloop.eu</a>) FP7
project brings in a fresh approach to user-centricity by exploring
user-provided networking aspects in a way that expands the reach of a
multi-access backbone.</p>

<p>The OMNeT++ simulation model for the ULOOP Resource Management / RelaySpot
is available as part of the D3.6 public deliverable.
[<a target="_blank" href="http://siti.ulusofona.pt/~uloop/documents/uloop-documents">download page</a>]

</p>

<hr>

<img class="pic left" src="images/researchprojects/4ward.png">

<p><b>4WARD.</b> The goal of the 4WARD project (Architecture and Design for the Future Internet,
FP7 Ref: 216041, <a target="_blank" href="http://www.4ward-project.eu/">www.4ward-project.eu</a>)
is to make the development of networks and networked applications faster and easier,
leading to both more advanced and more affordable communication services.
</p>

<p>OMNeT++ was used in Working Package 5 of 4WARD (Generic Path architecture and mechanisms)
to implement an optical network model for validating the ontology-based resource description concept
presented in WP5.
</p>

<p class="bibref">Deliverable for 4WARD, WP5: <i>D-5.3 Evaluation of Generic Path architecture and mechanisms</i>
[<a target="_blank" href="http://www.4ward-project.eu/index.php?s=file_download&amp;id=98">pdf</a>]</p>

<hr>

<img class="pic left" src="images/researchprojects/wasp.png">

<p><b>WASP.</b> The WASP project (Wirelessly Accessible Sensor Populations,
<a target="_blank" href="http://cordis.europa.eu/search/index.cfm?fuseaction=proj.document&PJ_RCN=8497100" >
FP6-IST-2005-2.5.3 Embedded Systems</a>)
was aimed at the provisioning of a complete system view for building large
populations of collaborating wireless objects. Three business areas, road transport,
elderly care, and herd control, were selected for their societal significance and large
range of requirements, to validate the WASP results. The WASP consortium consisted of
six industrial partners, one SME, six large research institutes and six universities.</p>

<p>OMNeT++ was used in WASP to simulate mobile wireless sensors and
radio power consumption using the Mobility Framework
(MF; <a href="http://wiki.github.com/mobility-fw/mf-opp4" target="_blank">wiki.github.com/mobility-fw/mf-opp4</a>).
Some contributions to MF  (e.g models of the TI CC1100 and CC 2420 802.15.4
network interface cards) were developed within the WASP project under contract IST-034963.
</p>

<p class="bibref">
Jerome Rousselot, Jean-Dominique Decotiginie, Marc Aoun, Peter van der Stok, Ramon Serna Oliver, Gerhard Fohler,
<i>"Accurate Timeliness Simulations for Real-Time Wireless Sensor Networks".</i>
3rd UkSim European Symposium on Computer Modeling and Simulation (EMS 2009), 2009.
[<a target="_blank" href="http://rts.eit.uni-kl.de/fileadmin/publication_files/Rousselot_EMS09.pdf">pdf</a>]
</p>

<hr>

<img class="pic left" src="images/researchprojects/bionets.png">

<p><b>BIONETS</b>. The BIONETS project (BIOlogically-inspired
autonomic NETworks and Services, <a href="http://www.bionets.eu" target="_blank">bionets.eu</a>)
was aimed at providing a biologically-inspired open networking paradigm
for the creation, dissemination, execution, and evolution of autonomic services,
able to adapt to the surrounding environment and user needs, to evolve without
direct human supervision, and able to deal with large-scale networks of
heterogeneous nodes ranging from small, cheap devices to more complex network nodes.</p>

<!-- website disappeared
<p>The project's official simulator, the BIONETS Simulator Platform, is available from
<a href="http://bionets.hit.bme.hu">bionets.hit.bme.hu</a> as an open-source OMNeT++
simulation model. An overview of the project and the simulations is presented
in the paper cited below, and the simulator is documented in the deliverable
D1.3.2 of the project.</p>
-->

<p class="bibref">
Vilmos Simon, Laszlo Bacsardi, Sandor Szabo (TU Budapest), Daniele Miorandi (CREATE-NET), 2007.
<i>"BIONETS: A New Vision of Opportunistic Networks"</i>. Proceedings of WRECOM'07:
Wireless Rural and Emergency Communications Conference, Rome, Italy, 2007.
[<a href="http://www.bionets.eu/docs/wrecomcameraready_bute.pdf">pdf</a>]
</p>

<p class="bibref">
Sandor Szabo (editor), 2007.
<i>"D1.3.2: BIONETS simulation framework and initial performance analysis"</i>,
BIONETS project deliverable. Chapter 6, <i>"The BIONETS simulator platform"</i>, pp.31.
[<a href="http://bionets.eu/docs/BIONETS_D1_3_2.pdf">pdf</a>]
</p>

<hr>

<img class="pic left" src="images/researchprojects/optimix.png">

<p><b>OPTIMIX.</b> The ICT-OPTIMIX FP7 project
(<a href="http://www.ict-optimix.eu" target="_blank">ict-optimix.eu</a>)
studies innovative solutions enabling enhanced video streaming for point to
multi-point in an IP based wireless heterogeneous system, based on cross-
layer adaptation of the whole transmission chain. The aim of the project is
to increase the perceived quality of service for the user thanks to
efficient cross-layer mechanisms enabling efficient joint approach between
application world and transmission world. The project partners are Thales,
Siemens A.G., VTT, Cefriel, CNIT, Univ. of Southampton, TU Budapest (BME)
and NXP Semiconductors.</p>

<p>Two OMNeT++-based simulators were developed as part of the project:</p>

<ul>
  <li><b>HIPSim++</b> is an INET Framework based Host Identity Protocol (HIP) model.
  HIPSim++ has been released as an open-source model.
  (<a href="http://www.ict-optimix.eu/index.php/HIPSim" target="_blank">Project web site</a>)

  <li><b>OPTIMIXsim</b> is the OPTIMIX System Simulator, a simulator developed
  on OMNeT++ by the OPTIMIX partners. OPTIMIXsim contains modules at several levels
  of the protocol stack, including the application and session layers;
  transport, network and packetisation; radio access; and also controllers and observers.
  The model is described in the D2.1a project deliverable and on the OPTIMIXsim web site.
  The source code of the simulator is currently available on request.
  (<a href="http://www.ict-optimix.eu/index.php/OPTIMIXsim" target="_blank">Project web site</a>)
</ul>

<p class="bibref">
L. Bokor, Sz. Novaczki, L. T. Zeke, G. Jeney, 2009.
<i>"Design and Evaluation of Host Identity Protocol (HIP) Simulation Framework for INET/OMNeT++"</i>,
in the proceedings of the 12-th ACM International Conference on Modeling, Analysis and Simulation
of Wireless and Mobile Systems (MSWIM 2009), Tenerife, Canary Islands, Spain, Oct. 26. 2009.
[<a href="pdf/bokor2009-hip.pdf">pdf</a>]
</p>

<p class="bibref">
SIEMENS (editor), <i>"Preliminary Scalable Video Source Behaviour and Sensibility Model"</i>, 2009.
OPTIMIX project deliverable D2.1a, Chapter 7 "OMNeT++ Modules", pp.60.
[<a href="http://www.ict-optimix.eu/images/5/59/OPTIMIX_D2.1a_v1.1_pumode.pdf">pdf</a>]
</p>


<hr>

<img class="pic left" src="images/researchprojects/ict-rocket.png">

<p><b>ROCKET.</b> ROCKET (Reconfigurable OFDMA-based Cooperative NetworKs Enabled
by Agile SpecTrum Use, <a href="http://llocs.upc.edu/www-ictrocket/" target="_blank">http://llocs.upc.edu/www-ictrocket</a>)
is an FP7 project that aims at providing a ubiquitous wireless solution
to reach bit rates higher than 100Mbps with peak throughputs higher than 1Gbps,
based on reconfigurable OFDMA cooperative networks enabled by agile spectrum use.</p>

<p>OMNeT++ is used in Working Package 3 of the project by the project
partner Thales Communications France (TCF). Quote: <i>WP3: TCF will provide
contributions on task 3A2 / deliverable D7, building an OMNeT++ simulation
to compare the MAC-level performance of various Alamouti-based cooperative
relaying techniques in the single-cell multi-user context of the "one way
two paths" relay channel scenario</i>
(<a href="http://llocs.upc.edu/www-ictrocket/thales.htm" target="_blank">source</a>.) The simulation
model is documented in deliverable D7.</p>

<p class="bibref">
R. Hoshyar et al, 2009.
<i>"3d2 - Multi User Cooperative Transmission techniques for OFDMA Multi-hop Cellular Networks"</i>,
ROCKET project deliverable D7. Chapter 4, <i>"OMNeT++ simulation framework for ROCKET"</i>, pp.175.
[<a href="http://llocs.upc.edu/www-ictrocket/documents/Deliverables/ROCKET_3D2UNISt.pdf" target="_blank">pdf</a>]
</p>

<hr>

<img class="pic left" src="images/researchprojects/boss.png">

<p><b>BOSS.</b> The purpose of the Celtic BOSS project
(<a href="http://celtic-boss.mik.bme.hu/" target="_blank">celtic-boss.mik.bme.hu</a>)
was the design and prototype development of an efficient railway communication system. This system was aimed
at supporting the high demands of an audio/video surveillance system in a rolling
train from a control center on the wayside. The system is based on WiMAX/HSUPA
(outdoors, towards the control center) and WiFi (indoors) networks.</p>

<p>An OMNeT++ simulation model of the full communication architecture has been
used thoughout the project lifetime, and was gradually enriched with modules and
algorithms developed within the project's technical packages on radio communications,
signalling, adaptation to impairments, efficient multimedia compression, and
abnormal events detection. You can read more details in our
<a href="casestudy-boss.php">case study</a>.</p>

<p class="bibref">
C. Lamy-Bergot, 2008. <i>"BOSS: On-board wireless secured video surveillance"</i>,
in Celtic News, November 2008, pp.4. [<a href="pdf/CN-2008-3pdf.pdf">pdf</a>]
</p>

<hr>

<img class="pic left" src="images/researchprojects/psirp.png">

<p><b>PSIRP.</b> The purpose if the PSIRP (Publish-Subscribe Internet Routing Paradigm,
<a href="http://www.psirp.org" target="_blank">psirp.org</a>) FP7 project is
to design a new information-centric internetworking architecture based on the
publish-subscribe paradigm.</p>

<p>In order to better understand the possible  options and tradeoffs, project
participants implemented a standard BitTorrent simulator on OMNeT++,
which served both as a benchmark against which the PSIRP version would
be compared, and as the basis for a multicast BitTorrent version that operated
over an overlay multicast routing scheme (in particular, Scribe over Pastry,
both provided by the OverSim extension to OMNeT++). AUEB (Athens University
of Economics and Business) released the BitTorrent simulator to the OMNeT++
community as an open-source simulation model. Details are described in
deliverables D3.3 and D5.4.</p>

<p class="bibref">
P. Jokela (editor), 2009.
<i>"Progress Report and Evaluation of Implemented Upper and Lower Layer"</i>,
PSIRP project deliverable D3.3. Section 2.3.1, <i>"BitTorrent"</i>, pp.15.
[<a href="http://www.psirp.org/files/Deliverables/FP7-INFSO-ICT-216173-PSIRP-D3.3_ProgressReportOfImplementedLayers.pdf">pdf</a>]
</p>

<p class="bibref">
H. Flinck et al, 2009.
<i>"Dissemination and Exploitation Report"</i>,
PSIRP project deliverable D5.4. Section 5.1.1, <i>"Dissemination of PSIRP results"</i>, pp.7.
[<a href="http://www.psirp.org/files/Deliverables/FP7-INFSO-ICT-216173-PSIRP--D5.4_DisseminationReport-1.pdf">pdf</a>]
</p>

<hr>

<p>Please note that commercial companies joining research projects need to obtain
an OMNEST license.</p>

<?php print_leadout(); ?>
</body>
</html>
