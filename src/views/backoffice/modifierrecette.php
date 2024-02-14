<h1><?=$recipe ? 'Modifier' : 'Ajouter'?> une recette</h1>

<form id="form-recipe" action="/recettes/<?=$recipe ? 'modifier' : 'ajouter'?>" method="POST">
    <input type="hidden" name="recipe_id" value="<?=$recipe['id'] ?>" />
    <label for="title">Titre :</label>
    <input type="text" name="title" value="<?=$recipe ? $recipe['title'] : ""?>" />
    <label for="category">Catégorie :</label>
    <select name="category">
        <?php foreach ($categories as $category):?>
            <option
            value="<?=$category['id']?>"
            <?=($recipe && $recipe['category'] == $category['id']) ? 'selected' : ''?>
            >
                <?=$category['name']?>
            </option>
        <?php endforeach; ?>
    </select>
    <label for="description">Description :</label>
    <textarea name="description" rows="3">
<?=$recipe ? $recipe['description'] : '' ?>
    </textarea>
    <label for="content">Contenu :</label>
    <textarea name="content" rows="10">
<?=$recipe ? $recipe['content'] : '' ?>
    </textarea>
    <Button type="submit"><?=$recipe ? 'Modifier' : 'Ajouter'?></Button>
</form>
<?php if ($recipe): ?>
<form id="detele-form" action="/recettes/supprimer" method="POST">
    <input type="hidden" name="recipe_id" value="<?=$recipe['id'] ?>" />
    <Button type="submit">Supprimer</Button>
</form>
<?php endif; ?>