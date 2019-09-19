$(function(){
    $('.col-md-4 img').click(function(){
        var img=$(this).attr('src');
        $('body').append('<div class="curtain"></div>');
        $('body').append('<img src="'+img+'" class="light shadow-lg">');

        $('.light').addClass('bounceInUp');
    });
});