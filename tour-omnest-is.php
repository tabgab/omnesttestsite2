<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Tour of the Simulation IDE</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
    <style type="text/css">
.row td {
    border-bottom: 1px solid lightgray;
    padding-bottom: 20px;
}
    </style>
    <script src="common/enlargeit.js" type="text/javascript"></script>
</head>

<body>
<?php print_leadin($tour_menu, __FILE__); ?>


<div id="header"><h1>OMNEST is...</h1></div>

<!-- TODO:
   grafikák:
      - halvány tompa kék körlap, *kivágva* belõle a figura; minimális árnyék
      - vagy: kék kör alakú keretet rátenni, hogy az alsókkal konzisztens legyen

   több verziót kipróbálni:
      - címlapon, egyben az egész
      - elsõ fele a címlapon, második fele egy NEXT> gomb után
      - cimlap marad, onnan feltûnõ "Learn More" gombbal érhetõ el a tour

   kérdés: ha tour a címlapon marad, a News rész melyik lapra kerüljön?

   más:
      - References-t fõ menüponttá tenni (promotálni eggyel)
      - Embedding: behozni az elsõ OMNEST alá
      - IDE Tour -> IDE Overview
      - List of documentation -> Documentation
      - Comparison lap: kiírni hogy az OMNeT++ az OMNEST academic verziója (ill. vica versa)
      - cimlapon a slideshow lehetne egy link pl az IDE Overview-ra
      - a 3 menüt összevonni (pl az adott lapon nem releváns almenük fixen csukva lennének) ill racionalizálni, ld conversion audit
-->

<table>

<tr><td><img src="images/tour/network.png" width=150></td><td> <!-- network? -->
<p><font size="+3">A network simulator platform</font><br>
Provides generic infrastructure for creating, running and evaluating simulations.
OMNEST can cater for the simulation of communication networks including
ad-hoc and vehicular networks, queueing systems, etc; do performance modeling,
architecture verification, configuration validation and more.</p>
</td></tr>

<tr><td><img src="images/tour/r-n-d.png" width=150></td><td>
<p><font size="+3">for R&amp;D</font><br>
Researchers and R&amp;D people need to investigate deeper than just parameterizing existing systems.
Expect frameworks and open-source tweakable models instead of "canned" models.</p>
</td></tr>

<tr><td><img src="images/tour/swiss-army-knife.png" width=150></td><td> <!-- swiss army knife -->
<p><font size="+3">flexible</font><br>
You can change simulation models in any way you want, because you have access to model source and platform infrastructure.
You can also get the simulator work together with other software in your toolbox: external simulators, Matlab, SystemC, HLA, you name it.
</p>
</td></tr>

<tr><td><img src="images/tour/performance.png" width=150></td><td>  <!-- car? fighter plane? -->
<p><font size="+3">high performance</font><br>
<b>Models are written in C++</b>, and execute on top of a streamlined simulation kernel to provide high event throughput.
Diagnostic and animation features pose minimal overhead when not in use.</p>
</td></tr>

<tr><td><img src="images/tour/trusted.png" width=150></td><td>  <!-- tick? -->
<p><font size="+3">trusted by industry leaders</font><br>
Many large companies are relying on OMNEST in their R&amp;D for exploring large-scale
problems using network simulation. Several have created their own internal simulation models
or model libraries that they can turn to whenever new challenges appear.
</p>
</td></tr>

<tr><td><img src="images/tour/open.png" width=150></td><td> <!-- open door? open book? open box? palms? -->
<p><font size="+3">open</font><br>
Open culture, open interfaces! OMNEST has started as an open-source project, and it shows. We do not hide any
source code from you or lock down any part of the product. Well-documented extension APIs, plain-text input
and output file formats make it easy to accommodate special needs.</p>
</td></tr>

<tr><td><img src="images/tour/community.png" width=150></td><td> <!-- graduation hat? kemcso+lombik? atom? community/users? einstein? -->
<p><font size="+3">well embedded in the scientific community</font><br>
Under the name OMNeT++, OMNEST is a well-established tool in the scientific community.
Over 200 papers are published each year at various conferences and in journals, and
dedicated workshops take place annually with peer-reviewed submissions. The community mailing list
is busier than ever, and there are dozens of OMNeT++-related web sites (projects, blogs, etc).
For you, this means you have access to a huge pool of talent and a wealth of information on the Internet.
(Search with the keyword "OMNeT++".)</p>
</td></tr>

<tr><td><img src="images/tour/wealth-of-models.png" width=150></td><td>  <!-- community icon? github icon? open source logo? -->
<p><font size="+3">wealth of open-source simulation models</font><br>
As a result of the strong user community, there is an ever-growing number of open-source simulation models
available to you, covering very diverse domains from internet routing to ad-hoc and sensor networks, in-car networks,
4G, photonic on-chip networks and so on.
These models can give you a jump-start when building your simulation model to solve the problem at hand.
</p>
</td></tr>

</table>


<a href="try-omnest.php"><img src="common/images/button_download_eval.png" alt="Download Evaluation Version"></a>
<a href="contact.php"><img src="common/images/button_request_quotation.png" alt="Request Quotation"></a>
<a href="tour-todo.php"><img src="common/images/button_learn_more.png" alt="Learn More About OMNEST"/></a>

<?php print_leadout(); ?>
</body>
</html>
