<!DOCTYPE html>
<html>
    <head>
	<title>Jawbone detail</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!--Date picker -->
	<link rel="stylesheet" href="bootstrap-datepicker.css">
	<script src="bootstrap-datepicker.js"></script>
    </head>
    <body>
	<div class="container">
	    <div class="page-header">
		<h1>Jawbone Detail</h1>
	    </div>
	    <div class="alert alert-info">
		If you don't fill the dates, default value is set.<br>
		Start date: first day of previous month<br>
		End date: now
	    </div>
	    <div class="well">
		<form role="form" action="getmove.php" method="POST" class="form-inline">
		    <input type="hidden" name="access_token" value="<?=$_GET['access_token']?>">
		    <div class="form-group">
			<label for="start_date">Start date:</label>
			<input type="text" class="form-control datepicker" id="start_date" name="start_date">
		    </div>
		    <div class="form-group">
			<label for="end_date">End date:</label>
			<input type="text" class="form-control datepicker" id="end_date" name="end_date">
		    </div>
		    <button type="submit" class="btn btn-primary">Get moving data</button>
		</form>
	    </div>
	    <div class="well">
		<form role="form" action="getsleep.php" method="POST" class="form-inline">
		    <input type="hidden" name="access_token" value="<?=$_GET['access_token']?>">
		    <div class="form-group">
			<label for="start_date2">Start date:</label>
			<input type="text" class="form-control datepicker" id="start_date2" name="start_date">
		    </div>
		    <div class="form-group">
			<label for="end_date2">End date:</label>
			<input type="text" class="form-control datepicker" id="end_date2" name="end_date">
		    </div>
		    <button type="submit" class="btn btn-primary">Get sleeping data</button>
		</form>
	    </div>
	    <form role="form" action="disconnect.php">
		<input type="hidden" name="access_token" value="<?=$_GET['access_token']?>">
		<button type="submit" class="btn btn-danger">Disconnect</button>
	    </form>
	</div>
    </body>
</html>
<script>
 $(document).ready(function(){
     $('.datepicker').datepicker();
 });
</script>
