<h1>Utilisateurs</h1>

<div class="categories-container">
    <?php foreach ($users as $user): ?>
        <div class="category">
            <h3><?=$user['username']?></h3>
            <p>email : <?=$user['email']?></p>
            <p>role : <?=$user['role']?></p>
            <a href="/backoffice/modifierutilisateur/<?=$user['id']?>">Modifier</a>
        </div>
    <?php endforeach; ?>
</div>

<a href="/backoffice/modifierutilisateur/0">Ajouter</a>