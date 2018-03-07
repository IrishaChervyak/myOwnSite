<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Icon/main.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="theFirstFlex">
            <?php include 'header.php';?>
            <h1><?php include 'titleH1.php'; ?></h1>
            <?php include 'socialBlock.php';?>
            <div class="content">
                <div class="main-img">
                    <img src="Image/theMainPhoto.png" alt="photo">
                </div>
                <p>Добрый день. Меня зовут Ирина Червяк. Я - начинающий программист. Уже некоторое время занимаюсь программированием и развитием в IT-сфере. <br> С этим мне хорошо помогает справиться IT-портал GeekBrains<br> Моими хобби являются компьютерные игры и отслеживание арт-работ различных художников. На данном сайте вы сможете найти небольшую подборку материалов. </p>
            </div>
        </div>
        <?php include 'footer.php';?>
    </div>
</body>

</html>
