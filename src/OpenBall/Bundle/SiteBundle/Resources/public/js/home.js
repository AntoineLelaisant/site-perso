$(document).ready(function(){
    windowResize();

    $(window).resize(function(){
        windowResize();
    });

});

var windowResize = function() {
    var height = $(window).height();
    $("header.header").height(height);
    $(".portrait").height($(".portrait").width());
}