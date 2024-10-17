<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    if(isset($_COOKIE['mycookiedata'])){
        $data=$_COOKIE['mycookiedata'];
        print $data."<BR><BR>";
        parse_str($data,$output);
        print "クッキーに保存されたデータは、<BR>";
        print $output['ck_data1']."<BR>";
        print $output['ck_data2']."<BR>";
    }
    else{
        print "データはクッキーに保存されていません!";
    }
?>
</body>
</html>