<?php
    $con=new mysqli("localhost","root","","swapankr");
    if(!$con){
        echo "not connected";
    }


    $mes=$_POST['chat'];
     $user=$_POST['user'];
     $userid=$_POST['userid'];
     $to_id=$_POST['to_id'];
     
     $query="insert into `chat`(`message`,`user_id`,`to_id`,`userid`) values('$mes','$user','$to_id','$userid');";
     $data=$con->query($query);
     if($data){
        //  echo "successfully sent";
        //  echo "<img src='screenshot.png' width='400'>";
        // $q="SELECT * from `chat` where `to_id`='$to_id' and `userid`='$userid' or `to_id`='$userid' and `userid`='$to_id' order by `time` asc;";
        // $mm=$con->query($q);
        // if($mm->num_rows>0){
        //     while($row=$mm->fetch_array()){

        //         if($row['to_id']==$to_id){

        //             echo "<p class='text-right'><span style='color:red;' >you &nbsp;</span>".$row['message']."</p><br>";
        //         }
        //         else if($row['to_id']==$userid){
        //             echo "<p class='text-left'><span style='color:red;' >".$row['user_id']." &nbsp;</span>".$row['message']."</p><br>";

        //         }
        //     }
        // }

        }
        else{
        echo "not sent";
    }

    ?>

    
    
    
    
    