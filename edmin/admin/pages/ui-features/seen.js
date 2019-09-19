$(function(){
    $.ajax({
        url:'seen.php',
        type:'POST',
        data:{},
        async:true,
        success:function(res){
        $('#seen').html(res);
        },
        error:function(){
        alert("cannot be seen") ;
        }
    });
});