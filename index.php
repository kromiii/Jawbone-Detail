<!DOCTYPE html>
<html>
    <head>
	<title>Jawbone detail</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
	<div class="container">
	    <div class="jumbotron text-center">
		<h1>Jawbone Detail</h1>
		<p>The Most Detailed Jawbone Data Extractor</p>
		<form action="sendRequest.php">
		    <button type="submit" class="btn btn-default">Login by your jawbone account</button>
		</form>
	    </div>
	    <img src="output.png" class="img-rounded">
	    <img src="input.png" class="img-rounded">
	    <h2>Why you need this app?</h2>
	    <p>
		Although the official jawbone app, "UP by Jawbone" is very useful, you may want to see more detailed data your jawbone collected.<br>
		"Jawbone Detail" enebles you to extract the most detailed data using jawbone web api.<br>
		As shown below, this app count your activity data by minites.<br>
		This app suits for these people.
	    </p>
	    <dl>
		<dt>Scientist</dt>
		<dd>- A person who want to use jawbone for academic research.</dd>
		<dt>Health enthusiast</dt>
		<dd>- A person who is very dedicated athelete.</dd>
	    </dl>
	    <p>Good luck!</p>
	</div>
    </body>
</html>
