picresize.style = {};

picresize.style.darkmode = function(){

    $('.lightmode').removeClass("lightmode");
    
    $('body,h1,h2,h3,h4,h5,#pro,#nav,#common,#footer,#landing').addClass("darkmode");

    $('.file-upload').css('background-color','#717784');
    $('.text-muted').css('color','#afafaf!important');

    $('.lead').css({
        'cssText' : 'color: #fff !important'
    });
    $('h6.dark-grey-text').css({
        'cssText' : 'color: #78b1fe !important'
    });

    localStorage.setItem("theme", "dark-mode");
};

picresize.style.lightmode = function(){

    $('.darkmode').removeClass("darkmode");

    $('body,h1,h2,h3,h4,h5,#pro,#nav,#common,#footer,#landing').addClass("lightmode");
    
    $('.file-upload').css('background-color','#fff');
    $('.text-muted').css({
	'cssText' : 'color: #6c757d !important'
    });
    $('#submit').css('color','#fff');

    $('.lead').css({
        'cssText' : 'color: #212529 !important'
    });
    
    localStorage.setItem("theme", "light-mode");
};


$(function(){
    let theme = localStorage.getItem("theme");
    if (theme && theme === "dark-mode"){
	picresize.style.darkmode();
    }
    if (theme && theme === "light-mode"){
        picresize.style.lightmode();
    }
});
