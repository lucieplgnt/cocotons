<h1><?=$user ? 'Modifier' : 'Ajouter'?> un utilisateur</h1>

<form id="form-recipe" action="/utilisateur/<?=$user ? 'modifier' : 'ajouter'?>" method="POST">
    <input type="hidden" name="user_id" value="<?=$user['id'] ?>" />

    <label for="username">Pseudo :</label>
    <input type="text" name="username" value="<?=$user ? $user['username'] : ""?>" <?=$user ? 'disabled' : ''?> />

    <label for="email">Email :</label>
    <input type="email" name="email" value="<?=$user ? $user['email'] : ""?>" />

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" value="<?=$user ? $user['password'] : ""?>" <?=$user ? 'disabled' : ''?> />

    <label for="role">Rôle :</label>
    <input type="text" name="role" value="<?=$user ? $user['role'] : ""?>" />

    <Button type="submit"><?=$user ? 'Modifier' : 'Ajouter'?></Button>
</form>
<?php if ($user): ?>
<form id="detele-form" action="/utilisateur/supprimer" method="POST">
    <input type="hidden" name="user_id" value="<?=$user['id'] ?>" />
    <Button type="submit">Supprimer</Button>
</form>
<?php endif; ?>