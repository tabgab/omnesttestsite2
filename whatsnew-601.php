<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - What's New in the 6.0 Version</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>What's New in OMNEST 6.0.1</h1></div>

<div id="content">

<p>This is a maintenance release containing several bugfixes.</p>
<p>Simulation kernel:</p>
<ul>
<li>Fix: Proper namespace resolution for C++ types in <code>@signal</code> declarations.</li>
<li>Added <code>cProperty::getValueOriginFile()</code>, <code>getValueOriginType()</code>.</li>
<li>Fix: Build errors on newer versions of clang.</li>
<li>Fix <a class="issue-link js-issue-link" data-error-text="Failed to load title" data-id="1319567050" data-permission-text="Title is private" data-url="https://github.com/omnetpp/omnetpp/issues/933" data-hovercard-type="issue" data-hovercard-url="/omnetpp/omnetpp/issues/933/hovercard" href="https://github.com/omnetpp/omnetpp/issues/933">#933</a>: eventlog recording intervals were ignored.</li>
<li>Fix: Check for context component in all built-in NED functions that need it and throw an exception if there is none, instead of just crashing.</li>
</ul>
<p>IDE:</p>
<ul>
<li>CDT component upgraded to 10.6.2</li>
<li>Fix <a class="issue-link js-issue-link" data-error-text="Failed to load title" data-id="1349005963" data-permission-text="Title is private" data-url="https://github.com/omnetpp/omnetpp/issues/938" data-hovercard-type="issue" data-hovercard-url="/omnetpp/omnetpp/issues/938/hovercard" href="https://github.com/omnetpp/omnetpp/issues/938">#938</a>: Filtering the eventlog in the sequence chart makes it empty.</li>
<li>Fix <a class="issue-link js-issue-link" data-error-text="Failed to load title" data-id="1005584793" data-permission-text="Title is private" data-url="https://github.com/omnetpp/omnetpp/issues/896" data-hovercard-type="issue" data-hovercard-url="/omnetpp/omnetpp/issues/896/hovercard" href="https://github.com/omnetpp/omnetpp/issues/896">#896</a>: NED visual editor cannot show warning symbol.</li>
<li>Fix <a class="issue-link js-issue-link" data-error-text="Failed to load title" data-id="386942150" data-permission-text="Title is private" data-url="https://github.com/omnetpp/omnetpp/issues/634" data-hovercard-type="issue" data-hovercard-url="/omnetpp/omnetpp/issues/634/hovercard" href="https://github.com/omnetpp/omnetpp/issues/634">#634</a>: NED files in search results now open properly in NED editor.</li>
<li>Fix <a class="issue-link js-issue-link" data-error-text="Failed to load title" data-id="1315763201" data-permission-text="Title is private" data-url="https://github.com/omnetpp/omnetpp/issues/932" data-hovercard-type="issue" data-hovercard-url="/omnetpp/omnetpp/issues/932/hovercard" href="https://github.com/omnetpp/omnetpp/issues/932">#932</a>: Exception when the filter button was clicked on the Sequence Chart window.</li>
<li>Fix <a class="issue-link js-issue-link" data-error-text="Failed to load title" data-id="1343019904" data-permission-text="Title is private" data-url="https://github.com/omnetpp/omnetpp/issues/936" data-hovercard-type="issue" data-hovercard-url="/omnetpp/omnetpp/issues/936/hovercard" href="https://github.com/omnetpp/omnetpp/issues/936">#936</a>: Illegible text on build output console in dark mode.</li>
</ul>
<p>Analysis Tool:</p>
<ul>
<li>Various fixes in the Python analysis package.</li>
<li>Added the <code>python/</code> folders of referenced project(s) to Python path of chart scripts.</li>
<li>On Windows, the bundled Python was upgraded to 3.10, fixing several issues in NumPy and Matplotlib.</li>
</ul>
<p>NED Documentation Generator:</p>
<ul>
<li>Refined support for msg types with namespace.</li>
<li>Added support for "<code>@debug</code> links" page directive.</li>
<li>Made namespaces appear in the navigation tree.</li>
</ul>
<p>Qtenv:</p>
<ul>
<li>Fix: Non-working parameter replacements in channel display strings.</li>
<li>Fix: Missing logs with disabled event/initialization banners.</li>
<li>Fix <a class="issue-link js-issue-link" data-error-text="Failed to load title" data-id="1319677813" data-permission-text="Title is private" data-url="https://github.com/omnetpp/omnetpp/issues/934" data-hovercard-type="issue" data-hovercard-url="/omnetpp/omnetpp/issues/934/hovercard" href="https://github.com/omnetpp/omnetpp/issues/934">#934</a>: Eliminate assertion failure on stopping eventlog recording from Qtenv.</li>
<li>Fix: Clamp nonzero computed animation speed to at least 1e-9. (Very low animation speed could result in simulation time not progressing at all, due to finite precision in the computations.)</li>
<li>Various other minor bug fixes.</li>
</ul>
<p>Documentation:</p>
<ul>
<li>Minor corrections in the Installation Guide.</li>
<li>Updated documentation for the <code>omnetpp.scave</code> Python classes.</li>
<li>Document fingerprint ingredients added in 6.0.</li>
</ul>
<br>

<h2><a href="whatsnew-60.php">What's New in OMNEST 6.0 <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></h2>

<?php print_leadout(); ?>
</body>
</html>

