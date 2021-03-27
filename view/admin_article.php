<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <form method="post" action="<?=$_SERVER['PHP_SELF'] . '?action='.$_GET['action'] .'&id='.$_GET['id']?>">
      Title:<input type="text" name="title" value="<?=$article['title']?>">
      Content: <textarea name="content"><?=$article['content']?></textarea>
      Date: <input type="date" name="date" value="<?=$article['date']?>">
      <input type="submit">
  </form>
</body>
</html>
