<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style rel="stylesheet" type="text/css">
        .container {
            width: 1170px;
            margin:0 auto
        }
        .article {
            border: 2px solid coral;
            margin:10px 0;
        }
        .edit a {
            color: darkblue;
            font-size: 24px;
        }
        .remove a {
            color: darkred;
            font-size: 24px;
        }
    </style>
</head>
<body>
  <div class="container">
      <a href="<?=$_SERVER['PHP_SELF']. '?action=add'?>">Add article</a>
      <? foreach($articles as $article) :?>
      <div class="article">
          <div class="name"><?=$article['title']?></div>
          <div class="date"><?=$article['date']?></div>
          <div class="edit"><a href="<?=$_SERVER['PHP_SELF'].'?action=edit&id='.$article['id']?>">Edit</a></div>
          <div class="remove"><a href="<?=$_SERVER['PHP_SELF'].'?action=remove&id='.$article['id']?>">Remove</a></div>
      </div>
      <?php endforeach; ?>
  </div>
</body>
</html>
