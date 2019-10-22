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

<form method="post">
    <input type="text" name="name" id="name" placeholder="name goes here">
    <br>
    <input type="text" name="title" id="title" placeholder="title of post goes here">
    <br>
    <input type="text" name="message" id="message" placeholder="message goes here">
    <br>

    <input type="submit" name="submit">
</form>

</body>
</html>

<?php


foreach ($allPosts AS $post): ?>   <!-- should show all posts once they're in the json file -->

    <b><?php echo $post->getTitle() ?></b>
    <p><?php echo $post->getDate() ?></p>
    <p><?php echo $post->getMessage() ?></p>
    <p><?php echo $post->getName() ?></p>

<?php endforeach; ?>