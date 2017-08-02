<?php
require "db.php";
session_start();
$aid = $_SESSION['id'];
$sid = $_POST['sid'];
$cnt = $_POST['cnt'];

$sql =  "INSERT INTO added_stories_tbl (AccountID ,storyID, DateAdded, isDeleted, content) VALUES ('$aid', '$sid', NOW(), 'NO', '$cnt')";
$db->query($sql);
header("Location: ../landing.php");
?>