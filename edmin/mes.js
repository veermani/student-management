$(function(){


$('#myform').on('submit',function(e){
e.preventDefault();
$.ajax({
    url:'savemsg.php',
    type:'POST',
    data:new FormData(this),
    contentType:false,
    cache:false,
    processData:false,
    success:function(res){
        $('#kon').html(res);
    },
    error:function(){
        alert("error");
    }
    });
 });
});
