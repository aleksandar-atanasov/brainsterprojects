<?php
require "dependencies/functions.php";
session_start();
if(isset($_SESSION['first_name'])){
    header("Location:dashboard.php?error=registered");
    die();
}
?>
    <?php include_once 'public/views/header.php';?>
<body class="register">
    <a id="top"></a>
    <?php include_once 'public/views/menu.php';?>

    <div class="container-fluid main-register-container">
        <div class="row">
            <div class="col-md-6 col-xs-12 form-wrapper">
                <h3 id="register-heading">Регистрирај се</h3>
                    <?php
                        printError();
                        printSuccess();
                    ?>
                    <form method="POST" action="register.php">
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
                                <label for="phoneNum">Телефонски број</label><br>
                                <input type="text" id="phoneNum" name="phone_number" placeholder="Внеси го твојот тел број" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">    
                                <label for="employeesNum">Број на вработени</label><br>
                                <select name="employees_number" id="employeesNum" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2-10">2-10</option>
                                    <option value="11-50">11-50</option>
                                    <option value="51-200">51-200</option>
                                    <option value="200+">200+</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sector">Сектор</label><br>
                                <select name="sector" id="sector" class="form-control">
                                    <option value="Човечки ресурси">Човечки ресурси</option>
                                    <option value="Маркетинг">Маркетинг</option>
                                    <option value="Продукт">Продукт</option>
                                    <option value="Продажба">Продажба</option>
                                    <option value="CEO">CEO</option>
                                    <option value="Друго">Друго..</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="email">Емаил</label><br>
                                <input type="email" id="email" name="email" placeholder="Внеси го твојот емаил" class="form-control" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="password">Лозинка</label><br>
                                <input type="password" id="password" name="password" placeholder="Внеси ја твојата лозинка" class="form-control" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="message">Порака</label><br>
                                <textarea name="message" id="message" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn main-button">Регистрирај се</button>
                            </div>
                            <div class="form-group already-member col-md-6">
                                <span>Веќе сте регистрирани?</span>&nbsp;<a href="login-page.php">Најави се.</a>
                            </div>
                            <div class="form-group col-md-12 go-back-link">
                                <a href="index.php"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Врати се на почетна</a>
                            </div>
                    </form>
            </div>
            <div class="col-md-6 col-xs-hidden col-sm-hidden img-banner">
                <figure>
                    <img src="./images/banner1.jpg" alt="img-banner">
                </figure>
                <figure>
                    <img src="./images/banner2.jpg" alt="img-banner">
                </figure> <figure>
                    <img src="./images/banner3.jpg" alt="img-banner">
                </figure> <figure>
                    <img src="./images/banner4.jpg" alt="img-banner">
                </figure>
            </div>
        </div>
    </div>
<?php include 'public/views/footer.php';?>