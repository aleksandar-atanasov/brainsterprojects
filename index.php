<?php
session_start();
include 'dependencies/autoloader.php';
$card = new Cardsview();
$cards = $card->showAll();
?>  
    <?php include_once 'public/views/header.php';?>
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
        <?php include 'public/views/filters.php';?>
        <div class="filters-button">
            <button class="btn second-button pull-right filterBtn"><i class="fas fa-level-up-alt"></i> Filters</button>
         </div>
            <div class="container cards-container">
                <div class="row">
                    <?php
            foreach ($cards as $card) {
            if (!empty($_SESSION['email'])) {
                echo '<a href="games.php?id=' . $card['id'] . '">';
            }
            ?>
                    <div class="col-md-4 col-sm-6 col-xs-12 cards-column"
                        data-toggle="modal" data-target=".<?=$card['id']?>">
                        <div class="custom-panel">
                            <div class="panel-head xs-hidden">
                                <img src=" <?=$card['background_img']?>">
                            </div>
                            <div class="panel-content">
                                <p class="game-headline"><?=$card['name']?></p>
                                <p>Категорија: <?="<span class='category'>" . $card['category'] . "</span>"?></p>
                                <img src="<?=$card['icon']?>" class="img-circle pull-right">
                                <div class="time-wrapper">
                                    <i class="far fa-clock"></i>&nbsp;
                                    <p>Времетраење</p>
                                </div>
                                <p class="small text-muted time-length"><?=$card['time_frame']?></p>
                                <input type="hidden" value="<?= $card['group_size']?>" class="group-size">
                            </div>
                        </div>
                    </div></a>
                    <?php
                    }
                    ?>
                </div>
            </div>
    <?php
        foreach ($cards as $card) {
         include 'public/views/modal.php'; //gi povikuvame site modali za sekoja karticka posebno
            }
      ?>
       

 <?php include 'public/views/footer.php';?>