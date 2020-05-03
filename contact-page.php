<?php
require "dependencies/autoloader.php";
?>
<?php include_once 'public/views/header.php';?>
<body class="contact">
    <a id="top"></a>
    <?php include_once 'public/views/menu.php';?>

    <div class="container-fluid main-contact-container">
        <div class="row contact-form-wrapper">
            <div class="col-md-6">
            <form method="POST" action="">
                            <div class="form-group col-md-6">
                                <label for="name">Име</label><br>
                                <input type="text" id="name" name="first_name" placeholder="Внеси го твоето име" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Презиме</label><br>
                                <input type="text" id="lastName" name="last_name" placeholder="Внеси го твоето презиме" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="company">Компанија</label><br>
                                <input type="text" id="company" name="company_name" placeholder="Име на компанија" class="form-control" required><br>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Емаил</label><br>
                                <input type="email" id="email" name="email" placeholder="Внеси го твојот емаил" class="form-control" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="message">Порака</label><br>
                                <textarea name="message" id="message" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn main-button">Испрати</button>
                            </div>
                    </form>
            </div>
            <div class="col-md-6 contact-banner-holder">
                <img src="./images/contact-page-banner.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 contact-grid-image">
                
            </div>
            <div class="col-md-5 col-md-offset-1 contact-info">
                <h2>Како да го најдеш Brainster CO</h2>
                <h3>Скопје</h3>
                <p>Kosturski Heroi 28</p>
                <p>1000 Skopje</p>
                <a href="https://wego.here.com/directions/mix//Brainster,-Ulica-29-ti-Noemvri-12,-1111-Skopje:e-eyJuYW1lIjoiQnJhaW5zdGVyIiwiYWRkcmVzcyI6Iktvc3R1cnNraSBIZXJvaSAyOCwgU2tvcGplIiwibGF0aXR1ZGUiOjQyLjAwMDY5MTkwNzAxOSwibG9uZ2l0dWRlIjoyMS40MTc5OTY4ODMzOTIsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6NjkyOTY1MDc3NTE0Nzc5fQ==?map=42.00069,21.418,15,normal&fb_locale=en_GB" target="_blank">
                Open in Google Maps &nbsp;<span class="glyphicon glyphicon-arrow-right"></span></a>
            </div>
        </div>
    </div>
<?php include 'public/views/footer.php';?>