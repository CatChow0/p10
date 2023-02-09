<?php

class takeinfo {
    function __construct($db){
        $this->db = $db;
    }
    function getArticle($art){
        $idauthor = "SELECT * FROM article a INNER JOIN user u ON a.id_auteur = u.id_user WHERE article = $art";
        $stm = $this->db->prepare($idauthor);
        $stm->execute(array($art));
        return $stm->fetchAll();
    }
}
?>