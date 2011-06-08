<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Download Evaluation Version</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
    <script src="common/gen_validatorv31.js" type="text/javascript"></script>
    <style type="text/css">
      td:first-child {text-align: right; }
    </style>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Download OMNEST Evaluation Version</h1></div>

<p>Before downloading your evaluation copy, please give us some information
about yourself. We will only use this data to contact you about OMNEST,
and will not disclose it to third parties.</p>

<p style="line-height:110%"><small><b>Are you a student or a lecturer?</b>
<i>If your work is of noncommercial nature, you don't need OMNEST: you can use the
open-source version OMNeT++ from <a href="http://omnetpp.org">omnetpp.org</a>.</i>
OMNEST and OMNeT++ are mostly identical except for licensing, branding, and the presence
of extra components and features in OMNEST (<a href="comparison.php">comparison</a>).</small></p>

<form action="download-eval-post.php" method="post" name="post_robot" id="post_robot">
<table style="border-spacing: 9px">

<tr><td>&nbsp;</td><td><div id='post_robot_errorloc' style='color: #cc0000; font-size:10px;'></div></td></tr>

<tr>
<td>Name:<sup>*</sup></td><td><input type="text" name="name" style="width: 400px;" /></td>
</tr>
<tr>
<td>E-mail:<sup>*</sup></td><td><input type="text" name="email" style="width: 400px;" /></td>
</tr>
<tr>
<td>Company:<sup>*</sup></td><td><input type="text" name="company" style="width: 400px;" /></td>
</tr>
<tr>
<td>Position:<sup>*</sup></td><td><input type="text" name="position" style="width: 400px;" /></td>
</tr>

<tr>
<td>OMNeT++ experience:<sup>*</sup></td><td>
<select name="omnetpp_experience"><option>Select:</option><option>Yes</option><option>No</option></select><br />
</td>
</tr>

<tr>
<td>C++ experience:<sup>*</sup></td><td>
<select name="cpp_experience"><option>Select:</option><option>Yes</option><option>No</option></select><br />
</td>
</tr>

<tr>
<td>Where did you hear about<br>OMNEST or OMNeT++?<sup>*</sup></td><td>
<select name="source">
  <option value="n/a">Select:</option>
  <option value="web">Web search</option>
  <option value="advertisement">Advertisement</option>
  <option value="friend">Colleague or friend</option>
  <option value="publication">Research paper or conference</option>
  <option value="other">Other</option>
</select>
<br />
</td>
</tr>

<tr>
<td>Area of interest</td><td>
<input type="checkbox" name="performance_modeling" value="Performance Modeling" />Performance Modeling<br />
<input type="checkbox" name="architecture_verification" value="Architecture Verification" />Architecture Verification<br />
<input type="checkbox" name="embedding" value="Embedding" />Embedding the simulation kernel into a product<br />
<input type="checkbox" name="network_simulation" value="Network Simulation" />Network Simulation<br />
&nbsp;&nbsp;&nbsp;&nbsp;<small>Which areas or protocols (e.g. ad-hoc, IPv6, MPLS)</small><br/>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="protocols" style="width: 383px;" />
</td>
</tr>

<tr>
<td>Message (optional):</td><td><textarea rows="2" name="message" style="width: 400px;"></textarea></td>
</tr>

<tr>
<td>&nbsp;</td><td><input type="checkbox" name="newsletter" value="Newsletter" checked/>I would like to be notified about new versions and other events</td>
</tr>

<tr><td>&nbsp;</td><td><input type="image" alt="Send" src="common/images/button_send.gif" /></td></tr>
</table>
</form>

<script type="text/javascript">
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("post_robot");
  frmvalidator.EnableOnPageErrorDisplaySingleBox();
  // frmvalidator.EnableMsgsTogether();

  frmvalidator.addValidation("name","req","Please enter your name");
  frmvalidator.addValidation("email","req","Please enter your e-mail address");
  frmvalidator.addValidation("email","email","Please enter a valid e-mail address");
  frmvalidator.addValidation("company","req","Please enter your company");
  frmvalidator.addValidation("position","req","Please provide your position in your company");
  frmvalidator.addValidation("omnetpp_experience","dontselect=0","Please select whether you have previous experience with OMNeT++");
  frmvalidator.addValidation("cpp_experience","dontselect=0","Please select whether you have C++ experience");
  frmvalidator.addValidation("source","dontselect=0","Please select where you heard about OMNEST");
</script>

<br>

<p>If you prefer, you may request information directly from: <b> info at ourdomainname</b></p>

<?php print_leadout(); ?>
</body>
</html>
