<?php

include_once('./model/modelDb.php');

function co()
{
    try {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {

            $db = connectionDataBase();

            $email = $_POST['email'];
            $password = $_POST['password'];

            $requete = $db->prepare('SELECT * FROM utilisateurs WHERE email = ?') or die(print_r($db->errorInfo()));
            $requete->execute(array($email));

            while ($utilisateur = $requete->fetch()) {
                if ($password != $utilisateur) {
                    header('location: index.php?error');
                }
            }
            header('location: index.php?goArticle');
            exit();
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}