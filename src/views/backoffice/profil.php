<h1>Mon profil</h1>

<label for="username">Pseudo :</label>
<input type="text" name="username" value="<?=$user ? $user['username'] : ""?>" />

<label for="email">Email :</label>
<input type="email" name="email" value="<?=$user ? $user['email'] : ""?>" />

<label for="password">Mot de passe :</label>
<input type="password" name="password" value="<?=$user ? $user['password'] : ""?>" />

<label for="role">Rôle :</label>
<input type="text" name="role" value="<?=$user ? $user['role'] : ""?>" />
