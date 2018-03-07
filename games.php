<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Игры</title>
    <script src="jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Icon/game.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="theFirstFlex">
            <?php include 'header.php';?>
            <h1><?php include 'titleH1.php';?></h1>
            <?php include 'socialBlock.php';?>
            <div class="slider">
                <img src="Games/art-4.png" alt="photo">
                <img src="Games/art-1.png" alt="photo">
                <img src="Games/art-2.png" alt="photo">
                <img src="Games/art-3.png" alt="photo">
            </div>
        </div>
        <?php include 'footer.php';?>
    </div>
    <script src="slick/slick.js"></script>
    <script>
        $(document).ready(function() {
            $('.slider').slick({});
        });

    </script>
</body>

</html>
