<?php

include("common/menu_inc.php");

/**
 * To be invoked inside <head>
 */
function print_head_contribution() {
    print_head_contribution_internal(false);
}

/**
 * To be invoked inside <head>
 */
function print_titlepage_head_contribution() {
    print_head_contribution_internal(true); ?>

    <script type="text/javascript">
        function switchSlideshow() {
            var $active = $("#slideshow IMG.slideshow-active");
            if ( $active.length == 0 ) $active = $("#slideshow IMG:last");
            var $next =  $active.next().length ? $active.next() : $("#slideshow IMG:first");
            $active.addClass("slideshow-last-active");
            $next.css({opacity: 0.0})
                .addClass("slideshow-active")
                .animate({opacity: 1.0}, 500, function() {
                    $active.removeClass("slideshow-active slideshow-last-active");
                });
        }

        $(function() {
            var images =
                ["images/slideshow/ethernet-switch.jpg",
                 "images/slideshow/laptops.jpg",
                 "images/slideshow/wireless-tower-sign.jpg",
                 "images/slideshow/datacenter.jpg",
                 "images/slideshow/junction.jpg",
                 "images/slideshow/in-car-network.jpg",
                 "images/slideshow/sensor-nodes.jpg",
                 "images/slideshow/comm-towers.jpg",
                 "images/slideshow/optical-switch.jpg",
                 "images/slideshow/satellite.jpg",
                 "images/slideshow/satellite-dishes.jpg"];
            var first = true;
            var slideshow = document.getElementById("slideshow");
            for (var image in images) {
                var imageElement = document.createElement("img");
                imageElement.src = images[image];
                if (first)
                    imageElement.setAttribute("class", "slideshow-active");
                first = false;
                slideshow.appendChild(imageElement);
            }
            setInterval("switchSlideshow()", 3500);
        });

        $(function() {
            var images =
               ["images/tour/omnest-community.png",
                "images/tour/omnest-flexible.png",
                "images/tour/omnest-for-research.png",
                "images/tour/omnest-models.png",
                "images/tour/omnest-network-simulator.png",
                "images/tour/omnest-open.png",
                "images/tour/omnest-performance.png",
                "images/tour/omnest-trusted.png",
                "images/tour/thankyou.png",
                "images/tour/tour-analysis-integration.png",
                "images/tour/tour-analysis-record.png",
                "images/tour/tour-analysis-tool.png",
                "images/tour/tour-development-components.png",
                "images/tour/tour-development-debug.png",
                "images/tour/tour-development-ide-tools.png",
                "images/tour/tour-development-seqchart.png",
                "images/tour/tour-integration-eclipse.png",
                "images/tour/tour-integration-embedding.png",
                "images/tour/tour-integration-systemc-etc.png",
                "images/tour/tour-integration-workflow.png",
                "images/tour/tour-models-combine.png",
                "images/tour/tour-models-domains.png",
                "images/tour/tour-models-parameters.png",
                "images/tour/tour-models-source.png",
                "images/tour/tour-simulation-hil.png",
                "images/tour/tour-simulation-inspect.png",
                "images/tour/tour-simulation-parallel.png",
                "images/tour/tour-simulation-performance.png",
                "images/tour/tour-whysim-blueprints.png",
                "images/tour/tour-whysim-details.png",
                "images/tour/tour-whysim-largescale.png",
                "images/tour/tour-whysim-reproduce.png",
                "images/tour/tour-whysim-verify.png"];
            for (var image in images) {
                var imageElement = document.createElement("img");
                imageElement.src = images[image];
            }
        });

    </script>

    <style type="text/css">
    #slideshow IMG {
        position:absolute;
        top:0;
        left:0;
        z-index:8;
        opacity:0.0;
    }

    #slideshow IMG.slideshow-active {
        z-index:10;
        opacity:1.0;
    }

    #slideshow IMG.slideshow-last-active {
        z-index:9;
    }
    </style>

<?php } ?>

