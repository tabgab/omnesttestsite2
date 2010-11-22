<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - News</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<?php
include("newsitems.php");

error_reporting(0); // turn off warning
$news_id = $_GET['id'];

if ($news_id) {
    // display given news item on the page
    $news_data = null;
    foreach ($news as $i)
        if ($i["id"] == $news_id)
            {$news_data = $i; break;}
    if (!$news_data) {
        echo "<h1>Not Found</h1>\n";
        echo "<p>No such news item: " . $news_id . ".</p>\n";
    }
    else {
        echo "<h1>" . $news_data["title"] . "</h1>\n";
        echo "<p class='newsdate'>" . $news_data["date"] . "</p><br>\n";
        $text = array_key_exists("fulltext", $news_data) ? $news_data["fulltext"] : "<p>" . $news_data["summary"] . "</p>";
        echo "\n" . $text . "\n";
    }

    echo "<ul class='links'><li><a href='news.php'>Read all news</a></ul>\n";
}
else {
    // display all news
    echo "<h1>News</h1>\n\n";

    // table of contents
    echo "<div class='toc'>\n<p>Index</p>\n<ol>\n";
    foreach ($news as $news_data) {
        echo "<li><a href='#" . $news_data["id"] . "'>" . $news_data["title"] . "</a>\n";
    }
    echo "</ol>\n</div>\n\n";

    // news items
    foreach ($news as $news_data) {
        echo "<a name='" . $news_data["id"] . "'></a>";
        echo "<p class='newstitle'>" . $news_data["title"] . "</p>\n";
        echo "<p class='newsdate'>" . $news_data["date"] . "</p>\n";
        $text = array_key_exists("fulltext", $news_data) ? $news_data["fulltext"] : "<p>" . $news_data["summary"] . "</p>";
        echo "\n" . $text . "\n";
    }
}

?>

<?php print_leadout(); ?>
</body>
</html>
