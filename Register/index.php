<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
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
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userv = "{$_POST["usern"]}";
    $passv = "{$_POST["pass"]}";
    if(empty($userv)){
        echo"error empty username";
    }
    elseif(empty($passv)){
        echo "error empty passv";
    }
    else{
        $sql = "INSERT INTO link1(user, pswrd)
        VALUES ('$userv', '$passv')";
            try{
                mysqli_query($server, $sql);
                echo"done";
            }
            catch(mysqli_sql_exception){
                echo"EROR";
            }
    }
}
mysqli_close($server);
?>