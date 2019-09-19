$(function(){
    setInterval(function(){

    $.ajax({
        url:'inboxx.php',
        type:'POST',
        data:{},
        async:true,
        success:function(res){
        $('.table #o').html(res);
        },
        error:function(){
        //  alert("Something went wrong");
        }
    });
},1000);

});