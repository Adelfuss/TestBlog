<?php
require_once 'connect.php';
require_once 'model/articles.php';
$connection = dbConnect();
$articles = getArticles($connection);
require_once 'view/articles.php';