<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Story Up - Write your stuff</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        span{
            padding: 20px;
            padding: 20px;
        }
    </style>
</head>
<body>
    
    
    <div class="navbar">
        <div class="navbar_logo">
            <a href="index.html"><img src="assets/logo.png" id="mainLogo" style="height: 150px; width: auto; top: -35px; position: relative;"></a>
        </div>
        <div class="account_links">
            <span class=" account_links_link login_border"><a href="#asd">Login</a></span><span class="account_links_link"><a href="#asd">Sign-Up</a></span>
        </div>
    </div>
    <div class="wrapper">
        <div class="main_image">
            <img src="assets/logo-image.png" style="width: 300px">
            <br>
            <img src="assets/logo-text.png" style="width: 300px">

        </div>
        <div class="howItWorksButtonDiv">
            <span class="howButton"><a href="#">How it works</a></span>
        </div>
        
    </div>        
        <div class="footer">
            <span><a href="#">About Us</a></span>   |   <span><a href="#">Download</a></span>   |   <span><a href="#">Terms of Use</a></span>
            <p style="font-size: 10px">Design by: <a href="http://www.instagram.com/lexpeee">@lexpeee</a></p>
        </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<h2>LOGIN</h2>
<form action="modules/login.php" method="POST">
    Em: <input type="text" name="em"><br><br> 
    Pw: <input type="text" name="pw"><br><br>
    <input type="submit" value="Login">
</form>
    
<br><br><br><br>
<h2>REGISTER</h2>
<form action="modules/register.php" method="POST">
    Em: <input type="text" name="em"><br><br>
    Pw: <input type="text" name="pw"><br><br>
    Fn: <input type="text" name="fn"><br><br>
    Ln: <input type="text" name="ln"><br><br>
    Bd: <input type="text" name="bd"><br><br>
    Gender: <select name="gd">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
    <br>
    Bio: <br>
    <textarea placeholder="(Optional)" cols="30" rows="10" name="bio"></textarea>
    <br>
    <input type="submit" value="Submit">
</form>
</body>
</html>