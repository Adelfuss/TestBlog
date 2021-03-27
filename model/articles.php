<?php
function getArticles($connection){
     $query = "SELECT * FROM articles ORDER BY id";
     if ($queryResult = mysqli_query($connection, $query)) {
         $articles = [];
         while ($row = mysqli_fetch_array($queryResult,MYSQLI_ASSOC)) {
             $articles[] = $row;
         }
         return array_reverse($articles);
     }
     return false;
}

function getArticle ($connection, $articleId) {
    $query = "SELECT * FROM articles WHERE id = $articleId";
    $result = mysqli_query($connection,$query);
    if ($result) {
        $article = mysqli_fetch_assoc($result);
        return $article;
    }
    return false;
}
function saveArticle ($connection,$post){
    $stmt = mysqli_prepare($connection, "INSERT INTO articles  VALUES (null,?, ?, ?)");
    $clearData = clear($connection,$post);
    mysqli_stmt_bind_param($stmt, 'ssb', $clearData['title'], $clearData['date'], $clearData['content']);
    if (mysqli_stmt_execute($stmt)) {
        return true;
    }
    return false;
}
function clear ($connection,$post) {
    foreach ($post as $key => $item) {
        $post[$key] = mysqli_real_escape_string($connection,$post[$key]);
    }
    return $post;
}
function updateArticle ($connection,$id,$post) {
   $id = (int)mysqli_real_escape_string($connection,$id);
   $clearData = clear($connection,$post);
   $query = "UPDATE articles SET title=? , date ='{$clearData['date']}', content = ? WHERE id = ?";
   $stmt = mysqli_prepare($connection,$query);
   mysqli_stmt_bind_param($stmt,'ssi',$clearData['title'],$clearData['content'],$id);
    if (mysqli_stmt_execute($stmt)) {
        return true;
    }
    return false;
}
function removeArticle($connection,$id){
   $query = "DELETE FROM articles WHERE id = $id";
   return mysqli_query($connection,$query);
}