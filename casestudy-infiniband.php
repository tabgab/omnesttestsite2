<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>
<?php include("common/casestudies_inc.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Architecture Verification Case Studies</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
    <script src="common/enlargeit.js" type="text/javascript"></script>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Case Studies &ndash; Improving the Performance of InfiniBand in a Supercomputing Cluster</h1></div>

<div class="pic right rounded">
<img src="images/misc/pleiades.jpg">
<div style="width:350px">The Pleiades supercomputer, featuring the world's largest
InfiniBand interconnect network (illustration; source:
<a href="http://www.hec.nasa.gov/news/gallery_images/pleiades.html" target="_blank">NASA</a>)</div>
</div>

<p>
Dr Birk and his colleague at the Parallel Systems Laboratory of the
Technion (Israel Institute of Technology) investigated congestion in
high-performance (HPC) computing clusters using the InfiniBand&#0174;
interconnection network, with the help of Eitan Zahavi of Mellanox
Technologies (Mellanox is a leading provider of InfiniBand equipment).
InfiniBand (24%) is one of the most prevalent interconnects
in top-500 supercomputers beside Gigabit Ethernet (58%) (2009).
Congestion arises in cluster-based supercomputers due to contention for links,
and spreads due to oversubscription of communication resources.
</p>

<p>The researchers used OMNeT++ simulations to explore and evaluate
various options to mitigate congestion to improve the performance of the system.
Since the goal was to simulate large networks with thousands of nodes,
they created special InfiniBand models that operate at the functional,
rather than cycle-accurate, level.
Although the methods under study for reducing congestion are topology
agnostic, the team examined them on a <i>k</i>-ary <i>n</i>-tree
topology, which is a variant of a practical fat tree. This topology
is popular in modern clusters.
</p>

<p>
Based on simulation experiments, the team proposed novel adaptive routing
and rate calculation algorithms. On a slightly augmented 16-ary 3-tree implementing
a 4096-node fat tree (which is highly representative of current computer
clusters), adaptive routing alone was shown to be effective at mitigating the
"topological" congestion, i.e. reduced it by some 50%. The necessary slight
topological extension only entailed a 10% increase in the number of switch ports.
The study contributes to the understanding of supercomputer architectures, and
helps build more powerful supercomputers in a cost-effective way.
</p>

<p><a href="pdf/birk2009.pdf">Read the full text (pdf)</a></p>

<p class="bibref">
Yitzhak Birk and Vladimir Zdornov (Technion, Israel Institute of Technology), 2009.
<i>"Improving communication-phase completion times in HPC clusters through congestion mitigation."</i>
SYSTOR '09: Proceedings of SYSTOR 2009: The Israeli Experimental Systems Conference: 1--11.
</p>

<?php print_next_casestudy_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>

