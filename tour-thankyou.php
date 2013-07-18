<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST Tour - Thank You</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($tour_menu, __FILE__); ?>

<h1>Thank You</h1>

<p><img class="rounded right" src="images/tour/thankyou.png" width="200" alt="">
Thank you for taking the OMNEST Product Tour.</p>

<p>We hope that you found that OMNEST fits your needs, and we can
soon welcome you among the happy users of our simulation tool.</p>

<div style="clear:both"></div>
<br>
<br>

<?php
print_next_link("overview.php", "Learn about OMNEST in more detail");
print_next_link("try-omnest.php", "Try OMNEST");
print_next_link("contact.php", "Questions? Contact us");
?>

<?php print_leadout(); ?>
</body>
</html>
