<?php
    session_start();

    if (!empty($_SESSION['sesuserid'])){
        print "<!DOCTYPE html>\n";
        print "<html lang=\"ja\">\n";
        print "<head>\n";
        print "<meta charset=\"UTF-8\">\n";
        print "<title></title>\n";
        print "</head>\n";
        print "<body><p>\n";
        print "あなたのユーザーIDは ".$_SESSION['sesuserid']." です。<br>";
        print "<br>";
        print "*****************************************<br>";
        print "*****************************************<br>";
        print "** ここにユーザのメインコンテンツ **<br>";
        print "*****************************************<br>";
        print "*****************************************<br>";
        print "</p></body></html>";
    }else{
        header("location: sample14-09.php");
        exit();
    }
?>