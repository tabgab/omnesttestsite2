<!DOCTYPE html>
<html>

<?php include("common/design.php"); ?>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>OMNEST - What's New in the 5.0 Version</title>
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="revisit-after" content="30" />
    <meta name="description" content="OMNEST Network Simulation Framework  - High-Performance Simulation for All Kinds of Networks" />
    <meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework, systemc, hla"  />
    <?php print_head_contribution(); ?>
</head>

<body>
<?php print_leadin($product_menu, __FILE__); ?>

<div id="header"><h1>What's New in OMNEST 5.0</h1></div>

<div id="content">
<div class="paragraph"><p>Release 5.0 is a result of development effort of nearly two years. This is a
major release that introduces significant new features compared to the last
4.x version, for example the Canvas API (2D graphics), OpenSceneGraph-based 3D
graphics support, improved logging, a new Qt-based runtime environment that
will eventually replace Tkenv, and much more.</p></div>
<div class="paragraph"><p>We have also taken the opportunity of the major release to improve several
corners of the OMNEST API, and also to get rid of deprecated functionality.
For porting models from OMNEST 4.x, see doc/API-changes.txt which lists all
changes, with hints on how to update the model code.</p></div>
<div class="paragraph"><p>Documentation:</p></div>
<div class="ulist"><ul>
<li>
<p>
Several organizational and rendering improvements on the API documentation
   generated using Doxygen.
</p>
</li>
<li>
<p>
The User Manual has been renamed to Simulation Manual to reduce the chance of
   confusing it with the User Guide (which describes the IDE and Tkenv/Qtenv).
</p>
</li>
<li>
<p>
Improved the contents and the HTML rendering of the Simulation Manual.
</p>
</li>
</ul></div>
<div class="paragraph"><p>General:</p></div>
<div class="ulist"><ul>
<li>
<p>
The include/ folder was restructured: only the public header &lt;omnetpp.h&gt; was
   left in it, all other include files were moved into an omnetpp/ subfolder
   under include/.
</p>
</li>
<li>
<p>
The source tree (src/) has gone through several modernizing and cleanup steps:
</p>
</li>
<li>
<p>
Per-folder nested namespaces have been introduced, e.g. Tkenv code is now
     in the omnetpp::tkenv namespace.
</p>
</li>
<li>
<p>
Qualified includes with the folder, i.e. #include "stringutil.h" became
     #include "common/stringutil.h". This increases readability and reduces
     the chance of including a wrong header.
</p>
</li>
<li>
<p>
Use fully qualified header guards
</p>
</li>
<li>
<p>
Modernizing: use the <em>nullptr</em> and <em>override</em> keywords; use C&#x2060;+&#x2060;+ names of C
     headers (e.g. &lt;cstdio&gt; instead of &lt;stdio.h&gt;).
</p>
</li>
<li>
<p>
Code style: renamed many identifiers (local variables, arguments, private
     data members, etc.) to have a consistent, camelcase naming); codebase
     reformatted to have a consistent indentation style.
</p>
</li>
</ul></div>
<div class="paragraph"><p>Core:</p></div>
<div class="ulist"><ul>
<li>
<p>
Added cIEventlogManager, a new Envir plugin class that allows one
   to replace the built-in eventlog manager. Eventlog managers are
   responsible for recording simulation history into an eventlog file.
   A new eventlog manager can be activated with the eventlogmanager-class
   configuration option.
</p>
</li>
<li>
<p>
Added 3D graphics support via OpenSceneGraph. The 3D scene graph is to
   be built using the OpenSceneGraph API (e.g. loaded from file via osgDB::readNodeFile()),
   and then set onto a cOsgCanvas instance. 3D scene(s)
   can be visualized in the new Qtenv runtime GUI. (There is no 3D support
   in Tkenv, due to technical limitations.)
</p>
<img width="600" src="images/whatsnew/50-qtenv-3d.png" border="0">
</li>
<li>
<p>
OMNEST classes are now in the "omnetpp" namespace. Models need to be
   modified to compile, e.g. by adding "using namespace omnetpp" or
   USING_NAMESPACE lines at appropriate places. (The latter conditionally
   expands to the former when needed, and to the empty string when not,
   making your code compatible with OMNEST 4.6 too.)
