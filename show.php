<?php
if(!$_GET['img']) die("No image to show");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>php1.4 - <?=$_GET['img']?></title>
</head>
<body>
    <figure>
        <p><img src="img/<?=$_GET['img']?>" alt="" /></p>
        <figcaption><?=$_GET['img']?></figcaption>
    </figure>
</body>
</html>