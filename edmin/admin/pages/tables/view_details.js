$(function(){
    load_data();
    
    function load_data(page){

    $.ajax({
        url:'view_student.php',
        type:'POST',
        data:{page:page},
        async:true,
        success:function(res){
        $('#view').html(res);
        },
        error:function(){
        alert("Sorry! could not display ");
        }
    });
}
$(document).on('click','.view_student',function(){
// $('.view_student').on('click',function(){
    var id=$(this).attr('id');
    load_data(id);
});

    
    
    
});

    
    
    