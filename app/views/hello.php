<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>It's the final countdown!</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<h1>Today is <?php echo $today_date->toFormattedDateString(); ?>.</h1>

<h1>You began your countdown on <?php echo $start_date->toFormattedDateString(); ?>.</h1>

<h1>It has been <?php echo $start_date->diffInDays($today_date) ?> days since then.</h1>

<h1>You are counting down to <?php echo $end_date->toFormattedDateString(); ?>.</h1>

<h1>It is <?php echo $end_date->diffInDays($today_date) ?> days until then.</h1>

</body>
</html>
