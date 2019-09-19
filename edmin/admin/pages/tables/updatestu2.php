<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
        </style>
        <title>Update Details</title>
        <script src="../ui-features/jquery.js"></script>
    </head>
    <body class="bg-secondary">


<?php
// session_start();

    // if(isset($_SESSION['user_id'])){
    if(isset($_POST['kalia'])){
$uid=$_POST['kalia'];
$con=new mysqli("localhost","root","","attendance");
if(!$con){
    echo "not connected";
}
$query="SELECT * From `student_table`  where `std_roll_no`='$uid';";
$data=$con->query($query);
$row=$data->fetch_array();

if(isset($_POST['select'])){
      $i=$_POST['select'];
      ?>
            <script>
                $(function(){
                    // $('#foro').hide();
            //  $("#enab *").addClass("bg-info");
            $("#enab *").attr('disabled','disabled');
            $("#enab *").hide();
            $("#enab #hid,#bty,#img").removeAttr("disabled");
            $("#enab #hid,#bty,#img").show();
        });
        </script>
     <?php
     foreach ($i as $subject) {
         ?>
        <script>
            $(function(){
                
                $('#<?php echo $subject; ?>').removeAttr("disabled");
                $('#<?php echo $subject; ?>').show();
            });
            </script>
             <?php
         
        }
        
        
    }
            if($row){
        
        
        ?>
        <div class="container-fluid">
            <div class="row mx-auto">
                <div class="col-md-6 rounded bg-light shadow-lg mt-5">
                    <?php

                    echo "<div class='col-md-12 rounded b  mt-5 p-5 mx-auto text-capitalize  '></div>"
                    
                    ?>
                    
                    
                    
                </div>
                
                <div class="col-md-6">
                    <div class="col-md-10 float-right  bg-light  mt-5 p-5 rounded shadow-lg">
                        <h4 class="text-center text-secondary mb-2" >Update Details</h4>
                    <form method="" autocomplete="off" class=" p-4 bg-transparent"  action="" id="enab">
                        <input autocomplete="false"  type="hidden" name="ioioio" >
                        <input autocomplete="false" class="form-control mt-3"  placeholder="Name" type="text" name="name" id="name">
                        <input autocomplete="false" class="form-control mt-3" placeholder="University Roll Number" type="text" name="univ_roll" id="univroll">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Admission No" type="text" name="admission" id="admission">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Mobile Number" type="text" name="mobile" id="mobile">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Address" type="text" name="address" id="address">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Email" type="text" name="email" id="email">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Gender" type="text" name="gender" id="gender">
                        <input autocomplete="false" class="form-control mt-3" placeholder="DOB" type="text" name="DOB" id="DOB">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Semester" type="text" name="semester" id="semester">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Project Done" type="text" name="project" id="project">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Blood Group" type="text" name="blood" id="blood">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Father's Name" type="text" name="father" id="father">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Father's Mobile" type="text" name="fatherm" id="fatherm">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Father's Occupation" type="text" name="fathero" id="fathero">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Father's Email" type="text" name="fathere" id="fathere">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Annual Income" type="text" name="annual" id="annual">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Mother's Name" type="text" name="mother" id="mother">
                        <input autocomplete="false" class="form-control mt-3" placeholder="Mother's Mobile" type="text" name="motherm" id="motherm">
                        <input type="file" name="img" id="img" >
                        <input autocomplete="false" type="hidden" name="hidden" id='hid' value='<?php echo $uid;?>'>
                        <input autocomplete="false"  type="submit" value="submit" id='bty' name="submit" class="btn  mt-4 btn-outline-success">
                    </form>
                    </div>
                </div>
            </div>
        </div>
 
     

        
      <script>
          var i='<?php echo $uid ;?>';
          $(function(){
              func();
              function func(){

              $.ajax({
                  url:'updatesdata.php',
                  type:'POST',
                  data:{uid:i},
                  
                  success:function(res){
                  $('.b').html(res);
                  $('.b').append(" <a href='basic-table.php' class='btn btn-outline-danger'>Back</a>")
                  },
                  error:function(){
                //    alert("error aaya haiu");
                  }
              });
              
            }
            // async:true,

            $("#mobile,#fatherm,#motherm").keyup(function(){
                var u=$(this).val();
                if(u.length>10){
                    alert("please enter valid number");
                }
            })
            
           $('#enab').on('submit',function(e){
           e.preventDefault();
           $.ajax({
               url:'n.php',
               type:'POST',
               data:new FormData(this),
               contentType:false,
               cache:false,
               processData:false,
               success:function(res){
                //    alert(res);
                    func();
                    $(".form-control").val("");
               },
               error:function(){
                   alert("not saved");
               }
               });
            //    e.func();
            }); 
            
            
            
            
            
          });
          
      </script>  
        
        
        
        
        <?php
    
    
}
}else{
    // header("location:basic-table.php");
    echo "error";
}


?>
</body>
</html>