</p>
</li>
<li>
<p>
FES made replaceable. To this end, an abstract cFutureEventSet base class
   has been introduced, and cMessageHeap (now renamed cEventHeap) was made
   to extend cFutureEventSet. An accessor method (cFutureEventSet* getFES())
   has been added to cSimulation, and the older members msgQueue and
   getMessageQueue() have been removed. Simulations now accept a
   <code>futureeventset-class=&lt;classname&gt;</code> configuration option.
</p>
</li>
<li>
<p>
Added the Canvas API, a figure-based 2D drawing API. The Canvas API allows
   augmenting simulations with graphical elements. Item types include various
   shapes, text and image, including an SVG-like "path" item (a generalized
   polygon/polyline, with arcs and Bezier curves). Transformations (scaling,
   rotation, skewing) are supported, as well as transparency.
</p>
</li>
<li>
<p>
New logging API. It features six log levels (FATAL, ERROR, WARN, INFO,
   DETAIL, DEBUG, TRACE), category support, compile-time and runtime global
   and per-module log level thresholds. Also, much more information is passed with each log line to the user
   interface code, allowing one to display a wealth of information in the log
   prefix (log level, file/line, event number, simulation time, module name
   and type, object name and type, and so on).
</p>
<div class="ulist"><ul>
<li>
<p>
lower-case ev&lt;&lt; is no longer legal, use EV&lt;&lt; instead
</p>
</li>
<li>
<p>
ev.printf() was removed, use the stream API (EV&lt;&lt;) instead
</p>
</li>
</ul></div>
</li>
<li>
<p>
Introduced cEvent as a base class of cMessage. cEvent allows scheduling
   of arbitrary code for a simulation time that runs independent of modules.
   Override the execute() method of cEvent to specify the code. cEvent is
   not intended for use in simulation models; the primary motivation is to
   allow implementing simulation time limit with an "end-simulation" event,
   and to encapsulate foreign events (e.g. SystemC events and crunching)
   for seamless integration with the simulation event loop.
</p>
</li>
<li>
<p>
Added support for simulation lifecycle listeners. Listeners are called back
   before and after network setup, on network initialization, before and after
   network finalization, and so on. The motivation was to allow more flexibility
   when writing initialization and shutdown code for schedulers, result
   file managers and other extensions.
</p>
</li>
<li>
<p>
Channel objects made equal to modules in the sense that now they also have
   IDs (the getId() method was moved from cModule to cComponent, the common base
   class of modules and channels), and they are also registered with cSimulation.
</p>
</li>
<li>
<p>
New fingerprint computation algorithm. The goal was to make the fingerprint
   less sensitive to uninteresting changes (e.g. removal of an inactive module),
   and more sensitive to interesting ones (e.g. change in packet lengths).
   To get the old fingerprints, define USE_OMNETPP4x_FINGERPRINTS when compiling
   OMNEST.
</p>
</li>
<li>
<p>
cKSplit: method rangeExtension(bool) has been renamed to setRangeExtension().
</p>
</li>
<li>
<p>
cModule::size() has been deprecated (use getVectorSize() instead).
</p>
</li>
<li>
<p>
Several methods in cComponent, cModule, cSimpleModule, cChannel, cArray,
   cQueue, cTopology, cStatistic and other classes have been made virtual to
   allow the user override them.
</p>
</li>
<li>
<p>
Fixed #943 which prevented using cDatarateChannel&#8217;s forceTransmissionFinishTime()
   method when the channel&#8217;s busy state signal was recorded into an output vector.
</p>
</li>
<li>
<p>
Revised the configuration options that control recording of @statistics,
   individual scalars, and histograms. As a result, the **.statistic-recording
   and **.bin-recording options were introduced that take over some of the
   responsibility of the formally overloaded **.scalar-recording option.
   Rationale and details in src/envir/ChangeLog.
</p>
</li>
<li>
<p>
In cEnvir, renamed getRNGMappingFor(component) to preconfigure(component).
</p>
</li>
<li>
<p>
In cSimulation, moved both updating the event number and simulation time
   into executeEvent(). They were updated inconsistently, plus executeEvent()
   is a better place for that than getNextEvent(), considering cScheduler&#8217;s
   putBackEvent().
</p>
</li>
<li>
<p>
Removed cEnvir::isDisabled() and added cEnvir::isLoggingEnabled(). Renamed
   cEnvir::disableTracing member variable to cEnvir::loggingEnabled.
