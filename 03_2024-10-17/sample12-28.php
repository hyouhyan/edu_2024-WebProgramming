<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charaset = "UTF-8">
        <title></title>
</head>
<body>
    <?php

    if (isset($_POST['btnExec'])) {
        //送信ボタンがクリックされた時

        //入力されたキーワードと取得
        $keyword = $_POST['keyword'];
        //キーワードをURLエンコード
        $keyword = urlencode($keyword);
        //ジャンプ先のURLを組み立て
        $jumpto = "http://www.google.co.jp/search?q=" . $keyword ."&hl=ja&ie=UTF-8&oe=UTF-8";
        //そのURLへリダイレクト
        header("location: $jumpto");
        exit();
    }

    ?>
    検索キーワードを入力して[送信]ボタンをクリックしてください。
    <form action="<?php $_SERVER['PHP_SELF']?>"method="POST">
        <input size="40" type="text" name="keyword">
        <input type="submit" name="btnExec" value="送信">
</form>
</body>
</html>