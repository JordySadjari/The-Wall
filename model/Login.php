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

$username = mysqli_real_escape_string($mysqli ,$_POST['name']);
$password = mysqli_real_escape_string($mysqli ,$_POST['pwd']);
$result = $mysqli->query("SELECT password FROM user WHERE password= '$password' AND username= '$username'");
$db_password = $db_password = mysqli_fetch_array($result);

if($mysqli -> query($sql) === TRUE) {
    echo "<br>update succesvol</br>";
    echo $sql;
    header("Location: /DeMuur2/index.php");
}else{
    echo "<br>Error: " . $sql . "<br>" . $mysqli->error;
}

if($password === $db_password['password']){
    session_start();
    $_SESSION['name'] = $username;
    header('Location: /DeMuur2/index.php');
}else {
    echo "inlog failed";
    var_dump($db_password);
    echo $password;
}

$mysqli -> close();
?>
