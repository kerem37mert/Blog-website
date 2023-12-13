const form = document.querySelector('.contact form');
const subject = document.querySelector('.contact form input[name="subject"]');
const name = document.querySelector('.contact form input[name="name"]');
const message = document.querySelector('.contact form textarea');
const email = document.querySelector('.contact form input[name="email"]');
const contactError = document.querySelector('.contact-error');

const formItem = [subject, name, message , email]; 


const errorControl = (error, message) => {
    if(!error) {
        contactError.style.display = "none";
        return true;
    }
    else {
        contactError.style.display = "block";
        contactError.innerHTML = message;
        return false;
    }
}

const emptyControl = () => {
    let error = 0;
    let errorMessage = "* Lütfen boş alan bırakmayınız.";

    formItem.forEach(item => {
        if(item.value == "") {
            item.style.borderColor = "#FF3333";
            error++;
        }
        else {
            item.style.borderColor = "#F0ECE5";
        }
    });

    return errorControl(error, errorMessage);
}

const lenControl = () => {
    let error = 0;
    let errorMessage = "";

    if(!(subject.value.length >= 5 && subject.value.length <= 100)) {
        errorMessage += "* Konu alanı 5 ile 100 karakter arası uzunlukta olmalıdır<br>";
        subject.style.borderColor = "#FF3333";
        error++;
    }
    else {
        subject.style.borderColor = "#F0ECE5";
    }

    if(!(name.value.length >= 5 && subject.value.length <= 50)) {
        errorMessage += "* İsim alanı 5 ile 50 karakter arası uzunlukta olmalıdır<br>";
        name.style.borderColor = "#FF3333";
        error++;
    } 
    else {
        name.style.borderColor = "#F0ECE5";
    }

    if(!(message.value.length >= 20 && message.value.length <= 500)) {
        errorMessage += "* Mesaj alanı 5 ile 500 karakter arası uzunlukta olmalıdır<br>";
        message.style.borderColor = "#FF3333";
        error++;
    }
    else {
        message.style.borderColor = "#F0ECE5";
    }

    if(!(email.value.length >= 5 && email.value.length <= 50)) {
        errorMessage += "* Email alanı 5 ile 50 karakter arası uzunlukta olmalıdır<br>";
        email.style.borderColor = "#FF3333";
        error++;
    }
    else {
        email.style.borderColor = "#F0ECE5";
    }

    return errorControl(error, errorMessage);
}

const control = (e) => {
    e.preventDefault();
    if (emptyControl()) {
        if(lenControl()) {
            form.submit();
        }
    }
}


//Form Submit Listen
form.addEventListener("submit", control);