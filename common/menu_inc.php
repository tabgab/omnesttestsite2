<?php

// PRODUCT  | TRY OMNEST  | HOW TO BUY | SUPPORT | ABOUT US

$touritems = array(
    //array("text"=>"Take Advantage of Simulation", "link"=>"tour-why-simulation"),
    array("text"=>"Benefit from Existing Models", "link"=>"tour-models"),
    array("text"=>"Develop Models Easily", "link"=>"tour-development"),
    array("text"=>"High-Performance Simulation", "link"=>"tour-simulation"),
    array("text"=>"Evaluate Your Model", "link"=>"tour-analysis"),
    array("text"=>"OMNEST Integrates Well", "link"=>"tour-integrates"),
);

$tour_menu = array(
    array("text"=>"What is OMNEST?", "link"=>"omnest-is"),
    array("text"=>"OMNEST Product Tour", "link"=>$touritems[0]["link"], "highlight"=>0, "submenu"=>$touritems),
    array("text"=>"Learn about OMNEST", "link"=>"overview", "crosslink"=>1),
    array("text"=>"OMNEST in the World", "link"=>"references", "crosslink"=>1),
    array("text"=>"Try OMNEST", "link"=>"try-omnest"),
    array("text"=>"How to buy OMNEST", "link"=>"contact", "highlight"=>0, "crosslink"=>1),
    array("text"=>"Services", "link"=>"services", "highlight"=>0, "crosslink"=>1),
    array("text"=>"Company", "link"=>"company", "crosslink"=>1)
);

$product_menu = array(
    array("text"=>"What is OMNEST?", "link"=>"omnest-is"),
    array("text"=>"OMNEST Product Tour", "link"=>$touritems[0]["link"], "crosslink"=>1),
    array("text"=>"Learn more about OMNEST", "link"=>"overview", "highlight"=>0, "submenu"=>array(
        array("text"=>"Overview", "link"=>"overview", "subpages"=>array(
            "systemc-integration",
            "embedding"
        )),
        array("text"=>"Typical Application Areas", "link"=>"application-areas", "subpages"=>array(
            "architecture-verification",
            "network-simulation",
            "performance-modeling",
            "queueinglib"
        )),
        array("text"=>"Simulation Models", "link"=>"simulation-models"),
        array("text"=>"Simulation IDE", "link"=>"ide"),
        array("text"=>"Demo Videos", "link"=>"demo-videos"),
        array("text"=>"Documentation", "link"=>"documentation"),
    )),

    array("text"=>"OMNEST in the World", "link"=>"references", "highlight"=>0, "submenu"=>array(
        array("text"=>"Customers", "link"=>"references"),
        //TODO add back when there is content:  array("text"=>"Testimonials", "link"=>"testimonials"),
        array("text"=>"Publications", "link"=>"publications"),
        array("text"=>"Case Studies", "link"=>"case-studies", "subpages"=>array(
            "casestudy-adhoc",
            "casestudy-afdx",
            "casestudy-boss",
            "casestudy-cloud",
            "casestudy-ibmzurich",
            "casestudy-infiniband",
            "casestudy-lrwpan",
            "casestudy-photonic"
        )),
        array("text"=>"Reference Projects", "link"=>"netsim-references"),
        array("text"=>"Book Recommendation", "link"=>"network-simulation-book"),
    )),

    array("text"=>"Try OMNEST", "link"=>"try-omnest"),
    array("text"=>"How to buy OMNEST", "link"=>"contact", "highlight"=>0, "crosslink"=>1),
    array("text"=>"Services", "link"=>"services", "highlight"=>0, "crosslink"=>1),
    array("text"=>"Company", "link"=>"company", "highlight"=>0, "crosslink"=>1),
);

