<?php
require "db.php";
session_start();

$cnt = $_POST['cnt'];
$categ = $_POST['categ'];
$userid = $_SESSION['id'];
$sql = "INSERT INTO stories_tbl (accountID, content, dateUploaded, datePublished, isClosed, isDeleted, CategoryID, Title) VALUES ('$userid', '$cnt', NOW(), '--', 'NO', 'NO', '$categ', 'Untitled')";
if($db->query($sql)){
    header('Location: ../landing.php');
}
else{
    echo "error";
}
?>