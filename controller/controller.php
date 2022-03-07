<?php 

require('./model/modelInscription.php');
require('./model/modelConnection.php');
require('./model/modelArticle.php');
require('./model/modelAffichageArticle.php');


function accueil() {
    $requete = inscription();
    $affichage = affichageArticle();
    require('./views/articleAffichageViews.php');
    require('./views/inscriptionView.php');
}

function connect(){
    $requete = co();
    $affichage = affichageArticle();
    require('./views/articleAffichageViews.php');
    require('./views/connectionView.php');
}

function article(){
    $requete = requeteArticle();    
    $affichage = affichageArticle();
    require('./views/articleAffichageViews.php');
    require('./views/articleView.php');

}
