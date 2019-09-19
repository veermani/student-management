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
	<script src="../jquery.js"></script>
	<!-- <script src="ajax.js"></script> -->
	<style>
		#ita,#onli,#wed,#hand,#fit,#green,#make,#tra,#gaan,#pet,#car,#jame{
			display:none;
		}
		h2.k{
                    text-transform:capitalize;
                }
	</style>
</head>
<body>
	<?php 
	session_start();
	include('newcon.php');
	if(isset($_SESSION['user_id'])){
		$u_id=$_SESSION['user_id'];
		$query="SELECT * FROM `student_table` where `std_roll_no`='$u_id' ";
        $data=$con->query($query);
        $row=$data->fetch_array();
                                    if($row){
										
?>


		
		
		
		
		
		
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.php">
			  		<h2 class="k"><?php echo $row['student_name'];?></h2>
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
								<img src="upload/<?php echo $row['image'];?>" class="nav-avatar" />
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
							
							<!-- <li>
								
								<a href="" class="disabled">
									<i class="menu-icon icon-tasks"></i>
									Tasks
									<b class="label orange pull-right">19</b>
								</a>
							</li> -->
						</ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
                                <li><a href="prfl.php"><i class="menu-icon icon-bold"></i> Chat </a></li>
                                <li><a href="ui-typography.php"><i class="menu-icon icon-book"></i>Application </a></li>
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
										<a href="other-login.html">
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
				
					<!-- <form method="POST" >
             <input id="inpu" class="" type="hidden" name="id" value="<?php echo $row['pr_id'];?>">
             <input id="inpu2" class="" type="hidden" name="id2" value="<?php echo $row['pr_id2'];?>">
             <button class="k btn" value="submit" type="submit" style="margin-left:9px"  name="submit">
                 See Your Tasks <span class="badge badge-primary"></span> </button> 
		</form> -->
		<!-- id="<?php echo $u_id;?>" -->
						<button class="btn k" style="margin-left:0px"   >
								See Your Works <span class="badge badge-primary"></span>
							</button>
						<div class="module " style="padding:60px;">
							<div class="message">
							
								
  <div id="">
		<h2>Your Works</h2>
	  </div>
	  
	  <div id="onli" class="media">
		<div class="media-left" >
		  <img src="../img/6.png" alt="" style="border:0.9px grey solid;width:300px;height:200px"   />
		</div>
		<div class="media-body">
		  <h2>Online Shopping</h2>
		  <p style="font-weight:normal">
			This is an online shopping websites developed by super60 students which allows consumers to directly buy goods or services from a seller over the Internet using a web browser. Consumers find a product of interest by visiting the website of the retailer directly or by searching among alternative vendors using a shopping search engine, which displays the same product's availability and pricing at different e-retailers. As of 2016, customers can shop online using a range of different computers and devices, including desktop computers, laptops, tablet computers and smartphones.
		  </p>
			
		</div>
	  </div>
	  
	  <div id="ita">
		<div >
		  <h2>Italian restaurant</h2>
		  <p style="font-weight:normal">
			This is the website which provide a facility to the customers who love to eat foods.they can order food online through this website.super60 students developed it for the customers who have no time even for foods.restaurant is a business which prepares and serves food and drinks to customers in exchange for money. Meals are generally served and eaten on the premises, but many restaurants also offer take-out and food delivery services, and some offer only take-out and delivery. Restaurants vary greatly in appearance and offerings, including a wide variety of cuisines and service models ranging from inexpensive fast food restaurants and cafeterias to mid-priced family restaurants, to high-priced luxury establishments.
		  </p>
		</div>
		<div >
		  <img src="../img/2.png" alt="" style="border:0.9px grey solid;width:300px;height:200px" />
		</div>
	  </div>
	  
	  <div id="wed" class="media" >
		<div class="media-left">
		  <img src="../img/3.png" alt=""  style="border:0.9px grey solid:80px;width:300px;height:200px"  />
		</div>
		<div class="media-body">
		  <h2>Wedding Invitation</h2>
		  <p style="font-weight:normal">
			Wedding Invitation website is developed by our super60 students which provide a facility to the peoples,customers who have to prepare their own wedding cards online .it is a very handy website for the wedding invitations cards.wedding websites are used for a variety of purposes including communication with guests, sharing wedding photos and videos with those who were unable to attend, providing maps, hotel and destination information, bridal party and couple biographies, and profiling vendors. Increasingly the sites are being used as tools for wedding planning. Many do-it-yourself sites offer features like online RSVP, blogs, registry management, and budget management tools to aid couples through the wedding organizing process.[3] Wedding websites offer a way for couples to showcase their personality and set the tone for what their wedding will be like.
		  </p>
		</div>
		<hr>
	  </div>
	  
	  <div id="jame">
		<div >
		  <div >
			<h2>James</h2>
			<p style="font-weight:normal">
			  praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint Voluptatem accusantium doloremque laudantium sprea totam rem aperiam praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
			  Voluptatem accusantium doloremque laudantium sprea totam rem aperiam praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint Voluptatem accusantium doloremque laudantium sprea totam rem aperiam praesentium
			  voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint Voluptatem accusantium doloremque laudantium sprea totam rem aperiam
			</p>
		  </div>
		  <div >
			<img src="../img/4.png" alt="" style="border:0.9px grey solid;width:300px;height:200px"  />
		  </div>
		</div>
		<hr>
	  </div>
	  
	  <div id="hand">
		<div >
		  <img src="../img/1.png" alt="" style="border:0.9px grey solid;width:300px;height:200px"   />
		</div>
		<div >
		  <h2>Handy Man</h2>
		  <p style="font-weight:normal">
			This is an  websites developed by super60 students which allows consumers to directly connect with the person who are technically expert  and they can fix any issues according to the their problems by contacting the technicians through  this website.this website id useful and very for thoser people who may  have problem with their home appliances .  
		  </p>
		</div>
		<hr>
	  </div>
	  
	  
	  <div id="fit">
		<div >
		  <h2>Fitness Trainer</h2>
		  <p style="font-weight:normal">
			This is the website which inspires the people to join the gym .Super60 students developed it for people who wants to join gym but have the fear of joining gym.it inspires them to join the gym .joining gym is a very impotant step to stay fit it is very imporatant to stay healthy and fit in the modern age and rushed life.Having this understanding, it’s been our role as a team of coaches to assess every aspect of the individual and then develop a plan (both training and nutrition) that allows the most consistency and adherence possible, for that individual.  
		  </p>
		</div>
		<div >
		  <img src="../img/9.png" alt="" style="border:0.9px grey solid;width:300px;height:200px" />
		<hr>

		</div>
		
		
		<div  id="green">
		<div >
		  <img src="../img/5.png" alt="" style="border:0.9px grey solid;width:300px;height:200px" />
		</div>
		<div >
		  <h2>Greenland</h2>
		  <p style="font-weight:normal">
			It is a the best website desogned by the our Super60 students ehich inspires the people to planting and gardening at their home and near environments.Gardening is the practice of growing and cultivating plants as part of horticulture. In gardens, ornamental plants are often grown for their flowers, foliage, or overall appearance; useful plants, such as root vegetables, leaf vegetables, fruits, and herbs, are grown for consumption, for use as dyes, or for medicinal or cosmetic use. Gardening is considered by many people to be a relaxing activity.
		  </p>
		</div>
		<hr>

	  </div>
	
	
	  
	  <div id="make" >
		<div >
		  <div >
			<h2>MakeUp Artist</h2>
			<p style="font-weight:normal">MakeUp is a very impotant part of  womens life . it is very neccessarry to them .so our super60 students developed a website which connects the customers to the make up artists directly through this website. it also provide some important tips on make up and dos and donts for  the women to make up.
				Cosmetics are substances or products used to enhance or alter the appearance of the face or fragrance and texture of the body. Many cosmetics are designed for use of applying to the face, hair, and body. They are generally mixtures of chemical compounds; some being derived from natural sources (such as coconut oil), and some being synthetics or artificial.[1] Cosmetics applied to the face to enhance its appearance are often called make-up or makeup. Common make-up items include: lipstick, mascara, eye shadow, foundation, blush, and contour. Whereas other common cosmetics can include skin cleansers, body lotions, shampoo and conditioner, hairstyling products (gel, hair spray, etc.), perfume and cologne.  </p>
		  </div>
		  <div >
			<img src="../img/8.png" alt="" style="border:0.9px grey solid;width:300px;height:200px" />
		  </div>
		</div>
		<hr>

	  </div>
		
		
		
	  </div>
	  
	  <div  id="tra">
		<div  >
		  <img src="../img/trav.png" alt="" style="border:0.9px grey solid;width:300px;height:200px"   />
		</div>
		<div >
		  <h2>Personal Blog </h2>
		  <p style="font-weight:normal">
			This is a personal blog  developed by super60 students for personal blogs.this is very useful sites or platform in which people can read or explore their ideas .they can explore their ideas or even they can share their views through this website.A blog (a truncation of the expression "weblog")[1] is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page. Until 2009, blogs were usually the work of a single individual,[citation needed] occasionally of a small group, and often covered a single subject or topic. In the 2010s, "multi-author blogs" (MABs) emerged, featuring the writing of multiple authors and sometimes professionally edited.
		  </p>
		</div>
		<hr>

	  </div>
	
	  <div id="gaan" >
		<div  >
		  <h2>Online Gaana</h2>
		  <p style="font-weight:normal">
			This is the website which provide a very good platform to listen music or watching videos online .it is An online music store is an online business which sells audio files over the Internet, usually sound recordings of music songs or classical pieces, in which the user pays on a per-song or subscription basis. It may be differentiated from music streaming services in that the online music store sells the purchaser the actual digital music file, while streaming services offer the patron partial or full listening without the actually owning the source file. However, online music stores generally offer partial streaming previews of songs, with some songs even available for full length listening. Online music stores typically show a picture of the album art or of the performer or band for each song. Some online music stores also sell recorded speech files, such as podcasts and video files of movies.
		  </p>
		</div>
		<div >
		  <img src="../img/gaan.png" alt="" style="border:0.9px grey solid;width:300px;height:200px"  />
		</div>
		<hr>

	  </div>
	
	
	  <div  id="pet">
		<div >
		  <img src="../img/dog.png" alt="" style="border:0.9px grey solid;width:300px;height:200px" />
		</div>
		<div  >
		  <h2>Pet Adoption</h2>
		  <p style="font-weight:normal">
			It is a platform to get pets adopted through online .we created the website to keep information of all the pets and and provide facility to the customers who wants to adopt the pets according to their needs.Pet adoption is the process of taking responsibility for a pet that a previous owner has abandoned or released to a shelter or rescue organization. Common sources for adoptable pets are animal shelters and rescue groups. Some organizations give adopters ownership of the pet, while others use a guardianship model wherein the organization retains some control over the animal's future use or care.
	
			Also available is online pet adoption. These sites have databases of pets being housed by thousands of animal shelters and rescue groups, and are searchable by the public. They include Petfinder.org and Adopt-a-Pet.com.
		  </p>
		</div>
		<hr>

	  </div>
	
	
	  <div id="car">
		<div >
		  <div >
			<h2>Travelling Website</h2>
			<p>
	
				Our students developed a travelling website.A travel website is a website on the world wide web that is dedicated to travel. The site may be focused on travel reviews, trip fares, or a combination of both. Approximately 587.3 million consumers are expected to book travel plans online in 2018.travel websites are online travelogues or travel journals, usually created by individual travelers and hosted by companies that generally provide their information to consumers for free.[2] These companies generate revenue through advertising or by providing services to other businesses. This medium produces a wide variety of styles, often incorporating graphics, photography, maps, and other unique content. Some examples of websites that use a combination of travel reviews and the booking of travel are TripAdvisor, Priceline, Liberty Holidays, and Expedia.
				</p>
		  </div>
		  <div >
			<img src="../img/car.png" alt="" style="border:0.9px grey solid;width:300px;height:200px"  />
		  </div>
		</div>
		<hr>

	  </div>
	  
	
	  
	
	  
	
	<!-- </body> -->
	
	<!-- </html> -->
</div>
	
							<!-- <img width="200" src="upload/<?php echo $row['projectimg']; ?>"  style='margin-top:6px;' alt="" /> -->
							<!-- <div class="message2"> -->
							</div>
							<!-- <img width="200" src="upload/<?php echo $row['projectimg2']; ?>"  style='margin-top:6px;' alt="" /> -->
							
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




	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.table-message tbody tr').click(
				function() 
				{
					$(this).toggleClass('resolved');
				}
			);



$('.k').click(function(){
	// $('.message *').css('display','block');
	$('#<?php echo $row['pr_id'];?>').css('display','inline-block');
	$('#<?php echo $row['pr_id2'];?>').css('display','inline-block');
	// $('#wed').css('display','inline-block');

});

		} );
		// function func(){
		// 	document.getElementByClassName('message').style.display="none";
		// }
		<?php
	}
	}
	else{
		header("location:../register/logout.php");
	}
		?>
		
	</script>
</body>