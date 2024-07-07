$(document).ready(function() {
    $('#tombolCari').hide()
    $('#keyword').on('keyup', function() {

        // mengunakan load 
        // $('#container').load('ajax/ajax.php?keyword=' + $('#keyword').val()) 

        $('.loader').show()


        //mengunakan $.get
        $.get('ajax/ajax.php?keyword=' + $('#keyword').val(), function(data) {
            $('#container').html(data)
            $('.loader').hide()
        })
    })
})