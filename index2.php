<?php

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stutti - 勉強会グループ募集</title>
    <!-- BootstrapのCSSをリンク -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- 外部CSSファイルをリンク -->
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <!-- ヘッダー -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand header-logo" href="#">Stutti</a>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="btn btn-outline-warning mx-2" href="mypage.php">勉強会を作る</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-warning mx-2" href="mypage.php">マイページ</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-warning mx-2" href="mypage.php">ログアウト</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light mx-2" href="login.php">ログイン</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-light mx-2" href="register.php">会員登録</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- メインコンテンツ -->
    <main class="container my-5">
        <div class="row justify-content-center">
            <!-- サイドバー（左側） -->
            <aside class="col-md-3 sidebar">
                <section>
                    <h5>勉強会一覧</h5>
                    <ul class="list-group mb-4">
                        <li class="list-group-item">
                            <a class="btn btn-primary mx-2" href="group.php">すべて表示</a>
                        </li>
                        <li class="list-group-item">AWS勉強会</li>
                        <li class="list-group-item">PHP勉強会</li>
                    </ul>
                </section>

                <section>
                    <h5>tutti広場一覧</h5>
                    <ul class="list-group">

                        <li class="list-group-item">
                            <a class="btn btn-primary mx-2" href="tutti.php">AWS</a>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-primary mx-2" href="tutti.php">PHP</a>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-primary mx-2" href="tutti.php">データベース</a>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-primary mx-2" href="tutti.php">技術全般</a>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-primary mx-2" href="tutti.php">フロントエンド</a>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-primary mx-2" href="tutti.php">Java</a>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-primary mx-2" href="tutti.php">Python</a>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-primary mx-2" href="tutti.php">Linux</a>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-primary mx-2" href="tutti.php">応用数学</a>
                        </li>
                        <li class="list-group-item">
                            <a class="btn btn-primary mx-2" href="tutti.php">ビジネス英語</a>
                        </li>
                    </ul>
                </section>
            </aside>

            <!-- メインコンテンツ（中央） -->
            <section class="col-md-9 main-content">
                <h3>募集中の勉強会一部</h3>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        プログラミング基礎勉強会 - 2024年10月25日開催
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        AWSクラウドプラクティショナー勉強会 - 2024年11月1日開催
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        基本情報技術者試験勉強会 - 2024年10月28日開催
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        データベース入門勉強会 - 2024年11月3日開催
                    </a>
                </div>
                <br><br>
                <h3>tutti一部</h3>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        プログラミング基礎勉強会 - 2024年10月25日開催
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        AWSクラウドプラクティショナー勉強会 - 2024年11月1日開催
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        基本情報技術者試験勉強会 - 2024年10月28日開催
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        データベース入門勉強会 - 2024年11月3日開催
                    </a>
                </div>
            </section>

        </div>
    </main>

    <!-- フッター -->
    <footer class="footer bg-dark text-light py-3">
        <div class="container text-center">
            <p class="mb-1">&copy; 2024 Stutti - 勉強会グループ募集サイト</p>
            <p>
                <a href="#" class="text-light mx-2">プライバシーポリシー</a> |
                <a href="#" class="text-light mx-2">利用規約</a> |
                <a href="#" class="text-light mx-2">お問合せ</a>
            </p>
            <div class="social-icons mt-2">
                <a href="#" class="text-light mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-light mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-light mx-2"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- BootstrapとjQueryのスクリプト -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- FontAwesome for social icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>