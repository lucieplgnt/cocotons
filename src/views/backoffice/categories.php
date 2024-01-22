<h1>Catégories</h1>

<div class="categories-container">
    <?php foreach ($categories as $category): ?>
        <div class="category">
            <h3><?=$category['name']?></h3>
        </div>
    <?php endforeach; ?>
</div>

<form method="POST" action="/cocotons/categories/ajouter">
    <input type="text" name="name" />
    <button type="submit">Ajouter</button>
</form>
