<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<body>
<?php
    if(isset($_SERVER['HTTP_REFERER'])){
        print "このPHPファイルは、次のURLから呼び出されました。<br>";
        print $_SERVER['HTTP_REFERER']. "<br><br>";
        if($_SERVER['HTTP_REFERER'] == "http://localhost/03/sample12-32.php" || $_SERVER['HTTP_REFERER'] == "http://localhost/03_2024-10-17/sample12-32.php"){
            print "自分自身のファイルから呼ばれました！<BR>";
        }
    }
?>
<form action="<?php $_SERVER['SCRIPT_NAME']?>" method="POST" >
    <input type="submit" name="btnExec" value="送信">
</form>
</body>
</html>