$(document).ready(function() {

    $('#form-input').submit(function(e) {
        e.preventDefault();

        var id = $('#input').val().trim();

        $.ajax({
            url: 'insert-attendance.php',
            data: {'id': id},
            method: 'post',
            error: function(ex) {
                console.log(ex);
            },
            success: function(ex) {
                console.log('success:' + ex);
                showNotif();
                $('.attendance-message').html(ex);
            }
        });
        
    });

    function showNotif() {
        $('#input').val('');
        $('.attendance-message').css('visibility', 'visible');
        setTimeout(function() {
            $('.attendance-message').css('visibility', 'hidden');
            $('.attendance-message').html('');
        }, 5000);
    }
});