var isClicked2 = 0;
$("#title2-button").click(function () {
    if (isClicked2 == 0) {
        $("#title2").css("color", "yellow");
        isClicked2 = 1;
    } 
    else {
        $("#title2").css("color", "black");
        isClicked2 = 0;
    }
});
$("#animated-image-button").click(function () {
    $("#storeHoursPic").animate({left: '250px'});
});


