<h1>Catégories</h1>

<div class="categories-container">
    <?php foreach ($categories as $category): ?>
        <div class="category">
            <h3><?=$category['name']?></h3>
        </div>
    <?php endforeach; ?>
</div>

<form method="POST" action="/categories/ajouter">
    <input type="text" name="name" required />
    <button type="submit">Ajouter</button>
</form>
