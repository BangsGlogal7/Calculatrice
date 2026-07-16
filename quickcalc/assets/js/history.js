//recuperation des differents ID ID input pour la zone de recherche et l'article 
const searchInput = document.getElementById('searchInput');
const historyCards = document.querySelectorAll('.history-card');

//Appelle a l'évenement input pour la recherche de calcul

searchInput.addEventListener('input', ()=>{

    const search = searchInput.value;

    historyCards.forEach(card => {

        if (card.textContent.includes(search)) {
            card.style.display = "flex";
        }else {
            card.style.display = "none";
        }
        
    })
    
});