</p>
</li>
<li>
<p>
cModule: size() deprecated, use getVectorSize() instead
</p>
</li>
<li>
<p>
Several methods were made virtual in cSimpleModule and other classes
</p>
</li>
<li>
<p>
Improved the descriptions of several per-object config options.
</p>
</li>
<li>
<p>
Added resolveResourcePath() to cEnvir and cComponent. The method searches
   a number of folders for a resource given with its file name or relative
   path, and returns the path for the first match. It can useful for locating
   various data files for models, OSG model files, and other files.
</p>
</li>
<li>
<p>
Visualization: added a method to the base class of modules and channels to
   serve as a container of visualization-related code. refreshDisplay() is
   invoked by graphical user interfaces (Qtenv, Tkenv) whenever GUI contents
   need to be refreshed. Display string updates, canvas figures maintenance,
   and OSG scene graph updates are probably best done inside refreshDisplay()
   methods, as it can result in significant performance gain and, in some
   cases, also in more consistent information being displayed.
</p>
</li>
<li>
<p>
An isExpressMode() method has been added to cEnvir to query whether the
   simulation runs in Express mode under a GUI. This information can be useful
   additional input for refreshDisplay() code.
</p>
</li>
<li>
<p>
The simtime-scale config option has been replaced by simtime-resolution,
   a more user-friendly incarnation. simtime-precision accepts time units
   (s, ms, us, ns, ps, fs, as), power-of-ten multiples of such a unit (e.g.
   100ms), and also base-10 scale exponents in the -18..0 range (mostly for
   backward compatibility with simtime-scale).
</p>
</li>
<li>
<p>
RNG-to-module mapping made more flexible: the **.rng-&lt;N&gt; config option now
   allows expressions, including those containing index, parentIndex, and
   ancestorIndex(level). This change allows things like assigning a separate
   RNG to each element of a module vector.
</p>
</li>
<li>
<p>
Signal listener interface change: A cObject *details argument has been
   added to emit() methods to allow simulation models provide extra information
   with primitive data types (double, long, etc) they emit, without the need
   to switch over to emitting cObject altogether. This is a non-backward-
   compatible change: signal listeners will need to be updated with the extra
   argument. To facilitate transition, you can compile OMNEST and models with
   WITH_OMNETPP4x_LISTENER_SUPPORT defined; this will set up cIListener
   to delegate to the old methods, so existing listeners will work.
</p>
</li>
<li>
<p>
Result filter/recorder interfaces, being based on signal listeners, have
   undergone a similar change. Models containing custom result filters or
   recorders will need to be updated.
</p>
</li>
<li>
<p>
SimTime overhaul to increase accuracy (i.e. use integer arithmetic
   where possible), improve the API, and add missing operations/functions.
</p>
<div class="ulist"><ul>
<li>
<p>
Added missing * and / operators for integral types. This causes
      integer multiplications/divisions to be computed with integer arithmetic
      instead of floating point, resulting in better accuracy.
</p>
</li>
<li>
<p>
Added overflow checking for integer multiplication and negation
</p>
</li>
<li>
<p>
Use int64 arithmetic and overflow checking when assigning from integer types
</p>
</li>
<li>
<p>
Added isZero()
</p>
</li>
<li>
<p>
Replaced "int exponent" with "SimTimeUnit unit" in the two-argument
      constructor (value + unit) and several other methods, with the aim
      of making the API more user-friendly (and model code easier to read).
      Models that call affected methods with integers will need to be
      updated.
</p>
</li>
<li>
<p>
Moved math functions like fabs(SimTime) into the omnetpp namespace
</p>
</li>
<li>
<p>
Added div(SimTime, SimTime); also refined related fmod()'s documentation
</p>
</li>
</ul></div>
</li>
<li>
<p>
Removed SIMTIME_RAW(), STR_SIMTIME(), and SIMTIME_TTOA(). These macros are
   no longer needed, as were introduced in OMNEST 4.0 to assist porting models
   from version 3.x where simulation time was stored in double. Also, MAXTIME
   was renamed to SIMTIME_MAX.
</p>
</li>
<li>
<p>
The tkenv-image-path config option has been replaced with image-path.
</p>
</li>
<li>
<p>
Introduced cRandom, which encapsulates a random number stream into an
   object. Random numbers can be extracted with the draw() method.
   Added the following cRandom subclasses: cUniform, cExponential,
   cNormal, cTruncNormal, cGamma, cBeta, cErlang, cChiSquare, cStudentT,
   cCauchy, cTriang, cWeibull, cParetoShifted, cIntUniform, cBernoulli,
   cBinomial, cGeometric, cNegBinomial, cPoisson. They encapsulate the
   similarly named functions (e.g. exponential()) with their parameters
   and the random number generator (cRNG). cStatistic also now subclasses
   from cRandom: it can generate a random variate from the distribution
   observed in the collected sample.
