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

<img class="pic right rounded" width=200 src="images/misc/omnest-engine.png" alt="todo" onclick="enlarge(this);"/>
<h1>Simulation lets you try things that don't exist yet</h1>
<p>todo</p>
<div style="clear:both"></div>

<!--<img class="pic left rounded" width=200 src="images/screenshots/runtime-thumb.png" alt="Runtime Environment" onclick="enlarge(this);"/>-->
<img class="pic left rounded" width=200 src="images/tour/graphical.png" alt="Runtime Environment" onclick="enlarge(this);"/>
<h1>Simulation lets you try large-scale scenarios without having to build them</h1>
<p>todo</p>
<div style="clear:both"></div>

<img class="pic right rounded" width=200 src="images/tour/parallel.png" alt="todo" onclick="enlarge(this);"/>
<h1>Simulation lets you try unusual or rare situations</h1>
<p>todo</p>
<div style="clear:both"></div>

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
