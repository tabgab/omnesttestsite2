<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Selected Publications</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
    <!-- <script src="common/collapsible.js" type="text/javascript"></script> -->
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Selected Publications</h1></div>

<p><b>OMNeT++, the academic version of OMNEST has grown to be one of the most popular
simulation platforms for the research of various computer networks.</b>
In recent years, the number of scientific publications written with OMNeT++ and OMNEST
has been well over two hundred each year, and this number keeps growing.</p>

<p>Below is a list of selected publications that you may find interesting.</p>

<?php


$publications = array(
    // Internet
    "JGRodrigo2010" => array(
      "title" => "Peer-to-Peer IPTV service impact on network traffic",
      "authors" => "J.G. Rodrigo (Dipt. Ing. de Sist. Telematicos, Univ. Politec. de Madrid, Madrid, Spain) R.P. Leal, E.P. MartÃ­n",
      "year" => "2010",
      "where" => "2010 Fifth International Conference on Digital Telecommunications (ICDT 2010)",
      "link" => "http://dx.doi.org/10.1109/ICDT.2010.32",
    ),

    "Baumgart2007" => array(
      "logo" => "ieee",
      "title" => "OverSim: A flexible overlay network simulation framework",
      "authors" => "I. Baumgart (Inst. of Telematics, Univ. Karlsruhe, Germany), B. Heep, S. Krause",
      "year" => "2007",
      "where" => "IEEE Global Internet Symposium (GI 2007)",
      "link" => "http://dx.doi.org/10.1109/GI.2007.4301435",
      "pdf" => "http://www.tm.uni-karlsruhe.de/doc/2007/OverSim_2007.pdf"
    ),

    "Rungeler2008" => array(
      "title" => "Integration of SCTP in the OMNeT++ simulation environment",
      "authors" => "I. R&uuml;ngeler (M&uuml;nster University of Applied Sciences, Steinfurt, Germany), M. T&uuml;xen, E. P. Rathgeb",
      "year" => "2008",
      "where" => "International ICST Conference on Simulation Tools and Techniques (SimuTools '08)",
      "link" => "http://dl.acm.org/citation.cfm?id=1416310",
    ),

    "Dreibholz2010" => array(
      "title" => "Implementation and evaluation of concurrent multipath transfer for SCTP in the INET Framework",
      "authors" => "T. Dreibholz, M. Becke, J. Pulinthanath, E.P. Rathgeb (University of Duisburg-Essen, Essen, Germany)",
      "year" => "2010",
      "where" => "International Workshop on OMNeT++ (OMNeT++ '10, hosted by SimuTools)",
      "link" => "http://dl.acm.org/citation.cfm?id=1808163",
      "pdf" => "http://www.tdr.wiwi.uni-due.de/fileadmin/fileupload/I-TDR/SCTP/Paper/OMNeT__Workshop2010-SCTP.pdf"
    ),

    "Munoz2010" => array(
      "title" => "Performance evaluation of MPLS path restoration schemes using OMNeT++",
      "authors" => "M. Minero-Mu&ntilde;oz, V. Alarcon-Aquino, J. G. Garc&iacute;a-Fierro, R. Rosas-Romero, J. Rodriguez-Asomoza, O. Starostenko",
      "year" => "2010",
      "where" => "Novel Algorithms and Techniques in Telecommunications and Networking, Springer Netherlands, pp. 431-436",
      "link" => "http://dx.doi.org/10.1007/978-90-481-3662-9_74",
    ),


    // Wired and Wireless LANs
    "ShuoFang2010" => array(
      "logo" => "ieee",
      "title" => "Differentiated Ethernet congestion management for prioritized traffic",
      "authors" => "Shuo Fang (Sch. of Comput. Eng., Nanyang Technol. Univ., Singapore, Singapore) Chuan Heng Foh, Khin Mi Mi Aung",
      "year" => "2010",
      "where" => "IEEE International Conference on Communications (ICC 2010)",
      "link" => "http://dx.doi.org/10.1109/ICC.2010.5502443",
      "pdf" => "http://www.researchgate.net/publication/224152505_Differentiated_Ethernet_Congestion_Management_for_Prioritized_Traffic/file/e0b49516d763a67979.pdf"
    ),

    "DHondt2011" => array(
      "title" => "Implementation of dynamic spectrum allocation for cognitive radio networks based on iterative water filling in OMNeT++/MiXiM",
      "authors" => "S. D'Hondt, B. Scheers, V. Le Nir (Royal Military Academy, Brussels, Belgium)",
      "year" => "2011",
      "where" => "International ICST Conference on Simulation Tools and Techniques (SimuTools '11)",
      "link" => "http://dl.acm.org/citation.cfm?id=2151054.2151121",
      "pdf" => "http://www.sic.rma.ac.be/~vlenir/publications/Dhondt11a.pdf"
    ),

    "ZhiZhang2010" => array(
      "logo" => "ieee",
      "title" => "COSMO: CO-simulation with MATLAB and OMNeT++ for indoor wireless networks",
      "authors" => "Z. Zhang (iPack VINN Excellence Center, R. Inst. of Technol. (KTH), Stockholm, Sweden), Z. Lu, Q. Chen, X. Yan, L-R. Zheng",
      "year" => "2010",
      "where" => "IEEE Global Telecommunications Conference (GLOBECOM 2010)",
      "link" => "http://dx.doi.org/10.1109/GLOCOM.2010.5683583",
    ),

    "FengChen2008" => array(
      "title" => "Performance evaluation of IEEE 802.15.4 LR-WPAN for industrial applications",
      "authors" => "F. Chen (Siemens AG, Munich, Germany), N. Wang, R. German, F. Dressler",
      "year" => "2008",
      "where" => "Fifth Annual Conference on Wireless on Demand Network Systems and Services (WONS 2008)",
      "link" => "http://dx.doi.org/10.1109/WONS.2008.4459361",
    ),

    // Mobile Ad-hoc Networks
    "kopke2008" => array(
      "title" => "Simulating wireless and mobile networks in OMNeT++ &ndash; the MiXiM Vision",
      "authors" => "A. K&ouml;pke (TU Berlin, Germany), M. Swigulski, K. Wessel, D. Willkomm, et al.",
      "year" => "2008",
      "where" => "International Workshop on OMNeT++ (OMNeT++ '08, hosted by SimuTools)",
      "link" => "http://dl.acm.org/citation.cfm?id=1416302"
    ),


    "massin2010" => array(
      "title" => "OMNeT++-based cross-layer simulator for content transmission over wireless ad hoc networks",
      "authors" => "R. Massin, C. Lamy-Bergot, C. J. Le Martret, and R. Fracchia (Thales Communications)",
      "year" => "2010",
      "where" => "EURASIP Journal on Wireless Communications and Networking, vol. 2010, Article ID 502549",
      "link" => "http://dx.doi.org/10.1155/2010/502549"
    ),

     // Sensor Networks
    "JinGuo2011" => array(
      "logo" => "ieee",
      "title" => "A kind of wormhole attack defense strategy of WSN based on neighbor nodes verification",
      "authors" => "Jin Guo (Electron. & Inf. Eng. Dept., Xi'an Technol. Univ., Xi'an, China); Zhi-yong Lei",
      "year" => "2011",
      "where" => "IEEE International Conference on Communication Software and Networks (ICCSN '11)",
      "link" => "http://dx.doi.org/10.1109/ICCSN.2011.6014957"
    ),

    "PKumar2009" => array(
      "title" => "A real-time and energy-efficient MAC protocol for wireless sensor networks",
      "authors" => "P. Kumar (Inst. of Comput. Sci., Freie Univ. Berlin, Berlin) M. Gunes, Q. Mushtaq, B. Blywis",
      "year" => "2009",
      "where" => "IFIP International Conference on Wireless and Optical Communications Networks (WOCN '09)",
      "link" => "http://dx.doi.org/10.1109/WOCN.2009.5010581"
    ),

    "LCZhong2004" => array(
      "logo" => "ieee",
      "title" => "An integrated data-link energy model for wireless sensor networks",
      "authors" => "L.C. Zhong (Berkeley Wireless Res. Center, California Univ., Berkeley, CA, USA), J.M. Rabaey, A. Wolisz",
      "year" => "2004",
      "where" => "IEEE International Conference on Communications (ICC 2004)",
      "link" => "http://dx.doi.org/10.1109/ICC.2004.1313260"
    ),

    // Vehicular Networks
    "sommer2011bidirectionally" => array(
      "logo" => "ieee",
      "title" => "Bidirectionally coupled network and road traffic simulation for improved IVC analysis",
      "authors" => "C. Sommer, R. German and F. Dressler",
      "year" => "2011",
      "where" => "IEEE Transactions on Mobile Computing, vol.10 (1)",
      "link" => "http://dx.doi.org/10.1109/TMC.2010.133"
    ),

    "Eiza2012" => array(
      "logo" => "ieee",
      "title" => "A Reliability-Based Routing Scheme for Vehicular Ad Hoc Networks (VANETs) on Highways",
      "authors" => "M.H. Eiza (Wireless Networks & Commun. Centre (WNCC), Brunel Univ., Uxbridge, UK), Q. Ni",
      "year" => "2012",
      "where" => "IEEE 11th International Conference on Trust, Security and Privacy in Computing and Communications (TrustCom '12)",
      "link" => "http://dx.doi.org/10.1109/TrustCom.2012.53"
    ),

    "Ajaltouni2012" => array(
      "logo" => "ieee",
      "title" => "An efficient QoS MAC for IEEE 802.11p over cognitive multichannel vehicular networks",
      "authors" => "H.E. Ajaltouni (NSERC DIVA Res. Center, Univ. of Ottawa, ON, Canada), R.W. Pazzi, A. Boukerche",
      "year" => "2012",
      "where" => "IEEE International Conference on Communications (ICC '12)",
      "link" => "http://dx.doi.org/10.1109/ICC.2012.6364353"
    ),

    "Pandit2013" => array(
      "logo" => "ieee",
      "title" => "Adaptive traffic signal control with vehicular ad-hoc networks",
      "authors" => "K. Pandit, D. Ghosal, H.M. Zhang, Chen-Nee Chuah (Dept. of Comput. Sci., Univ. of California at Davis, Davis, CA, USA)",
      "year" => "2013",
      "where" => "IEEE Transactions on Vehicular Technology, vol.10 (4)",
      "link" => "http://dx.doi.org/10.1109/TVT.2013.2241460"
    ),

   "Baguena2013" => array(
      "logo" => "ieee",
      "title" => "VACaMobil: VANET car mobility manager for OMNeT++",
      "authors" => "M. B&aacute;guena, S. M. Tornell, &Aacute;. Torres, C. T. Calafate, JC. Cano, P. Manzoni (Department of Computer Engineering, Universitat Polit&egrave;cnica de Val&egrave;ncia)",
      "year" => "2013",
      "where" => "IEEE International Conference on Communications 2013 - 3rd IEEE International Workshop on Smart Communication Protocols and Algorithms (ICC'13 - SCPA)",
      "link" => "http://scpa.it.ubi.pt/2013/program.html", //TODO find in IEEE Xplore!
      "pdf" => "http://www.grc.upv.es/software/vacamobil/omnetWorkshop-ICC-revCalafate.pdf"
    ),

    "Noori2013" => array(
      "logo" => "ieee",
      "title" => "A novel study on beaconing for VANET-based Vehicle to Vehicle Communication: Probability of beacon delivery in realistic large-scale urban area using 802.11p",
      "authors" => "H. Noori, B.B. Olyaei (Department of Electronics and Communications Engineering, Tampere University of Technology, Finland)",
      "year" => "2013",
      "where" => "4th International Conference on Smart Communications in Network Technologies (IEEE SaCoNet 2013)",
      "link" => "http://www.lissi.fr/saconet2013/wiki/program",  //TODO find in IEEE Xplore!
      "pdf" => "http://hnoori.webs.com/H.Noori-Saconet.pdf"
    ),

    "Xu2013" => array(
      "title" => "A high-level architecture SimIVC for simulating the traffic network",
      "authors" => "X. Xu, T. Jiang, P. Li, T. Qiu, Y. Hu",
      "year" => "2013",
      "where" => "ICTIS 2013: Improving Multimodal Transportation Systems-Information, Safety, and Integration (ICTIS 2013), pp. 40-48",
      "link" => "http://ascelibrary.org/doi/abs/10.1061/9780784413036.006"
    ),

    "TYamada2009" => array(
      "logo" => "ieee",
      "title" => "High-speed infrastructure cellular network for vehicular users",
      "authors" => "T. Yamada (Coll. of Sci. & Eng., Ritsumeikan Univ., Kusatsu, Japan), T.H. Phan",
      "year" => "2009",
      "where" => "International Congress on Ultra Modern Telecommunications and Control Systems (ICUMT '09)",
      "link" => "http://dx.doi.org/10.1109/ICUMT.2009.5345429",
    ),

    // In-vehicle Networks
    "HyungTaek2011" => array(
      "logo" => "ieee acm",
      "title" => "Challenges in a future IP/Ethernet-based in-car network for real-time applications",
      "authors" => "H-T. Lim (Res. &amp; Technol., BMW Group, Munich, Germany); L. Volker; D. Herrscher",
      "year" => "2011",
      "where" => "48th ACM/EDAC/IEEE Design Automation Conference (DAC '11)",
      "link" => "http://dx.doi.org/10.1145/2024724.2024727",
      "pdf" => "http://www.dac.com/App_Content/files/49/Special_Session_Sample_2.pdf"
    ),

    "Steinbach2012" => array(
      "logo" => "ieee",
      "title" => "Tomorrow's in-car interconnect? A competitive evaluation of IEEE 802.1 AVB and Time-Triggered Ethernet (AS6802)",
      "authors" => "T. Steinbach (Hamburg University of Applied Sciences, Germany), H-T. Lim, F. Korf, T. C. Schmidt, D. Herrscher, and A. Wolisz",
      "year" => "2012",
      "where" => "IEEE Vehicular Technology Conference (VTC Fall 2012)",
      "link" => "http://dx.doi.org/10.1109/VTCFall.2012.6398932",
      "pdf" => "http://www.tkn.tu-berlin.de/fileadmin/fg112/Papers/AVB_TTEthernet_Paper_VTC_CAMReady.pdf"
    ),

    "Buschmann2013" => array(
      "title" => "Simulation-based timing analysis of FlexRay communication at system Level",
      "authors" => "S. Buschmann (Hamburg University of Applied Sciences, Germany), T. Steinbach, F. Korf, T. C. Schmidt",
      "year" => "2013",
      "where" => "International Workshop on OMNeT++ (OMNeT++ '13, hosted by SimuTools)",
      "link" => "http://www.omnet-workshop.org/2013/General/TechnicalProgram",
      "pdf" => "http://core.informatik.haw-hamburg.de/images/publications/papers/bsks-stafc-13a.pdf"
    ),

/* H.-T. Lim, D. Herrscher, M. J. Waltl, and F. Chaari, “Performance
Analysis of the IEEE 802.1 Ethernet Audio/Video Bridging Standard,” in
5th International ICST Conference on Simulation Tools and Techniques
(SIMUTools 2012)
, Sirmione-Desenzano, Italy, 2012, to appear
*/

    // Cellular Networks
    "klein2011" => array(
      "title" => "A novel approach for combined Joint Call Admission Control and Dynamic Bandwidth Adaptation in heterogeneous wireless networks",
      "authors" => "A. Klein (Dept. of Wireless Commun. &amp; Navig., Univ. of Kaiserslautern, Germany), C. Lottermann, C. Mannweiler, J. Schneider, H.D. Schotten",
      "year" => "2011",
      "where" => "7th EURO-NGI Conference on Next Generation Internet (NGI '11)",
      "link" => "http://dx.doi.org/10.1109/NGI.2011.5985943"
    ),

    "draxler2012" => array(
      "title" => "Using OMNeT++ for energy optimization simulations in mobile core networks",
      "authors" => "M. Dr&auml;xler (University of Paderborn, Paderborn, Germany), F. Beister, S. Kruska (Ericsson GmbH Eurolab R&D, Ericsson Allee, Herzogenrath, Germany), J. Aelken, H. Karl",
      "year" => "2012",
      "where" => "5th International ICST Conference on Simulation Tools and Techniques (SimuTools 2012)",
      "link" => "http://dl.acm.org/citation.cfm?id=2263038"
    ),

    "Alim2011" => array(
      "logo" => "ieee",
      "title" => "Adaptive Multi Lane technique for LTE radio access VoIP",
      "authors" => "O. Abdel Alim (Alexandria University, Alexandria, Egypt), S. Shaaban, M.N. Hamdy",
      "year" => "2011",
      "where" => "International Conference on Advanced Technologies for Communications (ATC 2011)",
      "link" => "http://dx.doi.org/10.1109/ATC.2011.6027462"
    ),

    // Satellite Communications
    "lewandowski2008" => array(
      "title" => "A multiscale real-time navigation and communication satellite simulation model for OMNeT++",
      "authors" => "A. Lewandowski, R. Burda (Dortmund University of Technology, Germany)",
      "year" => "2008",
      "where" => "1st international Conference on Simulation Tools and Techniques (SimuTools '08)",
      "link" => "http://dl.acm.org/citation.cfm?id=1416321"
    ),

    "Boussemart2008" => array(
      "logo" => "",
      "title" => "A tool for satellite communications Advanced DVB-RCS / DVB-S2 system and protocol simulator",
      "authors" => "V. Boussemart (German Aerospace Center (DLR), Wessling, Germany); H. Brandt",
      "year" => "2008",
      "where" => "10th International Workshop on Signal Processing for Space Communications (SPSC 2008)",
      "link" => "http://dx.doi.org/10.1109/SPSC.2008.4686712",
      "pdf" => "http://elib.dlr.de/58747/1/PID684650.pdf"
    ),

    "Niehoefer2013" => array(
      "logo" => "",
      "title" => "The CNI Open Source Satellite Simulator based on OMNeT++",
      "authors" => "B. Nieh&ouml;fer, S. Subik, C. Wietfeld (Dortmund University of Technology, Dortmund, Germany)",
      "year" => "2013",
      "where" => "International Workshop on OMNeT++ (OMNeT++ '13, hosted by SimuTools)",
      "link" => "http://www.researchgate.net/publication/236032227_The_CNI_Open_Source_Satellite_Simulator_based_on_OMNeT"
    ),

    // Optical Networks
    "Zhao2010" => array(
      "logo" => "ieee",
      "title" => "Routing and wavelength assignment problem in PCE-based wavelength-switched optical networks.",
      "authors" => "Y. Zhao, J. Zhang, Y. Ji, W. Gu (Beijing University of Posts and Telecommunications)",
      "year" => "2010",
      "where" => "Optical Communications and Networking, IEEE/OSA Journal of, 2(4), 196-205",
      "link" => "http://dx.doi.org/10.1364/JOCN.2.000196"
    ),

    "Kim2011" => array(
      "title" => "Integration of OMNeT++ Hybrid TDM/WDM-PON Models into INET Framework",
      "authors" => "K. S. Kim (Multidisciplinary Nanotechnology Centre, College of Engineering, Swansea University)",
      "year" => "2011",
      "where" => "International Workshop on OMNeT++ (OMNeT++ '11, hosted by SimuTools)",
      "link" => "http://www.omnet-workshop.org/2011/General/TechnicalProgram",  //TODO find in the ACM DL
      "pdf" => "http://iat-hnrl.swan.ac.uk/~kks/publications/hybrid_pon_omnetpp2011.pdf"
    ),

    // Interconnection Networks
    "Yebenes2013" => array(
      "title" => "Towards modeling interconnection networks of exascale systems with OMNeT++",
      "authors" => "P. Yebenes (Comput. Syst. Dept., Univ. de Castilla-La Mancha, Albacete, Spain); J. Escudero-Sahuquillo; P.J. Garcia; F.J. Quiles",
      "year" => "2013",
      "where" => "21st Euromicro International Conference on Parallel, Distributed and Network-Based Processing (PDP '13)",
      "link" => "http://dx.doi.org/10.1109/PDP.2013.36"
    ),

    "Gran2011" => array(
      "title" => "InfiniBand congestion control: modelling and validation",
      "authors" => "E. Gunnar Gran, S-A. Reinemo (Simula Research Laboratory, Lysaker, Norway)",
      "year" => "2011",
      "where" => "International ICST Conference on Simulation Tools and Techniques (SimuTools '11)",
      "link" => "http://dl.acm.org/citation.cfm?id=2151122"
    ),

    // Networks-on-Chip (NoCs)
    "BenItzhak2011" => array(
      "logo" => "acm ieee",
      "title" => "NoCs Simulation Framework for OMNeT++",
      "authors" => "Y. Ben-Itzhak, E. Zahavi, I. Cidon, A. Kolodny (Technion, Israel)",
      "year" => "2011",
      "where" => "ACM/IEEE International Symposium on Networks-on-Chip (NoCS '11)",
      "link" => "http://dx.doi.org/10.1145/1999946.1999993"
    ),

    "Hendry2009" => array(
      "logo" => "acm ieee",
      "title" => "Analysis of photonic networks for a chip multiprocessor using scientific applications",
      "authors" => "G. Hendry (Lightwave Res. Lab., Columbia Univ., New York, USA); S. Kamil; A. Biberman; J. Chan, et al.",
      "year" => "2009",
      "where" => "ACM/IEEE International Symposium on Networks-on-Chip (NoCS '09)",
      "link" => "http://dx.doi.org/10.1109/NOCS.2009.5071458"
    ),

    // Cloud computing, HPC clusters, SANs
    "gusat2009" => array(
      "logo" => "ieee",
      "title" => "Delay-based cloud congestion control",
      "authors" => "M. Gusat (IBM Zurich Research Laboratory, Zurich, Switzerland); R. Birke; C. Minkenberg",
      "year" => "2009",
      "where" => "IEEE Global Telecommunications Conference (GLOBECOM '09)",
      "link" => "http://dx.doi.org/10.1109/GLOCOM.2009.5425643"
    ),

    "altevogt2011" => array(
      "title" => "Modular performance simulations of clouds",
      "authors" => "P. Altevogt (IBM Germany R&D GmbH, B&ouml;blingen, Germany), T. Kiss, W. Denzel",
      "year" => "2011",
      "where" => "Winter Simulation Conference (WSC '11)",
      "link" => "http://dx.doi.org/10.1109/WSC.2011.6148026"
    ),

    "minkenberg2009" => array(
      "title" => "Trace-driven co-simulation of high-performance computing systems using OMNeT++",
      "authors" => "C. Minkenberg, G. Rodriguez (IBM Zurich Research Laboratory, R&uuml;schlikon, Switzerland)",
      "year" => "2009",
      "where" => "International Conference on Simulation Tools and Techniques (Simutools '09)",
      "link" => "http://dx.doi.org/10.4108/ICST.SIMUTOOLS2009.5521",
      "pdf" => "http://eudl.eu/pdf/10.4108/ICST.SIMUTOOLS2009.5521",
    ),

    "denzel2010" => array(
      "title" => "A framework for end-to-end simulation of high-performance computing systems",
      "authors" => "W. Denzel (IBM Zurich Research Laboratory, R&uuml;schlikon, Switzerland), J. Li, P. Walker, Y. Jin",
      "year" => "2010",
      "where" => "SIMULATION, May/June 2010 vol. 86 no. 5-6 331-350",
      "link" => "http://dx.doi.org/10.1177/0037549709340840 "
    ),

    "birke2012" => array(
      "title" => "Towards massively parallel simulations of massively parallel high-performance computing systems",
      "authors" => "R. Birke, G. Rodriguez, C. Minkenberg (IBM Zurich Research Laboratory, R&uuml;schlikon, Switzerland)",
      "year" => "2012",
      "where" => "International Conference on Simulation Tools and Techniques (Simutools '12)",
      "link" => "http://dl.acm.org/citation.cfm?id=2263065"
    ),
);

