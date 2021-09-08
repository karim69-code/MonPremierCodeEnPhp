<?php

    class Utilisateur
{
    //je creer un utilisateur avec des caracteristique pour qu'il puissent s inscrire
    public $_nom ;
    private $_prenom;
    private $_email;
    private $_motsdepasse;     
    public function __construct ($nom,$prenom,$email,$motsdepasse)
    //j'assigne mon objet en php
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_email = $email;
        $this->_motsdepasse = $motsdepasse;
        
    }
    //je lui met une function destruction
    public function __destruct()
    {
       // echo'j'ai disparut :';
    }
    //je creer une nouvelle methode pour que l'humain puisse retirer 
    //de l'argent de son portefeuille objet deja creer
    //je peux utiliser des gets et sets
    public function Inscription($jeMetsMonNom)
    {
        $this->_nom = $this-> $jeMetsMonNom;
        echo $this->_nom . '<br/>'; 
    }
    public function Connexion($jeMetsMonMotsdePasse)
    {
        $this->_Connexion= $this->_portefeuille + $ArgentRajouter;
        echo $this->_quantiteArgent . '<br/>'; 
    }
    public function ChangerDeMarques($nouvellesMarques)
    {
        $this->_marque = $nouvellesMarques;
        echo $this->_marque . '<br/>';
    }
    public function RajouterArgent($NouvelleSomme)
    {
        $this->_quantiteArgent = $this->_quantiteArgent + $NouvelleSomme;
        echo $this->_quantiteArgent . '<br/>'; 
  
  
  
    }




    
}





//si aucun donner n est rentrer dans le formulaire je n envoi
//pas un formulaire vide sinon tu peux renvoyer
//donc si j'ai pas rentrer de donner avec $_POST
if (empty($_POST["nom"]) || empty($_POST["prenom"] )
|| empty($_POST["email"]) || empty($_POST["motsdepasse"]))

{


    var_dump($_POST);
    //var_dump($_SESSION,"test1");
   //session_destroy();
   // var_dump($_SESSION,"test2");die();
    //la fonction header me permet de revenir a la page formulaire
    //le unset me permet de vider toute la variable
    //unset($_SESSION);
   // header('Location: index.php');
   
}
//je sors de la condition avec else en rentrant les donnes et les stockant 
//dans la session
else
{   
    var_dump($_POST);
    //je redemmare ma session
     session_start();
    $_SESSION["inscription"]=$_POST;
    var_dump($_SESSION);
    
    //toutes ces donnes sont chargers dans la base de donner 
   //je te renvoi donc  le formulaire de connexion 
  //avec le mots de passe et email
  // vers le formulaire de connexion
   //header('Location: index.php');
    
}


//j utilise le fichier utilisateur .php 
//la fonction ci dessus me permettre de voir les donnes 
//var_dump ($_POST,$_POST["nom"]);die();
//je vais socker dans une session les donnes 
//var_dump($_POST);
//j'ai recuperer grace au $post mes donnes entre dans le formulaire
//et maintenant j ai besoin de les figers dans le $ session donc:
//j ai tous vider avec le session detroy
//session_destroy();

















