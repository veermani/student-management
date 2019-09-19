$(function(){
    $('.k').click(function (e) { 
        e.preventDefault();
 var task=$(this).attr('id');
 var task2=$(this).attr('id2');
        // $.ajax({
        //     url:'../story.php',
        //     type:'POST',
        //     data:{id:task},
        //     async:true,
        //     success:function(res){
        //     // $('.module message').html(res);
        //     // alert('successfully inserted');
            // alert(task);
        //     },
        //     error:function(){
        //     alert("sorry");
        //     }
        // });    
    // });
    
    // $('.k').click(function (e) { 
    //     e.preventDefault();

    //     var i=$(this).attr('id');
    //     // document.write(i);
        $.ajax({
            url:'../story.php',
            type:'POST',
            data:{},
            async:true,
            datType:'html',
            success:function(res){
                // html=res;
                var rt = $(res).filter('#'+task);
                var rt2 = $(res).filter('#'+task2);
                $('.message').html(rt);
                $('.message2').html(rt2);
                // alert(res);
            },
            error:function(){
                alert("sorry") ;
            }
        });
        }); 
    });