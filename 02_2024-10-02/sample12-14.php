<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    if(isset($_POST['btnExec'])){
        print "送信ボタンがクリックされました!<br><br>";
    }
    elseif(isset($_POST['btnCancel'])){
        print "確認ボタンがクリックされました!<br><br>";
    }
    ?>

    いずれかのボタンをクリックしてください。
    <form action="<?php $_SERVER['SCRIPT_NAME']?>" method="post">
        <input type="submit" name="btnExec" value="送信">
        <input type="submit" name="btnCancel" value="キャンセル">
    </form>
</body>

</html>