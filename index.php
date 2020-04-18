<?php
session_start();
session_destroy();
include 'dependencies/autoloader.php';
$card = new Cardsview();
$cards = $card->showAll();
// echo "<pre>";
// print_r($cards);die();
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
    <title>Brainster Toolbox</title>
</head>
<body>
    <a id="top"></a>
    <?php include_once 'public/views/menu.php';?>
    <div class="container-fluid main-background-color main-container angledDiv">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center">Изработено од студенти на академијата за програмирање на <u>Brainster</u></p>
            </div>
        </div>
        <div class="row buttons-hidden-lg">
            <div class="col-xs-10 col-xs-offset-1">
                <?php
include 'public/views/menu-buttons.php';?>
            </div>
        </div>
        <div class="row">
            <?php include 'public/views/mainheading.php';?>
        </div>
        <?php include 'public/views/assessment.php';?>
        <div class="filtersContainer">
            <div class="row filtersHeadline">
                <div class="col-md-6">
                    <p>Browse by Category</p>
                </div>
                <div class="col-md-3">
                    <p>Time frame (minutes)</p>
                </div>
                <div class="col-md-3">
                    <p>Group size</p>
                </div>
            </div>
            <div class="row filtersRow">
                 <div class="col-md-6">
                     <div class="row filtersWrapper">
                        <div class="filterContent energizers col-md-4">
                            <input type="checkbox" id="energizers">
                             <label for="energizers">ENERGIZERS</label>
                        </div>
                        <div class="filterContent col-md-4">
                            <input type="checkbox" id="inovation">
                             <label for="inovation">INOVATION</label>
                        </div>
                        <div class="filterContent col-md-4">
                            <input type="checkbox" id="leadership">
                             <label for="leadership">SELF-LEADERSHIP</label>
                        </div>
                     </div>
                </div>
                <div class="col-md-2">
                    <div class="row filtersWrapper">
                        <div class="filterContent col-md-6">
                            <input type="checkbox" id="5-30">
                             <label for="5-30">5-30</label>
                        </div>
                        <div class="filterContent col-md-6">
                            <input type="checkbox" id="5-30">
                             <label for="5-30">5-30</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row filtersWrapper">
                        <div class="filterContent col-md-2">
                            <input type="checkbox" id="2-10">
                             <label for="2-10">2-10</label>
                        </div>
                        <div class="filterContent col-md-2">
                            <input type="checkbox" id="10-40">
                             <label for="10-40">10-40</label>
                        </div>
                        <div class="filterContent col-md-2">
                            <input type="checkbox" id="10-40">
                             <label for="10-40">10-40</label>
                        </div>
                        <div class="filterContent col-md-3 col-md-offset-1">
                            <span id="search">Search</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container cards-container">
        <div class="row">
            <?php
foreach ($cards as $card) {
    ?>
            <div class="col-md-4 col-sm-6 col-xs-12 cards-column <?=$card['category'] . " " . $card['time_frame'] . " " . $card['group_size']?>"
            data-toggle="modal" data-target=".<?=$card['id']?>">
                <div class="custom-panel">
                    <div class="panel-head xs-hidden">
                        <img src=" <?=$card['background_img']?>">
                    </div>
                    <div class="panel-content">
                        <p class="game-headline"><?=$card['name']?></p>
                        <p>Категорија: <?="<span>" . $card['category'] . "</span>"?></p>
                        <img src="<?=$card['icon']?>" class="img-circle pull-right">
                        <div class="time-wrapper">
                            <i class="far fa-clock"></i>&nbsp;
                            <p>Времетраење</p>
                        </div>
                        <p class="small text-muted time-length"><?=$card['time_frame']?></p>
                    </div>
                </div>
            </div>
            <?php
}
?>
        </div>
    </div>
    <div class="container-fluid main-background-color footer">
        <div class="row">
            <?php include 'public/views/mainheading.php';?>
        </div>
        <?php include 'public/views/assessment.php';?>
    </div>
    <?php
foreach ($cards as $card) {
    include 'public/views/modal.php';
}
?>
</body>
<script src="public/navbar.js"></script>
<script src="public/filter.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

</html>