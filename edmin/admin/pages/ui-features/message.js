$(function () {
    // setInterval(function() {
        // body
        $.ajax({
            url:'viewmsg.php',
            type:'POST',
            data:{},
            async:true,
            success:function(res){
            $('.template-demo').html(res);
            },
            error:function(){
            alert("oops ");
            }
        });
    // }, 15000);

    // $('#seen').toggle(function(){

    // })
});