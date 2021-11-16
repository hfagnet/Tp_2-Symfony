<?php

require_once('database.php');


/** Doit contenir les méthodes pour  traiter les commentaires d'un poste
 * Rappel : Le modèle fait appel à la base de donner.
 * Il doit donc contenir les requêtes et s'occuper au maximum du traitement des données
 */


function getinfopost($postId)
{
        $db = initDatabse();
        $table = $db->prepare('SELECT * FROM posts  WHERE id =' .$postId);
        $table->execute();
        $table_bdd = $table->fetchall();
        return $table_bdd;
}

function getComment($postId)
{
        $db = initDatabse();
        $table = $db->prepare('SELECT * FROM comments WHERE post_id =' .$postId);
        $table->execute();
        $table_bdd = $table->fetchall();
        return $table_bdd;
}

?>