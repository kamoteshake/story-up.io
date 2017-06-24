<?php
  // DB connection must be in here.
  $mysqlHost = "mysql.story-up.io";
  $mysqlUser = "storyupmysql";
  $mysqlPass = "StoryUpIsAwesome";
  $mysqlDatabase = "storyupdb";

  $mysqlConnect = mysqli_connect($mysqlHost, $mysqlUser, $mysqlPass, $mysqlDatabase);

  // Tests MySql Connection
  if (!$mysqlConnect) {
     die('Could not connect: ' . mysqli_connect_error());
  }
  echo 'Connected successfully';
  mysqli_close($mysqlConnect);

  // Global Functions
  include __DIR__.'/function.inc.php';

  // Website Configs
  $WebTitle = 'Story Up';

?>