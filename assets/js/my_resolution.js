$(function() {
    $(".share-image").on("click", function() {
        copyToClipboard();
    });

    if (!isMobile) {
        $(".line-it-button").css({
            "margin-left": "70px",
            "margin-top": "-45px",
        });
    } else {
        $(".line-it-button").css({
            "margin-left": "70px",
            "margin-top": "-45px",
        });
    }
});

function copyToClipboard() {
    var clip = new Clipboard('.share-image');
}