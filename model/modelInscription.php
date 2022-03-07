<?php

include('modelDb.php');


function inscription(){

    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password'])){

        $db = connectionDataBase();

        $pseudo             = $_POST['pseudo'];
        $email              = $_POST['email'];
        $password           = $_POST['password'];
       

        //Requete d'inscription
        $requete = $db->prepare('INSERT INTO utilisateurs(pseudo, email, password) VALUES(?,?,?)') or die(print_r($db->errorInfo()));
        $requete->execute(array($pseudo, $email, $password));

        header('location: index.php?validate');
        exit();

    }

}

