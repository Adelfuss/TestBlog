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
        .article__title {
            margin-bottom: 10px;
            margin-top: 20px;
        }
        .article__date {
            margin-bottom: 10px;
        }
        .article__title-link {
            text-decoration: none;
            font-size: 36px;
            color: aqua;
            font-weight: 700;
        }
    </style>
</head>
<body>
<div class="container">

        <div class="article">
            <div class="article__title"><?=$article['title']?></div>
            <div class="article__date"><?=$article['date']?></div>
            <div class="article__content"><?=$article['content']?></div>
        </div>

</div>
</body>
</html>

