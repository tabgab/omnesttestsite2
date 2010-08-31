	<!-- Start Topmenu -->
	<div id="topmenu"><a href="academic.php" class="topmenulink">Academic</a> | <a href="licensing.php" class="topmenulink">Business</a> | <a href="partners.php" class="topmenulink">Partners</a> | <a href="contact.php" class="topmenulink">Contact</a></div>
	<!-- End Topmenu -->


	<!-- Start Logo -->
	<div id="logo"><a href="index.php"><img src="common/images/logo.gif" width="150" height="150" alt="Omnest" border="0" /></a></div>
	<div id="logoinside"><img src="common/images/logo_opensimulator.gif" width="198" height="17" alt="The Open Simulator" /></div>
	<!-- End Logo -->

	<!-- Start Main Menu -->
	<div id="mainmenu">
	<div id="mainmenuitem"><a href="index.php" class="mainmenulink">Home</a></div>
	<div id="mainmenuitem">|</div>
	<div id="mainmenuitem"><a href="overview.php" class="mainmenulink">Products</a></div>
	<div id="mainmenuitem">|</div>
	<div id="mainmenuitem"><a href="references.php" class="mainmenulink">References</a></div>
	<div id="mainmenuitem">|</div>
	<div id="mainmenuitem"><a href="download.php" class="mainmenulink">Download</a></div>
	<div id="mainmenuitem">|</div>
	<div id="mainmenuitem"><a href="company.php" class="mainmenulink">Company</a></div>
	<div id="mainmenuitem">|</div>
	<div id="mainmenuitem"><a href="http://www.omnetpp.org" target="_blank" class="mainmenulink">OMNeT++<img src="common/images/menu_arrow.gif" alt="" width="5" height="5" hspace="3" border="0"></a></div>

<?php
function minimenu($list) {
    echo "<!-- Start Minimenu --><div id=\"minimenu\">";
    $images = array(
        "performance-modeling" => "common/images/minimenu_performancemodeling.gif",
        "architecture-verification" => "common/images/minimenu_architectureverification.gif",
        "network-simulation" => "common/images/minimenu_protocoldesign.gif",
        "embedding" => "common/images/minimenu_simkernel.gif",
        "overview" => "common/images/minimenu_overview.gif"
    );
    foreach ($list as $key) {
        $page = "$key.php";
        $image = $images[$key];
        echo "<a href=\"$page\"><img src=\"$image\" width=\"118\" height=\"44\" alt=\"\" border=\"0\" /></a>";
    }
    echo "</div><!-- End Minimenu -->";
}
?>
