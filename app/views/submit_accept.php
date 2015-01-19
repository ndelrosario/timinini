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

<h1>Hey there. We gots it. :)</h1>

<h1>You want to begin counting down from <?php echo $start_date ?> and you want to count down to <?php echo $end_date ?>.</h1>
<h1>That's <?php echo $until_then ?> more days to go.</h1>

<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $percentage_done ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentage_done ?>%;">
  <?php echo number_format((float)$percentage_done, 2, '.', ''); ?>% there!
  </div>
</div>


</body>
</html>
