<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>
<?php include("common/casestudies_inc.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Performance Modeling Studies</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
    <script src="common/enlargeit.js" type="text/javascript"></script>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Case Study &ndash; Performance Simulation of Clouds at IBM Research</h1></div>

<p>Cloud computing is a game changing technology that provides customers with
means of consuming data center resources. Because cloud customers expect
good and consistent response times to their requests irrespective of the
workload already posted against the cloud, performance and scalability are
essential here. Typical performance metrics here are e.g. the "number of
concurrent users" that a cloud can support respecting certain response time
constraints, or throughput and response times of provisioning images (e.g.
instances of operating systems) as a function of the number of concurrent
provisioning requests in flight.</p>

<p>Performance and scalability of clouds handling such workloads
significantly depend on the infrastructure available (in terms of
physical server, networking and storage), as well as on the software
heuristics to manage this infrastructure, cloud users, approval processes
and reservation and provisioning of resources.</p>

<p>Dr. Altevogt (IBM Research, Germany) and his colleagues have built an
OMNEST-based simulation framework for the performance simulation of clouds. [...]
</p>

<p>TODO TODO TODO</p>

<div class="pic right" >
<img src="images/misc/altevogt-cloud-1.png" width="300px" alt="TODO" onclick="enlarge(this);" longdesc="images/misc/altevogt-cloud-1.png"/>
<div>TODO TODO TODO<br>(figure from the paper; click to enlarge)</div>
</div>

<div class="pic right" >
<img src="images/misc/altevogt-cloud-2.png" width="300px" alt="TODO" onclick="enlarge(this);" longdesc="images/misc/altevogt-cloud-2.png"/>
<div>TODO TODO TODO<br>(figure from the paper; click to enlarge)</div>
</div>

<div class="pic right" >
<img src="images/misc/altevogt-cloud-3.png" width="300px" alt="TODO" onclick="enlarge(this);" longdesc="images/misc/altevogt-cloud-3.png"/>
<div>TODO TODO TODO<br>(figure from the paper; click to enlarge)</div>
</div>


<p><a href="pdf/Altevogt2011cloud.pdf">Read the full text (pdf)</a></p>

<p class="bibref">
Peter Altevogt (IBM Germany Research and Development GmbH),
Tibor Kiss (Gamax Kft, Budapest, Hungary),
Wolfgang Denzel (IBM Research GmbH, Zurich Research Laboratory, Switzerland), 2011.
<i>"Modular performance simulations of clouds."</i>
WSC '11: Proceedings of the Winter Simulation Conference: pp. 3300-3311.
11-14 December 2011, Grand Arizona Resort, Phoenix, AZ, USA.
</p>

<div style="clear:both"></div>

<?php print_next_casestudy_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>

