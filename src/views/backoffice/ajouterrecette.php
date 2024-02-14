<h1>Ajouter une recette</h1>

<form id="form-recipe" action="/backoffice/addrecipe" method="POST">
    <label for="title">Titre :</label>
    <input type="text" name="title" />
    <label for="category">Catégorie :</label>
    <select name="category">
        <?php foreach ($categories as $category):?>
            <option value="<?=$category['id']?>"><?=$category['name']?></option>
        <?php endforeach; ?>
    </select>
    <label for="description">Description :</label>
    <textarea name="description" rows="3"></textarea>
    <label for="content">Contenu :</label>
    <textarea name="content" rows="10"></textarea>
    <Button type="submit">Ajouter</Button>
</form>
