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

  <form method="POST" action="<?php echo url('submit_accept') ?>" id="search_form">
      <h1>I want to count down from:</h1> <input id="start_date" type="date" name="start_date" class="form-control"><br>
      <h1>I want to count down to:</h1>  <input id="end_date" type="date" name="end_date" class="form-control">
      <br><br><input type="submit" value="Submit" class="btn btn-default"><br><br>
  </form>




</body>
</html>
