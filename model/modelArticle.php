<?php



function requeteArticle(){
    try{
        $db = connectionDataBase();

        if(!empty($_POST['title']) && !empty($_POST['article'])){

            $title      = $_POST['title'];
            $article    = $_POST['article'];

            $requete = $db->prepare('INSERT INTO articles(title, article) VALUES(?,?)') or die(print_r($db->errorInfo()));
            $requete->execute(array($title,$article));

            header('location: index.php?poster');
            exit();
        }
    }
    catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
}


