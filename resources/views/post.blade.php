<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css">
    <title>Post</title>
</head>

<body>

    <article>
        <h2> <?= $post->title ?></h2>
        <div> <?= $post->body ?> </div>
        <a href="/">Go back</a>
  </article>

</body>

</html>
