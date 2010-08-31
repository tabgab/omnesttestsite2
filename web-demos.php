<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>OMNEST - The Open Simulator</title>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST - an Embeddable Discrete Event Simulator Network" />
	<meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework"  />
	<link rel="stylesheet" type="text/css" href="common/omnest.css">

</head>

<body>

<!-- Start Container -->
<div id="container">

<?php include("common/top_inc.php"); ?>

</div>
	<!-- End Main Menu -->



	<div style="clear: both;">

	<!-- Start Content -->
	<div id="content">

			<div id="header"><h1>Introductory and Demo Videos</h1></div>


<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td align="center"><a href="/webdemo/ide" target="_blank"><img src="images/misc/ide.png" border="0" style="padding: 10px"></a></td>
    <td><h2><a href="/webdemo/ide" target="_blank">Using the IDE</a></h2>
    <p>This is a 15-minute tutorial that walks through the basic steps of creating
    and running a simulation, visualizing its execution history on a sequence chart
    and analyzing the simulation results, in order to show basic functions of the
    OMNEST Simulation IDE.</p>
    </td>
  </tr>

  <tr>
    <td align="center">
    <a target="_blank" href="http://www.youtube.com/watch?v=cFPJPVh3ouQ"><img src="images/misc/youtube-googledemo-thumb.jpg" border="0" style="padding: 10px"></a>
    </td>
    <td><h2><a target="_blank" href="http://www.youtube.com/watch?v=cFPJPVh3ouQ">Google Earth Demo</a></h2>
    <p>This is a demo for visualizing an OMNEST network simulation using Google Earth.
    The demo simulates a wireless mobile ad-hoc network. The model contains a number
    of mobile nodes (cars) that move about randomly over a 2km-by-2km area.
    The nodes have identical radios, with a transmission range of about 500m;
    for simplicity, we assume that the area covered by each radio is a perfect circle.
    When two nodes move within range of each other, they can communicate with each other,
    forming a (usually disconnected) ad-hoc network. Visualization shows the mobile
    nodes themselves (a 3D car model), their recent trails, their transmission ranges,
    and the current connectivity of the network (cars that are closer than 500m are
    connected with a white line).</p>
    </td>
  </tr>

  <tr>
    <td align="center">
    <a target="_blank" href="http://www.youtube.com/watch?v=9yZZFgwl4Ns"><img src="images/misc/youtube-seqchart-thumb.jpg" border="0" style="padding: 10px"></a>
    </td>
    <td><h2><a target="_blank" href="http://www.youtube.com/watch?v=9yZZFgwl4Ns">Visualizing the Simulation on Sequence Charts</a></h2>
    <p>One of the unrivalled features of OMNEST is being able to record the simulation history
    and visualize it on a sequence chart. The sequence chart can be dragged, filtered, viewed
    in different timeline modes (linear, compressed, etc), saved in SVG format, and so on.
    This can be invaluable help in tracking down protocol errors, and in showing off and
    documenting model operation. The linked video is one of the many Sequence Chart videos
    made available.</p>
    </td>
  </tr>

  <tr>
    <td align="center"><a href="/webdemo/OMNEST_LOADER.html" target="_blank"><img src="images/misc/screencam-overview.png" border="0" style="padding: 10px"></a></td>
    <td><h2><a href="/webdemo/OMNEST_LOADER.html" target="_blank">3-Minute Overview</a></h2>
    <p>A narrated Flash presentation to introduce some of the features and benefits of
    the OMNEST Simulation Framework. Screenshots show the old (OMNEST 3.x) user interface.</p>
    </td>
  </tr>

<!--
  <tr>
    <td align="center"><a href="/webdemo/Preload_INETDEMO2006e.html" target="_blank"><img src="images/misc/arp-demo.png" border="0" style="padding: 10px"></a></td>
    <td><h2><a href="/webdemo/Preload_INETDEMO2006e.html" target="_blank">Explore how ARP works</a></h2>
    <p>Get a quick introduction how the ARP protocol works. See the simulator in action, using the INET Framework.</p>
    </td>
  </tr>
-->

  <tr><td><br></td></tr>

  <tr><td><br></td></tr>

</table><br /><br />

	</div>
	<!-- End Content -->

	<!-- Start Right -->
	<?php include("common/right_inc.php"); ?>
	<!-- End Right -->



		</div>

</div>
<!-- End Container -->

<?php include("common/footer_inc.php"); ?>

</body>
</html>
