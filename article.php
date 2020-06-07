<!DOCTYPE html>
<html>

<head>
    <?php
    $title = "Блог";
    require_once "blocks/head.php"
    ?>
</head>

<body>
    <?php require_once "blocks/header.php" ?>
    <div id="wrapper">
        <div id="leftCol">
            <?php
            require_once "parts/text.php";
            ?>
        </div>
        <?php require_once "blocks/rightCol.php" ?>
    </div>

    <?php require_once "blocks/footer.php" ?>
</body>

</html>