<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Simulcraft Inc.</title>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST - an Embeddable Discrete Event Simulator Network" />
	<meta name="keywords" content="embeddable discrete event simulator simulation embedding c++ c open source network"  />
	<link rel="stylesheet" type="text/css" href="common/omnest.css">

</head>

<body>

<!-- Start Container -->
<div id="container">

<?php include("common/top_inc.php"); ?>
	</div>
	<!-- End Main Menu -->

	<div style="clear: both;">

	<!-- Start Content -->
	<div id="content">

	<div id="header"><h1>OMNEST Overview</h1></div>

        <p>
        OMNEST is a <b>discrete event simulation framework</b>. Its primary
        application area is the simulation of communication networks, but
        because of its generic and flexible architecture, is successfully
        used in other areas like the simulation of complex IT systems,
        queueing networks or hardware architectures as well.</p>

        <p>
        OMNEST provides a <b>component architecture</b> for models. Components
        (termed <i>modules</i>) are programmed in C++, then assembled into
        larger components and models using a high-level language (NED).
        Reusability of models comes for free.</p>

        <p>
        <img src="overview/img1.png" align="right" border="0" width="150" style="padding:10px"/>
        Simulations are developed in the Eclipse-based <b>Simulation IDE</b>.
        The IDE supports all stages of a simulation project: developing,
        building, configuring and running simulation models, and analysing
        results.

        <p>It also supports visualizing simulation execution traces as
        sequence charts, and generating documentation.

        <p>We are also bundling version control (cvs, svn, git) Eclipse
        plug-ins with the IDE.

        <p>The IDE is supported on the three major platforms, Linux, Mac OS X
        and Windows. Since Eclipse is extremely extensible, we expect
        that OMNEST-based simulation frameworks will contribute their own
        custom wizards into the IDE.


