<?php
    $con=new mysqli("localhost","root","","swapankr");
    if(!$con){
        echo "not connected";
    }
    else{
        // echo "connected";   
    }

    // $mes=$_POST['chat']; 
    //  $user=$_POST['user'];
     $userid=$_POST['userid'];
     $to_id=$_POST['to_id'];
     
     
     static  $rr="r";
       static $tt="t";
        $q="SELECT * from `chat` where `to_id`='$to_id' and `userid`='$userid' or `to_id`='$userid' and `userid`='$to_id' order by `time` asc;";
        $mm=$con->query($q);
        if($mm->num_rows>0){
            while($row=$mm->fetch_array()){

                if($row['to_id']==$to_id){
                    if($rr=="r"){

                        echo "<div class='text-right oo text-light  p-3   ' style='background-color:rgb(67, 221, 36);'><span class='font-weight-bold' style='color:black;' >you &nbsp;</span>".$row['message']."</div><br>";
                        // echo $rr;
                         $rr="s";
                         $tt="t";
                    }
                    else if($rr=="s"){
                        echo "<div class='text-right oi text-light  p-3 ' style='background-color:rgb(67, 221, 36);'><span class='font-weight-bold' style='color:black;' >you &nbsp;</span>".$row['message']."</div><br>";
                        
                    }
                   
                    
                    
                    
                }
                else if($row['to_id']==$userid){
                    if($tt=="t"){

                        echo "<div class='text-left o bg-info  p-3'><span style='color:black;' class='font-weight-bold' >".$row['user_id']." &nbsp;</span>".$row['message']."</div><br>";
                       $tt="u";
                       $rr="r";
                    }
                    else if($tt=="u"){
                        echo "<div class='text-left jj bg-info  p-3'><span style='color:black;' class='font-weight-bold' >".$row['user_id']." &nbsp;</span>".$row['message']."</div><br>";
                        
                    }
                   
                    
                    
                }
            }
        }

        
        
    ?>