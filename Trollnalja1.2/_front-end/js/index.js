$(document).ready(function () {
    $( "#zaszloSk" ).click(function() {
        $('.sk').css("display", "block");
        $('.hu').css("display", "none");
    });
});

$(document).ready(function () {
    $( "#zaszloHu" ).click(function() {
        $('.sk').css("display", "none");
        $('.hu').css("display", "block");
    });
});

