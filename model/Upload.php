<?php

session_start();

// connectie database
include 'Config.php';

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_errno) {
    echo "<p>MySQL error no ($mysqli->connect_errno) : ($mysqli->connect_error)</p>";
    exit();
}
else {
    echo "<p>Connection okay</p>";
}

$image_path = 'Images/';

$filename = $_FILES['fileToUpload']['name'];

if ($filename == "image.png"){
    $filename = 'image. ' . rand(0,999999) . ' png';
}

if ($filename == "image.jpeg"){
    $filename = 'image. ' . rand(0,999999) . ' jpeg';
}


//echo $filename;

$tmp_filename = $_FILES['fileToUpload']['tmp_name'];

$destination = $image_path . $filename;

if (move_uploaded_file($tmp_filename,$destination))
{
    echo "file uploaded";
} else {
    echo "error";
}

$title = mysqli_real_escape_string($mysqli ,$_POST['title']);
$desc = mysqli_real_escape_string($mysqli ,$_POST['desc']);
$tags = mysqli_real_escape_string($mysqli ,$_POST['tags']);
$userID = $_SESSION['name'];

if (strpos($title, '<script>') !== false) {
   header('location: $page=fuckyou');
}

if (strpos($desc, '<script>') !== false) {
    header('location: $page=fuckyou');
}

if (strpos($tags, '<script>') !== false) {
    header('location: $page=fuckyou');
}

// Foto toevoegen aan database

$sql = "INSERT INTO pics (pic_url, title, Description, userID, tags) VALUES ('$destination','$title','$desc','$userID','$tags') ";

if($mysqli -> query($sql) === TRUE) {
    echo "<br>update succesvol</br>";
    echo $sql;
}else{
    echo "<br>Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli -> close();

header('Location: /DeMuur2/index.php');

