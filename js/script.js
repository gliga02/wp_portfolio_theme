jQuery(document).ready(function($) {
    const year = new Date().getFullYear();
    $(".year").html(year);

    $(".open").click(function () {
        $(".wrapper").fadeIn(400);
        $("body").css("overflow", "hidden");
    });
    
    $(".close").click(function () {
        $(".wrapper").fadeOut(400);
        $("body").css("overflow", "scroll");
    }); 
    
    $(".open-nav").click(function () {
        $(".wrapper-nav").fadeIn(400);
        $("body").css("overflow", "hidden");
        $(".open-nav").css("display", "none");
    });
    
    $(".close").click(function () {
        $(".wrapper-nav").fadeOut(400);
        $("body").css("overflow", "scroll");
        $(".open-nav").css("display", "inline");
    }); 
});
