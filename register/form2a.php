<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <script src="../jquery.js"></script> -->
    <!-- <script src="script.js"></script> -->
    <title>Document</title>
    <style>
        a{
            text-decoration:none;
        }
        .ko{
            background-image: linear-gradient(to left,rgba(10,10,10,0.7) 100%,rgba(255,255,255,1)), url("../images/slider/sviet1.jpg");
            background-repeat: no-repeat;
            background-size: cover ;
            background-position: center;
            /* background-attachment: fixed; */
        }
        .m{
            background-color: rgba(10,10,10,0.4)
        }
    </style>
</head>
<?php
if(isset($_GET['error'])){
    ?>
    <script>
        alert("<?php echo $_GET['error']?>");

    </script>
    <?php
}

?>

<body class="ko p-5 rounded">
    
    <!-- <a href="index.html"><button class="btn j btn-light" >Home</button></a> -->
    <div class="col-md-5 rounded mx-auto text-light text-center m p-4">
        <h3 class="mt-4">Registration Form</h3>
    <form action="regist.php" id="myform" enctype="multipart/form-data" method="POST" class="p-5  text-left">

        <label for="">Name</label>
        <input type="text" class="form-control" required name="name1">
        <br>
        <label for="">Email</label>
        <input type="email" class="form-control" required name="email">
        <br>
        <label for="">Admission No</label>
        <input type="text" class="form-control" required name="adm" placeholder="It will Be Your User_Id">
        <br>
        <label for="">Password</label>
        <input type="password" name="pass1" required class="form-control">
        <span id="pass_error" style="color:red;"></span>
        <br>
        <input type="submit" value="submit" class="btn btn-danger" name="submit" >
    </form>
    <h6 class="text-right" style="position:absolute; bottom:80px;right:90px;">&#8592;<a href="../edmin/index.php">LogIn</h6>
</div>
</body>
</html>