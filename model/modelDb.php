<?php

function connectionDataBase(){

    try{
        $db = new PDO('mysql:host=localhost;dbname=ecf_alampi;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        return $db;
    }
    catch(PDOException $e){
        die('Erreur : ' . $e->getMessage());
    }
}
