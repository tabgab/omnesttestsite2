<?php

// PRODUCT  | TRY OMNEST  | HOW TO BUY | SUPPORT | ABOUT US

$touritems = array(
    array("text"=>"Take Advantage of Simulation", "link"=>"tour-why-simulation.php"),
//    array("text"=>"OMNEST is...", "link"=>"tour-omnest-is.php"), // http://flightsoftware.jhuapl.edu/files/2011/FSW11_Paine.pdf  slide 4
    array("text"=>"Develop Models Easily", "link"=>"tour-development.php"),
    array("text"=>"Benefit from Existing Models", "link"=>"tour-models.php"),
    array("text"=>"High-Performance Simulation", "link"=>"tour-simulation.php"),
//    array("text"=>"<i>Utilize</i><br/>Powerful Simulation", "link"=>"tour-simulation.php"),
//    array("text"=>"<i>Utilize</i><br/>Superior Simulation", "link"=>"tour-simulation.php"),

    array("text"=>"Make Right Design Decisions", "link"=>"tour-analysis.php"),
    //array("text"=>"<i>Make the</i><br/>Right Design Decisions", "link"=>"tour-analysis.php"),

    //array("text"=>"Gain Insight from Simulations", "link"=>"tour-analysis.php"),
    //array("text"=>"Make Better Decisions", "link"=>"tour-analysis.php"),
    //array("text"=>"Make Better Design Decisions", "link"=>"tour-analysis.php"),  //TODO: s
    //array("text"=>"Gain Insight Into Your System", "link"=>"tour-analysis.php"),

    array("text"=>"Integrate with OMNEST", "link"=>"tour-integrates.php"),
    //array("text"=>"OMNEST Integrates", "link"=>"tour-integrates.php"),

    //TODO array("text"=>"- TODO", "link"=>"tour-todo.php"),
);

$tour_menu = array(
    array("text"=>"What is OMNEST?", "link"=>"omnest-is.php"),
    array("text"=>"OMNEST Product Tour", "link"=>$touritems[0]["link"], "highlight"=>0, "submenu"=>$touritems),
    array("text"=>"Learn about OMNEST", "link"=>"learn-omnest.php", "crosslink"=>1),
    array("text"=>"OMNEST in the World", "link"=>"references.php", "crosslink"=>1),
    array("text"=>"Try OMNEST", "link"=>"try-omnest.php"),
    array("text"=>"How to buy OMNEST", "link"=>"contact.php", "highlight"=>0, "crosslink"=>1),
    array("text"=>"Support", "link"=>"support.php", "highlight"=>0, "crosslink"=>1),
    array("text"=>"Company", "link"=>"company.php", "crosslink"=>1)
);

