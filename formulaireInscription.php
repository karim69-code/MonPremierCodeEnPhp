<h1> Mon Formulaire d'inscription </h1>
<form action="" method="post">
<p>Votre nom : <input type="text" name="nom" 
value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>"/></p>  <!-- si Post nom existe il affiche dans le value -->  
<p>Votre prenom : <input type="text"
name="prenom" value="<?php if(isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>"/></p>
<p>Votre email : <input type="email"
name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" /></p>
<p>Votre mot de passe : <input type="password" value="<?php if(isset($_POST['motDePasse'])) { echo $_POST['motDePasse']; } ?>" 
name="motDePasse"/></p>

<p><input type="submit" values="ok" name="inscription"></p>
</form>
<?php
if(isset($error) && count($error))
{
    echo 'champs manquant : <br><ul>';
    foreach($error as $value)
    {
        echo '<li>' . $value . "</li>";
    }
    echo '</ul>';
}
if(isset($valid)) //si pas d erreur l enregistrement sera valider
{
    echo '<h2>' . $valid . '</h2>';
}