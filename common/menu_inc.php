<?php

// PRODUCT  | TRY OMNEST  | HOW TO BUY | SUPPORT | ABOUT US

$touritems = array(
    //array("text"=>"Take Advantage of Simulation", "link"=>"tour-why-simulation.php"),
    array("text"=>"Benefit from Existing Models", "link"=>"tour-models.php"),
    array("text"=>"Develop Models Easily", "link"=>"tour-development.php"),
    array("text"=>"High-Performance Simulation", "link"=>"tour-simulation.php"),
    array("text"=>"Evaluate Your Model", "link"=>"tour-analysis.php"),
    array("text"=>"OMNEST Integrates Well", "link"=>"tour-integrates.php"),
);

$tour_menu = array(
    array("text"=>"What is OMNEST?", "link"=>"omnest-is.php"),
    array("text"=>"OMNEST Product Tour", "link"=>$touritems[0]["link"], "highlight"=>0, "submenu"=>$touritems),
    array("text"=>"Learn about OMNEST", "link"=>"overview.php", "crosslink"=>1),
    array("text"=>"OMNEST in the World", "link"=>"references.php", "crosslink"=>1),
    array("text"=>"Try OMNEST", "link"=>"try-omnest.php"),
    array("text"=>"How to buy OMNEST", "link"=>"contact.php", "highlight"=>0, "crosslink"=>1),
    array("text"=>"Services", "link"=>"services.php", "highlight"=>0, "crosslink"=>1),
    array("text"=>"Company", "link"=>"company.php", "crosslink"=>1)
);

$product_menu = array(
    array("text"=>"What is OMNEST?", "link"=>"omnest-is.php"),
    array("text"=>"OMNEST Product Tour", "link"=>$touritems[0]["link"], "crosslink"=>1),
    array("text"=>"Learn more about OMNEST", "link"=>"overview.php", "highlight"=>0, "submenu"=>array(
        array("text"=>"Overview", "link"=>"overview.php", "subpages"=>array(
            "systemc-integration.php",
            "embedding.php"
        )),
        array("text"=>"Typical Application Areas", "link"=>"application-areas.php", "subpages"=>array(
            "architecture-verification.php",
            "network-simulation.php",
            "performance-modeling.php",
            "queueinglib.php"
        )),
        array("text"=>"Simulation Models", "link"=>"simulation-models.php"),
        array("text"=>"Simulation IDE", "link"=>"ide.php"),
        array("text"=>"Demo Videos", "link"=>"demo-videos.php"),
        array("text"=>"Documentation", "link"=>"documentation.php"),
    )),

    array("text"=>"OMNEST in the World", "link"=>"references.php", "highlight"=>0, "submenu"=>array(
        array("text"=>"Customers", "link"=>"references.php"),
        //TODO add back when there is content:  array("text"=>"Testimonials", "link"=>"testimonials.php"),
        array("text"=>"Publications", "link"=>"publications.php"),
        array("text"=>"Case Studies", "link"=>"case-studies.php", "subpages"=>array(
            "casestudy-adhoc.php",
            "casestudy-afdx.php",
            "casestudy-boss.php",
            "casestudy-cloud.php",
            "casestudy-ibmzurich.php",
            "casestudy-infiniband.php",
            "casestudy-lrwpan.php",
            "casestudy-photonic.php"
        )),
        array("text"=>"Reference Projects", "link"=>"netsim-references.php"),
        array("text"=>"Book Recommendation", "link"=>"network-simulation-book.php"),
    )),

    array("text"=>"Try OMNEST", "link"=>"try-omnest.php"),
    array("text"=>"How to buy OMNEST", "link"=>"contact.php", "highlight"=>0, "crosslink"=>1),
    array("text"=>"Services", "link"=>"services.php", "highlight"=>0, "crosslink"=>1),
    array("text"=>"Company", "link"=>"company.php", "highlight"=>0, "crosslink"=>1),
);

$purchase_menu = array(
    array("text"=>"What is OMNEST?", "link"=>"omnest-is.php"),
    array("text"=>"OMNEST Product Tour", "link"=>$touritems[0]["link"], "crosslink"=>1),
    array("text"=>"Learn about OMNEST", "link"=>"overview.php", "crosslink"=>1),
    array("text"=>"OMNEST in the World", "link"=>"references.php", "crosslink"=>1),
    array("text"=>"Try OMNEST", "link"=>"try-omnest.php", "subpages"=>array(
            "download-eval-request.php",
            "download-eval-post.php",
            "download-eval.php"
        )),
    array("text"=>"How to buy OMNEST", "link"=>"contact.php", "highlight"=>0, "submenu"=>array(
        array("text"=>"Request Quotation", "link"=>"contact.php"),
        array("text"=>"Do I Need a License?", "link"=>"licensingfaq.php"),
        array("text"=>"Licensing Options", "link"=>"licensing.php"),
        array("text"=>"License Agreement", "link"=>"license.php"),
        array("text"=>"OMNEST vs. OMNeT++", "link"=>"comparison.php"),
    )),
    array("text"=>"Services", "link"=>"services.php", "highlight"=>0, "submenu"=>array(
        array("text"=>"Consulting, Training", "link"=>"services.php"),
        array("text"=>"Technical Support", "link"=>"support.php"),
        array("text"=>"Download OMNEST", "link"=>"download.php"),
    )),
    array("text"=>"Company", "link"=>"company.php", "highlight"=>0, "submenu"=>array(
        array("text"=>"About Us", "link"=>"company.php"),
        // array("text"=>"Community", "link"=>"community.php"),
        array("text"=>"Partners", "link"=>"partners.php"),
    )),
);

