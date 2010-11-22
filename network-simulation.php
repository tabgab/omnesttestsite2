<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Simulation of Wireless and Wired Networks</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Simulation of Wireless and Wired Networks</h1></div>

<p>OMNEST is compatible with the vast body of open-source simulation models
that have been written by researchers for the OMNeT++ simulation framework.
These simulation models are being used by hundreds of researchers every day,
and simulation results are being
<a href="http://omnetpp.org/publications" target="_blank">published</a>
in leading conferences and journals as well as at the annual
<a href="community.php">International OMNeT++ Workshop</a>, a joint event
of the ICST SimuTools conference.</p>

<p>The main network simulation frameworks are:</p>

<table>
  <tr>
    <td>
      <a href="inet-framework.php"><img src="images/misc/inet32.png"></a>
    </td>
    <td>
      <p>The <a href="inet-framework.php" class="kiemeles">INET Framework</a>
      supports ad-hoc, wireless and wired (LAN, WAN) simulations (802.11,
      Ethernet, TCP, IP, IPv6, OSPF, MPLS, RSVP, and other protocols). There are several
      projects that are based on INET and extend its functionality with new protocols, such
      as mobile ad-hoc routing, mobile IPv6, peer-to-peer networks, and so on.</p>
    </td>
  </tr>

  <tr>
    <td>
      <a href="mixim.php"><img src="images/misc/mixim32.png"></a>
    </td>
    <td>
      <p><a href="mixim.php" class="kiemeles">MiXiM</a>
      is an OMNeT++ modeling framework created for mobile and
      fixed wireless networks (wireless sensor networks, body area networks,
      ad-hoc networks, vehicular networks, etc.). It offers detailed models of
      radio wave propagation, interference estimation, radio transceiver power
      consumption and wireless MAC protocols (e.g. Zigbee).</p>
    </td>
  </tr>

  <tr>
    <td>
      <a href="castalia.php"><img src="images/misc/castalia32.png"></a>
    </td>
    <td>
      <p><a href="castalia.php" class="kiemeles">Castalia</a>
      is a simulator developed at NICTA Australia for Wireless Sensor
      Networks (WSN), Body Area Networks (BAN) and generally networks of
      low-power embedded devices. It is based on the OMNeT++ platform and can be
      used by researchers and developers who want to test their distributed
      algorithms and/or protocols in realistic wireless channel and radio models,
      with a realistic node behavior especially relating to access of the radio.</p>
    </td>
  </tr>

</table>

<h2>More...</h2>

<ul>
  <li><a href="http://www.simsans.org/" target="_blank" class="kiemeles">SimSANs</a>
      - for simulating Storage Area Networks
  <li><a href="http://lightwave.ee.columbia.edu/?s=research&amp;p=phoenixsim" target="_blank" class="kiemeles">PhoenixSim</a>
      - for physical-layer simulation of photonic networks
</ul>

<p>
A more complete list of models and frameworks is available on the
<a href="http://www.omnetpp.org/models" target="_blank">OMNeT++ web site</a>.
</p>

<h2>Benefits</h2>

<p>Simulation models are truly <b>component-based</b>, meaning that you are
able to combine existing blocks (protocol models, application models, queues, etc)
and your custom blocks to form models of arbitrary hosts, routers, switches
and other network devices. Another distinguishing feature of OMNEST/OMNeT++
models is the <b>framework approach</b>, meaning that models such as MiXiM
and INET are <i>frameworks</i>, having been written with the express purpose of
making it easy to extend and build on top of them. Also, protocol models may
be <b>mixed</b> with other kinds of simulation models such as performance models or
architectural models.
</p>

<h2>Read more</h2>

<ul class="links">
  <li>Next: <a href="netsim-references.php">Network simulation references</a></li>
  <li>Related: <a href="performance-modeling.php">Performance modeling with OMNEST</a>,
      <a href="architecture-verification.php">Architecture verification with OMNEST</a>
</ul>

<br>

<p class="disclaimer">
As network simulation frameworks are being developed and released
by independent groups, we cannot offer commercial support for them.
However, this does not mean you are on your own, because you can get informal support
via the OMNeT++ mailing list and other forums.
</p>

<?php print_leadout(); ?>
</body>
</html>
