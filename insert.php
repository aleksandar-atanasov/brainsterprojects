<?php


//so ovoj kod formata gi vnesuva vnesenite podatoci vo baza
$username = $_POST['username'];
$companyName = $_POST['companyName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$studentType = $_POST['studentType']; 


$db_found = new mysqli('localhost', 'root', 'root', 'Form');
$db_found->set_charset("utf8");


if (!$db_found) {
    echo "Error: db connection = false";
}
else {
    $SQL_INSERT = "INSERT INTO users (username, company, email, phone, student) VALUES (?,?,?,?,?)";
    $stmt = $db_found->prepare($SQL_INSERT);

    if($stmt = $db_found->prepare($SQL_INSERT)) {        
        $stmt->bind_param('sssis', $username, $companyName, $email, $phone, $studentType);
        $stmt->execute();
        echo '<div>
            <h1>Успешно се регистриравте</h1>
            </div>';
    } else {
        $error = $db_found->errno . ' ' . $db_found->error;
        echo $error; 
        
    }}
