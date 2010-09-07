<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>OMNEST - The Open Simulator</title>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST Discrete Event Network Simulator" />
	<meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework"  />
	<link rel="stylesheet" type="text/css" href="common/omnest.css">
	<script language="JavaScript" src="common/gen_validatorv31.js" type="text/javascript"></script>
    <?php include("common/ga.php"); ?>
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

<div id="header"><h1>Download OMNEST Evaluation Version</h1></div>

<p>Before downloading your evaluation copy, please give us some information
about yourself. We will only use this data to contact you about OMNEST,
and will not disclose it to third parties.</p>

<form action="download-eval-post.php" method="post" name="post_robot" id="post_robot">
<table border="0" cellspacing="0" cellpadding="6">

<tr><td>&nbsp;</td><td><div id='post_robot_errorloc' style='color: #cc0000; font-size:10px;'></div></td></tr>

<tr>
<td align="right">Name:<sup>*</sup></td><td><input type="text" name="name" style="width: 400px;" /></td>
</tr>
<tr>
<td align="right">E-mail:<sup>*</sup></td><td><input type="text" name="email" style="width: 400px;" /></td>
</tr>
<tr>
<td align="right">Company:<sup>*</sup></td><td><input type="text" name="company" style="width: 400px;" /></td>
</tr>
<tr>
<td align="right">Position:<sup>*</sup></td><td><input type="text" name="position" style="width: 400px;" /></td>
</tr>

<tr>
<td align="right">OMNeT++ experience:<sup>*</sup></td><td>
<select name="omnetpp_experience"><option>Select:</option><option>Yes</option><option>No</option></select><br />
</td>
</tr>

<tr>
<td align="right">C++ experience:<sup>*</sup></td><td>
<select name="cpp_experience"><option>Select:</option><option>Yes</option><option>No</option></select><br />
</td>
</tr>

<tr>
<td align="right">Where did you hear about<br>OMNEST or OMNeT++?<sup>*</sup></td><td>
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
<td align="right">Area of interest</td><td>
<input type="checkbox" name="performance_modeling" value="Performance Modeling" />Performance Modeling<br />
<input type="checkbox" name="architecture_verification" value="Architecture Verification" />Architecture Verification<br />
<input type="checkbox" name="embedding" value="Embedding" />Embedding the simulation kernel into a product<br />
<input type="checkbox" name="network_simulation" value="Network Simulation" />Network Simulation<br />
&nbsp;&nbsp;&nbsp;&nbsp;<small>Which areas or protocols (e.g. ad-hoc, IPv6, MPLS)</small><br/>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="protocols" style="width: 383px;" />
</td>
</tr>

<tr>
<td align="right">Message (optional):</td><td><textarea cols="" rows="" name="message" style="width: 400px; height: 100px;"></textarea></td>
</tr>

<tr>
<td>&nbsp;</td><td><input type="checkbox" name="newsletter" value="Newsletter" checked="true"/>I would like to be notified about new versions and other events</td>
</tr>

<tr><td>&nbsp;</td><td><input type="image" src="common/images/button_send.gif" /></td></tr>
</table>
</form>

<script language="JavaScript" type="text/javascript">
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

<br />

<p>If you prefer, you may request information directly from: <b> info at ourdomainname</b></p>

<br />

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
