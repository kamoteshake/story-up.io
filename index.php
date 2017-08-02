<!DOCTYPE HTML>
<html>
<head>
    
</head>
<body>
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