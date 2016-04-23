$(document).ready(function() {

    $('#select-emp').on('change', function() {
        var id = $('#select-emp').val();
        if(id != -1) {
            $.ajax({
                url: 'admin-ajax.php',
                data: {'id': id},
                method: 'post',
                error: function(ex) {
                    console.log(ex);
                },
                success: function(ex) {
                    var data = JSON.parse(ex);
                    
                    $('#table-attend-body').empty();

                    var rows = [''];
                    for(var i = 0; i < data.length; i++) {
                        rows[i] =   '<tr>' +
                                        '<td>' +
                                            data[i].time_in +
                                        '</td>' +
                                        '<td>' +
                                            data[i].time_out +
                                        '</td>'
                                    '</tr>';
                    }
                    $('#table-attend-body').append(rows);
                }
            });
        }
        else {
            $('#table-attend-body').empty();
            var row =   '<tr>' +
                            '<td colspan="2">No data</td>' +
                        '</tr>';
            $('#table-attend-body').append(row);
        }
    });

});