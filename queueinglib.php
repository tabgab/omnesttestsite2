<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>OMNEST - The Open Simulator</title>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST Discrete Event Network Simulator" />
	<meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework"  />
	<link rel="stylesheet" type="text/css" href="common/omnest.css">

</head>

<body>

<!-- Start Container -->
<div id="container">

<?php include("common/top_inc.php"); ?>

	<?php minimenu(array('overview', 'performance-modeling')); ?>
	</div>
	<!-- End Main Menu -->



	<div style="clear: both;">

	<!-- Start Content -->
	<div id="content">

<div id="header"><h1>Process Modeling Library</h1></div>

<p><strong>OMNEST comes with a basic process modeling library, which
supports queueing and resource reservation.</strong>
The library allows you to build your initial performance model quickly,
and experiment with it to get an initial idea about your system's performance.
This performance model can then serve as a starting point for the development
of more detailed, more accurate, more specialized simulation models.
</p>

<p>
All library blocks expose statistics in the form of simulation signals,
which can be recorded as time series data (timestamp - value pairs) or
as summaries (mean, sum, maximum value, histogram, etc.) Statistics collection
can be controlled on a fine-grained level.
</p>

<p>
The library contains blocks (modules) like these:
</p>

<?php
function iconWithLabel($icon, $name) {
  echo "<div style='display: inline-table;text-align:center'><img src='images/queueing/$icon.png' border='0' alt=''/><br>$name</div>";
}
?>

<center>
<table style="border:collapse" width="90%" cellpadding="6">
    <tr>
        <td style="border-bottom: #000000 dashed 1px" width="30%">
            <?php iconWithLabel("source", "Source,"); ?>
            <?php iconWithLabel("sink", "Sink"); ?>
        </td>
        <td style="border-bottom: #000000 dashed 1px">
            A Source block generates jobs for the queueing network. Generation
            can be one-off or periodic, where the generation interval is parametric.
            A Source block can be used to model constant-rate arrivals,
            Poisson arrivals, or arrivals with an inter-arrival time of some
            other distribution.
            <br><br>
            Sink represents places where jobs leave the system, and also collects
            statistics.
        </td>
    </tr>

    <tr>
        <td style="border-bottom: #000000 dashed 1px">
            <?php iconWithLabel("delay", "Delay"); ?>
        </td>
        <td style="border-bottom: #000000 dashed 1px">
            A Delay block delays the job for an interval, which can be
            constant or given with a probability distribution. Delay
            can be thought of as a queue with an infinite number of
            servers.
        </td>
    </tr>

    <tr>
        <td style="border-bottom: #000000 dashed 1px">
            <?php iconWithLabel("queue", "Queue"); ?>
        </td>
        <td style="border-bottom: #000000 dashed 1px">
            A Queue block represents a queue with a built-in server.
            The queue discipline can be FIFO or LIFO, and the queue
            can be infinite or bounded. The service time can be constant,
            or random according to a user-specified probability distribution.
        </td>
    </tr>

    <tr>
        <td style="border-bottom: #000000 dashed 1px">
            <?php iconWithLabel("passiveq", "Passive-<br>Queue,"); ?>
            <?php iconWithLabel("server", "Server"); ?>
        </td>
        <td style="border-bottom: #000000 dashed 1px">
            PassiveQueue and Server represent a detached queue and queue server.
            They support one-to-many, many-to-one and many-to-many configurations:
            one server may serve more than one queues, and one queue may be
            served by more than one servers. Several conflict resolution disciplines
            are available for both queues and servers, random, round-robin and
            priority-based among others.
        </td>
    </tr>

    <tr>
        <td style="border-bottom: #000000 dashed 1px">
            <?php iconWithLabel("fork", "Fork,"); ?>
            <?php iconWithLabel("join", "Join,"); ?>
            <?php iconWithLabel("table2", "JobList"); ?>
        </td>
        <td style="border-bottom: #000000 dashed 1px">
            The Fork and Join blocks can be used to model splitting a job to
            sub-jobs. For each incoming job, Fork creates N sub-jobs which
            are sent out on different outputs. These sub-jobs may be processed
            individually (in Queue blocks, etc.), and should end up in the same Join
            block. After all sub-jobs have arrived in the Join block, it sends out
            the original job and discards the sub-jobs. The JobList block presents
            a view of all jobs and sub-jobs in the system. Fork-Join blocks may be
            nested, i.e. a sub-job may be split further by subsequent Fork blocks.
        </td>
    </tr>

    <tr>
        <td style="border-bottom: #000000 dashed 1px">
            <?php iconWithLabel("queue", "Resource-<br>Based-<br>Queue,"); ?>
            <?php iconWithLabel("buffer", "Resource-<br>Pool"); ?>
        </td>
        <td style="border-bottom: #000000 dashed 1px">
            A ResourceBasedQueue is a queue with a built-in server that needs to
            acquire an external resource from a ResourcePool for processing a job.
            When the server is done with the processing, it returns the resource
            to the ResourcePool. A ResourcePool holds a configurable amount of
            resources, and the amount of resources a queue server needs for processing
            a job is also configurable. ResourcePool implements priority-based
            conflict resolution.
        </td>
    </tr>

    <tr>
        <td style="border-bottom: #000000 dashed 1px">
            <?php iconWithLabel("arrival", "Allocate,"); ?>
            <?php iconWithLabel("departure", "Deallocate"); ?>
        </td>
        <td style="border-bottom: #000000 dashed 1px">
            Allocate and Deallocate can be used to acquire resources for
            a series of processing steps. Allocate acquires a given amount of
            resources from a ResourcePool for each job, and Deallocate
            returns them into the ResourcePool. Jobs that arrive at an
            Allocate block when there aren't sufficent resources available
            in the ResourcePool are queued.
        </td>
    </tr>

    <tr>
        <td style="border-bottom: #000000 dashed 1px">
            <?php iconWithLabel("routing", "Router,"); ?>
            <?php iconWithLabel("classifier", "Classifier"); ?>
        </td>
        <td style="border-bottom: #000000 dashed 1px">
            Router and Classifier can be used to route or classify jobs,
            based either on some algorithm (random, round-robin, etc.)
            or an attribute of the job (priority, type, etc.)
        </td>
    </tr>

    <tr>
        <td>
            <?php iconWithLabel("fork", "Clone,"); ?> ...
        </td>
        <td>
            Additional library blocks perform further tasks, like the Clone
            block that duplicates every incoming the job to each of its outputs.
        </td>
    </tr>
</table>
</center>

<br><br>

<p>
Naturally, not all models can be expressed with the above set of blocks, i.e.
the library is not Turing-complete. Turing-completeness comes from the fact
that all blocks are implemented in C++ with the source available for inspection
and modification, so you can build in the extra functionality you need using C++.
Moreover, the customized model will run with the same efficiency as the
original library blocks, because there are no interpreted code blocks to
slow down the simulation.
</p>

<!-- common footer for all "landing" pages -->
<hr style="color:red">
<br>

<img src="common/images/list_01.gif" alt="" border="0">
<a href="overview.php">Read more about the OMNEST simulation environment</a>
<br><br>

<img src="common/images/list_01.gif" alt="" border="0">
<a href="download-eval.php">Download the evaluation version!</a>

<br><br><br><br>

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
