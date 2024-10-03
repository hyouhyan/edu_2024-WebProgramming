<!DOCTYP html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

$data = 1234.56789;

//小数点以下を切り上げ
print ceil($data);
print "<br>";

//少数第2位で切り上げ
print ceil($data * 100) / 100;
print "<br>";

//百の位で切り上げ
print ceil($data / 100) * 100;
print "<br>";

?>
</dody>
</heml>
