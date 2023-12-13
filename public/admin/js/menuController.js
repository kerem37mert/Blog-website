const openButton = document.querySelector("nav .open-button");
const aside = document.querySelector("aside");

const control = () => {
    if (aside.style.display != "none") {
        aside.style.display = "none";
    } else {
        aside.style.display = "block";
    }
}

//Button Listen
openButton.addEventListener("click", control);