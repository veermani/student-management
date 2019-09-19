$(window).scroll(function(){
    fty();
});
function fty(){
    var gyu=$(window).scrollTop();
    console.log(gyu);
}
$(function(){
    $('.col-md-4 img').click(function(){
        var img=$(this).attr('src');
        $('body').append('<div class="curtain"></div>');
        $('body').append('<img src="'+img+'" class="light shadow-lg">');
        
        $('.light').animate({
            'opacity': '1',
            'top':'50%'
        },1000);
        $('.light,.curtain').click(function(){
            $('.light').remove();
            $('.curtain').remove();
    
        });
    });
    
});