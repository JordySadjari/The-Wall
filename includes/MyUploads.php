<?php
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
$user = $_SESSION['name'];

$query="SELECT pic_url , title , id , description , userID FROM pics WHERE userID= '$user'" ;
$result = $mysqli->query($query);

echo '<div id="MyGallery" class="justified-gallery">';

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<a href="/DeMuur2/model/' . $row['pic_url'] . '" data-lightbox="Gallery" data-title="' . $row['title'] . '">
        <img src="/DeMuur2/model/' . $row['pic_url'] . '"</a>
        <div class="caption">' . $row['title'] . '<br>
        posted by: ' . $row['userID'] . '
        </div>
        ';

    }

}
echo '</div>';

?>