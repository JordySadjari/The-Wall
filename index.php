<?php

require 'model/Config.php';
include 'includes/Head.php';
include 'includes/Nav.php';

if (isset($_GET['page']))
{
        include 'includes/' . $_GET['page'] . '.php';

} else {
    include 'includes/Main.php';
}

include 'includes/Footer.php';

?>




