<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Contact / Request Quotation</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
    <script src="common/gen_validatorv4.js" type="text/javascript"></script>
    <script src="common/form-submission-handler.js" type="text/javascript" data-cfasync="false" ></script>
    <style type="text/css">
      td:first-child {text-align: right; }
    </style>
</head>

<body>
<?php print_leadin($purchase_menu, __FILE__); ?>

<div id="header"><h1>Contact / Request Quotation</h1></div>

<form action="https://script.google.com/macros/s/AKfycbzH7M_Jyq5qlbEIbqje8hvLWY6fbip5_8dlAu_51M82hETmJNaGWUeYlP2oZB6eLdwB/exec"
        method="POST" class="gform" name="post_robot" id="post_robot">

    <div class="form-elements">
    <p>Please give us some details about yourself and your project, and we will
          get back to you soon. We will only use this data to better assist you with
          matters related to OMNEST, and will not disclose it to third parties.</p>
    <p><small>Frequently asked: <a href="licensingfaq"><b>Do I need a license for OMNEST?</b></a></small></p>

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
    <td>Turing test: How much<br>is six plus eleven?<sup>*</sup></td><td><input type="text" name="turing" style="width: 400px;" /><input id="honeypot" type="text" name="honeypot" value="" style="display: none"/></td>
    </tr>
    <tr>
    <td>OMNeT++ experience:<sup>*</sup></td><td>
    <select name="omnetpp_experience"><option value="0">Select:</option><option>Yes</option><option>No</option></select><br />
    </td>
    </tr>

    <tr>
    <td>C++ experience:<sup>*</sup></td><td>
    <select name="cpp_experience"><option value="0">Select:</option><option>Yes</option><option>No</option></select><br />
    </td>
    </tr>

    <tr>
    <td>Where did you hear about<br>OMNEST or OMNeT++?<sup>*</sup></td><td>
    <select name="source">
      <option value="0">Select:</option>
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
    <td></td><td>
    <input type="checkbox" name="price_list" checked/>Please send pricing information<br />
    </td>
    </tr>

    <tr>
    <td>Area of interest</td><td>
    <input type="checkbox" name="performance_modeling" />Performance Modeling<br />
    <input type="checkbox" name="architecture_verification" />Architecture Verification<br />
    <input type="checkbox" name="embedding" />Embedding the simulation kernel into a product<br />
    <input type="checkbox" name="network_simulation" />Network Simulation<br />
    &nbsp;&nbsp;&nbsp;&nbsp;<small>Which areas or protocols (e.g. ad-hoc, IPv6, MPLS)</small><br/>
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="protocols" style="width: 383px;" />
    </td>
    </tr>

    <tr>
    <td>Message</td><td><textarea name="message" style="width: 400px; height: 200px;"></textarea></td>
    </tr>

    <tr>
    <td>&nbsp;</td><td><input type="checkbox" name="newsletter" checked/>I would like to be notified about new versions and other events</td>
    </tr>
    <tr><td>&nbsp;</td><td><input type="image" alt="Send" src="common/images/button_send.gif" />
        <img id="spinner" height="18" style="left-padding:20px; display:none;" src="common/images/spinner.gif"></td></tr>
    </table>
    </div>

    <div class="thankyou_message" style="display:none;">
      <p><b>Thank you for your interest in the OMNEST Simulator.</b></p>
      We will get back to you with the requested information. You should receive a confirmation email
      about this submission shortly.
    </div>

    <div class="server_error_message" style="display:none;">
      <p><b>Unfortunately our backend is not running currently.</b></p>
      Please contact us directly at <b>info@omnest.com</b>. We are sorry for this inconvenience.
    </div>
  </form>

  <script type="text/javascript">
  function installSubmitHandler() {
    // bind to the submit event of our form
    var forms = document.querySelectorAll("form.gform");
    for (var i = 0; i < forms.length; i++) {
      forms[i].onsubmit = handleFormSubmit;
    }

    var frmvalidator  = new Validator("post_robot");
    frmvalidator.EnableOnPageErrorDisplaySingleBox();
    frmvalidator.addValidation("name","req","Please enter your name");
    frmvalidator.addValidation("email","req","Please enter your e-mail address");
    frmvalidator.addValidation("email","email","Please enter a valid e-mail address");
    frmvalidator.addValidation("turing","req","Please prove that you are a human by solving the Turing test!");
    frmvalidator.addValidation("turing","regexp=^17$","Please prove that you are a human by solving the Turing test!");
    frmvalidator.addValidation("company","req","Please enter your company");
    frmvalidator.addValidation("position","req","Please provide your position in your company");
    frmvalidator.addValidation("omnetpp_experience","dontselect=0","Please select whether you have previous experience with OMNeT++");
    frmvalidator.addValidation("cpp_experience","dontselect=0","Please select whether you have C++ experience");
    frmvalidator.addValidation("source","dontselect=0","Please select where you heard about OMNEST");

  };
  document.addEventListener("DOMContentLoaded", installSubmitHandler, false);

  </script>

<br />

<p>If you prefer, you may request information directly from:<br/><b> info at ourdomainname</b></p>

<?php print_leadout(); ?>
</body>
</html>
