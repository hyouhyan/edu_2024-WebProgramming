<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    
    mt_srand();

    for($cnt = 1; $cnt <= 5; $cnt++){
        $imagefile = mt_rand(1, 9);

        $imagefile = "image" . $imagefile . ".gif";

        print "<img src='./images/$imagefile' hspace='2'>";
    }

    ?>
</body>

</html>