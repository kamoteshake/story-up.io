<?php
require "db.php";
$em = $_POST['em'];
$pw = $_POST['pw'];
$sql = "SELECT AccountID, Email, Password FROM accounts_tbl WHERE Email = '$em' AND Password = '$pw'";
$result = $db->query($sql);

if($result->num_rows > 0){
    $rows = $result->fetch_array();
    session_start();
    $_SESSION['id'] = $rows[0];
    echo $_SESSION['id'];
    header("Location: ../landing.php");
}

else{
    echo "Error";
}
?>