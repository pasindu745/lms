<html>
<head>
	<title>log in</title>
	<?php include 'includes/head.php'; ?><!--css files-->
</head>

<body>
	<?php include 'includes/navbar.php';?><!--navbarphp-->


	<h1 align="center">--Log In--</h1>

	<div class="container">

		<div class="row">
			<form action="" method="POST" class="form-horizontal" role="form" >

  				<div class="form-group">
   				 	<label for="Email" class="col-sm-2 control-label">Email</label>
   				 	<div class="col-sm-10">
      				<input type="email" class="form-control" id="Email" placeholder="Email">
    				</div>
  				</div>

  				<div class="form-group">
   					 <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    				<div class="col-sm-10">
      				<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    				</div>
  				</div>

  				<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
     				 <div class="checkbox">
        			<label>
          			<input type="checkbox"> Remember me
        			</label>
      				</div>
   				 	</div>
  				</div>

  				<div class="form-group">
    			   <div class="col-sm-offset-2 col-sm-10">
     			    <button type="submit" class="btn btn-default">Log in</button><br><br>
     			    <a href="#">Forgot password??</a><br>
    			   </div>
				  </div>

          <div class="form-group">
             <div class="col-sm-offset-2 col-sm-1">
             <a class="btn btn-default btn-block" href="signup.php">Signup</a>
             </div>
          </div>

        
        

			</form>

        
		</div>
  </div>
  <br> <br> <br> <br> <br>
   
<?php include 'includes/footer.php';?><!--this is footer-->


 
   

	
<script src="js/jquery-1.11.3.min.js"></script><!--Javascript file-->
<script src="js/bootstrap.min.js"></script>
</body>
</html>