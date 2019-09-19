<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"id='ii' content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"id='ii' content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="../ui-features/jquery.js"></script>

    <title>Student Details</title>

    <style>
        
        .b{
            background-color: rgba(255,255,255,0.5);
            color:black;
            /* position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%); */
        }
    </style>
</head>
<body class="g p-5">
    <!-- php starts -->
    
    <?php

if (isset($_SESSION['user_id'])) {
    $id=$_POST['id'];
   ?>


<div class="container-fluid "></div>
<?php }
else{
    header("location:../../../../register/logout.php");
}
?>
    <script>
        $(function(){
            huii();

            function huii(){
                var i="<?php echo $id ;?>";
            $.ajax({
                url:'tsttt.php',
                type:'POST',
                data:{id:i},
                async:false,
                success:function(res){
                    $(".g").html(res);
                },
                error:function(){
                    alert("sorry");
                }
            });
        }

        
            // $(document).on("keydown","td[contenteditable='true']",function(e){

            //     if(e.keyCode==13||e.which==13){
            //         var id="<?php echo $id;?>";
            //         var j=$("#iia").text();
            //         var univ=$("#iib").text();
            //         var admn=$("#iic").text();
            //         var phone=$("#iid").text();
            //         var add=$("#iie").text();
            //         var email=$("#iif").text();
            //         var gender=$("#iig").text();
            //         var dob=$("#iih").text();
            //         var sem=$("#iii").text();
            //         var project=$("#iij").text();
            //         var bg=$("#iik").text();
            //         var fn=$("#iil").text();
            //         var fo=$("#iim").text();
            //         var fm=$("#iin").text();
            //         var fe=$("#iio").text();
            //         var ai=$("#iip").text();
            //         var mn=$("#iiq").text();
            //         var mm=$("#iir").text();
            //         console.log(id);
            //         console.log(j);
            //         console.log(univ)
            //         console.log(admn)
            //         console.log(phone)
            //         console.log(add)
            //         console.log(email)
            //         console.log(gender)
            //         console.log(dob);
            //         // return false;
                    
            //     $.ajax({
            //     url:'update.php',
            //     type:'POST',
            //     data:{id:id,name:j,univ_roll:univ,admission:admn,mobile:phone,address:add,email:email,gender:gender,DOB:dob,semester:sem,project:project,blood:bg,father:fn,fathere:fe,fathero:fo,fatherm:fm,annual:ai,mother:mn,motherm:mm},
            //     success:function(res){
            //     alert(res);
            //     // alert("jhgjhgjhghgjhgjhg");
            //     huii();
            //     },
            //     error:function(){
            //         alert("sory");
            //     }
            // });

        // $('#jio').on('submit',function(e){
        // e.preventDefault();
        // $.ajax({
        //     url:'updat.php',
        //     type:'POST',
        //     data:new FormData(this),
        //     contentType:false,
        //     cache:false,
        //     processData:false,
        //     success:function(res){
        //         huii();
        //     },
        //     error:function(){
        //         alert("sorrry a lot");
        //     }
        //     });
        //  });

//         return false;

//     }
    
// });    


        

    });

    </script>
    
</body>
</html>
