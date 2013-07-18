<?php

function news_print_item_page($news_id)
{
    global $news;

    // display given news item
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

        if (!array_key_exists("fulltext", $news_data)) {
            echo "<p>" . $news_data["summary"] . "</p>\n";
            if (array_key_exists("link", $news_data))
                echo " <a href='" . $news_data["link"] . "'>More&nbsp;&raquo;</a>";
        }
        else {
            echo "<p><i>" . $news_data["summary"] . "</i></p>\n";
            echo $news_data["fulltext"] . "\n";
        }
    }

    echo "<ul class='links'><li><a href='news.php'>Read all news</a></ul>\n";
}

function news_print_list()
{
    global $news;

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

        echo "<p>" . $news_data["summary"];
        if (array_key_exists("fulltext", $news_data))
            echo " <a href='news.php?id=" . $news_data["id"] . "'>More&nbsp;&raquo;</a>";
        if (array_key_exists("link", $news_data))
            echo " <a href='" . $news_data["link"] . "'>More&nbsp;&raquo;</a>";
        echo "</p>\n";
    }
}

function news_print_frontpage($maxitems)
{
    global $news;

    $count = 0;
    foreach ($news as $news_data) {
        echo "<div class='news'>\n";
        if (array_key_exists("image", $news_data))
            echo "<img alt='' src='" . $news_data["image"]. "' width=150 style='float:left; margin-right:10px; margin-top:3px'>";
        echo "    <p class='newstitle'><a href='news.php?id=" . $news_data["id"] . "'>" . $news_data["title"] . "</a></p>\n";
        echo "    <p class='newsdate'>" . $news_data["date"] . "</p>\n";
        echo "    <div class='newssummary'><p>\n" . $news_data["summary"];
        if (array_key_exists("fulltext", $news_data))
            echo " <a href='news.php?id=" . $news_data["id"] . "'>More&nbsp;&raquo;</a>";
        if (array_key_exists("link", $news_data))
            echo " <a href='" . $news_data["link"] . "'>More&nbsp;&raquo;</a>";

        echo "\n</p></div>\n\n";
        echo "</div>\n";
        if (++$count >= $maxitems)
            break;
    }

    if (sizeof($news) > $maxitems)
        echo "<p><a href='news.php'>More news&nbsp;&raquo;</a></p>\n";
}

?>
