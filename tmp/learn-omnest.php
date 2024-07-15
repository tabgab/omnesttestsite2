---
layout: default
title: OMNEST at a Glance
---


<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>OMNEST at a Glance</h1></div>

<table>

<tr><td><img src="images/tour/ide.png" width=150></td><td>  <!-- ablak bal fels� sarok (OMNEST ikon, file menu) -->
<p><font size="+3">IDE</font><br>
It is where you'll create and evaluate your simulations (but we fully approve working from the terminal, too!)
The IDE is based on Eclipse, so you can install your own extensions into it alongside the tools provided
by OMNEST.</p>
</td></tr>

<tr><td><br></td></tr>

<tr><td><img src="images/tour/cplusplus.png" width=150></td><td>  <!-- code completion kis darabk�ja -->
<p><font size="+3">C++</font><br>
Models are written in C++. They make use of the simulation kernel, an efficient and feature-rich C++ runtime library.
The IDE has your codebase fully indexed, and offers code completion, go to definition, call hierarchy, find references,
and other features that make C++ programming a joy.</p>
</td></tr>

<tr><td><br></td></tr>

<tr><td><img src="images/tour/ned.png" width=150></td><td>  <!-- tcp ikon bek�tve? -->
<p><font size="+3">NED</font><br>
Model components are described and assembled in a high-level DSL called NED. NED can be edited
both graphically and in source mode. NED has a similar level of editor support as C++.</p>
</td></tr>

<tr><td><br></td></tr>

<tr><td><img src="images/tour/msg.png" width=150></td><td>  <!-- packet X {... -->
<p><font size="+3">Msg</font><br>
Protocol headers and other messages are represented in the code with C++ classes, but
there is a DSL that spares you the tedium of writing the C++ classes by generating them from
a high-level description, alongside with serialization and reflection code.</p>
</td></tr>

<tr><td><br></td></tr>

<tr><td><img src="images/tour/ini.png" width=150></td><td>  <!-- **.startTime=... -->
<p><font size="+3">Ini</font><br>
OMNEST models usually have a large number of parameters, because model components tend to
have several parameters themselves. Parameters can be assigned or given default value already in NED,
but real parameterization takes place in ini files where you can describe multiple configurations
(~experiments) and also parameter studies to be carried out on your model. Ini files let you
use wildcards for setting multiple parameters together, to reduce redundancy.
Ini file details can be hidden behind a GUI for non-expert users of your model.</p>
</td></tr>

<tr><td><br></td></tr>

<tr><td><img src="images/tour/tools.png" width=150></td><td>  <!-- sequence chart 1 bogy� + sok ny�l! -->
<p><font size="+3">Tools</font><br>
Many additional tools help your work, both graphical (integrated into the IDE) and command-line ones.
Simulations can be run under a GUI that shows the network and the internals of nodes, animates
message flows, lets you single-step events and peek into objcts and internal model variables.
Simulations can record a detailed event log that can be visualized as a sequence chart, facilitating
understanding of the model. Simulation results can be recorded in scalar and vector files (for summary
and time series data), and plotted in the IDE's analysis tool that also lets you post-process
data, and store sequences of processing steps in reproducible "recipes." Command-line tools
let you build the model, run batches, process event log and result files, and do other tasks.
</p>
</td></tr>

</table>

<?php print_next_links($product_menu, __FILE__); ?>

<?php print_leadout(); ?>

