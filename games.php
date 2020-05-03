<?php
session_start();
require "dependencies/autoloader.php";

if (empty($_SESSION)) {
    header("Location:index.php");
    die();
} else if (!empty($_SESSION['email']) && !empty($_GET['id'])) {
    $cardId = $_GET['id'];
    $game = new CardsView();
    $games = $game->selectGame($cardId);
} else {
    $id = $_SESSION['id'];
    $game = new CardsView();
    $games = $game->selectGame($id);

}
?>
    <?php include_once 'public/views/header.php';?>
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
                <a href="index.php"><button class="btn main-button">Back</button></a>
                <a href="logout.php" class="pull-right"><button class="btn second-button">Logout</button></a>
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
                    <p><i class="fas fa-layer-group"></i>&nbsp;&nbsp;
                        Комфорт зона
                    </p>
                    <span class="small text-muted time-length"><?=$games['group_size']?></span>
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
                <p><?=$games['headline']?></>
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
        <?php
if (!empty($games['step3'])) {
    ?>
        <div class="row stepWrapper">
            <div class="col-md-12">
                <h2>Чекор 3</h2>
                <p><?=$games['step3']?></p>
            </div>
        </div>
        <?php
}
?>
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

<?php include 'public/views/footer.php';?>