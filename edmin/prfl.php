<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <title>Document</title>
    
</head>
<body class="bg-info">
        <div class="container-fluid">
                <div class="row">
                    <a href="out.php" class="btn btn-outline-light">Log Out</a>
                        
                    <?php
                    session_start();
                    if(isset($_SESSION['user_id'])){
                        $id=$_SESSION['user_id'];
                        if(isset($_SESSION['user_name']))
                        {
                            $username=$_SESSION['user_name'];
                        ?>
                                <div class="container">
                                        <div class="col-md-12 text-primary text-dark">
                                                welcome<h3> <?php echo $username;?></h3>
                                                
                                                
            <?php

        $con=new mysqli("localhost","root","","attendance");
        if(!$con){
            echo "not connected";
        }
        $query="select * from `student_table` where not `std_roll_no`='$id' ;";
        $data=$con->query($query);
                                        
                                    if($data){
                                        while($row=$data->fetch_array()){
                                            ?>

                <table class="table table-info table-striped  table-hover">
                    <tbody>
                        <tr>
                            <td>
                                <form method="POST" action="chat.php">
                                    <input id="" class="form-control" type="hidden" name="id" value="<?php echo $row['std_roll_no'];?>">
                                    <input type="submit" style="border:none; background-color: transparent; outline:none" value="<?php echo $row['student_name'];?>">
                                   
                                </form>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <?php
                
            }
        }
        
        ?>
   
    
    
       
        </div>    
        </div>
        </div>
    </div>
    <?php

}
}
else{
    header("location:out.php");
}
?>
    
</body>
</html>