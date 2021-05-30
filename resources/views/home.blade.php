<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css">
    <title>Blog</title>
</head>

<body>

    <h2> Welcome </h2>

    <?php foreach ($posts as $post): ?>
    <article>
        <h2> <?= $post->title ?> </h2>
        <p><?= $post->excerpt ?></p>
    </article>

    <?php endforeach; ?>
</body>

</html>
