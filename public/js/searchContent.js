const searchInput = document.querySelector('input[name="s"]');

const searchAPI = async () => {
    const url = `/site/operation/search?s=${searchInput.value}`;

    try {
        const response = await fetch(url);

        if(response.ok) {
            const data = response.json();
            return data;
        }
        else {
            throw new Error(`HTTP hatası! Durum kodu: ${response.status}`);
        }
    }
    catch(e) {
        console.log(e);
    }
}


const search = () => {
    const searchMenu = document.getElementById("searchMenu");

    if (searchInput.value.length >= 3) {
        searchMenu.style.display = "block";
        searchMenu.innerHTML = "";

        const dataPromise = searchAPI();
        dataPromise.then(data => {
            if (data.length > 0) {
                const ul = document.createElement("ul");

                data.forEach(item => {
                    const li = document.createElement("li");
                    const a = document.createElement("a");

                    a.innerHTML = item.content_title;
                    a.setAttribute("href", `${item.content_url}`);

                    li.appendChild(a);
                    ul.appendChild(li);
                });
                searchMenu.appendChild(ul);

            } else {
                const notFound = document.createElement("div");
                notFound.setAttribute("class", "not-found");
                notFound.innerText = "Bulunamadı";

                searchMenu.appendChild(notFound);
            }
        });
    } else {
        searchMenu.style.display = "none";
    }
}

searchInput.addEventListener("input", search);