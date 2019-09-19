<?php
// include('../newcon.php');
$con=new mysqli("localhost","root","","swapankr");
if(!$con){
    // echo "not connected";
}
else{
    // echo "connected";
}

$query="select * from `messages` order by `Id` desc";
$data=mysqli_query($con,$query);
while($row=mysqli_fetch_array($data)){
    echo "<span style='color:red;'>".$row['name']."</span>:";
    echo $row['messages'];
    // echo $row['image'];
    echo "<br>";
}
?>