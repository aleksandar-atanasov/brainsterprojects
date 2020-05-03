<?php
require "dependencies/autoloader.php";
require "dependencies/functions.php";
session_start();
if(!isset($_SESSION['email'])){
    header("Location:login-page.php?error=required");
    die();
}
?>
<?php include_once 'public/views/header.php';?>
<body class="dashboard">
    <a id="top"></a>
    <?php include_once 'public/views/menu.php';?>

    <div class="container-fluid main-dash-container">
        <div class="row">
        <div class="col-md-5 banner-holder">
            </div>
            <div class="col-md-7 table-wrapper">
                <h3>Админ Панел</h3>
                <?php
                    printError();
                ?>
               <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="active">
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Company</th>
                            <th>Phone</th>
                            <th>Employees</th>
                            <th>Sector</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="success">
                            <td><?= $_SESSION['first_name']?></td>
                            <td><?= $_SESSION['last_name']?></td>
                            <td><?= $_SESSION['company_name']?></td>
                            <td><?= $_SESSION['phone_number']?></td>
                            <td><?= $_SESSION['employees_number']?></td>
                            <td><?= $_SESSION['sector']?></td>
                            <td><?= $_SESSION['email']?></td>
                        </tr>
                    </tbody>
               </table>
               <a href="logout.php"><button class="btn main-button">Одјави се</button></a>
            </div>
        </div>
    </div>
<?php include 'public/views/footer.php';?>