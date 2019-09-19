<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <style>
                h2.k{
                    text-transform:capitalize;
                }
                .trr2
{
    padding: 2px;
    background-color: #ffffff;
}
.trr1
{
    padding: 2px;
    background-color: #fafafa;
}
.table table
{
    border-color: #e0e0e0;
}
                form
{
    margin: 0px;
    padding: 0px;
}
                .collegelogo1
{
    width: 235px;
    height: 235px;
    border-radius: 5px;
    margin-right: 25px;
}

.collegelogo1 img
{
    padding: 3px;
    border: 1px solid #dbdbdb;
    width: 235px;
    height: 235px;
    border-radius: 5px;
}
.table
{
    z-index:99999;
    font-size:14px;
    }
.table td
{
    color: #360909;
}
tr.top-heading th
{
    background-color: #4A8BC2;
    border-color: #4A8BC2;
    color: #ffffff;
    font-size: 14px;
    vertical-align: bottom;
    font-weight: bold;
    border: 0px;
    padding: 8px;
    border-right: 1px solid #ffffff;
    z-index:9999;
}

tr.top-heading th.first
{
    /*border-top-left-radius: 4px;*/
    border: 0px solid #ffffff;
}
tr.top-heading th.last
{
    /*border-top-right-radius: 4px;*/
    border: 0px solid #ffffff;
}
#Personal h8
{
    color: #4d4d4d;
    font-size: 14px;
    margin: 10px 0 100px;
    text-transform: uppercase;
    text-shadow: 0 1px 0 #ffffff;
    line-height: 20px;
    font-weight: 400;
}
.tableRow tr:nth-child(2n+1)
{
    background-color: rgb(150, 80, 80);
}
.primary_container p
{
    color: #555555;
    text-align: center;
    line-height: 1.8em;
}

.primary_container h1
{
    margin: 0px 0.1em 0px 0px;
    color: #286AB4;
    font-family: "Open Sans" ,HelveticaNeue, "Helvetica Neue" ,Helvetica,Arial,sans-serif;
    font-size: 1.6em;
    font-weight: bolder !important;
    text-transform: uppercase;
    line-height: 40px;
    text-align: center;
    background: url("../../../App_Themes/Default/images/heading-down.png") repeat-x scroll left bottom transparent;
    padding-bottom: 0.2em;
    margin-bottom: 0.2em;
}

.primary_container h5
{
    color: #286AB4;
    font-family: "Droid Serif" ,Merriweather,Georgia, "Times New Roman";
    font-size: 1em;
    font-style: italic;
    letter-spacing: 0;
    margin: 0px 0px 2em 0px;
    text-transform: none;
    font-weight: bolder !important;
    line-height: 40px;
}


    </style>
    </head>
    <body>
    <?php
