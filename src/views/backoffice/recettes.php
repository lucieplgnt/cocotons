<h1>Voici vos recette</h1>

<div class="recipes-container">
    <?php foreach ($recipes as $recipe): ?>
        <div class="recipe">
            <h3><?=$recipe['title']?></h3>
            <p><?=$recipe['description']?></p>
        </div>
    <?php endforeach; ?>
</div>

<a href="/cocotons/backoffice/ajouterrecette">Ajouter</a>
