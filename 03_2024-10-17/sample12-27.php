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
        header("location: index.htm");
        exit();
    }
?>
いずれかのボタンをクリックしたください。
<form action="<?php $_SERVER['SCRIPT_NAME']?>" method="POST">
    <input type="submit" name="btnExec" value="送信">
    <input type="submit" name="btnCancel" value="キャンセル">
</form>
</body>
</html>