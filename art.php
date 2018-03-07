<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Арты</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="MagnificPopup/dist/magnific-popup.css">
    <script src="MagnificPopup/dist/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Icon/art.png" type="image/x-icon">
    <script>
        $(document).ready(function() {
            $('.parent-container').magnificPopup({
                delegate: 'a',
                type: 'image'
            });
            $('#hide-block').hide();
            $('#show-block').on('click', function() {
                var textLink = $('#hide-block').is(':visible') ? 'Показать блок' : 'Скрыть блок';
                $('#show-block').text(textLink);
                $('#hide-block').slideToggle();
            });
        });

    </script>
</head>

<body>
    <div class="container">
        <div class="theFirstFlex">
            <?php include 'header.php';?>
            <h1><?php include 'titleH1.php'; ?></h1>
            <?php include 'socialBlock.php';?>
            <div class="parent-container content art-img">
                <a href="Image/art-1.png"><img src="Image/art-1.png" alt="photo"></a>
                <a href="Image/art-2.png"><img src="Image/art-2.png" alt="photo"></a>
                <a href="Image/art-3.png"><img src="Image/art-3.png" alt="photo"></a>
                <a href="Image/art-4.png"><img src="Image/art-4.png" alt="photo"></a>
                <a href="Image/art-5.png"><img src="Image/art-5.png" alt="photo"></a>
                <a href="Image/art-6.png"><img src="Image/art-6.png" alt="photo"></a>
            </div>
            <div id="hide-block" class="parent-container content art-img">
                <a href="Image/art-7.png"><img src="Image/art-7.png" alt="photo"></a>
                <a href="Image/art-8.png"><img src="Image/art-8.png" alt="photo"></a>
                <a href="Image/art-9.png"><img src="Image/art-9.png" alt="photo"></a>
                <a href="Image/art-10.png"><img src="Image/art-10.png" alt="photo"></a>
                <a href="Image/art-11.png"><img src="Image/art-11.png" alt="photo"></a>
                <a href="Image/art-12.png"><img src="Image/art-12.png" alt="photo"></a>
            </div>
            <div class="showBlock">
                <a id="show-block" href="#">
                    Показать блок
                </a>
            </div>
        </div>
        <?php include 'footer.php';?>
    </div>
</body>

</html>
