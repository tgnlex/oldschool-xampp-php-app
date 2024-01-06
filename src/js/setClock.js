$(document).ready(function() {
    setInterval(timestamp, 1000);
});

function timestamp() {
    $.ajax({
        url: 'http://localhost/website/src/php/time.php',
        success: function(data) {
            $('#clock').html(data);
        },
    });
}