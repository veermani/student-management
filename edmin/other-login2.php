<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<style>
		.m{
			background-color:red;
			/* width:50px; */
			
			
		}
		
		
	</style>
</head>
<body>
<?php
  if(isset($_GET['error'])){

	echo $_GET['error'];
}
?>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

					<a class="brand" href="../index.html" style="font-weight: bold ;text-shadow: 2px 2px 3px grey;">
					<span style="color:red;">Sviet</span>Super60
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="../register/form2a.php">
							Sign Up
						</a></li>

						

						<li><a href="../register/forget.php">
							Forgot your password?
						</a></li>
						<li class="m"  ><a href="other-login.php" >
							Login as User
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" action="../register/login.php" method="POST">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text"  id="user" name="user" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" name="pass" id="pass" placeholder="Password" required>
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
									<label class="checkbox">
										<input type="checkbox" name="check" value="check"> Remember me
									</label>
								</div>
							</div>
						</div>
					</form>
					<?php
    if(isset($_COOKIE['user'])){
        $user=$_COOKIE['user'];
        if(isset($_COOKIE['pass'])){	
            $pass=$_COOKIE['pass'];
            
            ?>
        <script>
        document.getElementById('user').value='<?php echo $user ?>';
        document.getElementById('pass').value='<?php echo $pass ?>';
        </script>
        <?php
    }
    }
    ?>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2017 Super60 - SvietSuper60.com </b> All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>