$product_menu = array(
    array("text"=>"What is OMNEST?", "link"=>"omnest-is.php"),
    array("text"=>"OMNEST Product Tour", "link"=>$touritems[0]["link"], "crosslink"=>1),
    array("text"=>"Learn more about OMNEST", "link"=>"learn-omnest.php", "highlight"=>0, "submenu"=>array(
        array("text"=>"At a Glance", "link"=>"learn-omnest.php"),
        array("text"=>"Overview", "link"=>"overview.php"),
        array("text"=>"Typical Application Areas", "link"=>"application-areas.php"),
        array("text"=>"Simulation Models", "link"=>"simulation-models.php"),
        array("text"=>"Simulation IDE", "link"=>"ide.php"),
        array("text"=>"Demo Videos", "link"=>"demo-videos.php"),
////        array("text"=>"Embedding", "link"=>"embedding.php"),
        array("text"=>"Documentation", "link"=>"documentation.php"),
//    )),

////    array("text"=>"Performance Modeling", "link"=>"performance-modeling.php", "highlight"=>0, "submenu"=>array(
//        array("text"=>"Performance Modeling", "link"=>"performance-modeling.php"),
////        array("text"=>"Modeling Library", "link"=>"queueinglib.php"),
//    )),

//    array("text"=>"Architecture Verification", "link"=>"architecture-verification.php", "highlight"=>0, "submenu"=>array(
//        array("text"=>"Architecture Verification", "link"=>"architecture-verification.php"),
////        array("text"=>"SystemC Support", "link"=>"systemc-integration.php"),
//    )),

//    array("text"=>"Network Simulation", "link"=>"network-simulation.php", "highlight"=>0, "submenu"=>array(
//        array("text"=>"Network Simulation", "link"=>"network-simulation.php"),
//        array("text"=>"INET Framework", "link"=>"inet-framework.php"),
//        array("text"=>"Castalia", "link"=>"castalia.php"),
//        array("text"=>"MiXiM", "link"=>"mixim.php"),
    )),

    array("text"=>"OMNEST in the World", "link"=>"references.php", "highlight"=>0, "submenu"=>array(
        array("text"=>"Customers", "link"=>"references.php"),
        array("text"=>"Testimonials", "link"=>"testimonials.php"),
        array("text"=>"Publications", "link"=>"publications.php"),
        array("text"=>"Case Studies", "link"=>"case-studies.php"),
        array("text"=>"References", "link"=>"netsim-references.php"),
        //array("text"=>"Reference Projects", "link"=>"netsim-references.php"),
        array("text"=>"Book Recommendation", "link"=>"network-simulation-book.php"),
    )),

    array("text"=>"Try OMNEST", "link"=>"try-omnest.php"),
    array("text"=>"How to buy OMNEST", "link"=>"contact.php", "highlight"=>0, "crosslink"=>1),
    array("text"=>"Support", "link"=>"support.php", "highlight"=>0, "crosslink"=>1),
    array("text"=>"Company", "link"=>"company.php", "highlight"=>0, "crosslink"=>1),
);

$purchase_menu = array(
    array("text"=>"What is OMNEST?", "link"=>"omnest-is.php"),
    array("text"=>"OMNEST Product Tour", "link"=>$touritems[0]["link"], "crosslink"=>1),
    array("text"=>"Learn about OMNEST", "link"=>"learn-omnest.php", "crosslink"=>1),
    array("text"=>"OMNEST in the World", "link"=>"references.php", "crosslink"=>1),
    array("text"=>"Try OMNEST", "link"=>"try-omnest.php"),
    array("text"=>"How to buy OMNEST", "link"=>"contact.php", "highlight"=>0, "submenu"=>array(
        array("text"=>"Request Quotation", "link"=>"contact.php"),
        array("text"=>"Do I Need a License?", "link"=>"licensingfaq.php"),
        array("text"=>"Licensing Options", "link"=>"licensing.php"),
        array("text"=>"License Agreement", "link"=>"license.php"),
        array("text"=>"OMNEST vs. OMNeT++", "link"=>"comparison.php"),
    )),
    array("text"=>"Support", "link"=>"support.php", "highlight"=>0, "submenu"=>array(
        array("text"=>"Techincal Support", "link"=>"support.php"),
        array("text"=>"Download OMNEST", "link"=>"download.php"),
        array("text"=>"Training and Consulting", "link"=>"services.php"),
        array("text"=>"Contact", "link"=>"contact.php"),
    )),
    array("text"=>"Company", "link"=>"company.php", "highlight"=>0, "submenu"=>array(
        array("text"=>"About Us", "link"=>"company.php"),
        // array("text"=>"Community", "link"=>"community.php"),
        array("text"=>"Partners", "link"=>"partners.php"),
    )),
);

$blank_menu = array();  // for pages that don't need a menu

