<?php
require "dependencies/functions.php";
session_start();
if(isset($_SESSION['first_name'])){
    header("Location:dashboard.php?error=loggedIn");
    die();
}
?>
<?php include_once 'public/views/header.php';?>
<body class="register">
    <a id="top"></a>
    <?php include_once 'public/views/menu.php';?>

    <div class="container-fluid main-register-container">
        <div class="row">
            <div class="col-md-6 form-wrapper">
                <h3 id="register-heading">Најави се</h3>
                    <?php 
                    printError();
                    printSuccess();
                    ?>
                    <form method="POST" action="login.php">
                            <div class="form-group col-md-12">
                                <label for="email">Емаил</label><br>
                                <input type="email" id="email" name="email" placeholder="Внеси го твојот емаил" class="form-control" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="password">Лозинка</label><br>
                                <input type="password" id="password" name="password" placeholder="Внеси ја твојата лозинка" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn main-button">Најави се</button>
                            </div>
                            <div class="form-group already-member col-md-6">
                                <span>Не сте регистрирани?</span>&nbsp;<a href="register-page.php">Регистрирај се.</a>
                            </div>
                            <div class="form-group col-md-12 go-back-link">
                                <a href="index.php"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Врати се на почетна</a>
                            </div>
                    </form>
            </div>
            <div class="col-md-6 img-banner">
                <figure>
                    <img src="./images/banner1.jpg" alt="img-banner">
                </figure>
                <figure>
                    <img src="./images/banner2.jpg" alt="img-banner">
                </figure>
                <figure>
                    <img src="./images/banner3.jpg" alt="img-banner">
                </figure>
                <figure>
                    <img src="./images/banner4.jpg" alt="img-banner">
                </figure>
            </div>
        </div>
    </div>
<?php include 'public/views/footer.php';?>