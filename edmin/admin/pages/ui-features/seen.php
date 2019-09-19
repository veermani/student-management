<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .text-left{
            margin-left: 58px;
        }
        
    </style>
</head>
<body>
    


<?php
$con=new mysqli("localhost","root","","attendance");
if($con){
    // echo "connected";
}
else{
    echo " not connected";
}
$query="select * from  `approval` where not `approval`='' order by `time` desc";
$data=$con->query($query);
if($data){
    echo "<div class='p-2 m-4  p-5'>";
    echo "<h5 class=''>Recent seen requests(".$data->num_rows."):</h5>";
    while($row=$data->fetch_array()){
        echo "<div class='text-dark mt-2 col-md-10   '><span class='text-capitalize text-primary '>".$row['name'].":</span>";
        echo "<p1 style='font-weight:bold;'>".$row['sub']."</p1>";
        echo "<br><p1 class=''>".$row['message']."</p1>";
        if($row['approval']=="0"){
            echo "<br><span class='text-danger'> rejected</span>";
        }
        else if($row['approval']=="1")
        {
            echo "<br><span class='text-success'> accepted</span>";
            
        }
        // else{
        //     echo "<br><span class='text-warning'> Not Processed Yet</span>";

        // }

        echo '</div> <div class="col-md-12 grid-margin"><div class="card"></div></div>';
    }
    echo "</div>";
}

?>
</body>
</html>