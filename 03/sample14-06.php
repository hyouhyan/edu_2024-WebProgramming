<?php

//セッションを開始
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset = "UTF-8" >
        <title></title>
</head>
<body>

<?php

//セッション変数のデータを読み込み　設定されていないものはエラーになる
print $_SESSION['sesdata1'] . "<br>";
print $_SESSION['sesdata2'] . "<br>";
print $_SESSION['sesdata3'] . "<br>";
print $_SESSION['sesdata4'] . "<br>";
print $_SESSION['sesdata5'] . "<br>";

//セッションを終了
$_SESSION = array();
session_destroy();

//セッション変数のデータ読み込み　セッションを終了しているのでエラーになる
print $_SESSION['sesdata1'] . "<br>";
print $_SESSION['sesdata2'] . "<br>";
print $_SESSION['sesdata3'] . "<br>";
print $_SESSION['sesdata4'] . "<br>";
print $_SESSION['sesdata5'] . "<br>";

//sesdata3の状態を確認
if (! isset($_SESSION['sesdata3'])){
    print "セッション変数は使われていません！<br>";

}

?>
</body>
</html>
