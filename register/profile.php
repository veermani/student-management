<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
    <style>
        img{
            border-radius:50%;
            height:160px;
            width:160px;
            position:relative;
            top:0;
            left:40%;
        }
        .j{
            /* /* position:relative; */
            right:-1060px;
            /* top:-89px;  */
        }
        h3{
            text-align:center;
        }
        .i{
          margin-left:13vw;
        }
    </style>
</head>
<body class="bg-dark">
<div class="col-md-10  mx-auto p-5 text-auto rounded d-block mt-5 bg-info">
<?php
session_start();
include('newcon.php');

if($_SESSION['user_id']){
    $id=$_SESSION['user_id'];
    $query="SELECT * FROM `sar` where `id`='$id' ";
    $data=$con->query($query);
    $row=$data->fetch_array();
    if($row){

    echo "<h><img src='upload/".$row['image']."' width='105'alt='sorry!' height='79'></h>";
    echo "<h3>Welcome ".$row['username']."</h3>";
    echo "<table class='i'><tr>";
    echo "<td>User name: </td><th>".$row['username']."</th></tr>";
    echo "<tr><td>User Contact :</td><th>".$row['contact']."</th></tr>";
    echo "<td>Email: </td><th>".$row['email']."</th>";
    echo "<tr><td>Address: </td><th>".$row['address']."</th></tr>";
    
    echo "</table>";
    echo "<div class='swapan'></div><div style='' class='p-5 col-md-7 mx-auto'>";
    echo "</div><a href='logout.php'>Log Out</a>";
    // echo "<a class='btn btn-success j' href='edit2.php'>upload"
    ?>
    <form action="edit2.php"n method="POST">
        <input type="submit" name="submit" class='btn' value="update">
    </form>
    <?php

    // "</a>";
    
}
}
else{
    header("location:form2a.php");
}
// prabalg@cdac.in
?>
</div>
</body>
</html>