function print_footer_links()   //TOOD this is totally out of date!!!
{
?>
    <table class="footerlinks">
        <tr>
          <td class="colhead" colspan="3" >Product</td>
          <td class="colhead">Purchase</td>
          <td class="colhead">About Us</td>
        </tr>
        <tr>
            <td>
                <ul>
                    <li><a href="learn-omnest.php">OMNEST</a>
                      <ul>
                        <li><a href="overview.php">Overview</a>
                        <li><a href="features.php">Features</a>
                        <li><a href="references.php">References</a>
                        <li><a href="ide.php">IDE Tour</a>
                        <li><a href="demo-videos.php">Demo Videos</a>
                        <li><a href="documentation.php">List of Documentation</a>
                        <li><a href="comparison.php">OMNEST vs. OMNeT++</a>
                      </ul>
                </ul>
            </td>
            <td>
                <ul>
                    <li><a href="performance-modeling.php">Performance Modeling</a>
                      <ul>
                        <li><a href="perf-casestudies.php">Case Studies</a>
                        <li><a href="queueinglib.php">Perf. Modeling Library</a>
                      </ul>
                    <li><a href="architecture-verification.php">Architecture Verification</a>
                      <ul>
                        <li><a href="systemc-integration.php">SystemC Integration</a>
                        <li><a href="archver-casestudies.php">Case Studies</a>
                      </ul>
                    <li><a href="embedding.php">Embedding</a>
                </ul>
            </td>
            <td>
                <ul>
                    <li><a href="network-simulation.php">Network Simulation</a>
                        <ul>
                            <li><a href="netsim-references.php">References</a>
                            <li><a href="netsim-casestudies.php">Case Studies</a>
                            <li><a href="inet-framework.php">INET Framework</a>
                            <li><a href="castalia.php">Castalia</a>
                            <li><a href="mixim.php">MiXiM</a>
                            <li><a href="network-simulation-book.php">Book Recommendation</a>
                        </ul>
                </ul>
            </td>
            <td>
                <ul>
                    <li><a href="try-omnest.php">Try OMNEST</a>
                    <li><a href="contact.php">Request Quotation</a>
                        <ul>
                            <li><a href="licensingfaq.php">Do I Need a License?</a>
                            <li><a href="licensing.php">Licensing Options</a>
                            <li><a href="license.php">License Agreement</a>
                        </ul>
                    <li><a href="services.php">Services</a>
                    <li><a href="support.php">Support</a>
                        <ul>
                            <li><a href="download.php">Download OMNEST</a>
                        </ul>
                </ul>
            </td>
            <td>
                <ul>
                    <li><a href="company.php">Company</a>
                    <li><a href="community.php">Community</a>
                    <li><a href="partners.php">Partners</a>
                </ul>
            </td>
        </tr>
    </table>
<?php
}

function print_top_menu($menu, $current_page)
{
    global $tour_menu, $product_menu, $purchase_menu;

    $current_page = basename($current_page);

    $is_tryomnest_related = $current_page=="try-omnest.php" ||
                            $current_page=="download-eval.php" ||
                            $current_page=="download-eval-post.php" ||
                            $current_page=="download-eval-request.php";

    $is_purchase_related =  $current_page=="contact.php" ||
                            $current_page=="contact_post.php" ||
                            $current_page=="licensingfaq.php" ||
                            $current_page=="licensing.php" ||
                            $current_page=="license.php";

    $is_support_related =   $current_page=="support.php" ||
                            $current_page=="download.php" ||
                            $current_page=="services.php";

    $is_company_related =   $current_page=="company.php" ||
                            $current_page=="partners.php";

    print_top_menu_item("PRODUCT", "omnest-is.php", $menu===$tour_menu || $menu===$product_menu);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    print_top_menu_item("TRY OMNEST", "try-omnest.php", $is_tryomnest_related);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    print_top_menu_item("HOW TO BUY", "contact.php", $is_purchase_related);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    //print_top_menu_item("SERVICES", "services.php", $current_page=="services.php");
    //echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    print_top_menu_item("SUPPORT", "support.php", $is_support_related);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    print_top_menu_item("ABOUT US", "company.php", $is_company_related);
}

