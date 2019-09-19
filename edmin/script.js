$(function(){
    ram();
    function ram(){
     var username=$('#username').val();
     var id=$('#id').val();
     
    //  alert(user);
     $.ajax({
      url:'prfl.php',
      type:'POST',
    //   data:{user_name:username,id:id},
      data:{},
      async:false,
      success:function(res){
          //alert('success');
          //alert(res);
           $('#swapp').html(res);
      },
      error:function(){
          alert('Error');
      }
     });
    };
//     setInterval(function(){
//     $.ajax({
//        url:'view_msg.php',
//        type:'POST',
//        data:{},
//        async:true,
//        success:function(res){
//            $('#chat').html(res);
//        },
//        error:function(){
//         //    alert('error nhin');
//        }
//     });
//    },500);
   });