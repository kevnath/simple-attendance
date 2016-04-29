$(document).ready(function() {

    var divTime = $('.time');

    function setTime() {
        var date = new Date();
        divTime.html( date.getHours()+":"+date.getMinutes()+":"+date.getSeconds());
    }

    setInterval(setTime, 1000);
});