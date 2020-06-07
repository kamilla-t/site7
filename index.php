<!DOCTYPE html>
<html>
<head>
    <?php
    require_once "functions/functions.php";
    $title = "";
    require_once "blocks/head.php";
    ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <?
            require_once "parts/slideshow.php";
            require_once "parts/creationsites.php";
            require_once "parts/identica.php";
            require_once "parts/blog.php";
            ?>
        </div>
        <?php require_once "blocks/rightCol.php" ?>
    </div>

    <?php require_once "blocks/footer.php" ?>
</body>
</html>