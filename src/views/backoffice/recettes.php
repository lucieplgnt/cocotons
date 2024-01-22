<h1>Voici vos recette</h1>

<div class="recipes-container">
    <?php foreach ($recipes as $recipe): ?>
        <div class="recipe">
            <h3><?=$recipe['title']?></h3>
            <p><?=$recipe['description']?></p>
            <a href="/cocotons/backoffice/modifierrecette/<?=$recipe['id']?>">Modifier</a>
        </div>
    <?php endforeach; ?>
</div>

<a href="/cocotons/backoffice/modifierrecette/0">Ajouter</a>