function print_top_menu_item($name, $link, $is_selected)
{
    $class_name = $is_selected ? "topmenuitem_selected" : "topmenuitem";
    echo "<a href=\"$link\" class=\"$class_name\">$name</a>";
}

function print_menu($menu, $current_page)
{
    $current_page = basename($current_page);

    echo "<div class=\"vmenu\">\n";
    foreach ($menu as $menuitem) {
        $class_attr = " class=\"vmenuitem" . ((is_highlightable($menuitem) && $menuitem["link"]==$current_page) ? " selected\"" : "\"");
        printf(" <div%s><a href=\"%s\">%s</a></div>\n", $class_attr, $menuitem["link"], $menuitem["text"]);
        if (array_key_exists("submenu", $menuitem)) {
            $submenu = $menuitem["submenu"];
            echo "  <div class=\"vsubmenu\">\n";
            foreach ($submenu as $submenuitem) {
                $class_attr = " class=\"vsubmenuitem" . ((is_highlightable($submenuitem) && $submenuitem["link"]==$current_page) ? " selected\"" : "\"");
                printf("   <div%s><a href=\"%s\">%s</a></div>\n", $class_attr, $submenuitem["link"], $submenuitem["text"]);
            }
            echo "  </div>\n";
        }
    }
    echo "</div>\n";
}

function is_highlightable($menuitem)
{
    return !array_key_exists("highlight", $menuitem) || $menuitem["highlight"];
}

function print_next_links($menu, $current_page)
{
    $current_page = basename($current_page);
    $menuitem = get_next_menu_item($menu, $current_page);

    echo "<br>\n";
    if ($menuitem != NULL)
        print_next_link($menuitem["link"], "Next: " . $menuitem["text"]);
}

function get_next_menu_item($menu, $current_page)
{
    $current_page_found = false;
    foreach ($menu as $menuitem) {
        if ($current_page_found && $menuitem["link"]!=$current_page && !array_get($menuitem, "crosslink"))
           return $menuitem;
        if (!$current_page_found && $menuitem["link"]==$current_page)
            $current_page_found = true;
        if (array_key_exists("submenu", $menuitem)) {
            $submenu = $menuitem["submenu"];
            foreach ($submenu as $submenuitem) {
                if ($current_page_found && $submenuitem["link"]!=$current_page && !array_get($submenuitem, "crosslink"))
                    return $submenuitem;
                if (!$current_page_found && $submenuitem["link"]==$current_page)
                    $current_page_found = true;
            }
        }
    }
    return NULL;
}

function array_get($array, $index)
{
    return array_key_exists($index, $array) ? $array[$index] : NULL;
}

function print_next_link($url, $text)
{
    echo "<div class=\"next\" style=\"text-align:right\"><a href=\"" . $url . "\">" . $text . " <img src=\"common/images/button_next.png\"><img src=\"common/images/button_next.png\"></a></div>\n";
}

function print_next_link_small($url, $text)
{
    echo "<div class=\"next-small\" style=\"text-align:right; height:0px\"><a href=\"" . $url . "\">" . $text . "&nbsp;&raquo;</a></div>\n";
}

function print_next_tourstep_links($current_page)
{
    $current_page = basename($current_page);

    $tourstep = get_next_tourstep_item($current_page);

    echo "<br>\n";
    if ($tourstep != NULL)
        print_next_link($tourstep["link"], "Next: " . $tourstep["text"]);
    else
        print_next_link("tour-thankyou.php", "Next: Finish the Tour");
}

function get_next_tourstep_item($current_page)
{
    global $touritems;
    $current_page_found = false;
    foreach ($touritems as $tourstep) {
        if ($current_page_found)
           return $tourstep;
        if ($tourstep["link"]==$current_page)
            $current_page_found = true;
    }
    return NULL;
}

?>


