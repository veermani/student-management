<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
    <style>
        input{
            alignment:right;
            margin-left:65px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 bg-info p-5">
                <?php
                session_start();
                include('newcon.php');
                if($_POST['sub']=="save update"){
                $id=$_SESSION['user_id'];
                $user=$_SESSION['user_name'];
                
                $image=$_FILES['image']['name'];
                $user2=$_POST['user'];
                $pass2=$_POST['pass'];
                $email2=$_POST['email'];
                $contact2=$_POST['contact'];
                $addres2=$_POST['addres'];
                $query="UPDATE `sar` SET `id`='$id',`username`='$user2',`password`='$pass2',`email`='$email2',`contact`='$contact2',`address`='$addres2',`image`='$image' WHERE `id`='$id';";
                move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$image);
                $data=$con->query($query);
                if(!$data){
                    echo "sorry";
                }
                else{
                    header('location:profile.php');
                    
                }
            }
            else{
                echo "sorry you are not authorized";
            }
                ?>
               
            </div>
        </div>
    </div>
</body>
</html>