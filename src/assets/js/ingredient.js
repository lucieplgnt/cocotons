function ajouterIngredient() {
    var input = document.getElementById("ingredientInput");
    var bubbleContainer = document.getElementById("ingredientBubbles");

    // Récupérer la valeur de l'input
    var nouvelIngredient = input.value;

    // Vérifier si l'input n'est pas vide
    if (nouvelIngredient.trim() !== "") {
        // Créer une nouvelle bulle d'ingrédient
        var nouvelleBulle = document.createElement("div");
        nouvelleBulle.className = "ingredient-bubble";

        // Ajouter le texte de l'ingrédient à la bulle
        var bulleTexte = document.createElement("span");
        bulleTexte.textContent = nouvelIngredient;

        // Ajouter le bouton "X" pour supprimer l'ingrédient
        var boutonSupprimer = document.createElement("span");
        boutonSupprimer.textContent = "X";
        boutonSupprimer.className = "supprimer-ingredient";
        boutonSupprimer.onclick = function () {
            bubbleContainer.removeChild(nouvelleBulle);
        };

        // Ajouter le texte et le bouton à la bulle
        nouvelleBulle.appendChild(bulleTexte);
        nouvelleBulle.appendChild(boutonSupprimer);

        // Ajouter la bulle à la liste
        bubbleContainer.appendChild(nouvelleBulle);

        // Effacer le contenu de l'input
        input.value = "";
    }
}

