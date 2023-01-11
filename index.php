<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//geoip-js.com/js/apis/geoip2/v2.1/geoip2.js" type="text/javascript"></script>
    <title>Landing Page Ideal</title>
</head>

<body onload="shiftLogo()">
    <?
    include('inc/navbar.php');
    include('inc/message.php')
    ?>
    <div class="container">
        <?
        include('inc/main-content.php');
        ?>
    </div>

    <?
    include('inc/form.php');
    ?>


</body>

<?
include('inc/footer.php')
?>

</html>