$blank_menu = array();  // for pages that don't need a menu

function print_footer_links()
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
                    <li>Introduction
                        <ul>
                            <li><a href="omnest-is.php" id="footermenu">What is OMNEST?</a>
                            <li><a href="tour-models.php" id="footermenu">Product Tour</a>
                        </ul>
                    </li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Learn More
                        <ul>
                            <li><a href="overview.php" id="footermenu">Overview</a>
                            <li><a href="application-areas.php" id="footermenu">Application Areas</a>
                            <li><a href="simulation-models.php" id="footermenu">Simulation Models</a>
                            <li><a href="ide.php" id="footermenu">Simulation IDE</a>
                            <li><a href="demo-videos.php" id="footermenu">Demo Videos</a>
                            <li><a href="documentation.php" id="footermenu">Documentation</a>
                        </ul>
                    </li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>OMNEST In the World
                        <ul>
                            <li><a href="references.php" id="footermenu">Customers</a>
                            <!-- <li><a href="testimonials.php" id="footermenu">Testimonials</a> -->
                            <li><a href="publications.php" id="footermenu">Publications</a>
                            <li><a href="case-studies.php" id="footermenu">Case Studies</a>
                            <li><a href="netsim-references.php" id="footermenu">Reference Projects</a>
                            <li><a href="network-simulation-book.php" id="footermenu">Book Recommendation</a>
                        </ul>
                    </li>
                </ul>
            </td>
            <td>
                <ul>
                    <li><a href="contact.php" id="footermenu">Contact Us /<br> Request Quotation</a></li>
                    <li><a href="licensingfaq.php" id="footermenu">Do I Need a License?</a></li>
                    <li><a href="licensing.php" id="footermenu">Licensing Options</a></li>
                    <li><a href="license.php" id="footermenu">License Agreement</a></li>
                    <li><a href="comparison.php" id="footermenu">OMNeT++ Comparison</a></li>
                    <li><a href="support.php" id="footermenu">Technical Support</a></li>
                    <li><a href="download.php" id="footermenu">Download OMNEST</a></li>
                    <li><a href="services.php" id="footermenu">Consulting, Training</a></li>
                </ul>
            </td>
            <td>
                <ul>
                    <li><a href="company.php" id="footermenu">Company</a>
                    <li><a href="partners.php" id="footermenu">Partners</a>
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
    print_top_menu_item("SERVICES", "services.php", $is_support_related);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    print_top_menu_item("ABOUT US", "company.php", $is_company_related);
}

function print_top_menu_item($name, $link, $is_selected)
{
    $class_name = $is_selected ? "topmenuitem_selected" : "topmenuitem";
    echo "<a href=\"$link\"  id=\"topmenu\" class=\"$class_name\">$name</a>";
}

function print_menu($menu, $current_page)
{
    $current_page = basename($current_page);

    echo "<div class=\"vmenu\">\n";
    foreach ($menu as $menuitem) {
        $class_attr = " class=\"vmenuitem" . (is_highlightable($menuitem,$current_page) ? " selected\"" : "\"");
        printf(" <div%s><a  id=\"menu\" href=\"%s\">%s</a></div>\n", $class_attr, $menuitem["link"], $menuitem["text"]);
        if (array_key_exists("submenu", $menuitem)) {
            $submenu = $menuitem["submenu"];
            echo "  <div class=\"vsubmenu\">\n";
            foreach ($submenu as $submenuitem) {
                $class_attr = " class=\"vsubmenuitem" . (is_highlightable($submenuitem,$current_page) ? " selected\"" : "\"");
                printf("   <div%s><a id=\"menu\" href=\"%s\">%s</a></div>\n", $class_attr, $submenuitem["link"], $submenuitem["text"]);
            }
            echo "  </div>\n";
        }
    }
    echo "</div>\n";
}

function is_highlightable($menuitem, $current_page)
{
    //return (!array_key_exists("highlight", $menuitem) || $menuitem["highlight"]) && $menuitem["link"]==$current_page;

    if (array_key_exists("highlight", $menuitem) && !$menuitem["highlight"])
        return false;
    if ($menuitem["link"]==$current_page)
        return true;
    if (array_key_exists("subpages", $menuitem) && in_array($current_page, $menuitem["subpages"]))
        return true;
    return false;
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

function print_next_link($url, $text, $small=false)
{
    if ($small)
        echo "<div class=\"next-small\" style=\"text-align:right; height:0px\"><a id=\"small_next_link\" href=\"" . $url . "\">" . $text . "&nbsp;&raquo;</a></div>\n";
    else
        echo "<div class=\"next\" style=\"text-align:right\"><a id=\"large_next_link\" href=\"" . $url . "\">" . $text . " <img src=\"common/images/button_next.png\"><img src=\"common/images/button_next.png\"></a></div>\n";
}

function print_next_link_small($url, $text)
{
    print_next_link($url, $text, true);
}

function print_next_tourstep_links($current_page, $small=false)
{
    $current_page = basename($current_page);

    $tourstep = get_next_tourstep_item($current_page);

    if ($tourstep != NULL)
        print_next_link($tourstep["link"], "Next: " . $tourstep["text"], $small);
    else
        print_next_link("tour-thankyou.php", "Next: Finish the Tour", $small);
}

function print_next_tourstep_links_small($current_page)
{
    print_next_tourstep_links($current_page, true);
    echo "<br>\n";
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


