<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
    <style>
        .ko{
            background-image: linear-gradient(to left,rgba(10,10,10,0.7) 100%,rgba(255,255,255,1)), url("../images/slider/sviet1.jpg");
            background-repeat: no-repeat;
            background-size: cover ;
            /* background-position: center; */
            width: 100vw;
            height: 100vh;
            /* background-attachment: fixed; */
        }
        
    </style>
</head>
<body class="p-5 ko">
    <div class="col-md-4 bg-info mx-auto  rounded mt-5 p-5">
        <h3 class="text-danger mb-4 text-center">
            Recover Password
        <h3>
    <form action="SendMail.class.php" method="POST">
    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email here">
    <br>
    <input type="password" name="passw" id="pass" class="form-control" placeholder="Your password please">
    <br>
    <input type="submit" class="btn" name="submit" value="submit">
    </form>
    <h6 class="text-right" style="position:absolute; bottom:60px;right:60px;">&#8592;<a href="../edmin/index.php">LogIn</h6>

    </div>
</body>
</html>