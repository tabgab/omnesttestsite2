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
OMNEST simulations can also be embedded into your own software products.
</p>

<div id="under-intro-text">

<div id="leftcol" style="float:left; width:400px">
<h1><a href="simulation-models.php">Simulation Models</a></h1>

<p>Models exist for
Internet protocols, wireless networks, switched LANs,
peer-to-peer networks, media streaming,
mobile ad-hoc networks, mesh networks, wireless sensor networks,
vehicular networks, NoCs,
HPC clusters, cloud computing, SANs, optical networks,
and more...
<a href="simulation-models.php">Explore the models&nbsp;&raquo;</a>
</p>

<h1><a href="case-studies.php">Case Studies</a></h1>

<ul>
  <li><a href="casestudy-ibmzurich.php">Simulation of Next-Generation Supercomputing Systems at IBM Research</a>
  <li><a href="casestudy-adhoc.php">Detailed Cross-Layer Simulator for Content Transmission over Wireless Ad-Hoc Networks</a>
  <li><a href="casestudy-photonic.php">Architectural Exploration of Chip-Scale Photonic Interconnection Networks</a>
  <li><a href="case-studies.php">More&nbsp;&raquo;</a><br>
</ul>

<!--
<h1><a href="publications.php">Selected Publications</a></h1>

<img src="images/misc/ieee.png">
<a href="http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=6498553">Towards Modeling Interconnection Networks of Exascale Systems with OMNet++.</a>
<small>P Yebenes, J Escudero-Sahuquillo... - Parallel, Distributed and Network-Based Processing (PDP)..., 2013 - ieeexplore.ieee.org</small>
<br><br>

<img src="images/misc/ieee.png">
<a href="http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=6498553">Towards Modeling Interconnection Networks of Exascale Systems with OMNet++.</a>
<small>P Yebenes, J Escudero-Sahuquillo... - Parallel, Distributed and Network-Based Processing (PDP)..., 2013 - ieeexplore.ieee.org</small>
<br><br>

<img src="images/misc/ieee.png">
<a href="http://ieeexplore.ieee.org/xpls/abs_all.jsp?arnumber=6498553">Towards Modeling Interconnection Networks of Exascale Systems with OMNet++.</a>
<small>P Yebenes, J Escudero-Sahuquillo... - Parallel, Distributed and Network-Based Processing (PDP)..., 2013 - ieeexplore.ieee.org</small>
<br><br>
-->

</div> <!--leftcol-->

<div id="rightcol" style="float:right; width:340px">
<h1><a href="embedding.php">Add Simulation To Your Software Products!</a></h1>
<p>You can <a href="embedding.php">embed</a> the simulation kernel or whole simulations into your software products.</p>

<!--TODO
<h1><a href="testimonials.php">Testimonials</a></h1>

<p><i>"Using OMNEST was a real pleasure after the struggle we had with our former simulation tool."</i>
- John Smith, ACME Inc.</i></p>

<p><i>"Due to OMNEST's good design and excellent documentation, we became productive with it very fast."</i>
- Jane Smith, EMCA Inc.</i></p>
-->

<!--
<h1>Featured Stories</h1>

<img alt="" src="images/misc/marenostrum-featured.jpg" width=150 style="float:left; margin-right:10px; margin-top:3px">
<p>IBM researchers have used OMNEST to optimize one of Europe's most powerful supercomputers.<br>
<a href="casestudy-ibmzurich.php">Read more&nbsp;&raquo;</a></p>
<div style="clear:both"></div>
<br>

<img alt="" src="images/misc/workshop08-featured.jpg" width=150 style="float:left; margin-right:10px; margin-top:3px">
<p>Users meet regularly at the International OMNeT++ Workshop, co-located with the SimuTools conference.<br>
<a href="community.php">Read more&nbsp;&raquo;</a></p>
<div style="clear:both"></div>
-->

<h1><a href="news.php">News</a></h1>

<?php
include("newsitems.php");
include("common/news_inc.php");
news_print_frontpage(2);
?>

</div> <!--rightcol-->

<div style="clear:both"></div>

</div>


</div>
<div style="float:right; width:140px">
    <h1 class="titlepage" style="margin-top:3px; margin-left:0px"><a href="references.php">References</a></h1>
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
