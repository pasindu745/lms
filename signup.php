<html>
<head>
	<title>Signup</title>
	<?php include 'includes/head.php'; ?><!--css files-->
</head>


<body>

	<?php include 'includes/navbar.php'; ?><!--navbarphp-->

	<div class="container">
		<div class="row">
			<H3 align ="center">--Sign Up--</H3>
			<div class="col-md-10">

				<form action="" method="POST" class="form-horizontal" role="form">

					<div class="form-group">
						<label for="fname" class="col-sm-2 control-label">Full name:</label>
   				 		<div class="col-sm-10">
      					<input type="text" class="form-control" id="fname" placeholder="Full name" name="fname">
    					</div>
					</div>

					<div class="form-group">
						<label for="uname" class="col-sm-2 control-label">User name:</label>
   				 		<div class="col-sm-10">
      					<input type="text" class="form-control" id="uname" placeholder="Username" name="uname">
    					</div>
					</div>

					<div class="form-group">
						<label for="index" class="col-sm-2 control-label">Index number:</label>
   				 		<div class="col-sm-10">
      					<input type="text" class="form-control" id="index" placeholder="Index number" name="id">
    					</div>
					</div>

					<div class="form-group">
						<label for="mail" class="col-sm-2 control-label">E mail:</label>
   				 		<div class="col-sm-10">
      					<input type="email" class="form-control" id="mail" placeholder="E mail" name="email">
    					</div>
					</div>

					 <div class="form-group">
					      <label class="control-label col-sm-2" for="school">School:</label>
					      <div class="col-sm-10">
					      <select class="form-control" id="school" name="school" required>
					      <option disabled selected> Choose the School </option>
					      <option>Computing</option>
					      <option>Management</option>
					      <option>Engineering</option>
					      </select>
					      </div>
				    </div>

				    <div class="form-group">
						<label for="pass" class="col-sm-2 control-label">Password:</label>
   				 		<div class="col-sm-10">
      					<input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
    					</div>
					</div>

					<div class="form-group">
						<label for="cpass" class="col-sm-2 control-label">Confirm Password:</label>
   				 		<div class="col-sm-10">
      					<input type="password" class="form-control" id="cpass" placeholder="Confirm password" name="conpass">
    					</div>
					</div>
					

					<div class="form-group">
          				<div class="col-sm-offset-2 col-sm-10">
           				<button type="submit" class="btn btn-default">Sign Up</button><br><br>
         			   </div>
        			</div>

				</form>
			</div>
		</div>


	</div>



<?php include 'includes/footer.php';?>

<script src="js/jquery-1.11.3.min.js"></script><!--Javascript file-->
<script src="js/bootstrap.min.js"></script>
</body>
</html>