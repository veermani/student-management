
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.css" rel="stylesheet">
    <title></title>
</head>





<body style="background-color:black;">
    <?php
        session_start();
    if($_POST['submit']=='submit'){
        include('../edmin/newcon.php');
        $user=$_POST['name1'];
        $email=$_POST['email'];
        $pass=$_POST['pass1'];
        $adm=$_POST['adm'];
        $query="select * from `student_table` where `email`='$email'";
        $data=$con->query($query);
        // $row=mysqli_fetch_array($data);
        $num=mysqli_num_rows($data);
        if($num>0){
            // $err="sorry";
            $ty="already registered";
            header("location:form2a.php?error=".$ty);
            // windows.location="khkjh.php0"
        }
        else{
            $query="INSERT INTO `student_table` (`student_name`,`pass`,`admission_no`,`email`) VALUES ('$user','$pass','$adm','$email'); ";
            $data=$con->query($query);
            if($data){
                echo "successfully registered";
                echo "<br>&#8592;<a href='../edmin/index.php'>Login</a>";
            }
            else{
                echo mysqli_error($con);
            }

        }
    }
    else{
        // $rt="Plaese Submit First";
        header("location:form2a.php");
    }
    
    ?>
</body>
</html>