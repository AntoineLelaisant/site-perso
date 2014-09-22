$(document).ready(function() {

    maxScore = 8;

    $('.skill-item-score').hide();
    $('.skill-item-score').each(function(){
        var score = $(this).html();
        var diff = maxScore - score;

        var content = $('<span>');

        for (var i = 0; i < score; i++) {
            var dot = $('<span>').addClass('dot-on');
            content.append(dot);
        };

        for (var i = 0; i < diff; i++) {
            var dot = $('<span>').addClass('dot-off');
            content.append(dot);
        };

        $(this).after(content);

    });

});