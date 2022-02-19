<?php
require_once('../../utiles/security.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 必须的 meta 标签 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 的 CSS 文件 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>添加文章</title>
</head>

<body>
    <div class="container">
        <form action="post.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" rows="3" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">add</button>
        </form>
    </div>

</body>

</html>