function print_publication($id) {
    global $publications;

    $pub = $publications[$id];
    echo "<p id='" . $id . "'>";

    if (array_key_exists("logo", $pub) && $pub["logo"]!="") {
        foreach (explode(" ", $pub["logo"]) as $i) {
            echo "<img src='images/misc/" . $i . ".png' style='vertical-align: middle; padding-right: 2px;'/> ";
        }
    }

    echo "<a href='" . $pub["link"] . "' target='_blank'>" . $pub["title"] . "</a>. <i>" .
         $pub["authors"] . ", " . $pub["year"] . "</i>. " . $pub["where"] . ".";

    if (array_key_exists("pdf", $pub)) {
        echo " [<a href='" . $pub["pdf"] . "' target='_blank'>PDF</a>]";
    }

    echo "</p>\n\n";
}

?>



<h2 class="framed" id_off="inet">Internet</h2>
<div>
<?php print_publication("Munoz2010"); ?>
<?php print_publication("Dreibholz2010"); ?>
<?php print_publication("JGRodrigo2010"); ?>
<?php print_publication("Baumgart2007"); ?>
</div>


<h2 class="framed" id_off="lans">Wired and Wireless LANs</h2>
<div>
<?php print_publication("DHondt2011"); ?>
<?php print_publication("ShuoFang2010"); ?>
<?php print_publication("ZhiZhang2010"); ?>
<?php print_publication("FengChen2008"); ?>
</div>


