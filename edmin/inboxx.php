<?php 
session_start();
$con=new mysqli("localhost","root","","attendance");
if(!$con){
    echo "not connected";
}
else{
    echo "conne";
}
if(isset($_SESSION['user_id'])){
    $id=$_SESSION['user_id'];
    if(isset($_SESSION['user_name'])){
        $user_name=$_SESSION['user_name'];
        $query="SELECT *  FROM `approval` WHERE `name`='$user_name' order by `time` desc ";
       $data=$con->query($query);

       
        
       echo '<tr class="heading" style="width:100%;" >
       <td class="cell-check">
           <input type="checkbox" class="inbox-checkbox">
       </td>
       <td class="cell-icon">
       </td>
       <td class="cell-author hidden-phone hidden-tablet">
           Sender
       </td>
       <td class="cell-title">
           Subject
       </td>
       <td class="cell-icon hidden-phone hidden-tablet">
       </td>
       <td class="cell-time align-right">
           Date
       </td>
   </tr>';
       
       
       
       
       
        if($data){
            while($row=$data->fetch_array()){
            if($row['approval']=="0"){
                 $arr="been rejected";
            }
            else if($row['approval']==""){
                 $arr="not been processed";
            }
            else{
                $arr="been approved" ;
            }
           
            echo '<tr class="unread starred" ><td class="cell-check">';
                                                    echo '<input type="checkbox" class="inbox-checkbox"></td>';
                                                
                                                echo '<td class="cell-icon"><i class="icon-star"></i></td>';
                                                    
                                                
                                              echo '<td class="cell-author hidden-phone hidden-tablet">Vishal sir </td>';
                                               
                                              echo'<td class="cell-title">';
                                              echo "<td>Your application for".$row['sub']." has  ".$arr;
                                                echo '</td><td class="cell-icon hidden-phone hidden-tablet">';
                                                   echo '<i class="icon-paper-clip-no"></i></td>';
                                                
                                               echo '<td class="cell-time align-right">'.$row['time'].'</td></tr>';
                                            
            
            }
        }
        
    }
}


?>