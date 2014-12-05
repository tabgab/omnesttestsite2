<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - What's New in the 4.6 Version</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>What's New in OMNEST 4.6</h1></div>
<p>The focus of version 4.6 was to enable C++11 compatibility and to update
the bundled windows toolchain to MSYS2/MINGW64(32bit). Additionally, we made 
several usability enhancements to Tkenv (zooming) and made the IDE a native 
64-bit application on Mac OS X.</p>

<h2>Tkenv:</h2>
<ul>
<li><p>Improved zooming/panning support: use double click to zoom in around
    a point, and Shift + double click to zoom out; use Ctrl + left mouse
    button to drag out a rectangle to zoom to (a.k.a. marquee zoom;
    implementation based on patch from Christoph Sommer), right-click
    cancels marquee zoom; use left mouse button for panning</p></li>

<li><p>Further small UI fixes (see ChangeLog)</p></li>
</ul>
<h2>Core:</h2>
<ul>

<li><p>The testing tool opp_test has been revised and is now an official part
    of OMNEST.</p></li>

<li><p>The Manual now has a new chapter that covers the testing of simulation
    models as well as the usage of the opp_test tool.</p></li>

<li><p>The message compiler opp_msgc was reimplemented as a part of nedtool.
    opp_msgc still exists as a wrapper script that points to nedtool.</p></li>
</ul>
<h2>IDE:</h2>
<ul>
<li><p>The IDE is now based on Eclipse 4.4 Luna, and requires JDK 1.7 or later.</p></li>

<li><p>The IDE is now a 64-bit application on Mac OS X.</p></li>
</ul>
<h2>Other:</h2>
<ul>
<li><p>OMNEST is now using C++11 by default (-std=c++11) when models are compiled.
    The simulator itself does not use any of the C++11 features, so C++11 support may
    be disabled in configure.user. Update your models to compile properly using the
    C++11 standard, as later OMNEST versions will require C++11 compliance.</p>
</li>
<li><p>OMNEST can be configured to use the 'omnetpp' namespace by setting
    USE_NAMESPACE=yes in configure.user</p>
</li>
<li><p>Clang compiler support: Clang is used by default on OS X, and can be turned
    on on Linux. Clang is still not supported on Windows (we are waiting for the
    MSYS Clang packages to mature).</p>
</li>
<li><p>The bundled MSYS/MinGW toolchain was updated to use MSYS2. MSYS2 resolves
    a number of issues:</p>
    <ul>
    <li><p>No more memory errors during build</p></li>
    <li><p>The make command now properly supports parallel build (-j4, -j8 etc.)</p></li>
    <li><p>The bundled MSYS2 toolchain now contains the pacman package manager,
        so you can install additional packages if you wish</p></li>
    <li><p>Change in OMNEST: The msys/ directory has been moved to tools/win32/ while
        the mingw/ directory that contains the compiler has been moved to 
        tools/win32/mingw32/.</p></li>
    </ul>
</li>      
</ul>


<p>Bugs fixed: <a href="http://tinyurl.com/omnetpp46-fixes" target="_blank">http://tinyurl.com/omnetpp46-fixes</a></p>
<br/>
<h2><a href="whatsnew-45.php">What's New in OMNEST 4.5 <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></h2>

<?php print_leadout(); ?>
</body>
</html>

