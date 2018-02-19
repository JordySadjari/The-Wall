<?php
session_start();
session_unset();
session_destroy();
header("Location: /DeMuur2/index.php");