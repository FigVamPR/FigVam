<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>about</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <header>
        <div class="row">
            <div class="col-md-12">
                <h2>About Us</h2>
            </div>
        </div>
    </header>
    <article>
        <div class="row">
            <?php include 'sidebar.php';?>
            <?= include 'border.php';?>
            <div class="col-md-7 main" style="margin: auto; padding-left: 5%"><!--technologie content-->
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <div class="img-about">
                            <img src="images/services/fullstackstart.png" alt="fullstack" style="margin: auto;">                            
                        </div>
                        <div class="text-center">                            
                            <div class="caption">
                                <h3>Атаман Влад</h3>
                                <p>Початківець у всіх напрямках.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                <div class="row"></div>
                <div class="">
                    <div class="col-md-3">
                        <div class="img-about">
                            <img src="images/services/designer.png" alt="designer">                            
                        </div>
                        <div class="text-center">
                            <div class="caption">
                                <h3>Євстаф'єва Євгенія</h3>
                                <p>Наш улюблений програміст і дизайнер.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="col-md-3">
                        <div class="img-about">                            
                            <img src="images/services/fullstack.png" alt="fullstack">
                        </div>
                        <div class="text-center">
                            <div class="caption">
                                <h3>Єльцин Яніс</h3>
                                <p>Наш Frontend та початковий Backend розробник.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="col-md-3">
                        <div class="img-about">                            
                            <img src="images/services/marketolog.png" alt="marketolog">
                        </div>
                        <div class="text-center">
                            <div class="caption">
                                <h3>Боднар Олексій</h3>
                                <p>Наш юний маркетолог.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <?= include 'border.php' ;?>
        </div>
    </article>
    <?= include 'footer.php';?>
    <link href="css/style.css" rel="stylesheet">
</div>
</body>