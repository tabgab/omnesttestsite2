<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Castalia</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Castalia -- Sensor Networks and Body Area Networks Simulation</h1></div>

<p>Home page: <a href="http://castalia.npc.nicta.com.au" target="_blank" class="kiemeles">castalia.npc.nicta.com.au</a></p>

<p>
Castalia is a simulator developed at NICTA Australia for Wireless Sensor
Networks (WSN), Body Area Networks (BAN) and generally networks of
low-power embedded devices. It is based on the OMNeT++ platform and can be
used by researchers and developers who want to test their distributed
algorithms and/or protocols in realistic wireless channel and radio models,
with a realistic node behavior especially relating to access of the radio.
Castalia can also be used to evaluate different platform characteristics
for specific applications, since it is highly parametric, and can simulate
a wide range of platforms. The main features of Castalia are:
</p>

<ul>
    <li>Advanced <b>channel model</b> based on empirically measured data
     <ul>
      <li>Model defines a map of path loss, not simply connections between nodes</li>

      <li>Complex  model for temporal variation of path loss</li>
      <li>Fully supports mobility of the nodes</li>
      <li>Interference is handled as received signal strength, not as a separate feature</li>
     </ul>
    </li>

    <li>Advanced <b>radio model</b> based on real radios for low-power communication

     <ul>
      <li>Probability of reception based on SINR, packet size, modulation type. PSK FSK supported, custom modulation allowed by defining SNR-BER curve</li>
      <li>Multiple TX power levels with individual node variations allowed</li>
      <li>States with different power consumption and delays switching between them</li>
      <li>Flexible carrier sensing (polling-based and interrupt-based)</li>
     </ul>
    </li>

    <li>Extended <b>sensing</b> modeling provisions

    <ul>
      <li>Highly flexible physical process model</li>
      <li>Sensing device noise, bias, and power consumption</li>
    </ul>
    </li>

    <li>Node <b>clock drift</b>, CPU power consumption.</li>
    <li>MAC and routing protocols available</li>

    <li>Designed for <b>adaptation</b> and <b>expansion</b>.</li>
</ul>

<p>
Concerning the last bullet, Castalia was designed right from the beginning
so that users can easily implement/import their algorithms and
protocols into Castalia while making use of the features the simulator
provides. Proper modularization and a configurable, automated build
procedure make this easier.
</p>

<?php print_next_links($product_menu, __FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