</p>
</li>
<li>
<p>
Random variate generation functions (normal(), etc.) signature change:
   the trailing "int rng" (RNG index of context module) argument was changed
   to cRNG*, and moved to the front. Motivation: break the functions'
   dependence on the context module. However, to lessen the impact of the
   signature change, random variate
   generation functions with their original signatures have been added
   to cComponent as methods. Thus, models that only use those functions from
   module methods will not notice any change.
</p>
</li>
<li>
<p>
The interface of iterators (GateIterator, SubmoduleIterator and
   ChannelIterator in cModule, cQueue::Iterator, etc.) have been changed
   to make them more consistent with STL iterators. Therefore, operator()
   as a means of dereferencing has been deprecated, and operator* and
   operator-&gt; have been added instead. The increment/decrement operators
   have also been revised.
</p>
</li>
<li>
<p>
The "simulation" and "ev" macros have been removed, to reduce pollution
   of the global namespace. You can use the newly introduced getSimulation()
   and getEnvir() functions instead.
</p>
</li>
<li>
<p>
cObject::parsimPack() has become const. You only need to pay attention
   (and add "const" manually) if you have classes that redefine parsimPack().
</p>
</li>
<li>
<p>
cQueue and cMessageHeap had both length()/getLength() and empty()/isEmpty()
   methods; the former have been removed; use getLength() and isEmpty() instead.
</p>
</li>
<li>
<p>
There have been several other, smaller changes and improvements in many
   classes, e.g. cException, cStatistic, cDensityEstBase, cObjectFactory, etc.
</p>
</li>
<li>
<p>
Most methods, typedefs and other items deprecated in previous versions have
   been removed.
</p>
</li>
<li>
<p>
cTopology improvements:
</p>
</li>
<li>
<p>
added factory methods for links and edges
</p>
</li>
<li>
<p>
added methods to manipulate the graph (e.g. build a graph from scratch)
</p>
</li>
<li>
<p>
Removed int8..int64 and uint8..uint64. Models should use the standard integer
   types from &lt;stdint.h&gt; that end in "_t": int8_t, uint8_t, etc.
</p>
</li>
<li>
<p>
check_and_cast&lt;&gt; improved; added check_and_cast_nullable&lt;&gt; that accepts NULL
   pointer as input
</p>
</li>
<li>
<p>
cClassDescriptor interface changes (method renaming and arg list changes)
</p>
</li>
<li>
<p>
Code cleanup, including:
</p>
</li>
<li>
<p>
removal of 3.x backward compatibility features (WITH_DOUBLE_SIMTIME,
     WITHOUT_CPACKET)
</p>
</li>
<li>
<p>
removal of deprecated classes, functions and macros (cLinkedList,
     cSimulation::operator[], Define_Function(), etc.)
</p>
</li>
<li>
<p>
cTopology: internals refactored (use STL instead of arrays, etc.)
</p>
</li>
<li>
<p>
error code enum members renamed from <em>eXXX</em> to <em>E_XXX</em>
</p>
</li>
</ul></div>
<div class="paragraph"><p>NED:</p></div>
<div class="ulist"><ul>
<li>
<p>
Allow a "module" to extend a "simple"
</p>
</li>
<li>
<p>
The message compiler no longer appends "_var" to the names of data members
   in generated classes. In cases where this change breaks existing code
   (classes with @customize(true) or with subclasses), you can emulate the
   old behavior by adding the following to the message definition: <code>@fieldNameSuffix("_var");</code>
</p>
</li>
<li>
<p>
<code>@figure</code> syntax in NED, so figures can be defined in NED files.
</p>
</li>
<li>
<p>
In message compiler generated code, doPacking() has been renamed to
   doParsimPacking(), doUnpacking() to doParsimUnpacking().
</p>
</li>
</ul></div>
<div class="paragraph"><p>Tkenv:</p></div>
<div class="ulist"><ul>
<li>
<p>
Added a large simulation time and event number display to the toolbar that
   display the *current* simulation time (or the time of the last event), as
   opposed to the time of the next event displayed previously. The status bar
   below the toolbar displays information about the *next* event, together with
   the time delta from the current simulation time. Information on the currently
   set up simulation, along with message statistics, have been moved to the
   bottom status bar of the main window.
