var i = 0;
var txt = "";
var resolution = document.getElementsByClassName("type-your-resolution")[0];
var canvas, context;

$(function() {
    txt = resolution.innerHTML;

    canvas = $(".canvas")[0];
    context = canvas.getContext("2d");
    context.fillStyle = $(".section").css("background-color");
    context.fillRect(0, 0, 1080, 1920);

    var image = new Image();
    image.onload = function() {
        context.drawImage(image, 240, 100, 600, 203);
    };
    image.src = resolution_image_url;

    context.textAlign = "center";
    var font = $(".type-your-resolution").css("font-family");
    document.fonts.ready.then(function() {
        context.font = "110px '" + font + "'";
        context.fillStyle = $(".type-your-resolution").css("color");
        wrapText(txt, 540, 600, 950, 135);

        context.font = "25px century-gothic";
        context.fillStyle = "#FFFFFF";
        context.fillText("resolution.dnp-project.com", 540, 1850);
    });

    $(".share-image").on("click", function() {
        copyToClipboard();
    });

    $(".download-image").on("click", function() {
        this.href = canvas.toDataURL("image/jpeg", 1);
        this.download = "MyResolution.jpg";
    });

    $(".type-your-resolution").html("").css("display", "block");
    typeWriter();
});

function wrapText(text, x, y, maxWidth, lineHeight) {
    var words = text.split(' ');
    var line = '';
    var lineCount = 1;

    for (var n = 0; n < words.length; n++) {
        var testLine = line + words[n] + ' ';
        var metrics = context.measureText(testLine);
        var testWidth = metrics.width;
        if (testWidth > maxWidth && n > 0) {
            lineCount++;
        }
    }

    y = (1920 - (lineCount + 2) * lineHeight) / 2;

    for(var n = 0; n < words.length; n++) {
        var testLine = line + words[n] + ' ';
        var metrics = context.measureText(testLine);
        var testWidth = metrics.width;
        if (testWidth > maxWidth && n > 0) {
            context.fillText(line, x, y);
            line = words[n] + ' ';
            y += lineHeight;
        }
        else {
            line = testLine;
        }
    }

    context.fillText(line, x, y);
}

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