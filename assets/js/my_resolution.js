$(function() {
    $(".share-image").on("click", function() {
        copyToClipboard();
    });
});

function copyToClipboard() {
    var clip = new Clipboard('.share-image');

    $(".notif").addClass("show");
    $(".notif").one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
        $(this).removeClass("show");
    });
}