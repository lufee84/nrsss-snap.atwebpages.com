$(document).ready(function() {
    var obj = document.createElement("audio");
    obj.src = "http://www.bigsoundbank.com/sounds/ogg/0003.ogg";
    obj.volume = 0.1;
    obj.autoPlay = false;
    obj.preLoad = true;
    obj.controls = true;

    $(".playSound").click(function() {
        obj.play();
        // obj.pause();
    });
});