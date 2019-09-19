<!DOCTYPE html>
<html lang="en">

<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	 
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<script src="jquery.js"></script>
	<script src="script.js"></script>
	<style>
		h2.k{
                    text-transform:capitalize;
                }
				#chat{
        height:360px;
        width:200px;
        /* border:1px solid; */
        margin:-4px -4px;
		background-color: rgba(0,0,0,0.3);
		color:white;
		padding:45px;
        overflow:auto;
    }
	input{
            margin-left: 67px;
            border-radius: 3px;
            height: 40px;
            width:400px;
		}
		#my-input{
            margin-left: 67px;
            border-radius: 3px;
            width:400px;

		}			
				
	</style>
</head>
<body id="swapp">
<?php
session_start();
include('newcon.php');

    if(isset($_SESSION['user_id'])){
        $id=$_SESSION['user_id'];
        $query="SELECT * FROM `student_table` where `std_roll_no`='$id' ";
        $data=$con->query($query);
        $row=$data->fetch_array();
                                    if ($row) {
                                        ?>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.php">
			  <h2 class="k">	<?php echo $row['student_name']; ?></h2>
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<li class="active"><a href="#">
							<i class="icon-envelope"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-eye-open"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-bar-chart"></i>
						</a></li>
					</ul>

					<form class="navbar-search pull-left input-append" action="#">
						<input type="text" class="span3">
						<button class="btn" type="button">
							<i class="icon-search"></i>
						</button>
					</form>
				
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Item No. 1</a></li>
								
								<li><a href="#">Don't Click</a></li>
								<li class="divider"></li>
								<li class="nav-header">Example Header</li>
								<li><a href="#">A Separated link</a></li>
															</ul>
						</li>
						
						<li><a href="#">
							Support
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="upload/<?php echo $row['image'];
                                    }?>" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Your Profile</a></li>
								<li><a href="#">Edit Profile</a></li>
								<li><a href="#">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="../register/logout.php">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->

	

	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="index.php">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard
								</a>
							</li>
							
							<li>
								<a href="message.php">
									<i class="menu-icon icon-inbox"></i>
									Inbox
									<!-- <b class="label green pull-right">11</b> -->
								</a>
							</li>
							
							<li>
								<a href="task.php">
									<i class="menu-icon icon-tasks"></i>
									Tasks
									<!-- <b class="label orange pull-right">19</b> -->
								</a>
							</li>
						</ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
                                <!-- <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li> -->
                                <li><a href="ui-typography.php"><i class="menu-icon icon-book"></i>Applications </a></li>
                                <li><a href="form.php"><i class="menu-icon icon-paste"></i>MailForms </a></li>
                                
                                
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									More Pages
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="other-login.php">
											<i class="icon-inbox"></i>
											Login
										</a>
									</li>
									<li>
										<a href="other-user-profile.html">
											<i class="icon-inbox"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="other-user-listing.html">
											<i class="icon-inbox"></i>
											All Users
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="../register/logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="btn-controls">
							<div class="btn-box-row row-fluid" id="her"></div>

							<div class="btn-box-row row-fluid"></div>

							<!-- <div class="btn-box-row row-fluid"> -->
									
								
								
							<!-- </div> -->
						</div><!--/.btn-controls-->


						<div class="module " id="zain" style="background-color:rgb(42, 81, 165);" >
							<!-- <div class="module-head"  id="chat">
								<h3></h3> 
								
											
							</div>
							<div class="module-body" style="position:absolute;margin-bottom:14px; bottom:203px;right:180px" >
								<p id="res" style="padding-left:14px;"></p> -->
							</div>
									<!-- <form id="filem">
													<input type="hidden" id="user" value="<?php echo $row['student_name']?>">
													<br>
													<input type="hidden" id="id" value="<?php echo $id?>" >
													<br>
													<input type="button" style="width:86px; margin-right:px" id="send" value="send">
													</form> -->
									</div>

						
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>
	<?php
    }
                                     else{
                                         header("location:other-login.php");
                                        //  echo "Sorry";
                                     }
                                     ?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


</body>