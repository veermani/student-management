$(document).ready(function(){
    $('#myform').on('submit',function(e){
     e.preventDefault();
     $.ajax({
      url:'regist.php',
      type:'POST',
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(res){
        alert(res);
        //   alert('success');
       },
      error:function(){
          alert('error');
      }
     });
    });
   
    
    $('#login').on('submit',function(e){
        e.preventDefault();
        $.ajax({
         url:'login.php',
         type:'POST',
         data:new FormData(this),
         contentType:false,
         cache:false,
         processData:false,
         success:function(res){
           alert(res);
           
           //   alert('success');
          },
         error:function(){
             alert('error');
         }
        });
       });
      
});