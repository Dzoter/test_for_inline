<?php
require_once 'controllers/SearchController.php';
require_once 'helpers/Helpers.php';

$helpers = new Helpers;

if ($_GET){
    $searchController = new SearchController();
    $comments = $searchController->commentSearch();
}


$viewSearchForm = $helpers->includeTemplate('search.php',['comments'=>$comments]);

print $viewSearchForm;