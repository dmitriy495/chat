$(document).ready(function() {
    $('.r').click(function() {
        $('#register').fadeIn("slow");
        $('#login').fadeOut("slow");
    });
});
$(document).ready(function() {
    $('.l').click(function() {
        $('#login').fadeIn("slow");
        $('#register').fadeOut("slow");
    });
});

