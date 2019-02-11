<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - What's New in the 5.4.1 Version</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>What's New in OMNEST 5.4.1</h1></div>

<div id="content">

<div class="sect1">
  <div class="sectionbody">
  <div class="paragraph"><p>Highlights of this release are an improved message compiler (required for INET 4),
  much improved histogram support; a more powerful cMessagePrinter API and its
  implementation in Qtenv; better support for smooth animation in Qtenv; typename and exists()
  operators in NED; nan and inf keywords in NED; support for logarithmic units
  like dB, dBW, dBm, dBV, dBmV. Qtenv has also gained much more powerful
  just-in-time debugging capabilities than before.
  Details follow.</p></div>

  <div class="paragraph"><p>NED:</p></div>
  <div class="ulist"><ul>

  <li><p>
    Allow 'typename' in expressions. Motivation: we want to be able to write:
     foo: &lt;&gt; like IFoo if typename!=""
  </p></li>

  <li><p>
    Added the "exists" operator. Syntax: exists(<submodulename>)
  </p></li>

  <li><p>
    Introduced "nan" and "inf" as keywords for numeric constants
  </p></li>

  </ul></div>

  <div class="paragraph"><p>Core:</p></div>
  <div class="ulist"><ul>
  <li>
  <p>
  Revised message compiler, added import support and more.
      See src/nedxml/ChangeLog for details. Use --msg6 to turn on
      the new features.
  </p>
  </li>
  <li>
  <p>
  cPar: integer representation changed from long to int64_t.
      See src/include/omnetpp/ChangeLog for details.
  </p>
  </li>
  <li>
  <p>
  Evaluation of NED expressions now uses integer arithmetic when operands
      are integers. Conversions that incur precision loss should now be explicit:
      converting a double to integer requires the int() cast; also, converting
      an int to double will raise an error if there is actual precision loss,
      and you can suppress that error by explicit double() cast. There are many
      smaller-scale changes related to this change&#8201;&#8212;&#8201;see include/omnetpp/ChangeLog
      for details.
  </p>
  </li>
  <li>
  <p>
  cHistogram has been replaced with new implementation. (The old one is still
      available under the name cLegacyHistogram.) The new cHistogram is more
      general (supports arbitrary bins), more configurable, and produces much
      higher quality histograms even in the default setup due to newly introduced
      techniques such as adaptive precollection, bin size rounding and bin edge
      snapping, auto-extension with new bins, bin merging to keep the number of
      bins optimal, etc. Histogram operation can be customized via histogram
      strategy classes (cIHistogramStrategy); several histogram strategies are
      provided.
  </p>
  </li>
  <li>
  <p>
  In recording histograms with @statistic, the number of bins can be specified
      by adding numBins=nn: @statistic[x](record=histogram;numBins=100). The actual
      number of bins produced might slightly differ, due to auto-extension and
      bn merging during result collection.
  </p>
  </li>
  <li>
  <p>
  cMessagePrinter: API was extended with tags and column names
  </p>
  </li>
  <li>
  <p>
  cCanvas: added getAnimationSpeed(); better documentation for
      setAnimationSpeed() and holdSimulationFor().
  </p>
  </li>
  <li>
  <p>
    cHistogram, cNedValue: minor changes in the public API
  </p>
  </li>

  <li>
  <p>
    Result recorders: Added "timeWeightedHistogram" recorder
  </p>
  </li>

  <li>
  <p>
    SimTime now has a new method named ustr() that prints the time in an
    appropriate unit. It is now used in cClassDescriptor for displaying
    simtime_t fields and at a few other places.
  </p>
  </li>

  <li>
  <p>
    SimTime: more precise computation for integer-SimTime division.
  </p>
  </li>

  <li>
  <p>
    Measurement units are now available as NED functions as well. They
    accept dimensionless numbers and quantities with a compatible unit.
    E.g. the expressions mW(2*100) and mW(0.2W) both result in 200mW.
  </p>
  </li>

  <li>
  <p>
    New measurement units: K, Ohm, mOhm, kOhm, MOhm, uW, nW, pW, fW,
    THz, kmps, binary and decimal multiples of bit (Kib, Mib, Gib,
    Tib, kb, Mb); deg, rad; pct (percent), ratio.
  </p>
  </li>

  <li>
  <p>
    Support for logarithmic units: dBW, dBm, dBV, dBmV, dBA, dBmA, dB.
    Conversion between logarithmic and corresponding linear units (W vs. dBW)
    is supported. Conversion between bit and byte (and multiples) is
    also supported.
  </p>
  </li>

  <li>
  <p>
  cPacket: refined str() method
  </p>
  </li>

  </ul></div>
  <div class="paragraph"><p>Qtenv:</p></div>
  <div class="ulist"><ul>
  <li>
  <p>
  Implemented support for the improved cMessagePrinter Options API, and added
      a respective configuration dialog.
  </p>
  </li>
  <li>
  <p>
  The log viewer now supports ANSI control sequences for text styling:
      foreground/background color, and bold/italic/underline text. Styling is
      supported in both message history view and log view, i.e. it can be used
      in text returned from cMessagePrinter and logged by the EV and other logging
      macros.
  </p>
  </li>
  <li>
  <p>
  Rewritten the controller for smooth animation. The new algorithm is now able
      to scale linearly, as long as the simulation can keep up.
  </p>
  </li>
  <li>
  <p>
  Usability improvements in the Animation Parameters dialog, e.g. it now
      also displays the current simulation speed, and it is colored red if the
      simulation cannot keep up with the requested animation speed.
  </p>
  </li>
  <li>
  <p>
  Histogram inspector: visualize outlier bins (drawn with a different
      color than normal bins), and show info about them. Fix numeric overflow
      when large numbers (&gt;= 2^64) are shown.
  </p>
  </li>
  <li>
  <p>
  Histogram inspector: visualize outlier bins (drawn with a different
    color than normal bins), and show info about them. Setting up the bins while
    in the precollection phase can be forced from the GUI.
    Fix numeric overflow when large numbers (>= 2^64) are shown.
  </p>
  </li>
  <li>
  <p>
  Histogram result objects are easier to locate on the GUI, and are now
      also found by the Find/Inspect dialog.
  </p>
  </li>
  <li>
  <p>
  Made statistic recorders "findable" from Qtenv
  </p>
  </li>

  <li>
    <p>
    Debug-on-error functionality can now be turned on interactively, via the
    Simulate -> Debug on Errors menu item.
    </p>
  </li>

  <li>
    <p>
    When an error occurs and debug-on-error is enabled, Qtenv now offers to
    launch and attach an external debugger unless the simulation program is
    already being debugged. The same applies to the Debug Next Event
    functionality. External debuggers can be configured with the
    debugger-attach-command configuration key, and can also be overridden
    with the OMNETPP_DEBUGGER_COMMAND environment variable.
    </p>
  </li>

  <li>
    <p>
    Workaround for a crash with Qt 5.11.
    </p>
  </li>

  </ul></div>
  <div class="paragraph"><p>Tkenv:</p></div>
  <div class="ulist"><ul>
  <li>
  <p>
  The Tcl/Tk based runtime interface is now deprecated and turned off by
      default. It will be removed in future OMNEST versions. You can still enable it
      in configure.user by setting WITH_TKENV = yes, but we strongly suggest using
      Qtenv instead.
  </p>
  </li>
  </ul></div>

  <div class="paragraph"><p>IDE:</p></div>
  <div class="ulist"><ul>

  <li><p>
    Launcher: fix: The IDE sometimes started build in the UI thread,
    locking up the UI for the time of the build, potentially for several
    minutes.
    </p></li>

  <li><p>
  - Fixed "unknown" image as module background in the graphical NED editor.
  </p></li>

  <li><p>
    Fix: do not report "undefined parameter" for typename assignments in NED
  </p></li>

  <li><p>
    Fix: inifile analysis: typename deep assignments in NED were ignored
  </p></li>

  </ul></div>

  <div class="paragraph"><p>Toolchain and dependencies:</p></div>
  <div class="ulist"><ul>
  <li>
  <p>
  Updated toolchain on Windows (clang 5.0.1, gcc 7.3, gdb 8, osgEarth 2.7)
  </p>
  </li>
  <li>
  <p>
  Updated toolchain on macOS (OpenSceneGraph 3.2.3, osgEarth 2.7)
  </p>
  </li>
  <li>
  <p>
  OMNEST now requires osgEarth 2.7 or later (check the Install Guide for
      further instructions on how to upgrade osgEarth.)
  </p>
  </li>
  </ul></div>
  <div class="paragraph"><p>Tools:</p></div>
  <div class="ulist"><ul>
  <li>
  <p>
  opp_runall, opp_fingerprinttest, opp_test: portability fixes for Windows
      and macOS
  </p>
  </li>
  <li>
  <p>
  opp_fingerprinttest: fix: error messages from the simulation did
      not appear
  </p>
  </li>
  <li>
  <p>
  'march=native' and 'mtune=native' compiler options are no longer used
      by default for a release build, because on certain CPUs this caused rounding
      differences so simulations ran on a different trajectory depending on the
      actual CPU used.
  </p>
  </li>
  </ul></div>
  <div class="paragraph"><p>Samples:</p></div>
  <div class="ulist"><ul>
  <li>
  <p>
  canvas: Added smooth animation with CarAnimator::refreshDisplay().
  </p>
  </li>
  <li>
  <p>
  osg-earth, osg-satellites: Switch from ObjectLocator to GeoTransform.
      The former was removed after osgEarth 2.8, and the latter has been
      around for quite some time now.
  </p>
  </li>
  </ul></div>

  <div class="paragraph"><p>Documentation:</p></div>
  <div class="ulist"><ul>
  <li>
  <p>
  Documented smooth animation in detail, and updated the section on statistical
      data collection classes (cStdDev, cHistogram) in the Simulation Manual.
  </p>
  </li>
  </ul></div>
  <div class="paragraph"><p>Plus several bug fixes.</p></div>
  </div>
  </div>


<br/>
<h2><a href="whatsnew-521.php">What's New in OMNEST 5.2.1 <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></h2>

<?php print_leadout(); ?>
</body>
</html>

