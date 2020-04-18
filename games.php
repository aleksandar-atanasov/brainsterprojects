<?php
session_start();
require "dependencies/autoloader.php";
if(empty($_SESSION)){
    header("Location:index.php");
    die();
}
$id = $_SESSION['id'];
$game = new CardsView();
$games = $game->selectGame($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/ddf388975b.js" crossorigin="anonymous"></script>
    <title>Games</title>
</head>
<body class="games">
    <a id="top"></a>
    <?php include_once 'public/views/menu.php';?>
    <div class="container-fluid main-container main-background-img angledGame">
        <div class="row buttons-hidden-lg">
            <div class="col-xs-10 col-xs-offset-1">
                <?php
include 'public/views/menu-buttons.php';?>
            </div>
        </div>
    </div>
    <div class="container gameContent">
        <div class="row">
            <div class="col-md-12 gameHeadline">
                <h1><?=$games['name']?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 gameInfo">
                <div class="infoContent">
                    <p><i class="far fa-clock"></i>&nbsp;&nbsp;
                        Временска рамка
                    </p>
                    <span class="small text-muted time-length"><?=$games['time_frame']?></span>
                </div>
                <div class="infoContent">
                    <p><i class="fas fa-users"></i>&nbsp;&nbsp;
                        Големина на група
                    </p>
                    <span class="small text-muted time-length"><?=$games['group_size']?></span>
                </div>

                <div class="infoContent">
                    <p><i class="fas fa-landmark"></i>&nbsp;&nbsp;
                        Ниво за фасилитирање
                    </p>
                    <span class="small text-muted time-length"><?=$games['facilitation_level']?></span>
                </div>
                <div class="infoContent">
                    <p><i class="fas fa-paint-roller"></i>&nbsp;&nbsp;
                        Материјали</p>
                    <span class="small text-muted time-length"><?=$games['materials']?></span>
                </div>
            </div>
        </div>
        <?php
if (!empty($games['headline'])) {
    ?>
        <div class="row descriptionWrapper">
            <div class="col-md-12">
                <p><?=$games['headline']?></p>
            </div>
        </div>
        <?php
}
?>
        <div class="row stepWrapper">
            <div class="col-md-12">
                <h2>Чекор 1</h2>
                <p><?=$games['step1']?></p>
            </div>
        </div>
        <div class="row stepWrapper">
            <div class="col-md-12">
                <h2>Чекор 2</h2>
                <p><?=$games['step2']?></p>
            </div>
        </div>
        <div class="row stepWrapper">
            <div class="col-md-12">
                <h2>Чекор 3</h2>
                <p><?=$games['step3']?></p>
            </div>
        </div>
        <?php
if (!empty($games['step4'])) {
    ?>
        <div class="row stepWrapper">
            <div class="col-md-12">
                <h2>Чекор 4</h2>
                <p><?=$games['step4']?></p>
            </div>
        </div>
        <?php
}
?>
         <?php
if (!empty($games['step5'])) {
    ?>
        <div class="row stepWrapper">
            <div class="col-md-12">
                <h2>Чекор 5</h2>
                <p><?=$games['step5']?></p>
            </div>
        </div>
        <?php
}
?>
         <?php
if (!empty($games['step6'])) {
    ?>
        <div class="row stepWrapper">
            <div class="col-md-12">
                <h2>Чекор 6</h2>
                <p><?=$games['step6']?></p>
            </div>
        </div>
        <?php
}
?>
    </div>






</body>
<script src="public/navbar.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

</html>