<?php

$extlinks = array(
     "inet" => array("link"=>"http://inet.omnetpp.org", "text"=>"INET Framework"),
     "mixim" => array("link"=>"https://github.com/omnetpp/mixim", "text"=>"MiXiM"),
     "miximsf" => array("link"=>"http://mixim.sourceforge.net/", "text"=>"old site"),
     "inetmanet" => array("link"=>"https://github.com/aarizaq/inetmanet-2.0", "text"=>"INETMANET"),
     "castalia" => array("link"=>"http://castalia.research.nicta.com.au/index.php/en/", "text"=>"Castalia"),
     "oversim" => array("link"=>"http://www.oversim.org", "text"=>"OverSim"),
     "denacast" => array("link"=>"http://www.denacast.org/", "text"=>"DenaCast"),
     "ansa" => array("link"=>"http://nes.fit.vutbr.cz/ansa/pmwiki.php?n=Main.HomePage", "text"=>"ANSA"),
     "rease" => array("link"=>"https://i72projekte.tm.uka.de/trac/ReaSE", "text"=>"ReaSE"),
     "hipsimpp" => array("link"=>"http://www.ict-optimix.eu/index.php/HIPSim", "text"=>"HIPSim++"),
     "mcoapp" => array("link"=>"http://mcoa.dei.uc.pt", "text"=>"mCoA++"),
     "mcoapp-github" => array("link"=>"https://github.com/bmsousa/mCoAplus", "text"=>"github"),
     "ebitsim" => array("link"=>"http://github.com/pedromanoel/EbitSim", "text"=>"EBitSim"),
     "quagga" => array("link"=>"https://github.com/inet-framework/inet-quagga", "text"=>"Quagga"),
     "numbat" => array("link"=>"http://klub.com.pl/numbat/", "text"=>"Numbat"),
     "nesct" => array("link"=>"http://nesct.sourceforge.net/", "text"=>"NesCT"),
     "veins" => array("link"=>"http://veins.car2x.org/", "text"=>"Veins"),
     "vns" => array("link"=>"http://www.dcc.fc.up.pt/~rjf/vns/", "text"=>"VNS"),
     "tt4inet" => array("link"=>"http://tte4inet.realmv6.org", "text"=>"TT4INET"),
     "simulte" => array("link"=>"http://simulte.com", "text"=>"SimuLTE"),
     "4gsim" => array("link"=>"https://github.com/4gsim/4Gsim", "text"=>"4Gsim"),
     "os3" => array("link"=>"http://www-os3.kn.e-technik.tu-dortmund.de", "text"=>"OS<sup>3</sup>"),
     "hnrl" => array("link"=>"https://github.com/kyeongsoo/inet-hnrl", "text"=>"INET-HNRL"),
     "epon" => array("link"=>"http://sourceforge.net/projects/omneteponmodule/", "text"=>"EPON"),
     "obs" => array("link"=>"https://www.tlm.unavarra.es/research/projects/strrong/soft/obsmodules/", "text"=>"OBSModules"),
     "obsgithub" => array("link"=>"https://github.com/mikelizal/OBSmodules", "text"=>"github"),
     "ib_flit_sim" => array("link"=>"http://www.mellanox.com/page/omnet", "text"=>"ib_flit_sim"),
     "venus" => array("link"=>"http://researcher.watson.ibm.com/researcher/view_project.php?id=1071", "text"=>"Venus"),
     "hnocs" => array("link"=>"http://hnocs.eew.technion.ac.il", "text"=>"HNoCS"),
     "phoenixsim" => array("link"=>"http://lightwave.ee.columbia.edu/?s=research&p=phoenixsim", "text"=>"PhoenixSim"),
     "icancloud" => array("link"=>"http://icancloudsim.org", "text"=>"iCanCloud"),
     "simcan" => array("link"=>"http://www.arcos.inf.uc3m.es/~simcan", "text"=>"SIMCAN"),
     "simsans" => array("link"=>"http://www.simsans.org", "text"=>"SimSANs"),
     "hecios" => array("link"=>"https://github.com/bws/HECIOS", "text"=>"HECIOS"),
     "heciosthesis" => array("link"=>"http://etd.lib.clemson.edu/documents/1252424075/Settlemyer_clemson_0050D_10281.pdf", "text"=>"Details"),
     "ompcm" => array("link"=>"http://sdqweb.ipd.kit.edu/wiki/OMPCM", "text"=>"OMPCM"),
);

function extlink($key, $text=null)
{
    global $extlinks;
    $extlink = $extlinks[$key];
    $link = $extlink["link"];
    if ($text == null)
        $text = $extlink["text"];
    echo "<a href=\"" . $link . "\" target=\"_blank\">" . $text . "</a>";
}

?>


