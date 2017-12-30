var i = 0;
var txt = "";
var resolution = document.getElementsByClassName("type-your-resolution")[0];
$(function() {
    $(".share-image").on("click", function() {
        copyToClipboard();
    });

    txt = resolution.innerHTML;
    $(".type-your-resolution").html("").css("display", "block");
    typeWriter();
});

function copyToClipboard() {
    var clip = new Clipboard('.share-image');

    $(".notif").addClass("show");
    $(".notif").one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
        $(this).removeClass("show");
    });
}

function typeWriter() {
    if (i < txt.length) {
        resolution.innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, 100);
    }
}