
<?php
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

$query="SELECT * FROM pics  ORDER BY RAND()";

$result = $mysqli->query($query);

echo '<div id="MyGallery" class="justified-gallery">';

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<a href="/DeMuur2/model/' . $row['pic_url'] . '" data-lightbox="Gallery" data-title="' . $row['title'] . ' || ' . $row['description'] . '">
        <img src="/DeMuur2/model/' . $row['pic_url'] . '" alt="' . $row['title'] . '"
        </a>
        <div class="caption">' . $row['title'] . '<div style="float: right;">tags: ' . $row['tags'] . '</div><br>
        posted by: ' . $row['userID'] . '
        <div style="float: right;">Date: ' . $row['date'] . '</div>
        </div>
        ';


    }

}
echo '</div>';
?>
