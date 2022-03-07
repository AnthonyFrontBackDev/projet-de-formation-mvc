<?php
require('./controller/controller.php');

try{
    if (isset($_GET['validate'])) {

        connect();
        
    }
    else if(isset($_GET['goArticle'])){

        article();

    }
    else if(isset($_GET['poster'])){
        article();
    }
   
    else{

        accueil();
    }
}
catch(Exception $e){

    die('Erreur : ' . $e->getMessage());

}