session_start();
include('newcon.php');

    if(isset($_SESSION['user_id'])){
        $id=$_SESSION['user_id'];
        $query="SELECT * FROM `student_table` where `std_roll_no`='$id' ";
        $data=$con->query($query);
        $row=$data->fetch_array();
                                    if($row){
    ?>
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                    
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                            <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php"><h2 class="k"><?php echo $row['student_name']?></h2> </a>
                        <div class="nav-collapse collapse navbar-inverse-collapse">
                            <ul class="nav nav-icons">
                                <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                                <li><a href="#"><i class="icon-eye-open"></i></a></li>
                                <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                            </ul>
                            <form class="navbar-search pull-left input-append" action="#">
                            <input type="text" class="span3">
                            <button class="btn" type="button">
                                <i class="icon-search"></i>
                            </button>
                            </form>
                            <ul class="nav pull-right">
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                    <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Item No. 1</a></li>
                                        <li><a href="#">Don't Click</a></li>
                                        <li class="divider"></li>
                                        <li class="nav-header">Example Header</li>
                                        <li><a href="#">A Separated link</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Support </a></li>
                                <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    
                                        <?php
                                    
                                    echo " <img src='upload/".$row['image']."' class='nav-avatar' />";
                                        
                                    
                                ?>
                                    <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Your Profile</a></li>
                                        <li><a href="#">Edit Profile</a></li>
                                        <li><a href="#">Account Settings</a></li>
                                        <li class="divider"></li>
                                        <li><?php echo "<a href='../register/logout.php'>Log Out</a>";
                                          ?></li>
                                    
                                    <!-- <li><a href="#">Logout</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                
                                <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Inbox  </a></li>

                                <li>
     
     <!-- <button href="task.php?" id="" class="k"> -->
         <!-- <form method="POST" action="task.php"> -->
             <!-- <input id="inpu" class="" type="hidden" name="id" value="<?php echo $row['pr_id'];?>"> -->
             <!-- <input id="inpu" class="" type="hidden" name="id2" value="<?php echo $row['pr_id2'];?>"> -->
             <a class="m" href="task.php">
                 <i class="menu-icon icon-tasks "></i>Tasks </a> 
        <!-- </form> -->
          
         
        <!-- </a> -->

                                </li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="prfl.php"><i class="menu-icon icon-bold"></i> Chat </a></li>
                                <li><a href="ui-typography.php"><i class="menu-icon icon-book"></i>Application </a></li>
                                <li><a href="form.php"><i class="menu-icon icon-paste"></i>MailForms</a></li>
                                
                                
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Profile </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="../register/logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div id="Div1" class="container" style="margin-left:76px">
        <div class="primary_container">
            <!-- <h1>
                Personal &amp; Parent Details</h1> -->
            <div id="TabContainer">
                <div id="Personal">
                    <div>
                        <table>
                            <tbody><tr>
                                <td valign="top" width="15%" >
                                    <div class="collegelogo1">
                                        
                                            <input type="hidden" name="ctl00$ctl00$MCPH1$SCPH$hdnStPhoto" id="hdnStPhoto">
                                            

<div>
     

  
     
             <div>
                <img src="upload/<?php echo $row['image']?>" style="margin-left:30px;" class="image-border" frameborder="0">


             </div>

       
        
  
 </div>

                                            <input type="submit" name="ctl00$ctl00$MCPH1$SCPH$btnViewStudentPhoto" value="" id="btnViewStudentPhoto" style="display: none;">
                                        
                                        
                                    </div>
                                </td>
                                <td width="56%">
                                    <table width="100%" class="table" border="0" style="margin-left:13px">
                                        <tbody><tr class="top-heading">
                                            <th class="first">
                                                Personal Information
                                            </th>
                                            <th class="last">
                                            </th>
                                        </tr>
                                        <tr class="trr2">
                                            <td width="50%">
                                                Admission No:
                                            </td>
                                            <td width="50%">
                                                <label id="MCPH1_SCPH_lblAdmNo"><?php echo $row['admission_no']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                Reg. Form No.:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblRegNo"></label>
                                            </td>
                                        </tr>
                                        <tr class="trr2">
                                            <td>
                                                Name:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblName"><?php echo $row['student_name']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                Gender:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblGender"><?php echo $row['gender']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr2">
                                            <td>
                                                Blood Group :
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblBG"><?php
                                                echo $row['Blood_group'] ?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                DOB:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblDOB"><?php echo $row['dob']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr2">
                                            <td>
                                                Present Address:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblPresentAdd"><?php echo $row['address']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                City:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblCity1"><?php echo $row['city']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr2">
                                            <td>
                                                State:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblstate1"><?php echo $row['state']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                Pin code:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblPin1"><?php echo $row['pincode']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr2">
                                            <td>
                                                Phone:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblPhone1"></label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                Email ID:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblEmail1"><?php echo $row['email']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr2">
                                            <td>
                                                Remark:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblRemark" style="display:none">lorem ipsum,lorem ipsum</label>
                                                
                                            </td>
                                        </tr>
                                        
                                    </tbody></table>
                                    
                                    <table width="100%" class="table" border="0" style="margin-left:13px; margin-top:17px">
                                        <tbody><tr class="top-heading">
                                            <th class="first">
                                                Guardian Information
                                            </th>
                                            <th class="last">
                                            </th>
                                        </tr>
                                        <tr class="trr2">
                                            <td width="50%">
                                                Father Name:
                                            </td>
                                            <td width="50%">
                                                <label id="MCPH1_SCPH_lblfather"><?php echo $row['fathers_name']?> </label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                Father's Mobile:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblfmob"><?php echo $row['fathers_mobile']?></label>
                                            </td>
                                        </tr>
                                        
                                        <tr class="trr2">
                                            <td>
                                                Father's E-Mail::
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblFEmail"><?php echo $row['fathers_email']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                Mother Name:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblmother"><?php echo $row['mothers_name']?> </label>
                                            </td>
                                        </tr>
                                        <tr class="trr2">
                                            <td>
                                                Mother's Mobile:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblMobile"><?php echo $row['mothers_mobile']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                Mother's E-Mail
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblMEmail"></label>
                                            </td>
                                        </tr>
                                        
                                        <tr class="trr2">
                                            <td>
                                                Occupation:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblOccupation"><?php echo $row['occupation']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                Designation:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblDesi"></label>
                                            </td>
                                        </tr>
                                        <tr class="trr2">
                                            <td>
                                                Annual Income:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblMon"><?php echo $row['Annual_income']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                Permanent Address:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblParmanantAdd"><?php echo $row['address']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr2">
                                            <td>
                                                City:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblCity2"><?php echo $row['city']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                State:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblState2"><?php echo $row['state']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr2">
                                            <td>
                                                Pin code:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblpin2"><?php echo $row['pincode']?></label>
                                            </td>
                                        </tr>
                                        <tr class="trr1">
                                            <td>
                                                Phone:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblPhone2"></label>
                                            </td>
                                        </tr>
                                        <tr class="trr2">
                                            <td>
                                                Mobile No.:
                                            </td>
                                            <td>
                                                <label id="MCPH1_SCPH_lblmob"><?php echo $row['phone'];
                                                }
                                                ?></label>
                                            </td>
                                            
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
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
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
