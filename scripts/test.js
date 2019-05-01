var elementsArray = document.getElementsByTagName("h1");
var element = elementsArray[0];
var buttonElement = document.getElementById("title-button");
var isClicked = 0;
buttonElement.addEventListener("click", function () {
    if (isClicked == 0) {
        element.classList.add("yellow-text");
        element.classList.add("bordered-text");
        isClicked = 1;
    }
    else {
       element.classList.remove("yellow-text")
       element.classList.remove("bordered-text"); 
       isClicked = 0;
    }
});

