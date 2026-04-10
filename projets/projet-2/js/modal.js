document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById("pokedexmodal");
    const modalImg = document.getElementById("grossimage");
    const captionText = document.getElementById("caption");
    const spanFermer = document.getElementsByClassName("fermeturemodal")[0];

    const imagesPokemon = document.querySelectorAll('.img-container img');

    imagesPokemon.forEach(img => {
        img.style.cursor = "pointer";
        img.addEventListener('click', function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        });
    });

    spanFermer.onclick = function() {
        modal.style.display = "none";
    }
    
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});