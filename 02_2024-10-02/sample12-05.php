<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<body>
<?php

    if(isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        $name = $_POST['username'];
        $address = $_POST['useraddress'];
        print "送信されたデータは<br>";
        print "名前→" . $name . "<br>";
        print "住所→" . $address . "<br>";
        print "<br><br>";
    }
?>

名前を住所を入力して[送信]ボタンをクリックしてください。
<form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
    <p>名前：<input size="40" type="text" name="username" value="<?php $name ?>"></p>
    <p>住所：<input size="40" type="text" name="useraddress" value="<?php $address ?>"></p>
    <input type="submit" name="btnExec" value="送信">
</form>
</body>
</html>