<?php 
require "modules/db.php";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .wrapper{
        
    }
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
    
    .he {
        display: inline-block;
        vertical-align: top;
    }
    .p3{
    }
</style>
<body>

<div class="wrapper">
    <div class="he">
        <h2>Post New Story</h2><br>
            <form action="modules/post.php" method="POST">
                Category:
                <select name="categ">
                    <?php   
                    $sql = "SELECT CategoryID, Name FROM categories_tbl";
                    $result = $db->query($sql);
                    while($rows = $result->fetch_array()){
                        echo '<option value='.$rows[0].'>'.$rows[1].'</option>';
                    }
                    ?>
                </select><br><br>
                Story Content:<br>
                <textarea cols="30" rows="10" name="cnt"></textarea>
                <br>
                <input type="submit" value="submit">
            </form>  
    </div>
    <div class="he">
        <h2>Recent Stories</h2>
            <?php 
            $sql = "SELECT * FROM stories_tbl, categories_tbl WHERE stories_tbl.CategoryID = categories_tbl.CategoryID ORDER BY storyID DESC";
            $result = $db->query($sql);
            while($rows = $result->fetch_array()){
            $storyID = $rows[0];
            ?>
                <hr>
                <form action="modules/addstory.php" method="POST">
                    <p>Time and Date: <?php echo $rows[3]; ?></p>
                    <p>Category: <?php echo $rows[10]; ?></p>
                    <p>Content: <br><?php echo $rows[2]; ?></p>
                    <?php
                    $sql = "SELECT * FROM added_stories_tbl, accounts_tbl WHERE storyID = '$storyID' AND added_stories_tbl.AccountID = accounts_tbl.AccountID ORDER BY asID ASC";
                    $result_1 = $db->query($sql);
                    while($rows = $result_1->fetch_array()){
                    echo '
                    <p>'.$rows[5].'<small> - added '.$rows[3].' by '.$rows[14].' '.$rows[15].'</small></p>
                    ';
                    }
                    ?>                
                    Add to this story: <input type="text" name="cnt">
                    <input type="hidden" name="sid" value="<?php echo $storyID; ?>">
                    <input type="submit" value="Submit">
                </form>    
            <?php
            }
            ?>
    </div>
    <div class="he">
        <h2>Followed People Stories</h2><br>
            <?php 
            $sql = "SELECT * FROM stories_tbl, categories_tbl WHERE stories_tbl.CategoryID = categories_tbl.CategoryID ORDER BY storyID DESC";
            $result = $db->query($sql);
            $rows = $result->fetch_array();
            $storyID = $rows[0];
            ?>
                <hr>
                <form action="modules/addstory.php" method="POST">
                    <p>Time and Date: <?php echo $rows[3]; ?></p>
                    <p>Category: <?php echo $rows[10]; ?></p>
                    <p>Content: <br><?php echo $rows[2]; ?></p>
                    <?php
                    $sql = "SELECT * FROM added_stories_tbl, accounts_tbl WHERE storyID = '$storyID' AND added_stories_tbl.AccountID = accounts_tbl.AccountID ORDER BY asID ASC";
                    $result_1 = $db->query($sql);
                    while($rows = $result_1->fetch_array()){
                    echo '
                    <p>'.$rows[5].'<small> - added '.$rows[3].' by '.$rows[14].' '.$rows[15].'</small></p>
                    ';
                    }
                    ?>                
                    Add to this story: <input type="text" name="cnt">
                    <input type="hidden" name="sid" value="<?php echo $storyID; ?>">
                    <input type="submit" value="Submit">
                </form>    
    </div>
</div>    
</body>
</html>