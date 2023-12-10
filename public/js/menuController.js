let menuStatus = false;

const openButton = document.getElementById("openButton");
const closeButton = document.getElementById("closeButton");
const menu = document.querySelector("nav ul");
const main = document.querySelector("main");
const footer = document.querySelector("footer");


const menuController = () => {
    if(!menuStatus) {
        openButton.style.display = "none";
        closeButton.style.display = "inline-block";
        menu.style.display = "block";
        main.style.filter = "blur(5px)";
        footer.style.filter = "blur(5px)";
    }
    else {
        closeButton.style.display = "none";
        openButton.style.display = "inline-block";
        menu.style.display = "none";
        main.style.filter = "blur(0)";
        footer.style.filter = "blur(0)";
    }

    menuStatus = !menuStatus;
}

//Open - Close Button Click Event Listen
openButton.addEventListener("click", menuController);
closeButton.addEventListener("click", menuController);