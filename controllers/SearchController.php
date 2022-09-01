<?php


class SearchController
{
    public function commentSearch()
    {
        $commentLikeSearch = $_GET['likeSearch'];
        $commentFullTextSearch = $_GET['fullTextSearch'];
        $db = require('BDConnect.php');
        if (mb_strlen($commentLikeSearch) >= 3) {

            $query = $db->prepare("SELECT * FROM `comments` WHERE `body` LIKE :search");

            $query->execute(array('search' => '%'.$commentLikeSearch.'%'));

            return $query->fetchAll(PDO::FETCH_ASSOC);

        }

        if (mb_strlen($commentFullTextSearch) >= 3) {

            $query = $db->prepare("SELECT * FROM `comments` WHERE MATCH(body) AGAINST (:search)");

            $query->execute(array('search' => $commentFullTextSearch));

            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        return false;
    }


}