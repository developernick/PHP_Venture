<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Fo Life Yo</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<script src="../public/scripts/script.js" charset="utf-8"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Belgrano|Raleway+Dots|Share+Tech+Mono' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../public/stylesheets/styles.css" media="screen" title="no title" charset="utf-8">
	</head>
	<body>
		<div class="container-liquid">
			<div class="container page-header">
				<div class="row title">
					<?php
					$txt1 = "This Was Made With PHP!";
					echo "<p> $txt1 </p>";
					?>
				</div>
			</div>
			<div class="container">
				<div class="col-lg-12">
					<div class="row">
						<?php
							echo "<h2>PHP is Fun!</h2>";
							echo "Hello world!<br>";
							echo "I'm about to learn PHP!<br>";
							echo "This ", "string ", "was ", "made ", "with multiple parameters.";
						?>
					</div>
					<div class="row">
						<button type="button" class=" btn btn-primary datebtn" name="button">Click Here</button><br>

							<div class="hidedate">
								<?php
									print "Today is " . date_default_timezone_set("UTC") . "<br>" . date("m/d/Y");
								?>
							</div>


						</div>
					</div>
				</div>
			</div>

		</div>
	</body>
</html>
