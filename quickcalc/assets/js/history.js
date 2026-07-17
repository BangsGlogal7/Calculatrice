
//----------------------------- Les Variables --------------------//
//--------------------------------------------------------------//

// Sélectionne le champ de recherche
const searchInput = document.getElementById('searchInput');

// Sélectionne toutes les cartes de l'historique
const historyCards = document.querySelectorAll('.history-card');

// Sélectionne le message "Aucun calcul trouvé"
const emptySearch = document.getElementById('emptySearch');

// Sélectionne tous les boutons de suppression
const deleteButon = document.querySelectorAll('.delete-btn');

//----------------------------- les functions --------------------//
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

//-----------------------------Les Evenements --------------------//
//--------------------------------------------------------------//

// Écoute chaque modification dans le champ de recherche

searchInput.addEventListener('input', ()=>{

    //Recupère le texte saisi et le met en minuscule
    const search = searchInput.value.toLowerCase();

    // Compte le nombre de cartes encore visibles
    const visibleCount = 0;
    
    //Parcourir toutes les cartes
    historyCards.forEach(card => {

        // Récupère le texte de la carte en minuscule
        const text = card.textContent.toLocaleLowerCase();

        // Vérifie si la carte contient le texte recherché
        if (text.includes(search)) {

            // Affiche la carte
            card.style.display = "flex";

            // Incrémente le compteur
            visibleCount++;
        }else {
            // Cache la carte
            card.style.display = "none";

        }
    })
    //appelle de la fonction pour visibilité
    updateEmptyState();
    
    
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
