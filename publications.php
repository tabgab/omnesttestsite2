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

<p>We have assembled a list of selected publications that you may find interesting.
Happy browsing!</p>

<?php


$publications = array(
    // Internet
    //TODO

    // Wired and Wireless LANs
    //TODO

    // Mobile Ad-hoc Networks
    "massin2010" => array(
      "title" => "OMNeT++-Based Cross-Layer Simulator for Content Transmission over Wireless Ad Hoc Networks",
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

    // Vehicular Networks
    "sommer2011bidirectionally" => array(
      "logo" => "ieee",
      "title" => "Bidirectionally Coupled Network and Road Traffic Simulation for Improved IVC Analysis",
      "authors" => "Christoph Sommer, Reinhard German and Falko Dressler",
      "year" => "2011",
      "where" => "IEEE Transactions on Mobile Computing, vol.10 (1)",
      "link" => "http://dx.doi.org/10.1109/TMC.2010.133"
    ),

    // In-vehicle Networks
    "HyungTaek2011" => array(
      "title" => "Challenges in a future IP/Ethernet-based in-car network for real-time applications",
      "authors" => "Hyung-Taek Lim (Res. & Technol., BMW Group, Munich, Germany); Volker, L.; Herrscher, D.",
      "year" => "2011",
      "where" => "Design Automation Conference (DAC '11)",
      "link" => "http://dx.doi.org/10.1145/2024724.2024727",
      "pdf" => "http://www.dac.com/App_Content/files/49/Special_Session_Sample_2.pdf"
    ),

    // Cellular Networks
    "klein2011" => array(
      "logo" => "",
      "title" => "A novel approach for combined Joint Call Admission Control and Dynamic Bandwidth Adaptation in heterogeneous wireless networks",
      "authors" => "Klein, A. (Dept. of Wireless Commun. & Navig., Univ. of Kaiserslautern, Kaiserslautern, Germany); Lottermann, C.; Mannweiler, C.; Schneider, J.; Schotten, H.D.",
      "year" => "2011",
      "where" => "7th EURO-NGI Conference on Next Generation Internet (NGI '11)",
      "link" => "http://dx.doi.org/10.1109/NGI.2011.5985943"
    ),

    "draxler2012" => array(
      "logo" => "",
      "title" => "Using OMNeT++ for energy optimization simulations in mobile core networks",
      "authors" => "Martin Dr&auml;xler (University of Paderborn, Paderborn, Germany), Frederic Beister, Stephan Kruska (Ericsson GmbH Eurolab R&D, Ericsson Allee, Herzogenrath, Germany), J&ouml;rg Aelken, Holger Karl",
      "year" => "2012",
      "where" => "5th International ICST Conference on Simulation Tools and Techniques (SimuTools 2012)",
      "link" => "http://dl.acm.org/citation.cfm?id=2263038"
    ),

    "Alim2011" => array(
      "logo" => "",
      "title" => "Adaptive Multi Lane technique for LTE radio access VoIP",
      "authors" => "Abdel Alim, O. (Alexandria University, Alexandria, Egypt); Shaaban, S.; Hamdy, M.N.",
      "year" => "2011",
      "where" => "International Conference on Advanced Technologies for Communications (ATC 2011)",
      "link" => "http://dx.doi.org/10.1109/ATC.2011.6027462"
    ),

    // Satellite Communications
    "lewandowski2008" => array(
      "title" => "A multiscale real-time navigation and communication satellite simulation model for OMNeT++",
      "authors" => "Andreas Lewandowski, Ralf Burda (Dortmund University of Technology, Dortmund, Germany)",
      "year" => "2008",
      "where" => "1st international Conference on Simulation Tools and Techniques (SimuTools '08)",
      "link" => "http://dl.acm.org/citation.cfm?id=1416321"
    ),

    "Boussemart2008" => array(
      "logo" => "",
      "title" => "A tool for satellite communications Advanced DVB-RCS / DVB-S2 system and protocol simulator",
      "authors" => "Boussemart, V. (German Aerospace Center (DLR), Wessling, Germany); Brandt, H.",
      "year" => "2008",
      "where" => "10th International Workshop on Signal Processing for Space Communications (SPSC 2008)",
      "link" => "http://dx.doi.org/10.1109/SPSC.2008.4686712",
      "pdf" => "http://elib.dlr.de/58747/1/PID684650.pdf"
    ),

    "Niehoefer2013" => array(
      "logo" => "",
      "title" => "The CNI Open Source Satellite Simulator based on OMNeT++",
      "authors" => "Brian Nieh&ouml;fer, Sebastian Subik, Christian Wietfeld (Dortmund University of Technology, Dortmund, Germany)",
      "year" => "2013",
      "where" => "International Workshop on OMNeT++ (OMNeT++ '13, hosted by SimuTools)",
      "link" => "http://www.researchgate.net/publication/236032227_The_CNI_Open_Source_Satellite_Simulator_based_on_OMNeT"
    ),

    // Optical Networks
    //TODO

    // Interconnection Networks
    "exascale" => array(
      "title" => "Towards Modeling Interconnection Networks of Exascale Systems with OMNeT++",
      "authors" => "Yebenes, P (Comput. Syst. Dept., Univ. de Castilla-La Mancha, Albacete, Spain); Escudero-Sahuquillo, J.; Garcia, P.J.; Quiles, F.J.",
      "year" => "2013",
      "where" => "21st Euromicro International Conference on Parallel, Distributed and Network-Based Processing (PDP '13)",
      "link" => "http://dx.doi.org/10.1109/PDP.2013.36"
    ),

    "Gran2011" => array(
      "title" => "InfiniBand congestion control: modelling and validation",
      "authors" => "Ernst Gunnar Gran, Sven-Arne Reinemo (Simula Research Laboratory, Lysaker, Norway)",
      "year" => "2011",
      "where" => "International ICST Conference on Simulation Tools and Techniques (SimuTools '11)",
      "link" => "http://dl.acm.org/citation.cfm?id=2151122"
    ),

    // Networks-on-Chip (NoCs)
    "BenItzhak2011" => array(
      "logo" => "acm ieee",
      "title" => "NoCs Simulation Framework for OMNeT++",
      "authors" => "Yaniv Ben-Itzhak, Eitan Zahavi, Israel Cidon, Avinoam Kolodny (Technion, Israel)",
      "year" => "2011",
      "where" => "ACM/IEEE International Symposium on Networks-on-Chip (NoCS '11)",
      "link" => "http://dx.doi.org/10.1145/1999946.1999993"
    ),

    "Hendry2009" => array(
      "logo" => "acm ieee",
      "title" => "Analysis of photonic networks for a chip multiprocessor using scientific applications",
      "authors" => "Hendry, G. (Lightwave Res. Lab., Columbia Univ., New York, USA); Kamil, S.; Biberman, A.; Chan, J. et al",
      "year" => "2009",
      "where" => "ACM/IEEE International Symposium on Networks-on-Chip (NoCS '09)",
      "link" => "http://dx.doi.org/10.1109/NOCS.2009.5071458"
    ),

    // Cloud computing, HPC clusters, SANs
    "gusat2009" => array(
      "logo" => "ieee",
      "title" => "Delay-Based Cloud Congestion Control",
      "authors" => "Gusat, M. (IBM Zurich Research Laboratory, Zurich, Switzerland); Birke, R.; Minkenberg, C.",
      "year" => "2009",
      "where" => "IEEE Global Telecommunications Conference (GLOBECOM '09)",
      "link" => "http://dx.doi.org/10.1109/GLOCOM.2009.5425643"
    ),

    "altevogt2011" => array(
      "title" => "Modular performance simulations of clouds",
      "authors" => "Peter Altevogt (IBM Germany R&D GmbH, Boeblingen, Germany), Tibor Kiss, Wolfgang Denzel",
      "year" => "2011",
      "where" => "Winter Simulation Conference (WSC '11)",
      "link" => "http://dx.doi.org/10.1109/WSC.2011.6148026"
    ),

    "minkenberg2009" => array(
      "title" => "Trace-driven co-simulation of high-performance computing systems using OMNeT++",
      "authors" => "Cyriel Minkenberg, German Rodriguez (IBM Zurich Research Laboratory, R&uuml;schlikon, Switzerland)",
      "year" => "2009",
      "where" => "International Conference on Simulation Tools and Techniques (Simutools '09)",
      "link" => "http://dx.doi.org/10.4108/ICST.SIMUTOOLS2009.5521",
      "pdf" => "http://eudl.eu/pdf/10.4108/ICST.SIMUTOOLS2009.5521",
    ),

    "denzel2010" => array(
      "title" => "A Framework for End-to-End Simulation of High-performance Computing Systems",
      "authors" => "Wolfgang Denzel (IBM Zurich Research Laboratory, R&uuml;schlikon, Switzerland), Jian Li, Peter Walker, Yuho Jin",
      "year" => "2010",
      "where" => "SIMULATION, May/June 2010 vol. 86 no. 5-6 331-350",
      "link" => "http://dx.doi.org/10.1177/0037549709340840 "
    ),

    "birke2012" => array(
      "title" => "Towards massively parallel simulations of massively parallel high-performance computing systems",
      "authors" => "Robert Birke, German Rodriguez, Cyriel Minkenberg (IBM Zurich Research Laboratory, R&uuml;schlikon, Switzerland)",
      "year" => "2012",
      "where" => "International Conference on Simulation Tools and Techniques (Simutools '12)",
      "link" => "http://dl.acm.org/citation.cfm?id=2263065"
    ),

//--------------

    "TODO" => array(
      "logo" => "",
      "title" => "",
      "authors" => "",
      "year" => "",
      "where" => "",
      "link" => ""
    ),

);

function print_publication($id) {
    global $publications;

    $pub = $publications[$id];
    echo "<p id='" . $id . "'>";

    if (array_key_exists("logo", $pub) && $pub["logo"]!="") {
        foreach (explode(" ", $pub["logo"]) as $i) {
            echo "<img src='images/misc/" . $i . ".png'> ";
        }
    }

    echo "<a href='" . $pub["link"] . "' target='_blank'>" . $pub["title"] . "</a>. " .
         $pub["authors"] . ", " . $pub["year"] . ". <i>" . $pub["where"] . "</i>.";

    if (array_key_exists("pdf", $pub)) {
        echo " [<a href='" . $pub["pdf"] . "' target='_blank'>PDF</a>]";
    }
    echo "</p>\n\n";
}

?>



<h2 class="framed" id_off="inet">Internet</h2>
<div>
TODO
</div>


<h2 class="framed" id_off="lans">Wired and Wireless LANs</h2>
<div>
TODO
</div>


<h2 class="framed" id_off="manets">Mobile Ad-hoc Networks</h2>
<div>
<?php print_publication("massin2010"); ?>
</div>


<h2 class="framed" id_off="wsn">Sensor Networks</h2>
<div>
<?php print_publication("JinGuo2011"); ?>
</div>


<h2 class="framed" id_off="vehicular">Vehicular Networks</h2>
<div>
<?php print_publication("sommer2011bidirectionally"); ?>
</div>


<h2 class="framed" id_off="in-vehicle">In-vehicle Networks</h2>
<div>
<?php print_publication("HyungTaek2011"); ?>
</div>


<h2 class="framed" id_off="cellular">Cellular Networks</h2>
<div>
<?php print_publication("draxler2012"); ?>
<?php print_publication("klein2011"); ?>
<?php print_publication("Alim2011"); ?>
</div>


<h2 class="framed" id_off="satellite">Satellite Communications</h2>
<div>
<?php print_publication("lewandowski2008"); ?>
<?php print_publication("Niehoefer2013"); ?>
<?php print_publication("Boussemart2008"); ?>
</div>


<h2 class="framed" id_off="optical">Optical Networks</h2>
<div>
TODO
</div>


<h2 class="framed" id_off="interconnection">Interconnection Networks</h2>
<div>
<?php print_publication("exascale"); ?>
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