$purchase_menu = array(
    array("text"=>"What is OMNEST?", "link"=>"omnest-is"),
    array("text"=>"OMNEST Product Tour", "link"=>$touritems[0]["link"], "crosslink"=>1),
    array("text"=>"Learn about OMNEST", "link"=>"overview", "crosslink"=>1),
    array("text"=>"OMNEST in the World", "link"=>"references", "crosslink"=>1),
    array("text"=>"Try OMNEST", "link"=>"try-omnest", "subpages"=>array(
            "download-eval-request",
            "download-eval-post",
            "download-eval"
        )),
    array("text"=>"How to buy OMNEST", "link"=>"contact", "highlight"=>0, "submenu"=>array(
        array("text"=>"Request Quotation", "link"=>"contact"),
        array("text"=>"Do I Need a License?", "link"=>"licensingfaq"),
        array("text"=>"Licensing Options", "link"=>"licensing"),
        array("text"=>"License Agreement", "link"=>"license"),
        array("text"=>"OMNEST vs. OMNeT++", "link"=>"comparison"),
    )),
    array("text"=>"Services", "link"=>"services", "highlight"=>0, "submenu"=>array(
        array("text"=>"Consulting, Training", "link"=>"services"),
        array("text"=>"Technical Support", "link"=>"support"),
        array("text"=>"Download OMNEST", "link"=>"downloads"),
    )),
    array("text"=>"Company", "link"=>"company", "highlight"=>0, "submenu"=>array(
        array("text"=>"About Us", "link"=>"company"),
        // array("text"=>"Community", "link"=>"community"),
        array("text"=>"Partners", "link"=>"partners"),
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
                            <li><a href="omnest-is" id="footermenu">What is OMNEST?</a>
                            <li><a href="tour-models" id="footermenu">Product Tour</a>
                        </ul>
                    </li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Learn More
                        <ul>
                            <li><a href="overview" id="footermenu">Overview</a>
                            <li><a href="application-areas" id="footermenu">Application Areas</a>
                            <li><a href="simulation-models" id="footermenu">Simulation Models</a>
                            <li><a href="ide" id="footermenu">Simulation IDE</a>
                            <li><a href="demo-videos" id="footermenu">Demo Videos</a>
                            <li><a href="documentation" id="footermenu">Documentation</a>
                        </ul>
                    </li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>OMNEST In the World
                        <ul>
                            <li><a href="references" id="footermenu">Customers</a>
                            <!-- <li><a href="testimonials" id="footermenu">Testimonials</a> -->
                            <li><a href="publications" id="footermenu">Publications</a>
                            <li><a href="case-studies" id="footermenu">Case Studies</a>
                            <li><a href="netsim-references" id="footermenu">Reference Projects</a>
                            <li><a href="network-simulation-book" id="footermenu">Book Recommendation</a>
                        </ul>
                    </li>
                </ul>
            </td>
            <td>
                <ul>
                    <li><a href="contact" id="footermenu">Contact Us /<br> Request Quotation</a></li>
                    <li><a href="licensingfaq" id="footermenu">Do I Need a License?</a></li>
                    <li><a href="licensing" id="footermenu">Licensing Options</a></li>
                    <li><a href="license" id="footermenu">License Agreement</a></li>
                    <li><a href="comparison" id="footermenu">OMNeT++ Comparison</a></li>
                    <li><a href="support" id="footermenu">Technical Support</a></li>
                    <li><a href="downloads" id="footermenu">Download OMNEST</a></li>
                    <li><a href="services" id="footermenu">Consulting, Training</a></li>
                </ul>
            </td>
            <td>
                <ul>
                    <li><a href="company" id="footermenu">Company</a>
                    <li><a href="partners" id="footermenu">Partners</a>
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

    $is_tryomnest_related = $current_page=="try-omnest" ||
                            $current_page=="download-eval" ||
                            $current_page=="download-eval-post" ||
                            $current_page=="download-eval-request";

    $is_purchase_related =  $current_page=="contact" ||
                            $current_page=="contact_post" ||
                            $current_page=="licensingfaq" ||
                            $current_page=="licensing" ||
                            $current_page=="license";

    $is_support_related =   $current_page=="support" ||
                            $current_page=="downloads" ||
                            $current_page=="services";

    $is_company_related =   $current_page=="company" ||
                            $current_page=="partners";

    print_top_menu_item("PRODUCT", "omnest-is", $menu===$tour_menu || $menu===$product_menu);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    print_top_menu_item("TRY OMNEST", "try-omnest", $is_tryomnest_related);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    print_top_menu_item("HOW TO BUY", "contact", $is_purchase_related);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    //print_top_menu_item("SERVICES", "services", $current_page=="services");
    //echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    print_top_menu_item("SERVICES", "services", $is_support_related);
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    print_top_menu_item("ABOUT US", "company", $is_company_related);
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
        print_next_link("tour-thankyou", "Next: Finish the Tour", $small);
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


