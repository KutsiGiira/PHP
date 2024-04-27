<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ind.css">
    <title>Login Page</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="user">Username</label><br>
    <input type="text" name="usern"><br>
    <label for="pass">Password</label><br>
    <input type="password" name="pass"><br>
    <input type="submit" name = "sub">
    </form>
</body>
</html>
<?php
if(isset($_POST["usern"]) && isset($_POST["pass"]))
{   
    function val($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = val($_POST['usern']);
    $pass = val($_POST['pass']);
    if(empty($name))
    {
    echo "<span class=\"f\">Error : name req</span>";
    }
    else if(empty($pass))
    {
        echo "<span class=\"f\">Error : pass req</span>";
    }
}
?>