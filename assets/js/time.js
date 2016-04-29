$(document).ready(function() {

    var divTime = $('.time');

    function setTime() {
        var date = new Date();
        var hour = date.getHours();
        var minute = date.getMinutes();
        if(minute < 10)
        	minute = '0' + date.getMinutes();
        var second = date.getSeconds();
        if(second < 10)
        	second = '0' + date.getSeconds();
        divTime.html(hour+':'+minute+':'+second);
    }

    setInterval(setTime, 1000);
});