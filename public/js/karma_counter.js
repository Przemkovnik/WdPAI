const likeButtons = document.querySelectorAll(".lni-smile");
const dislikeButtons = document.querySelectorAll(".lni-sad");

function giveLike() {
    const likes = this;     
    const container = likes.parentElement.parentElement.parentElement.parentElement;

    const id = container.getAttribute("id");

    fetch(`/like/${id}`)    
        .then(function () { 
            likes.innerHTML = parseInt(likes.innerHTML) + 1;
        })
}

function giveDislike() { 
    const dislikes = this;
    const container = dislikes.parentElement.parentElement.parentElement.parentElement;

    const id = container.getAttribute("id");

    fetch(`/dislike/${id}`)
        .then(function () {
            dislikes.innerHTML = parseInt(dislikes.innerHTML) + 1;
        })

}

likeButtons.forEach(button => button.addEventListener("click", giveLike));  
dislikeButtons.forEach(button => button.addEventListener("click", giveDislike));