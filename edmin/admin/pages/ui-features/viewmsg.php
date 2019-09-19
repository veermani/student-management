<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<?php
session_start();

    if(isset($_SESSION['user_id'])){
$con=new mysqli("localhost","root","","attendance");
if(!$con){
    // echo "not connected";
}
else{
    // echo "connected";
}

$rt="select count(*) from `approval` where `approval`=''";
$er=$con->query($rt);
$row = $er->fetch_array();

// $total = $er->num_rows;
$total = $row[0];
if($row){
    // echo "<h2 id='u'></h2><script> var i=".$total."; document.getElementById('u').innerHtml(u); </script>";
    echo " <p1 class='num' style='color:red;'>" . $total."</p1>&nbsp; messages pending to be approved<br><br>";
    // echo print_r($er);
    
}
else{
    echo "sorry";
}
// $rt='';
$query="select * from `approval` where `approval`='' order by `id` desc";
$data=mysqli_query($con,$query);
while($row=mysqli_fetch_array($data)){
    echo "<div id='".$row['id']."' class=''>";
    echo "<span style='color:red;text-transform:capitalize;'>".$row['name']."</span>:";
    echo $row['sub'];
    echo "<div class='po' >".$row['message']."</div></div>";
    // echo "<a href='approv.php?id=".$row['id']."'><button>accept</button></a>";
    // echo "<a href='reject.php?id=".$row['id']."'><button>reject</button></a></div>";

    // $_SESSION['form']=$row['id'];
    // if (isset($_SESSION['form'])) {
        echo "<form action='approv.php' method='POST'>";
        echo "<input type='hidden' value='".$row['id']."' name='id'>";
        echo '<input type="radio" name="approval" value="1"> accept<br>';
        echo '<input type="radio" name="approval" value="0"> reject<br>';
        echo "<br>";
        echo "<input type='submit'  name='submit' value='submit'>";
        echo "</form><br><br>";
    // }else{
        // header("location:typography.php");
    // }
}
}
else{
    header('location:../../../../register/logout.php');
}
?>