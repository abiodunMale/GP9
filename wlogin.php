<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		.unknown{
			margin-left: 150px;
		}
		h5{
			color: red;
			text-align: center;
		}
		h3{
			text-align: center;
		}
	</style>
</head>
<body style="background-color:">

	<div class="container">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<div class="jumbotron" style="margin-top: 150px; background-color: ">
				
				<h3>Student Login</h3><p>
				<h5>Wrong Username Or Password</h5>
				<form action="slogin.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" required="required" placeholder="Enter student.Id" name="user">

					</div>
					<div class="form-group">
						<input type="password" required="required" class="form-control" placeholder="Password" name="pass">

					</div>

					<button type="submit" name="submit" class="btn btn-primary form-control">Login</button>
				</form>

			</div>
			<a class="unknown" href="index">Home</a>
	</div>
		<div class="col-lg-4"></div>
	</div>	

</body>
</html>