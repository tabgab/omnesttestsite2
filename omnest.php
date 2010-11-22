<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - The OMNEST Network Simulation Framework</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
    <style type="text/css">
div.coltext {
    background-image:url("common/images/small_bullet.gif");
    background-repeat:no-repeat;
    font-size:12px;
    line-height:18px;
    padding:0 0 0 7px;
    text-align:left;
}
    </style>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>The OMNEST Network Simulation Framework</h1></div>

<p><b>OMNEST is used by R&amp;D staff, researchers and engineers worldwide</b>
to investigate various scenarios and design alternatives:
architectural designs, wireless/wired protocols and networks,
queueing-based and other systems. OMNEST lets you build and evaluate simulations
in an integrated Simulation IDE. You can also embed simulations
in your own software products.</p>

<p>OMNEST is the commercial version of <a href="community.php">OMNeT++</a>,
one of the most popular network simulation frameworks in academic and research communities.
The two frameworks are compatible (see <a href="comparison.php">differences</a>.)</p>

<ul class="links">
  <li><a href="overview.php">Overview of the OMNEST simulation environment</a>
  <li><a href="features.php">Features in a nutshell</a>
</ul>

<br>

<p>Application areas:</p>

<table style="width:680px;">
    <tr>
        <td style="width:10px">&nbsp;</td>
        <td>
            <a href="performance-modeling.php" style="font-family:custom, Arial, Helvetica, sans-serif; font-size:16px; color:#E54426;">Performance Modeling</a>
        </td>
        <td>&nbsp;</td>
        <td>
            <a href="architecture-verification.php" style="font-family:custom, Arial, Helvetica, sans-serif; font-size:16px; color:#E54426;">Architecture Verification</a>
        </td>
        <td>&nbsp;</td>
        <td>
            <a href="network-simulation.php" style="font-family:custom, Arial, Helvetica, sans-serif; font-size:16px; color:#E54426;">Network Simulation</a>
        </td>
        <td>&nbsp;</td>
    </tr>

    <tr>
        <td>&nbsp;</td>
        <td>
            <a href="performance-modeling.php"><img src="images/misc/index-performance-modeling.png" alt="Performance Modeling" /></a>
        </td>
        <td>&nbsp;</td>
        <td>
            <a href="architecture-verification.php"><img src="images/misc/index-architecture-verification.png" alt="Architecture Verification"/></a>
        </td>
        <td>&nbsp;</td>
        <td>
            <a href="network-simulation.php"><img src="images/misc/index-network.png" alt="Network Simulation"/></a>
        </td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td style="vertical-align: top">
            <div class="coltext">estimate performance with queueing or resource allocation based models</div>
        </td>
        <td>&nbsp;</td>
        <td style="vertical-align: top">
            <div class="coltext">optimize your system's architecture with high-level simulations</div>
        </td>
        <td>&nbsp;</td>
        <td style="vertical-align: top">
            <div class="coltext">design and evaluate wired, wireless, ad-hoc or sensor network protocols and networks</div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>

<?php print_leadout(); ?>
</body>
</html>
