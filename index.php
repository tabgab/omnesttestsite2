<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>OMNEST - High-Performance Simulation for All Kinds of Networks</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_titlepage_head_contribution(); ?>
    <script type="text/javascript" src="common/jquery.min.js" > </script>
    <script type="text/javascript" src="common/fadeslideshow.js" ></script>
    <script type="text/javascript" src="common/bannerslideshow.js" ></script>
</head>

<body>
<?php print_titlepage_leadin(); ?>


<div style="float:left; width:760px; margin-top: 8px">

<p><b>OMNEST simulation software has been chosen by R&amp;D staff, researchers
and engineers worldwide</b> to investigate scenarios and design alternatives
in various wired/wireless networks, interconnection networks,
queueing-based performance models and other systems.
OMNEST simulations can also be <b>embedded</b> in your own software products.
</p>

<div id="under-intro-text">

<div id="news" style="float:left; width:400px">
 <h1>Case Studies</h1>

<ul>
  <li><a href="casestudy-ibmzurich.php">Simulation of Next-Generation Supercomputing Systems at IBM Research</a>
  <li><a href="casestudy-adhoc.php">Detailed Cross-Layer Simulator for Content Transmission over Wireless Ad-Hoc Networks</a>
  <li><a href="casestudy-photonic.php">Architectural Exploration of Chip-Scale Photonic Interconnection Networks</a>
  <li><a href="casestudies.php">More &gt;&gt;</a><br>
</ul>

<h1>Selected Publications</h1>

<a href="http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=6498553">Towards Modeling Interconnection Networks of Exascale Systems with OMNet++.</a>
<small>P Yebenes, J Escudero-Sahuquillo... - Parallel, Distributed and Network-Based Processing (PDP)..., 2013 - ieeexplore.ieee.org</small>
<br><br>

<a href="http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=6498553">Towards Modeling Interconnection Networks of Exascale Systems with OMNet++.</a>
<small>P Yebenes, J Escudero-Sahuquillo... - Parallel, Distributed and Network-Based Processing (PDP)..., 2013 - ieeexplore.ieee.org</small>
<br><br>

<a href="http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=6498553">Towards Modeling Interconnection Networks of Exascale Systems with OMNet++.</a>
<small>P Yebenes, J Escudero-Sahuquillo... - Parallel, Distributed and Network-Based Processing (PDP)..., 2013 - ieeexplore.ieee.org</small>
<br><br>

<h1>News</h1>

<?php
include("newsitems.php");

// display all news
$maxitems = 2;
$count = 0;
foreach ($news as $news_data) {
    echo "<div class='news'>\n";
    echo "    <p class='newstitle'><a href='news.php?id=" . $news_data["id"] . "'>" . $news_data["title"] . "</a></p>\n";
    echo "    <p class='newsdate'>" . $news_data["date"] . "</p>\n";
    echo "    <div class='newssummary'><p>\n" . $news_data["summary"];
    if (array_key_exists("fulltext", $news_data)) {
        echo " <a href='news.php?id=" . $news_data["id"] . "'>More...</a>";
    }
    echo "\n</p></div>\n\n";
    echo "</div>\n";
    if (++$count >= $maxitems)
        break;
}

if (sizeof($news) > $maxitems) {
    echo "<p><a href='news.php'>More news...</a></p>\n";
}
?>
</div> <!-- id="news" -->

<div id="rightcol" style="float:right; width:340px">
<h1>Testimonials</h1>

<p><i>"CBISA has helped to simplify the community benefit reporting process for
our organization and is very user friendly. It is very easy to customize
the database to meet our specific reporting needs and the reporting tool is
very useful as it allows me to customize reports using various attributes.
I am also very pleased with the relationship our organization has with Lyon
Software and have found their entire team to be friendly and supportive."</i>
- Deborah Blake, Texas Health Resources</i></p>

<h1>Featured Stories</h1>
<img alt="" src="images/misc/marenostrum-featured.jpg" width=150 style="float:left; margin-right:10px; margin-top:3px">
<p>IBM researchers have used OMNEST to optimize one of Europe's most powerful supercomputers.<br>
<a href="archver-casestudies.php">Read more</a></p>

<div style="clear:both"></div>
<br>

<img alt="" src="images/misc/workshop08-featured.jpg" width=150 style="float:left; margin-right:10px; margin-top:3px">
<p>Users meet regularly at the International OMNeT++ Workshop, co-located with the SimuTools conference.<br>
<a href="community.php">Read more</a></p>

<div style="clear:both"></div>

</div> <!-- id="featured" -->

<div style="clear:both"></div>

</div> <!-- id="under-intro-text" -->


</div>
<div style="float:right; width:140px">
    <h1 class="titlepage" style="margin-top:3px; margin-left:0px">References</h1>
    <div style="text-align:center; border:solid 1px #bebebe; padding:8px; border-radius:4px; -moz-border-radius:4px; -webkit-border-radius:4px">
        <a href="references.php">
        <img src="references/ibm.png"> <br><br>
        <img src="references/thales.gif" width=110> <br><br>
        <img src="references/alcatel-lucent.gif" width=100> <br><br>
        <img src="references/cisco.gif"> <br><br>
        <img src="references/eads.png"> <br><br>
        <img src="references/fraunhofer.jpg" width=110>
        </a>
    </div>
    <p style="margin-top:5px; margin-left:10px"><a href="references.php">More references...</a></p>
</div>
<div style="clear:both"></div>


<?php print_titlepage_leadout(); ?>
</body>
</html>
