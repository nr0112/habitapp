<!-- ログアウト画面 -->

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログアウト画面</title>
    </head>
    <body>
    <?php
    session_start();

    if (isset($_SESSION["username"])){
        echo 'ログアウトしました';
    }else{
        echo 'セッションがタイムアウトしました。もう一度ログインしてください！';
    }

    //---------------ログアウト----------------------------------------------------
    //セッション変数のクリア(削除)
    //visitedとdate_count以外のセッション変数(usernameのみ、場合によっては本登録で使った変数も)を削除
    //退会手続きなど、完全に削除する場合はcookieも削除すべき
    unset($_SESSION["username"]);
    //---------------------------------------------------------------------------
    ?>
    <br>
    <a href="https://tb-220025.tech-base.net/1_homepage.php">ログイン</a>

    </body>
</html>