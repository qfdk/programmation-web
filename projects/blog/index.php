<?php
require_once "./utiles/connection.php";
function myLogger($data)
{
    echo "<pre>";
    print_r($data);
    echo  "</pre>";
}

$dbh = db_connection("php.qfdk.me", "php", "php", "php2*2*");

$sth = $dbh->prepare("SELECT id, title, content FROM article");
$sth->execute();

?>



<!doctype html>
<html lang="zh-CN">

<head>
    <!-- 必须的 meta 标签 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 的 CSS 文件 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">XXX's blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Index</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/article/index.php">添加文章</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/login/index.php">登录</a>
                    </li>

                    <!-- lucky button - js -->
                    <!-- <li class="nav-item">
            <a class="nav-link" id="random" href="#">Lucky button</a>
          </li> -->
                    <!-- <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> -->
                </ul>
                <form class="d-flex" action="utiles/random.php" method="get">
                    <button class="btn btn-outline-light" type="submit">抽签</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php
        if ($sth->rowCount() == 0) {
        }
        while ($row = $sth->fetch()) {
        ?>

            <div class="accordion" id="accordion<?php echo $row['id']; ?>">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?php echo $row['id']; ?>">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $row['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $row['id']; ?>">
                            <?php echo $row['id']; ?> : <?php echo $row['title']; ?>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $row['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $row['id']; ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?php echo $row['content']; ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        $sth->closeCursor();
        ?>
    </div>



    <!-- 选项 1：包含 Popper 的 Bootstrap 集成包 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/public/javascript/application.js"></script>
</body>

</html>