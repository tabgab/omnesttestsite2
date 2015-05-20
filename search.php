<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - Search Results</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>Search Results</h1></div>

<div id="cse-search-form" style="width: 100%;">Loading</div>
<script src="//www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript">
  google.load('search', '1', {language : 'en', style : google.loader.themes.DEFAULT});
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl('009649308609806762212:j2rolk7vjoq');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.setSearchFormRoot('cse-search-form');

    options.setAutoComplete(true);
    customSearchControl.draw('cse', options);
    customSearchControl.execute("<?php echo addslashes($_GET['q']); ?>");
  }, true);
</script>

<div id="cse" style="width:100%;"></div>

<?php print_leadout(); ?>
</body>
</html>
