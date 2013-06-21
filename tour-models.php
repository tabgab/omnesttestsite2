<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST Tour - Simulation Models</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($tour_menu, __FILE__); ?>

<img class="pic right rounded" width=200 src="images/tour/models.png" alt=""/>
<h1>Simulation models are available for many application domains</h1>
<p>
Internet &bull;
Wired and Wireless LANs &bull;
Mobile Ad-hoc Networks &bull;
Sensor Networks &bull;
Inter-vehicle and in-vehicle networks &bull;
Cellular networks &bull;
Satellite communications &bull;
Optical networks &bull;
Interconnection networks &bull;
Networks-on-Chip (NoCs) &bull;
Cloud computing &bull; HPC clusters &bull; SANs &bull;
Queueing &bull; Resource allocation
</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/combine.png" alt=""/>

<h1>Reusable components let you build new simulations easily</h1>
<p>Simulation models provide you with reusable components that you can freely combine
in new simulations. The component model also makes simulation models
easier to explore, understand and maintain.
<!-- and can be combined in unforeseen ways. -->
</p>
<div style="clear:both"></div>

<img class="pic right rounded" width=200 src="images/tour/parametrizable.png" alt=""/>
<h1>Concise and flexible parameterization makes it easy to configure your simulations</h1>
<p>Simulation components can (and usually do) expose several parameters to allow configuring
their behaviour. This makes it easier to reuse components for new simulations,
and provides a great degree of freedom. Even for large models, the size of configuration
can be kept manageable due to the use of default values and wildcard parameter assigments.</p>
<div style="clear:both"></div>

<img class="pic left rounded" width=200 src="images/tour/code.png" alt=""/>
<h1>Open source allows you to explore, modify, and extend simulation models at will</h1>
<p>With network simulation, source code availability is a must, because you need to know
whether and how the model implements various aspects of the real system (e.g. certain protocol features).
Having the source also allows you to change or enhance the model to fit your needs.</p>
<div style="clear:both"></div>

<!--
<img class="pic left rounded" width=200 src="images/tour/collaborate.png" alt=""/>
<h1>Free and open-source models allow you to collaborate with external researchers more openly</h1>

<span style="color: red;">TODO: this explanation doesn't make clear to me what is the benefit for a customer here</span>

<p>Most existing simulation models are under various open source licenses.
This can be a huge benefit if you want to collaborate with researchers at universities
or other institutes, because you can distribute your derived models to them
without needing to worry about copyright and licensing issues.</p>
<div style="clear:both"></div>
-->


<!--TODO:
<img class="pic left rounded" width=200 src="images/tour/todo.png" alt=""/>
<h1>Domain specific, flexible and scalable models are easy to use by your domain experts</h1>
<p>todo</p>
<div style="clear:both"></div>
-->

<!--TODO:
<li><strong>Wide range of applicability</strong><br>
OMNEST/OMNeT++ has proven itself in the simulation of wired and wireless communication networks,
high-level architectural simulation of hardware/software systems, performance modeling
(queueing networks) and other areas.</li>
-->


<?php print_next_tourstep_links(__FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