<?php
function print_head_contribution_internal($is_title_page) { ?>
    <base href="<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME']?>" /> <!-- avoid issues with /index.php/ style tags URI-->
    <style type="text/css">
<?php
// optimization: include instead of <link rel="stylesheet" type="text/css" href="common/omnest.css">
include("common/omnest.css");
?>
    </style>
    <!--[if lt IE 7.]>
      <script defer type="text/javascript" src="common/pngfix.js"></script>
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
	  var _gaq = _gaq || [];
	  var pluginUrl =  '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
	  _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
	  _gaq.push(['_setAccount', 'UA-240922-1']);
	  _gaq.push(['_setDomainName', 'omnest.com']);
	  _gaq.push(['_setAllowLinker', true]);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
    </script>
    <script type="text/javascript">
<?php
// optimization: include instead of <script type="text/javascript" src="common/addGAToLinks.js">
 include("common/addGAToLinks.js");
?>
    </script>
<?php } ?>

<?php
/**
 * To be invoked right after the "body" start tag.
 */
function print_titlepage_leadin() { ?>
  <div style="position:relative; width: 992px; margin: 0 auto; background-image: url(common/images/bg.png); background-repeat: repeat-y; background-position: center top;">
    <div id="titlepage" style="position:relative; width: 980px; margin: 0 auto;">

        <!-- Banner Area: Logo, Search, Top menu, Banner with Buttons -->
        <div style="position:absolute; background-color:#093E65; background-image:url(common/images/top_strip_blue.png); top:0px; width:100%; height:6px;">
            &nbsp;
        </div>

        <div id="logo" style="position:absolute; top:24px; left: 36px">
            <a href="index.php"><img src="common/images/logo.png" width="136" alt="OMNEST"></a>
        </div>

        <div id="search" style="position:absolute; top:16px; right:20px; background-image:url(common/images/search.png); background-repeat: no-repeat; width:150px; height:24px;">
            <form name="frmSearch" action="search.php" method="get">
                <input type="text" name="q" style="border-style:none; margin:1px 3px 1px 3px; width:120px; height:15px"/>
                <input type="image" src="common/images/search-icon.png" alt="Search" style="vertical-align:middle; border-style:none"/>
            </form>
        </div>

        <div id="topmenu" style="position:absolute; top:56px; right:20px;">
                <?php print_top_menu(null, "index.php"); ?>
        </div>

        <div style="position:absolute; background-color:#197C92; background-image:url(common/images/banner_omnest.jpg); top:78px; width:100%; height:346px;"
             alt="queueing, mobile, wireless, photonic, sensor, internet, resource allocation, SystemC, real-time, ad-hoc, emulation, optical, performance, system-on-chip, protocol">
            &nbsp;
        </div>

        <img id="learnbutton" style="position:absolute; top:364px; left:14px" alt="" src="common/images/button_learn_more.png">
        <img id="downloadbutton" style="position:absolute; top:364px; left:220px" alt="" src="common/images/button_download_eval.png">
        <!-- preload button hover images -->
        <img style="display:none" src="common/images/button_learn_more_hover.png" alt="" >
        <img style="display:none" src="common/images/button_download_eval_hover.png" alt="" >
        <!-- sensitive areas -->
        <a href="omnest-is.php"><div style="position:absolute; top:372px; left:25px; width:180px; height:58px" onmouseover="document.getElementById('learnbutton').src='common/images/button_learn_more_hover.png'" onmouseout="document.getElementById('learnbutton').src='common/images/button_learn_more.png'"><img src="common/images/button_transparent.png" alt="Learn More" /></div></a>
        <a href="try-omnest.php"><div style="position:absolute; top:372px; left:231px; width:180px; height:58px" onmouseover="document.getElementById('downloadbutton').src='common/images/button_download_eval_hover.png'" onmouseout="document.getElementById('downloadbutton').src='common/images/button_download_eval.png'"><img src="common/images/button_transparent.png" alt="Download" /></div></a>

<!--
        <img id="tourbutton" style="position:absolute; top:364px; left:86px" alt="" src="common/images/button_learn_more.png">
        <!- - preload button hover images - ->
        <img style="display:none" src="common/images/button_learn_more_hover.png" alt="">
        <!- - sensitive areas - ->
        <a href="omnest-is.php" id="button"><div style="position:absolute; top:372px; left:96px; width:180px; height:58px" onmouseover="document.getElementById('tourbutton').src='common/images/button_learn_more_hover.png'" onmouseout="document.getElementById('tourbutton').src='common/images/button_learn_more.png'"><img src="common/images/button_transparent.png" alt="Learn More" /></div></a>
-->

        <div style="position:absolute; top:120px; left:577px"><img src="common/images/slidewindow.png" alt=""></div>
        <div id="slideshow" style="position:absolute; top:130px; left:606px; background-color:#00245A; width:340px; height:218px">
        </div>

        <div id="headplaceholder" style="height:427px"></div>

        <!-- Content -->
        <div style="width: 980px; background-color: white; min-height: 400px; border-top: solid transparent 1px;">  <!-- tweak: 1px white border prevents minor firefox layouting bug [too much space below banner] (ff 3.6.12) -->
            <div id="content" style="margin:10px 25px 20px 25px">
<?php } ?>

