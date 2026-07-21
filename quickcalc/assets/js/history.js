
//----------------------------- Les Variables --------------------//
//--------------------------------------------------------------//

// Sélectionne le champ de recherche
const searchInput = document.getElementById('searchInput');
// Sélectionne le message "Aucun calcul trouvé"
const emptySearch = document.getElementById('emptySearch');
// Sélectionne tous les boutons de suppression
const deleteButon = document.querySelectorAll('.delete-btn');
// Selectione le button "vider l'historique"
const clearHistoryBtn = document.getElementById('clearHistory')

//-----------------------------les functions --------------------//
//--------------------------------------------------------------//

// Vérifie si l'historique est vide

function updateEmptyState() {

    // Récupère toutes les cartes encore présentes dans la page
    const historyCards = document.querySelectorAll('.history-card');

    // Vérifie s'il reste au moins une carte
    if (historyCards.length === 0) {

        // Affiche le message "Aucun calcul trouvé"
        emptySearch.style.display = "block";
    }else {
        // Cache le message
        emptySearch.style.display = "none";
    }

}

// Filtre les cartes selon le texte saisi

function filterHistory() {

    // Récupère toutes les cartes actuellement présentes
    const historyCards = document.querySelectorAll(".history-card");
    // Récupère le texte saisi dans le champ de recherche
    const search = searchInput.value.toLowerCase();
    //compteur des cartes visibles
    let visibleCount = 0;
    
    //parcours toutes les cartes
    historyCards.forEach(card => {

        // Récupère le texte de la carte en minuscule
        const text = card.textContent.toLowerCase();
        
        //Vérifie si la carte contient le text recherché
        if (text.includes(search)) {
            //Affiche la carte
            card.style.display = "flex";
            // imcrement le compteur
            visibleCount++;
        }else {
            // cache la carte 
            card.style.display = "none";
        }
    });
    updateSearchState(visibleCount);
}

// Met à jour l'affichage du message de recherche
function updateSearchState(visibleCount) {
    // Vérifie si aucune carte n'est visible
    if (visibleCount === 0) {

        // Affiche le message
        emptySearch.style.display = "block";

    } else {

        // Cache le message
        emptySearch.style.display = "none";

    }
}

// Supprime toutes les cartes de l'historique
function clearHistory() {

    // Demande une confirmation à l'utilisateur
    const confirmation = confirm("Voulez-vous vraiment supprimer tout l'historique ?");

    // Vérifie si l'utilisateur a confirmé
    if (!confirmation) {
        return;
    }

    // Récupère toutes les cartes actuellement présentes
    const historyCards = document.querySelectorAll(".history-card");

    // Parcourt toutes les cartes
    historyCards.forEach(card => {

        // Supprime la carte
        card.remove();

    });

    // Met à jour l'état de l'historique
    updateEmptyState();

}
//-----------------------------Les Evenements --------------------//
//--------------------------------------------------------------//

// Écoute chaque modification dans le champ de recherche

searchInput.addEventListener('input', ()=>{
    filterHistory();     
});

// Parcourt tous les boutons

deleteButon.forEach(button =>{
    button.addEventListener('click', ()=>{

        // Recherche la carte associée au bouton
        const card = button.closest('.history-card');

        // Demande une confirmation à l'utilisateur
        const confirmation = confirm("Voulez-vous vraiment supprimer ce calcul ?");
        
        // Vérifie si l'utilisateur a confirmé la suppression
        if (confirmation) {
           // Supprime la carte
            card.remove();
            // Vérifie si l'historique est vide
            updateEmptyState();
        }
    });
   
});

//lance la suppression de tout l'hisotrique 
clearHistoryBtn.addEventListener('click', ()=>{
    clearHistory();
});