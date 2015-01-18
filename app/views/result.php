<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>It's the final countdown!</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>


<h1>Today is <?php echo $today_date->toFormattedDateString(); ?>.</h1>

<h1>You have to wait a total of <?php echo $totes_wait ?> days for me.</h1>

<h1>You began your countdown on <?php echo $start_date->toFormattedDateString(); ?>.</h1>

<h1>It has been <?php echo $since_then ?> days since then.</h1>

<h1>You are counting down to <?php echo $end_date->toFormattedDateString(); ?>.</h1>

<h1>You still have <?php echo $until_then ?> days to go.</h1>

<br>
<br>


<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $percentage_done ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentage_done ?>%;">
  <?php echo number_format((float)$percentage_done, 2, '.', ''); ?>% there!
  </div>
</div>


</body>
</html>
