<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="ja">
    <title></title>
</head>
<body>
<?php
    $_SESSION['sesdata1'] = 10;
    $_SESSION['sesdata2'] = "PHP:Hypertext Preprocessor";
    print "セッションに「" . $_SESSION["sesdata1"] . "」を保存しました<br>";
    print "セッションに「" . $_SESSION["sesdata2"] . "」を保存しました<br>";

    $_SESSION['sesdata3'] = "技術評論社";
    $_SESSION['sesdata4'] = "東京都新宿区市谷左内町21-13";
    $_SESSION['sesdata5'] = "http://www.gihyo.co.jp/";
    print "セッションに「" . $_SESSION["sesdata3"] . "」を保存しました<br>";
    print "セッションに「" . $_SESSION["sesdata4"] . "」を保存しました<br>";
    print "セッションに「" . $_SESSION["sesdata5"] . "」を保存しました<br>";
?>
</body>
</html>