<?php
require_once 'connect.php';
require_once 'model/articles.php';
$connection = dbConnect();
$article = getArticle($connection, $_GET['id']);
require_once 'view/article.php';