<?php
require "db.php";
$em = $_POST['em'];
$pw = $_POST['pw'];
$bio = $_POST['bio'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$bd = $_POST['bd'];
$gd = $_POST['gd'];

$sql = "INSERT INTO accounts_tbl (Email, Password, Authority, dateRegistered, numberOfReports, isConfirmed, Bio, First_name, Last_name, Birthday, Gender)
VALUES ('$em', '$pw', 'User', NOW(), '0', 'NY', '$bio', '$fn', '$ln', '$bd', '$gd')";
if($db->query($sql)){
    header('Location: ../index.php?remarks=success');
}
else{
    echo "Error";
}

?>