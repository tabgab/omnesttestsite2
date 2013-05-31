<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Book Recommendation</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Book Recommendation</h1></div>

<b>Modeling and Tools for Network Simulation</b><br>
Klaus Wehrle, Mesut G&uuml;nes, James Gross (Editors), Springer, 2010.

<br>
<br>

<p>

<a target="_blank" href="http://www.springer.com/computer/communication+networks/book/978-3-642-12330-6">
<img class="right" src="images/misc/network-simulation-book.png">
</a>

This book focuses on tools, modeling principles and state-of-the art models
for discrete event simulation of communication networks, with an emphasis
on wireless simulations.
</p>

<p>
Chapter 3 of the book, written by OMNeT++/OMNEST author Andras Varga,
presents a high-level overview and rationale of the concepts, techniques
and tools present in the OMNeT++ simulation environment. Since OMNEST is
essentially the same codebase as OMNeT++, all text applies to OMNEST as well.
</p>

<p>
The wireless section of the book covers all essential modeling principles
for dealing with physical layer, link layer and wireless channel behavior,
and presents detailed models for IEEE 802.11, IEEE 802.16 and other
systems. Further chapters cover classical modeling approaches for higher
layers (network layer, transport layer and application layer) and modeling
approaches for peer-to-peer networks and topologies of networks.
The book briefly covers OMNeT++ simulation frameworks like MiXiM and
INET, as well.
</p>

<ul class="links">
<li>See the book's page at <a target="_blank" href="http://www.performance.rwth-aachen.de/publications/modeling-and-tools-for-network-simulation">RWTH Aachen</a>
or at <a target="_blank" href="http://www.springer.com/computer/communication+networks/book/978-3-642-12330-6">Springer</a>, or
<li>Buy it from <a target="_blank" href="http://www.amazon.com/Modeling-Tools-Network-Simulation-Wehrle/dp/3642123309">Amazon</a>
</li>
</ul>

<p>Amazon lets you view the first few chapters, the table of contents and the index
under the "Look Inside" function.</p>

<p>(Note that the book's length is misprinted on the above sites -- it is actually 500+ pages not 256.)</p>

<?php print_next_links($product_menu, __FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
