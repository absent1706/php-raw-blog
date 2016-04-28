<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
    <h1 class="page-header">All posts</h1>

    <?php foreach ($posts as $post): ?>
        <h2><a href="/posts/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
        <p><?php echo $post['body']; ?></p>
        <hr>
    <?php endforeach; ?>
</body>
</html>