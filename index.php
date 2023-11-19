<?php include "./datas.php" ;?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$name?> </title>
</head>

<body>

<nav>
    <?php foreach ($recipes as $recipe) { ?>
        <a href="./<?=$recipe['phpFile']?>" > <?=$recipe['name']?> </a>
    <?php } ?>
</nav>

</html>