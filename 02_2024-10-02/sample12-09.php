<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    if (isset($_POST['btnExit'])){
        if (isset($_POST['inputdata'])){
            print "配信を希望する";
        }
        else{
            print "配信を希望しない";
        }
        print "<br><br><br>";
    }
    elseif ($_SERVER['REQUEST_METHOD'] == "GET"){
        print "GETで送信されました!<br>";
        print "名前→".$_POST['username'];
    }
?>
配信を希望する場合はチェックを付けて[送信]ボタンをクリックしてください。
<form action="<?php $_SERVER['SCRIPT_NAME']?>" method="POST">
    <input type="checkbox" name="inputdata">メールによる配信を希望します
    <input type="submit" name="btnExec" value="送信">
</form>
</body>
</html>