<img src="overview/img2.png" align="right"/>
<img src="overview/img4.png" align="right"/>
<img src="overview/img6.png" align="right"/>
<img src="overview/img16.png" align="right"/>
<img src="overview/img20.png" align="right"/>
<img src="overview/img21.png" align="right"/>
<img src="overview/img22.png" align="right"/>



         <br/><br/><br/><br/><br/><br/><br/><br/><br/><hr/>
          <div class="sect1" lang="en">
            <div class="titlepage">
              <div>
                <div>
                  <h2 class="title" style="clear: both;"><a name=
                  "id282379" id="id282379"></a>Introduction</h2>
                </div>
              </div>
            </div>

            <p>The OMNeT++ 4.0 Integrated Development Environment is
            based on the Eclipse platform, and extends it with new
            editors, views, wizards and other functionality. OMNeT++ adds
            functionality for creating and configuring models (NED and
            ini files), performing batch executions and analyzing the
            simulation results, while Eclipse provides C++ editing,
            CVS/SVN/GIT integration and optionally other features (UML
            modeling, bugtracker integration, database access, etc) via
            various open-source and commercial plug-ins.</p>

            <p>The following screenshots introduce the main components of
            the OMNeT++ IDE.</p>

            <div class="figure">
              <a name="pictures/img1.png"></a>

              <p class="title"><b>Figure&nbsp;1.&nbsp;The OMNeT++ 4.0
              IDE, editing a NED file</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img1.png" alt=
                  "The OMNeT++ 4.0 IDE, editing a NED file" align=
                  "middle"></div>
                </div>
              </div>
            </div><br class="figure-break">
          </div>

          <div class="sect1" lang="en">
            <div class="titlepage">
              <div>
                <div>
                  <h2 class="title" style="clear: both;"><a name=
                  "id308924" id="id308924"></a>The NED Editor</h2>
                </div>
              </div>
            </div>

            <p>The NED Editor can edit NED files both graphically or in
            text mode, and the user can switch between the two modes at
            any time, using the tabs at the bottom of the editor
            window.</p>

            <div class="figure">
              <a name="pictures/img2.png"></a>

              <p class="title"><b>Figure&nbsp;2.&nbsp; The NED Editor in
              graphical editing mode</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img2.png" alt=
                  "The NED Editor in graphical editing mode" align=
                  "middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>In graphical mode, one can create compound modules,
            channels, and other component types. Submodules can be
            created using the palette of available module types. Visual
            and non-visual properties can be modified in the Properties
            View, or by dialogs invoked from the context menu. The editor
            offers unlimited undo/redo, object cloning, constrained move
            and resize, aligning objects, zooming, and many other
            possibilities.</p>

            <p>Submodules can be pinned (having a fixed position), or
            unpinned (autolayouted). Graphical features that can be
            edited include background image, background grid, default
            icons (via display string inheritance), icon sizing and
            coloring, transmission range, and many others.</p>

            <div class="figure">
              <a name="pictures/img3.png"></a>

              <p class="title"><b>Figure&nbsp;3.&nbsp;Properties
              view</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img3.png" alt="Properties view"
                  align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>The Properties View lets the user edit graphical and
            non-graphical properties of objects. Special cell editors
            facilitate selecting colors, icons, etc. Undo and redo is
            supported for property changes too. The Properties View is
            also used with other editors like Result Analysis, where the
            user can customize charts and other objects with it.</p>

            <div class="figure">
              <a name="pictures/img4.png"></a>

              <p class="title"><b>Figure&nbsp;4.&nbsp;The NED Editor in
              source editing mode</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img4.png" alt=
                  "The NED Editor in source editing mode" align=
                  "middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>Text mode lets the user work with the NED source directly.
            When hitting Ctrl+Space, the editor offers context-aware
            completion of keywords, module type names, parameter, gate
            and submodule names. Template proposals to insert full
            compound module skeletons, submodules, various connection
            structures etc. are also available. Documentation of
            referenced module types can be viewed by hovering over the
            NED type name. The NED source is continually parsed and
            validated as the user is typing, and errors are displayed at
            real time on the left margin. Syntax highlighting, automatic
            indentation, and automatic conversion from the OMNeT++ 3.x
            NED syntax are also provided.</p>

            <div class="figure">
              <a name="pictures/img5.png"></a>

              <p class="title"><b>Figure&nbsp;5.&nbsp;Outline
              View</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img5.png" alt="Outline View" align=
                  "middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>The Outline View shows the structure of NED files in both
            graphical and text editing mode, and allows navigation as
            well.</p>

            <p><span class="emphasis"><em>Other Views.</em></span> The
            Module Hierarchy View and the NED Parameters View can also be
            used with the NED Editor (they will display the submodule
            hierarchy and the parameters of the selected module or
            submodule) &ndash; these views will be described with the Ini
            File Editor. Further related views are the Problems View
            (which displays errors and warnings in NED files and other
            files), and Tasks View (which shows a list of all FIXME and
            TODO comments found in NED files and other source files.)</p>
          </div>

          <div class="sect1" lang="en">
            <div class="titlepage">
              <div>
                <div>
                  <h2 class="title" style="clear: both;"><a name=
                  "id281741" id="id281741"></a>The Ini File Editor</h2>
                </div>
              </div>
            </div>

            <p>The Ini File Editor lets the user configure simulation
            models for execution. It features both form-based and source
            editing.</p>

            <div class="figure">
              <a name="pictures/img6.png"></a>

              <p class="title"><b>Figure&nbsp;6.&nbsp;Form-based ini file
              editing</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img6.png" alt=
                  "Form-based ini file editing" align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>The Ini File editor knows about all supported
            configuration options and offers them on several forms,
            organized by topics. Descriptions and default values are
            displayed in tooltips, which can be made persistent for
            easier reading. The structure of the ini file (sections and
            their inheritance tree) is also visualized and editable via
            drag&amp;drop and dialogs. Validation and content assist
            (Ctrl+Space) are also provided where &nbsp;needed. The editor
            supports unlimited undo/redo, and automatic conversion from
            OMNeT++ 3.x ini files.</p>

            <div class="figure">
              <a name="pictures/img7.png"></a>

              <p class="title"><b>Figure&nbsp;7.&nbsp;The ini file source
              editor</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img7.png" alt=
                  "The ini file source editor" align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>The text editor lets the user work with the ini file
            directly, which will be more efficient for advanced users
            than forms. Unlimited undo/redo, syntax coloring, completion
            of configuration keys, values and module parameter patterns
            (on Ctrl+Space) are provided. As the user types, the file is
            continually being analyzed, and errors/warnings are displayed
            at real time.</p>

            <p>The editor knows about all NED declarations (simple
            modules, compound modules, channels, etc), and can fully
            exploit this information for providing diagnostics and
            assistance to the user. &nbsp;Looking at the <span class=
            "emphasis"><em>network=</em></span> configuration key, it
            knows the top-level compound module NED type, and internally
            builds a static picture of the network by recursively
            enumerating the top-level module's submodules,
            sub-submodules, sub-sub-submodules, etc &ndash; and
            continually relates this information to the ini file
            contents. Thus the editor always knows which ini file keys
            match which module parameters, which are the ini file keys
            that are unused (won't match anything), and which module
            parameters are still open (i.e. have no value assigned yet),
            and displays this information in tooltips, as warnings, and
            in various views.</p>

            <div class="figure">
              <a name="pictures/img8.png"></a>

              <p class="title"><b>Figure&nbsp;8.&nbsp;The Add Missing
              Keys dialog</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img8.png" alt=
                  "The Add Missing Keys dialog" align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>To speed up the process of creating ini files from
            scratch, the editor offers an <span class="emphasis"><em>Add
            Missing Keys</em></span> dialog. On clicking OK, the editor
            will insert ini file keys for all open NED parameters, and
            the user only needs to supply the values.</p>

            <div class="figure">
              <a name="pictures/img9.png"></a>

              <p class="title"><b>Figure&nbsp;9.&nbsp;Module Hierarchy
              View</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img9.png" alt=
                  "Module Hierarchy View" align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>The Module Hierarchy View displays the submodule hierarchy
            of the network of the current configuration, together with
            the module's parameters. It shows how module parameters
            obtain their values (from NED, by applying a NED default
            value, or the from ini file). It is able to resolve simple
            cases where a submodule type comes from a string parameter
            (NED's <span class="emphasis"><em>like</em></span> keyword).
            By using the context menu, the user can go to the NED
            declaration of a module, submodule, parameter, gate, or to
            the place where a parameter gets its value (in NED or in the
            ini file).</p>

            <p>The View can be pinned to a particular editor, to prevent
            its contents from changing when the user switches across NED
            and ini file editors.</p>

            <div class="figure">
              <a name="pictures/img10.png"></a>

              <p class="title"><b>Figure&nbsp;10.&nbsp;The NED Parameters
              View</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img10.png" alt=
                  "The NED Parameters View" align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>By default, the NED Parameters View displays the table of
            all unassigned NED parameters in the network of the current
            configuration, and it can be switched over to show all
            parameters, assigned or unassigned. For assigned parameters,
            it shows how they obtain their values (from NED, by applying
            a NED default value, or the from ini file), and the user can
            open the relevant places in the NED files or the ini file.
            This View can also be pinned.</p>

            <div class="figure">
              <a name="pictures/img11.png"></a>

              <p class="title"><b>Figure&nbsp;11.&nbsp;The Problems
              View</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img11.png" alt="The Problems View"
                  align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>The Problems View presents errors, warnings and info
            messages in NED files, ini files and other source files in a
            unified manner. Double-clicking on an item opens the
            corresponding file and goes the error's location. The view's
            contents can be filtered in various ways (current file,
            current project, all projects, by severity, etc).</p>

            <p><span class="emphasis"><em>Other Views.</em></span> The
            Outline View displays the list of sections in the current ini
            file, and can be used for navigation as well.</p>
          </div>

          <div class="sect1" lang="en">
            <div class="titlepage">
              <div>
                <div>
                  <h2 class="title" style="clear: both;"><a name=
                  "id281512" id="id281512"></a>Simulation Launcher</h2>
                </div>
              </div>
            </div>

            <p>The OMNeT++ IDE makes it possible to run simulations
            directly from the integrated environment. It is possible to
            run a simulation as a normal C/C++ application and perform
            C++ source-level debugging on it; to run it as a standalone
            application (under Tkenv or Cmdenv); or to run batches of
            simulations where runs differ in module parameter settings or
            random number seeds. (NOTE: an Eclipse-based runtime
            environment [&ldquo;IDEEnv&rdquo;] does not exist yet, it is
            planned for future releases.)</p>

            <div class="figure">
              <a name="pictures/img12.png"></a>

              <p class="title"><b>Figure&nbsp;12.&nbsp;The Run dialog
              showing a simulation launch configuration</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img12.png" alt=
                  "The Run dialog showing a simulation launch configuration"
                  align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>In the Eclipse IDE, the various ways of launching a
            program being developed is described by launch
            configurations. There are various launch configuration types
            (C/C++ Application, Java Application, etc). To launch a
            program for the first time, the user creates an instance of a
            launch configuration, fills in a form (program name,
            command-line arguments, etc.), and hits the Run button.
            OMNeT++ provides launch configuration types for simulations:
            one extends the normal &ldquo;C/C++ Local Application&rdquo;
            launch type with a <span class=
            "emphasis"><em>Simulation</em></span> tab (for convenient
            editing of simulation-related command-line options), and a
            standalone launch type for launching a simulation or running
            simulation batches. The former can be used for C++ debugging
            as well.</p>

            <p>The dialog shows a standalone launch type for the QueueNet
            example simulation model. Batch simulations can be launched
            by specifying more than one run number in the dialog. Ini
            files (enhanced in the 4.0 release) allow the user define
            various scenarios that iterate over a list of values for
            certain NED parameters, and/or do multiple runs with
            different seeds; the launch dialog helps the user select the
            desired run numbers by showing which runs correspond to which
            parameter and seed settings.</p>

            <p>Multi-processor or multi-core computers can be exploited
            by specifying that more than one process may be launched
            (i.e. may be running) at a time.</p>

            <div class="figure">
              <a name="pictures/img13.png"></a>

              <p class="title"><b>Figure&nbsp;13.&nbsp;Progress
              View</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img13.png" alt="Progress View"
                  align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>The Progress View reports the status of simulation
            execution when you have a long-running simulation, or you are
            executing several runs in a batch. It is possible to cancel
            the whole batch operation with a single click if it is
            necessary. Simulation runs are running in different processes
            that do not block the IDE, so the user can keep working while
            her simulations are running in the background. In the above
            screenshot, the number of processes to run in parallel was
            set to 2; run #1 has already terminated (and is no longer
            shown), and run #3 already got launched while run #2 is still
            running.</p>

            <div class="figure">
              <a name="pictures/img14.png"></a>

              <p class="title"><b>Figure&nbsp;14.&nbsp;Console
              View</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img14.png" alt="Console View"
                  align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>Each running process sends its output to a separate
            console buffer within the Console View, so the user can
            review the output after the simulation(s) have finished. One
            can switch between console buffers using the Console View's
            menu or toolbar, or by double-clicking on a process in the
            Debug View.</p>

            <div class="figure">
              <a name="pictures/img15.png"></a>

              <p class="title"><b>Figure&nbsp;15.&nbsp;The Debug View
              showing three runs in a simulation batch.</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img15.png" alt=
                  "The Debug View showing three runs in a simulation batch."
                  align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>The Debug View is another one of Eclipse's standard Views,
            but it is not only useful for debugging. While the Progress
            View only shows currently executing processes, the Debug View
            displays the ones already terminated as well, together with
            their exit codes. Processes are marked with the run number
            and launch time for easier identification. Double-clicking an
            item reveals the process' output in the Console View.</p>
          </div>

          <div class="sect1" lang="en">
            <div class="titlepage">
              <div>
                <div>
                  <h2 class="title" style="clear: both;"><a name=
                  "id327218" id="id327218"></a>Sequence Chart</h2>
                </div>
              </div>
            </div>

            <p>The OMNeT++ 4.0 simulation kernel is capable of logging
            various events during simulation: scheduling and canceling
            self-messages, sending messages, display changes, module and
            connection creation and deletion, user log messages, etc. The
            result is an event log file which contains detailed
            information of the simulation, and later can be used for
            various purposes, such as visualizing message exchange among
            modules on a sequence chart. The file format is line-based
            text to facilitate processing by third party tools.</p>

            <div class="figure">
              <a name="pictures/img16.png"></a>

              <p class="title"><b>Figure&nbsp;16.&nbsp;A Sequence Chart
              showing ARP on a wireless network</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img16.png" alt=
                  "A Sequence Chart showing ARP on a wireless network"
                  align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>An event log can be visualized with the Sequence Chart in
            the IDE. On the Sequence Chart, events are represented with
            nodes, and message send/schedule/reuse operations with
            arrows. The chart can be filtered by modules, message types,
            and various other criteria. The chart can also be filtered to
            the causes/consequences of a particular event (this works by
            following message arrows backward and forward in simulation
            time). The chart timeline can be displayed in various modes,
            such as linear (simulation time), compact (non-linear), and
            event number-based. Sorting of module axes, displaying state
            vector data on axes (using output vector files), zooming, and
            special navigation options (bookmarks, zoom to message send,
            follow message send), and exporting the chart in SVG
            format.</p>

            <p>Both the Event Log Table and the Sequence Chart are
            capable of efficiently displaying event log files of several
            gigabytes without requiring large amounts of memory.</p>

            <div class="figure">
              <a name="pictures/img17.png"></a>

              <p class="title"><b>Figure&nbsp;17.&nbsp;The Event Log
              View</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img17.png" alt="The Event Log View"
                  align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>The Event Log Table displays the content of an event log
            file recorded during a simulation. It supports raw and
            descriptive notations, line based filtering for event log
            entry types and various parameters, search for free text,
            bookmarks and special navigation options such as go to
            simulation time or message arrival. The Event Log Table
            supports the same filtering as the Sequence Chart.</p>
          </div>

          <div class="sect1" lang="en">
            <div class="titlepage">
              <div>
                <div>
                  <h2 class="title" style="clear: both;"><a name=
                  "id327296" id="id327296"></a>Scave (Result
                  Analysis)</h2>
                </div>
              </div>
            </div>

            <p>Scave is the result analysis tool of OMNeT++, and its task
            is to help the user process and visualize simulation results
            saved into vector and scalar files. Scave is designed so that
            the user can work equally well on the output of a single
            simulation run (one or two files) and the result of
            simulation batches (which may be several hundred files,
            possibly in multiple directories). Ad-hoc browsing of the
            data is supported just as well as systematic and repeatable
            processing. The latter means that all processing and charts
            are stored as &ldquo;recipes&rdquo;; for example, if
            simulations need to be re-run due to a model bug or
            misconfiguration, existing charts need not be drawn all over
            again, but simply replacing the old result files with the new
            ones will result in the charts being automatically displayed
            with the new data.</p>

            <p>Scave is implemented as a multi-page editor. What the
            editor edits is the &ldquo;recipe&rdquo;: what result files
            to take as inputs, what data to select from them, what
            (optional) processing to apply, and what kind of charts to
            create from them. The pages (tabs) of the editor roughly
            correspond to these steps. You will see that Scave is much
            more than just a union of the OMNeT++ 3.x Scalars and Plove
            tools.</p>

            <div class="figure">
              <a name="pictures/img18.png"></a>

              <p class="title"><b>Figure&nbsp;18.&nbsp;Specifying input
              files for data analysis</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img18.png" alt=
                  "Specifying input files for data analysis" align=
                  "middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>The first page displays the result files that serve as
            input to the analysis. The upper half specifies what files to
            select, by explicit filenames or by wildcards. The lower half
            shows what files actually matched the input specification,
            and what runs they contain. Note that OMNeT++ 4.0 result
            files contain a unique run ID and several metadata
            annotations in addition to the actual recorded data.
            &nbsp;The third tree organizes simulation runs according to
            their experiment&mdash;measurement&mdash;replication
            labels.</p>

            <p>The underlying assumption is that users will organize
            their simulation-based research into various
            &ldquo;experiments&rdquo;. An experiment will consist of
            several &ldquo;measurements&rdquo;, which are typically (but
            not necessarily) simulations done with the same model but
            with different parameter settings; that is, the user will
            explore the parameter space with several simulation runs.
            And, to gain statistical confidence in the results, each
            measurement will be possibly repeated several times, with
            different random number seeds. It is easy to set up such
            scenarios with the improved ini files of OMNeT++ 4.0, and
            then the experiment-measurement-replication labels will be
            assigned more-or-less automatically &ndash; please refer to
            the Inifile document (&ldquo;Configuring Simulations in
            OMNeT++ 4.0&rdquo;) for more discussion.</p>

            <div class="figure">
              <a name="pictures/img19.png"></a>

              <p class="title"><b>Figure&nbsp;19.&nbsp;Browsing vector
              and scalar data generated by the simulation</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img19.png" alt=
                  "Browsing vector and scalar data generated by the simulation"
                  align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>The second page displays results (vectors, scalars and
            histograms) from all files in tables, and lets the user
            browse them. &nbsp;Results can be sorted and filtered. Simple
            filtering is possible with combo boxes, or when that's not
            enough, the user can write arbitrarily complex filters using
            a generic pattern matching expression language. Selected or
            filtered data can be immediately plotted, or remembered in
            named datasets <span class="emphasis"><em>for further
            processing</em></span>.</p>

            <div class="figure">
              <a name="pictures/img20.png"></a>

              <p class="title"><b>Figure&nbsp;20.&nbsp;Defining datasets
              to be analyzed</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img20.png" alt=
                  "Defining datasets to be analyzed" align=
                  "middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>It is possible to define reusable datasets, that are
            basically recipes how to select and process data received
            from the simulation. You can add selection and data
            processing nodes to a dataset. Chart drawing is possible at
            any point in the processing tree.</p>

            <div class="figure">
              <a name="pictures/img21.png"></a>

              <p class="title"><b>Figure&nbsp;21.&nbsp;A Line
              Chart</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img21.png" alt="A Line Chart"
                  align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>Line charts are typically drawn from time-series data
            stored in vector files. Pre-processing of the data is
            possible in the dataset. The line chart component can be
            configured freely to display the vector data according to
            your needs.</p>

            <div class="figure">
              <a name="pictures/img22.png"></a>

              <p class="title"><b>Figure&nbsp;22.&nbsp;A Bar
              Chart</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img22.png" alt="A Bar Chart" align=
                  "middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>Bar charts are created from scalar results and histograms.
            Relevant data can be grouped and displayed via the Bar chart
            component. Colors, chart type and other display attributes
            can be set on the component.</p>

            <div class="figure">
              <a name="pictures/img23.png"></a>

              <p class="title"><b>Figure&nbsp;23.&nbsp;Output Vector
              View</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img23.png" alt="Output Vector View"
                  align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>The Output Vector view can be used to inspect the raw
            numerical data in case you really need it. It can show the
            original data read from the vector file, or the result of a
            computation. Just select a point on the line chart or a
            vector in the Dataset View and its content is displayed.</p>

            <div class="figure">
              <a name="pictures/img24.png"></a>

              <p class="title"><b>Figure&nbsp;24.&nbsp;Dataset
              View</b></p>

              <div class="figure-contents">
                <div class="screenshot">
                  <div class="mediaobject" align="center"><img src=
                  "overview/img24.png" alt="Dataset View"
                  align="middle"></div>
                </div>
              </div>
            </div><br class="figure-break">

            <p>Dataset view is used to show the result items contained by
            the dataset. The content of the view corresponds to the state
            of the dataset after the selected processing is
            performed.</p>
          </div>

	</div>
	<!-- End Content -->



	<!-- Start Right -->
	<?php include("common/right_inc.php"); ?>
	<!-- End Right -->


	</div>

</div>
<!-- End Container -->




<?php include("common/footer_inc.php"); ?>



</body>
</html>
