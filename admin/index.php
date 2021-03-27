<?php
require_once '../connect.php';
require_once '../model/articles.php';
$connection = dbConnect();
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action =='add') {
        if (!empty($_POST AND $action == 'add')) {
             if (saveArticle($connection,$_POST)) {
                 header("Location:".$_SERVER['PHP_SELF']);
                 exit();
             }
             else {
                 header("Location:".$_SERVER['PHP_SELF']);
                 exit();
             }
        }
        require_once '../view/admin_article.php';
    }
    elseif($action == 'edit') {
        $id = (int)$_GET['id'];
        if (!empty($_POST) AND $id >0) {
           if(updateArticle($connection,$id,$_POST)) {
               header("Location:".$_SERVER['PHP_SELF']);
               exit();
           }
           else {
               header("Location:".$_SERVER['PHP_SELF']);
               exit();
           }
        }
        if (!empty($id) AND $id > 0) {
            $article = getArticle($connection,$id);
            require_once '../view/admin_article.php';
        }
    }
    elseif($action == 'remove'){
        $id = (int)$_GET['id'];
        if (!empty($id) AND $id >0){
            if (removeArticle($connection,$id)) {
                header("Location:".$_SERVER['PHP_SELF']);
                exit();
            }
            else {
                header("Location:".$_SERVER['PHP_SELF']);
                exit();
            }
        }
    }
}

else {
    $articles = getArticles($connection);
    require_once '../view/admin_articles.php';
}
