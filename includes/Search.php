<body>
<?php
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

$term = $_POST['srch-term'];

$query="SELECT * FROM pics WHERE ((title LIKE '%".$term."%') OR (userID LIKE '%".$term."%') OR (tags LIKE '%".$term."%'))";

$result = $mysqli->query($query);

echo '<h2 style="color: #fff;">You searched for <span style="color:black; font-size: 1.5em;">' . $term . '</span></h2>';

echo '<div id="MyGallery" class="justified-gallery">';

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<a href="/DeMuur2/model/' . $row['pic_url'] . '" data-lightbox="Gallery" data-title="' . $row['title'] . '">
        <img src="/DeMuur2/model/' . $row['pic_url'] . '"</a>
        <div class="caption">' . $row['title'] . '<div style="float: right;">tags: ' . $row['tags'] . '</div><br>
        posted by: ' . $row['userID'] . '
        <div style="float: right;">Date: ' . $row['date'] . '</div>
        </div>
        ';

    }

}
echo '</div>';

?>
