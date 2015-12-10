<html>
<head>
	<title>Contact us</title>
	<?php include 'includes/head.php'; ?><!--css files-->
</head>

<body>
	<?php include 'includes/navbar.php';?><!--navbarphp-->
	
	<div class="container">
		<div class="row">
			<H4 align="center">--Contact Us--</H4>
			<div class="col-md-10">
				
				<form action="" class="form-horizontal" method="POST" role="form">

					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name:</label>
   				 		<div class="col-sm-10">
      					<input type="name" class="form-control" id="name" placeholder="Name" name="name">
    					</div>
					</div>

					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email:</label>
   				 		<div class="col-sm-10">
      					<input type="email" class="form-control" id="email" placeholder="E mail" name="email">
    					</div>
					</div>

					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message:</label>
   				 		<div class="col-sm-10">
      					<textarea class="form-control" rows="10" name="message" placeholder="Message"></textarea>
    					</div>
					</div>

					<div class="form-group">
          				<div class="col-sm-offset-2 col-sm-10">
           				<button type="submit" class="btn btn-primary">Send</button><br><br>
         			   </div>
        			</div>

				</form>
			</div>
		</div>
	</div>


<br>
	<?php include 'includes/footer.php';?>

<script src="js/jquery-1.11.3.min.js"></script><!--Javascript file-->
<script src="js/bootstrap.min.js"></script>	
</body>
</html>