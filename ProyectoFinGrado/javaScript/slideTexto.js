$(document).ready(function () {
    var boxes = ['.slide:nth-child(2)', '.slide:nth-child(3)', '.slide:nth-child(4)', '.slide:first-child'];
    var circles = ['#circle:nth-child(2)', '#circle:nth-child(3)', '#circle:nth-child(4)', '#circle:first-child'];

    var myVar = setInterval(slideChange, 5000);
    var index = 0;

    function slideChange() {
        $('#circles div').css({"background": "lightblue","height":"8px","width":"8px"});
        if (index === 4)
        {
            index = 0;
        }
        $('.slide').css("display", "none");
        $(boxes[index]).animate({width: 'toggle'}, 1500);
        $(circles[index]).css({"background": "darkblue","height":"10px","width":"10px"});
        index++;
    }

    $('#circles div').click(function ()
    {
        $('.slide').css("display", "none");
        $('#circles div').css({"background": "lightblue","height":"8px","width":"8px"});
        $(this).css({"background": "darkblue","height":"10px","width":"10px"});
        index = $(this).index();
        $(boxes[index]).animate({width: 'toggle'}, 1000);
    }
    );
});   