<h2 class="framed" id_off="manets">Mobile Ad-hoc Networks</h2>
<div>
<?php print_publication("massin2010"); ?>
<?php print_publication("kopke2008"); ?>
</div>


<h2 class="framed" id_off="wsn">Sensor Networks</h2>
<div>
<?php print_publication("JinGuo2011"); ?>
<?php print_publication("PKumar2009"); ?>
<?php print_publication("LCZhong2004"); ?>
</div>


<h2 class="framed" id_off="vehicular">Vehicular Networks</h2>
<div>
<?php print_publication("Pandit2013"); ?>
<?php print_publication("Baguena2013"); ?>
<?php print_publication("Noori2013"); ?>
<?php print_publication("Eiza2012"); ?>
<?php print_publication("Ajaltouni2012"); ?>
<?php print_publication("sommer2011bidirectionally"); ?>
</div>


<h2 class="framed" id_off="in-vehicle">In-vehicle Networks</h2>
<div>
<?php print_publication("Buschmann2013"); ?>
<?php print_publication("Steinbach2012"); ?>
<?php print_publication("HyungTaek2011"); ?>
</div>


<h2 class="framed" id_off="cellular">Cellular Networks</h2>
<div>
<?php print_publication("draxler2012"); ?>
<?php print_publication("klein2011"); ?>
<?php print_publication("Alim2011"); ?>
<?php print_publication("TYamada2009"); ?>
</div>


<h2 class="framed" id_off="satellite">Satellite Communications</h2>
<div>
<?php print_publication("Niehoefer2013"); ?>
<?php print_publication("lewandowski2008"); ?>
<?php print_publication("Boussemart2008"); ?>
</div>


<h2 class="framed" id_off="optical">Optical Networks</h2>
<div>
<?php print_publication("Kim2011"); ?>
<?php print_publication("Zhao2010"); ?>
</div>


<h2 class="framed" id_off="interconnection">Interconnection Networks</h2>
<div>
<?php print_publication("Yebenes2013"); ?>
<?php print_publication("Gran2011"); ?>
</div>


<h2 class="framed" id_off="nocs">Networks-on-Chip (NoCs)</h2>
<div>
<?php print_publication("BenItzhak2011"); ?>
<?php print_publication("Hendry2009"); ?>
</div>


<h2 class="framed" id_off="cloud">Cloud computing, HPC clusters, SANs</h2>
<div>
<?php print_publication("birke2012"); ?>
<?php print_publication("altevogt2011"); ?>
<?php print_publication("denzel2010"); ?>
<?php print_publication("gusat2009"); ?>
<?php print_publication("minkenberg2009"); ?>
</div>




<?php print_leadout(); ?>
</body>
</html>