</p>
<img width="600" src="images/whatsnew/50-tkenv-status-area.png" border="0">
</li>
<li>
<p>
Feature: double-clicking a module in the object tree will open it
   in the main area instead of opening a new inspector window. A new
   inspector can still be opened from the context menu.
</p>
</li>
<li>
<p>
Added the "Hide namespaces" option in the Preferences dialog that turns off
   the display of the namespace part of C&#x2060;+&#x2060;+ class names when they appear in
   the GUI.
</p>
</li>
<li>
<p>
Fixed tooltip-related problems: large tooltips could not appear (e.g. the
   help for log prefix in the Preferences dialog); submodule tooltips were
   missing from the canvas
</p>
</li>
<li>
<p>
Images under images/old/ are no longer accessible without the "old/"
   prefix, so if you use such an icon, you must add the "old/" prefix
   manually for them to continue to work. For example, you have to change
   "i=cloud" to "i=old/cloud" in display strings. The feature to let old/*
   images be accessible without the prefix was originally introduced to ease
   the transition from OMNEST 3.x to 4.0.
</p>
</li>
<li>
<p>
The bgs (background scaling) display string tag has been removed. It was
   originally introduced more or less as a default zoom level, but lost its
   significance since interactive zoom has been introduced.
</p>
</li>
<li>
<p>
Zooming no longer affects icon sizes on the screen (but you still have
   the Increase/Decrease Icon Size, Ctrl+I/Ctrl+O menu items in Tkenv).
</p>
</li>
<li>
<p>
Finished implementation of the Canvas API Tkenv rendering. The
   implementation is based on figure renderers (see FigureRenderer class)
   that can be registered for various figure classes.
   The implementation is based on the Tkpath Tcl/Tk extension, which was
   significantly enhanced by our team.
</p>
<img width="600" src="images/whatsnew/50-tkenv-canvas.png" border="0">
</li>
<li>
<p>
Tkpath is now also used internally for drawing submodules, connections
   and the like. Benefits include:
</p>
</li>
<li>
<p>
unlimited zooming of image backgrounds
</p>
</li>
<li>
<p>
antialiased drawing (Tk canvas didn&#8217;t have antialiasing)
</p>
</li>
<li>
<p>
OS X: images are no longer forced into 1-bit transparency
</p>
</li>
<li>
<p>
labels are now outlined (have a "halo") to make them readable on noisy backgrounds
</p>
</li>
<li>
<p>
range indicator fill is now semi-transparent (because Tkpath supports that)
</p>
</li>
<li>
<p>
performance improvements e.g. on OS X, and with image backgrounds
</p>
</li>
<li>
<p>
Display log prefix; log prefix format and log level configurable via the Options dialog
</p>
</li>
</ul></div>
<div class="paragraph"><p>Qtenv:</p></div>
<div class="ulist"><ul>
<li>
<p>
Qtenv, the Qt-based runtime environment is currently in preview status,
   Tkenv is still the default runtime. Qtenv can be activated by adding the
   <em>-u Qtenv</em> switch to simulation command lines. Alternatively, specify
   <em>PREFER_QTENV=yes</em> in configure.user to make Qtenv the default GUI.
   Note that 3D visualization is only available in Qtenv.
</p>
<img width="600" src="images/whatsnew/50-qtenv-window.png" border="0">
</li>
</ul></div>
<div class="paragraph"><p>Cmdenv:</p></div>
<div class="ulist"><ul>
<li>
<p>
Configuration options controlling logging in non-express mode
   (cmdenv-express-mode=false) have been simplified. The following options
   have been removed: cmdenv-module-messages, cmdenv-global-log-level,
   **.cmdenv-ev-output. The equivalent functionality (enabling/disabling
   logging and setting the log level globally and per-module) is now
   controlled with **.cmdenv-log-level. Logging can be disabled with
   **.cmdenv-log-level = OFF. Note that the cmdenv-event-banners and
   cmdenv-log-prefix options still exist.
</p>
</li>
<li>
<p>
The cmdenv-message-trace configuration option has been removed. It had very
   limited usefulness, and it was somewhat overlapping with eventlog.
</p>
</li>
<li>
<p>
The cmdenv-log-format option has been renamed to cmdenv-log-prefix.
</p>
</li>
<li>
<p>
Log lines can now be prefixed with information such as the module
   path; simulation time; event&#8217;s class and object name; file/line
   of the log statement; class, name and pointer of the object
   containing the log statement; etc. The format of this prefix can be
   changed from ini files.
</p>
</li>
<li>
<p>
New inifile config options: cmdenv-log-format, cmdenv-log-level.
</p>
</li>
</ul></div>
<div class="paragraph"><p>Build:</p></div>
<div class="ulist"><ul>
<li>
<p>
Introduced <em>WITH_TKENV</em>, <em>WITH_QTENV</em>, <em>WITH_OSG</em> and <em>WITH_SYSTEMC</em> in configure.user;
   these options allow one to disable certain features if they are not needed.
   In particular, <em>WITH_TKENV=no</em> replaces <em>NO_TCL=1</em>
</p>
</li>
<li>
<p>
Because of the new Qtenv runtime environment, OMNEST now has several additional
   dependencies: Qt4 is mandatory, while OpenSceneGraph and osgEarth is optional.
   Qtenv can be fully disabled by commenting out the QT_VERSION= variable in the
   configure.user file and then re-running ./configure. Building Qtenv without
   the OpenSceneGraph libraries will disable 3D visualization support in Qtenv.
</p>
</li>
<li>
<p>
A separate Mac OS X specific installation bundle was created that contains
   the binary files for all the external dependencies (Tcl/Tk, Qt, OSG, osgEarth etc.)
   As a consequence you no longer have to manually install Quartz before installing
   OMNEST. We have now separate installation bundles for Linux/Mac/Windows.
</p>
</li>
<li>
<p>
The bundled toolchain on Windows has been updated to use MinGW-w64 (32-bit)
   containing both the <em>gcc</em> and <em>clang</em> compilers. The bundle contains all the
   dependencies needed to build OMNEST (including Tcl/Tk, Qt4, OpenSceneGraph,
   osgEarth etc.)
</p>
</li>
<li>
<p>
Because of the large size of the extra dependencies (Qt, OpenSceneGraph), the
   tools directory is now distributed as a highly compressed archive file inside
   the Windows installation bundle. It is extracted to its final location when
   mingwenv.cmd is first started.
</p>
</li>
<li>
<p>
On systems that have both the <em>gcc</em> and <em>clang</em> compilers installed, OMNEST
   will pick <em>clang</em> by default. This behavior can be changed by the <em>PREFER_CLANG</em>
   variable in the configure.user file.
</p>
</li>
</ul></div>
<div class="paragraph"><p>Contrib:</p></div>
<div class="ulist"><ul>
<li>
<p>
Removed JSimpleModule due to lack of users and good use cases
</p>
</li>
</ul></div>
<div class="paragraph"><p>SystemC:</p></div>
<div class="ulist"><ul>
<li>
<p>
Updated the bundled SystemC reference implementation to version 2.3.1
</p>
</li>
</ul></div>
<div class="paragraph"><p>Utils:</p></div>
<div class="ulist"><ul>
<li>
<p>
Added <em>opp_featuretool</em>, which is basically the command-line equivalent of
   the Project Features dialog in the IDE: it allows one to enable/disable
   project features defined for an OMNEST project, e.g. the INET Framework.
</p>
</li>
</ul></div>
<div class="paragraph"><p>Examples:</p></div>
<div class="ulist"><ul>
<li>
<p>
Added samples/canvas, a demo for the Canvas API
</p>
</li>
<li>
<p>
Updated visualization in samples to use the new refreshDisplay() callback.
</p>
</li>
<li>
<p>
Several new examples (osg-intro, osg-earth, osg-indoor, osg-satellites) have
   been added to the <em>samples</em> folder to demonstrate the new 3D visualization
   capabilities in Qtenv.
</p>
</li>
<li>
<p>
Removed google-earth demo. (We already have a similar demo, osg-earth.)
</p>
</li>
</ul></div>
<div class="paragraph"><p>Additionally, several bug were fixed in the IDE, Tkenv and Qtenv.</p></div>
</div>

<br/>
<h2><a href="whatsnew-46">What's New in OMNEST 4.6 <img src="common/images/button_next.png"><img src="common/images/button_next.png"></a></h2>

<?php print_leadout(); ?>
</body>
</html>

