const search = document.querySelector('input[placeholder="Wyszukaj członka personelu"]');
const personnelContainer = document.querySelector(".wrapper-personnel");

search.addEventListener("keyup", function (event) {
    if(event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};

        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
            
        }).then(function (response) {
            return response.json();

        }).then(function (personnels) {
            personnelContainer.innerHTML = "";
            loadPersonnels(personnels)
        });
    }
});

function loadPersonnels(personnels) {
    personnels.forEach(personnel => {
        console.log(personnel);
        createPersonnel(personnel);
    })
}

function createPersonnel(personnel) {
    const template = document.querySelector("#personnel-template");

    const clone = template.content.cloneNode(true)

    const image = clone.querySelector("img");
    image.src = `/public/img/personnel/${personnel.image}`;

    const title = clone.querySelector(".pname");
    title.innerHTML = personnel.title;

    const description = clone.querySelector(".description");
    description.innerHTML = personnel.description;

    const specialisation = clone.querySelector(".specialisation");
    specialisation.innerHTML = personnel.specialisation;

    const like = clone.querySelector(".lni-smile");
    like.innerText = personnel.like;

    const dislike = clone.querySelector(".lni-sad");
    dislike.innerText = personnel.dislike;

    personnelContainer.appendChild(clone);
}