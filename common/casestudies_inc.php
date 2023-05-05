<?php

$casestudies = array(
    array("link"=>"casestudy-afdx", "text"=>"Modeling Avionics Full-Duplex Switched Ethernet (AFDX) Networks"),
    array("link"=>"casestudy-ibmzurich", "text"=>"Simulation of Next-Generation Supercomputing Systems at IBM Research"),
    array("link"=>"casestudy-photonic", "text"=>"Architectural Exploration of Chip-Scale Photonic Interconnection Networks"),
    array("link"=>"casestudy-infiniband", "text"=>"Improving the Performance of InfiniBand in a Supercomputing Cluster"),
    array("link"=>"casestudy-boss", "text"=>"The Celtic BOSS Project (Railway on-board wireless secured video surveillance)"),
    array("link"=>"casestudy-adhoc", "text"=>"Detailed Cross-Layer Simulator for Content Transmission over Wireless Ad-Hoc Networks"),
    array("link"=>"casestudy-lrwpan", "text"=>"Simulation Study of IEEE 802.15.4 LR-WPAN for Industrial Applications"),
);

function print_next_casestudy_links($current_page)
{
    $current_page = basename($current_page, ".php");

    $casestudy = get_next_casestudy_item($current_page);

    echo "<br>\n";
    if ($casestudy != NULL)
        echo "<div class=\"next\" style=\"text-align:right\"><a href=\"" . $casestudy["link"] . "\">Next Case Study <img src=\"common/images/button_next.png\"><img src=\"common/images/button_next.png\"></a></div>\n";
    echo "<div class=\"next\" style=\"text-align:right\"><a href=\"case-studies.php\">Case Study Index <img src=\"common/images/button_next.png\"><img src=\"common/images/button_next.png\"></a></div>\n";
}

function get_next_casestudy_item($current_page)
{
    global $casestudies;
    $current_page_found = false;
    foreach ($casestudies as $casestudy) {
        if ($current_page_found)
           return $casestudy;
        if ($casestudy["link"]==$current_page)
            $current_page_found = true;
    }
    return NULL;
}

?>

