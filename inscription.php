<?php
//demarrer la session en apelant le fichier de session une seule fois 
require_once("sessionStart.php"); 
?>
<nav>
    <ul>
        <li>
            <a href="index.php">Accueil</a>   
        </li>
        <li>
            <a href="connexion.php">Connexion</a>   
        </li>
        <li>
            <a href="inscription.php">Inscription</a>   
        </li>
    </ul>
</nav>
<main>
<?php
//je verifie que j'ai pas cliquer sur le bouton inscription
if(!isset($_POST["inscription"]))
{
    include ("formulaireInscription.php");  
} 
else
{
    $error = []; //variable d un tableau
    if(empty($_POST["nom"]))
    {
        array_push($error, "Nom");//envoyer une donner a la fin du tableau si le champs nom n est pas remplit
    }
    if(empty($_POST["prenom"]))
    {
        array_push($error, "Prenom");
    }

    if(empty($_POST["email"]))
    {
        array_push($error, "Email");
    }

    if(empty($_POST["motDePasse"]))
    {
        array_push($error, "Mot de passe");
    }

    if(count($error))//il verifie si ya au moins une   valeur dans le tableau error (= a if(count($error) === true))
    {
        include ("formulaireInscription.php");
    }
    else
    {
        //action avec la class utilisateur et la class session
        //$utilisateur = [0 => ["profil" => ["nom" => $_POST["nom"], "prenom"=> $_POST["prenom"]]]];
        //$utilisateur["profil"]["nom"] = "pere noel";
       // var_dump($utilisateur);
        //$utilisateur[0]["profil"]["nom"] = "pere noel";
       // var_dump($utilisateur);
        //unset($utilisateur[0]["profil"]);
        //$utilisateur = NULL;
        //var_dump($utilisateur);
        //var_dump($utilisateur);



        //action a effectue a la fin apres validation et des actions de class
        $_POST = NULL;
        $valid = 'Enregistrement effectue';
        include ("formulaireInscription.php");
    }





}
?>
</main>