<?php
/**
 * To be invoked right before the "body" close tag.
 */
function print_titlepage_leadout() { ?>
            </div>
            <div style="clear:both"></div>
        </div>


        <div style="width:100%; background-color:#999999; height: 10px; background-image:url(common/images/footer_top.png); background-repeat:no-repeat; background-position:center top"></div>
        <div id="footer" style="background-color:#999999; padding: 10px 40px 15px 40px;">
            <?php print_footer_links(); ?>
            <div style="text-align: center">Copyright (c) Simulcraft, Inc. All rights reserved.</div>
        </div>
        <div style="width:100%; background-color:#999999; height: 10px; background-image:url(common/images/footer_bottom.png); background-repeat:no-repeat; background-position:center bottom"></div>
    </div>
  </div>
    <script>
    addGoogleAnalyticsToLinks();
    </script>
<?php } ?>


<?php
/**
 * To be invoked right after the "body" start tag.
 */
function print_leadin($menu, $file) { ?>

  <div style="position:relative; width: 992px; margin: 0 auto; background-image: url(common/images/bg.png); background-repeat: repeat-y; background-position: center top;">
    <div id="container" style="position:relative; width: 980px; margin: 0 auto; background-color: white;">

        <div style="position:absolute; background-color:#093E65; background-image:url(common/images/top_strip_blue.png); top:0px; width:100%; height:6px;">
            &nbsp;
        </div>

        <div id="logo" style="position:absolute; top:24px; left: 36px">
            <a href="index.php"><img src="common/images/logo.png" width="136" alt="OMNEST"></a>
        </div>

        <div id="search" style="position:absolute; top:16px; right:20px; background-image:url(common/images/search.png); background-repeat: no-repeat; width:150px; height:24px;">
            <form name="frmSearch" action="search.php" method="get">
                <input type="text" name="q" style="border-style:none; margin:1px 3px 1px 3px; width:120px; height:15px"/>
                <input type="image" alt="Search" src="common/images/search-icon.png" style="vertical-align:middle; border-style:none"/>
            </form>
        </div>

        <div id="topmenu" style="position:absolute; top:56px; right:20px;">
                <?php print_top_menu($menu, $file); ?>
        </div>

        <div style="position:absolute; background-color:#257D93; background-image:url(common/images/bg_inner.jpg); top:78px; width:100%; height:38px;">
            &nbsp;
        </div>

        <div id="headplaceholder" style="height:110px"></div>

        <div style="width: 980px;  background-color: white; min-height: 500px">

            <div id="content" style="margin:0px;">
                <div style="float:left; width:220px; padding:0 10px 0 10px; min-height:350px; margin-top:20px; background-image:url(common/images/menu_vertical_sep.png); background-position:top right; background-repeat:no-repeat;">
                   <?php print_menu($menu, $file); ?>
                </div>

                <div style="float:right; width:690px; margin: 20px 30px 20px 0">
<?php } ?>

<?php
/**
 * To be invoked right before the "body" close tag.
 */
function print_leadout() { ?>
                </div>
                <div style="clear:both"></div>
            </div>
            <div style="clear:both"></div>
        </div>
        <div style="width:100%; background-color:#999999; height: 10px; background-image:url(common/images/footer_top.png); background-repeat:no-repeat; background-position:center top"></div>
        <div id="footer" style="background-color:#999999; padding: 15px 40px 15px 40px; text-align: center;">
            Copyright (c) Simulcraft, Inc. All rights reserved.
        </div>
        <div style="width:100%; background-color:#999999; height: 10px; background-image:url(common/images/footer_bottom.png); background-repeat:no-repeat; background-position:center bottom"></div>
    </div>
  </div>

    <script>
    addGoogleAnalyticsToLinks();
    </script>
<?php } ?>

