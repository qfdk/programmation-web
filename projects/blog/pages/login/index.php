<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 必须的 meta 标签 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 的 CSS 文件 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>登录</title>
</head>

<body>
    <div class="container">
        <form action="post.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username">
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <button type="submit" class="btn btn-primary">登录</button>
        </form>
    </div>

</body>

</html>