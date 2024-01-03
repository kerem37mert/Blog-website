const body = document.querySelector("body");

const randomPosition = () => {
    return Math.random() * 99;
}

const randomSize = () => {
    return Math.random() * 2.5 + 5;
}

const createSnow = () => {
    const snow = document.createElement("div");
    const size = randomSize();
    snow.style.backgroundColor = "#fff";
    snow.style.width = `${size}px`;
    snow.style.height = `${size}px`;
    snow.style.borderRadius = "100%";
    snow.style.position = "absolute";
    snow.style.top = "10px";
    snow.style.left = `${randomPosition()}%`;
    body.append(snow);

    return snow;
}


const moveSnow = (snow) => {
    setInterval(() => {

        const currentPosition = parseFloat(snow.style.top);
        snow.style.top = `${currentPosition + 10}px`;

        if(currentPosition >= body.offsetHeight - 10) {
            snow.style.display = "none";
        }

    }, 100);
}

randomSize();
setInterval(() => moveSnow(createSnow()), 250);