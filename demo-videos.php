<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Introductory and Demo Videos</title>
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
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Introductory and Demo Videos</h1></div>

<table>
  <tr><td rowspan="3"><div style="margin-right: 20px; background-image: url(images/video/ide-thumb.png); background-repeat: no-repeat; width: 220px; height: 165px;">
             <a href="/webdemo/ide" target="_blank"><img src="images/video/play.png" ></a>
          </div>
      </td>
      <td><h2>Using the IDE</h2></td>
  </tr>
  <tr>
      <td>
      </td>
  </tr>
  <tr>
    <td>
      <div>
             <p>This is a 15-minute tutorial that walks through the basic steps of creating
             and running a simulation, visualizing its execution history on a sequence chart,
             and analyzing the simulation results, in order to show basic functions of the
             OMNEST Simulation IDE.</p>
       </div>
     </td>
  </tr>
</table>

<hr/>

<table>
  <tr><td rowspan="3">
          <div id="earththumb-id" style="margin-right: 20px; background-image: url(images/video/googleearth-thumb.png); background-repeat: no-repeat; width: 220px; height: 165px;">
             <img src="images/video/play.png" onclick="document.getElementById('earthvideo-id').style.display='block'; document.getElementById('earththumb-id').style.display='none';">
          </div>
      </td>
      <td><h2>Google Earth Demo</h2></td>
  </tr>
  <tr>
      <td>
        <div id="earthvideo-id" style="display:none" >
          <iframe title="Google Earth Demo" class="youtube-player" width="660" height="397" src="http://www.youtube.com/embed/cFPJPVh3ouQ" style="border: 0px"></iframe>
          <a><div style="text-align: center" onclick="document.getElementById('earthvideo-id').style.display='none'; document.getElementById('earththumb-id').style.display='block';">Close</div></a>
        </div>
      </td>
  </tr>
  <tr>
    <td>
      <div id="earthtext-id">
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
       </div>
     </td>
  </tr>
</table>

<hr/>

<table>
  <tr><td rowspan="3"><div id="seqthumb-id" style="margin-right: 20px; background-image: url(images/video/seqchart-thumb.png); background-repeat: no-repeat; width: 220px; height: 165px;">
             <img src="images/video/play.png" onclick="document.getElementById('seqvideo-id').style.display='block'; document.getElementById('seqthumb-id').style.display='none';">
          </div>
      </td>
      <td><h2>Visualizing the Simulation on Sequence Charts</h2></td>
  </tr>
  <tr>
      <td>
        <div id="seqvideo-id" style="display:none" >
          <iframe title="Visualizing the Simulation on Sequence Charts" class="youtube-player" width="660" height="397" src="http://www.youtube.com/embed/9yZZFgwl4Ns" style="border: 0px"></iframe>
          <a><div style="text-align: center" onclick="document.getElementById('seqvideo-id').style.display='none'; document.getElementById('seqthumb-id').style.display='block';">Close</div></a>
        </div>
      </td>
  </tr>
  <tr>
    <td>
      <div id="seqtext-id">
             <p>One of the unrivalled features of OMNEST is being able to record the simulation history
             and visualize it on a sequence chart. The sequence chart can be dragged, filtered, viewed
             in different timeline modes (linear, compressed, etc), saved in SVG format, and so on.
             This can be invaluable help in tracking down protocol errors, and in showing off and
             documenting model operation. The linked video is one of the many Sequence Chart videos
             made available.</p>
       </div>
     </td>
  </tr>
</table>

<?php print_next_links($product_menu, __FILE__); ?>

<?php print_leadout(); ?>
</body>
</html>
