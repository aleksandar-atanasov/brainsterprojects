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
        <div class="filtersContainer container">
            <div class="row filtersRow">
                 <div class="col-md-6">
                 <span class="filterSpan">Browse by Category</span>
                     <div class="row filtersWrapper">
                        <div class="filterContent energizers col-md-4">
                            <input type="checkbox" id="energizers">
                             <label for="energizers">ENERGIZERS (<?=$card->countCategory('energizers')?>)</label>
                        </div>
                        <div class="filterContent col-md-4">
                            <input type="checkbox" id="inovation">
                             <label for="inovation">INOVATION (<?=$card->countCategory('inovation')?>)</label>
                        </div>
                        <div class="filterContent col-md-4">
                            <input type="checkbox" id="leadership">
                             <label for="leadership">SELF-LEADERSHIP (<?=$card->countCategory('leadership')?>)</label>
                        </div>
                        <div class="filterContent col-md-4">
                            <input type="checkbox" id="action">
                             <label for="action">ACTION (<?=$card->countCategory('action')?>)</label>
                        </div>
                        <div class="filterContent col-md-4">
                            <input type="checkbox" id="team">
                             <label for="team">TEAM (<?=$card->countCategory('team')?>)</label>
                        </div>
                        <div class="filterContent col-md-4">
                            <input type="checkbox" id="all" checked>
                             <label for="all">ALL</label>
                        </div>
                     </div>
                </div>
                <div class="col-md-2">
                <span class="filterSpan">Time frame(minutes)</span>
                    <div class="row filtersWrapper">
                        <div class="filterContent col-md-6">
                            <input type="checkbox" id="5-30">
                             <label for="5-30">5-30</label>
                        </div>
                        <div class="filterContent col-md-6">
                            <input type="checkbox" id="30-60">
                             <label for="30-60">30-60</label>
                        </div>
                        <div class="filterContent col-md-6">
                            <input type="checkbox" id="60-120">
                             <label for="60-120">60-120</label>
                        </div>
                        <div class="filterContent col-md-6">
                            <input type="checkbox" id="120-240">
                             <label for="120-240">120-240</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                <span class="filterSpan">Group size</span>
                    <div class="row filtersWrapper">
                        <div class="filterContent col-md-3">
                            <input type="checkbox" id="2-10">
                             <label for="2-10">2-10</label>
                        </div>
                        <div class="filterContent col-md-3">
                            <input type="checkbox" id="10-40">
                             <label for="10-40">10-40</label>
                        </div>
                        <div class="filterContent col-md-3">
                            <input type="checkbox" id="10-40">
                             <label for="10-40">10-40</label>
                        </div>
                        <div class="filterContent col-md-3">
                            <label for="search" id="search">Search</label>
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
                        <p>Категорија: <?="<span>" . $card['category'] . "</span>"?></p>
                        <img src="<?=$card['icon']?>" class="img-circle pull-right">
                        <div class="time-wrapper">
                            <i class="far fa-clock"></i>&nbsp;
                            <p>Времетраење</p>
                        </div>
                        <p class="small text-muted time-length"><?=$card['time_frame']?></p>
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