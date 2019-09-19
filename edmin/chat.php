<?php
session_start();
$to_id=$_POST['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="jquery.js"></script>
    <style>
    div.oo{
        /* width: 50%;
        height: 10vh; */
        margin-left: 200px;
        border-radius: 50px 0px 20px 0px;
        display: block;
    }
    div.oi{
        /* width: 50%;
        height: 10vh; */
        margin-left: 200px;
        border-radius: 6px;
        display: block;
    }
    div.o{
        margin-right:200px;
        border-radius: 0px 50px 0px 20px;
        display: block;
    } 
    div.jj{
        margin-right:200px;
        display: block;
        border-radius: 6px;;
    } 
    body{
        display: block;
    }
    .m{
        font-size:1.2rem;
    }
    
    </style>
    <title>Document</title>
</head>
<body class="bg-secondary text-light">
<?php
if (isset($_SESSION['user_name'])) {
    if(isset($_SESSION['user_id'])){
        $id=$_SESSION['user_id'];
    
    ?>
    
    <div class="container-fluid">
        <div class="row bg-info">
            
            <div class=" col-md-12 bg-dark float-right p-5">
                <div class=" text-light container m"> </div>
                <textarea   id="chat" cols="30" class="float-right " rows="2" spellcheck="false"></textarea>
    <!-- <a href="msg.php" class="btn btn-outline-light mb-0">msgs</a> -->
    <a href="out.php" class="btn btn-outline-light mb-0">Logout</a>
            </div>
        </div>
    </div>

<script>
    $(function(){
        $(document).on("click","img",function(){

            // $(this).click(function(){
                $(this).toggleClass("rounded-circle");
            // });
            
        });
        

        $("#chat").keydown(function(e){


            if(e.keycode==13||e.which==13){
                var text=$(this).val();
                var oi='<?php echo $_SESSION['user_name'] ;?>';
                var iop='<?php echo $id ;?>';
                var to='<?php echo $to_id ;?>';
                $.ajax({
            url:'chatting.php',
            type:'POST',
            async:false,
            
            data:{chat:text,user:oi,to_id:to,userid:iop },
            success:function(res){
                // $(".m").html(res);
                $("#chat").val("");
            },
            error:function(){
                alert("sorry");
            }
            });
            return false;

            }
        });
        
        setInterval(function(){
            var iop='<?php echo $id ;?>';
                var to='<?php echo $to_id ;?>';
            $.ajax({
            url:'chatti.php',
            type:'POST',
            async:true,
            
            data:{to_id:to,userid:iop },
            success:function(res){
                $(".m").html(res);
            }
            });

            
        }, 100);


        
    });
    </script>
    
    <?php
}
}
else{
    header("location:out.php");
}
    ?>
</body>
</html>
