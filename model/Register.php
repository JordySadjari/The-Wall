<?php
include 'Config.php';

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_errno) {
    echo "<p>MySQL error no ($mysqli->connect_errno) : ($mysqli->connect_error)</p>";
    exit();
}
else {
    echo "<p>Connection okay</p>";
}


$username = ($_POST['name']);
$password = ($_POST['pwd']);
$Email = ($_POST['ema']);

$sql = "INSERT INTO user (Username , Password , Email) VALUES ('$username' , '$password' , '$Email') ";

if($mysqli -> query($sql) === TRUE) {
    echo "<br>update succesvol</br>";
    echo $sql;
    header("Location: /DeMuur2/index.php");
}else{
    echo "<br>Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli -> close();
?>
