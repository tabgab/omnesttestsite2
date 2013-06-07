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

<h1>Why Simulate?</h1>

<p>(We know that you already know why otherwise you would not be here, but we compiled a list for your reference.)</p>

TODO: analytical models are too complex, and prototypes are not yet available or would cost too much (i.e. 10000 routers)

<img class="pic right rounded" width=200 src="images/tour/costs.png" alt="Network Editor" onclick="enlarge(this);"/>
<h1>Simulation greatly decreases the costs of your product development</h1>
<p>You don't need to build the real thing in the first place.</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/time-to-market.png" alt="Network Editor" onclick="enlarge(this);"/>
<h1>Simulation reduces the time to market of your new products and product updates</h1>
<p>Faster development cycles results in shorter time to market.</p>
<div style="clear:both"></div>

<img class="pic right rounded" width=200 src="images/tour/risks.png" alt="Network Editor" onclick="enlarge(this);"/>
<h1>Simulation helps you mitigate risks during research and development</h1>
<p>Simulation helps you discover flaws early in the design process when they are
much cheaper to fix. You can start simulations early during the design process
when your product or parts of it are not yet available, and you can try scenarios
that would be difficult to produce using the real system or prototypes.</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/combine.png" alt="Network Editor" onclick="enlarge(this);"/>
<h1>Simulation allows you to combine existing models with your new models easily</h1>
<p>You can try all sorts of new ways to build new products.</p>
<div style="clear:both"></div>

<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
