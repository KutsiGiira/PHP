<?php
try{
    $server = mysqli_connect("localhost", "root", "", "linking");
}
catch(mysqli_sql_exception){
    echo "<h1>NO CONNECTION</h1>";
}
?>