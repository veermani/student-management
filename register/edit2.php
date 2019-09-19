<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
    input.form-control{
        width:68%;
    }
    </style>
</head>
<body class="bg-dark">
    
    <?php

    session_start();

    echo "<div class='container  p-5 shadow-lg'>";
    echo "<div class='col-md-6 mx-auto bg-info p-5 shadow-lg'>";
    if($_POST['submit']=='update'){
echo "<form action='edit.php' method='POST' enctype='multipart/form-data'>

                    <input type='text' placeholder='update username' class='form-control' name='user'>
                    <br>
                    <input type='password' placeholder='update password' class='form-control' name='pass' >
                    <br>
                    <input type='email'  placeholder='update email' class='form-control' name='email'>
                    <br>
                    <input type='text' name='addres' class='form-control' placeholder='update address'  >
                    <br>
                    <input type='number' name='contact' class='form-control' placeholder='update contact'  >
                    <br>
                    upload image
                    <br>
                    <input type='file' name='image' >
                    <input type='submit' value='save update' class='btn mt-2' name='sub' >
                    <br>

                    &#8592<a href='profile.php'>back</a>
                </form>";
    }
    else{
        echo "sorry";
    }
    echo "</div>";
    echo "</div>";
             
             ?>

</body>
</html>