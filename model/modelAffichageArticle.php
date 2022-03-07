<?php

function affichageArticle()
{

    try {

        $db = connectionDataBase();
        $requete = $db->query('SELECT * FROM articles ORDER BY id DESC');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $requete;
}