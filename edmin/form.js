$(function(){

$('#myform').on('submit',function(e){
e.preventDefault();
$.ajax({
    url:'to/SendMail.class.php',
    type:'POST',
    data:new FormData(this),
    contentType:false,
    cache:false,
    processData:false,
    success:function(res){
        $("#ko").html(res)
    },
    error:function(){
        alert("sorry");
    }
    });
 });
});
