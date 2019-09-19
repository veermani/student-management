<?php
$con=mysqli_connect("localhost","root","","attendance");

if(!$con){
    echo "not connected";
    // echo mysqli_err_no($con);
}
else{
    // echo "connected ";
}
?>