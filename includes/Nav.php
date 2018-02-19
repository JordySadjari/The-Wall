<?php
        if (isset($_SESSION['name'])) {
?>
<body>
<nav class="navbar navbar-inverse" style="font-family: 'Indie Flower', cursive;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">The Wall</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle btn-lg" type="button" data-toggle="dropdown" style="background-color: purple;"><?php echo $_SESSION['name'];?>
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="?page=MyUploads">My Uploads</a></li>
                        <li><a href="?page=Upload">Upload</a></li>
                        <li><a href="/DeMuur2/model/Logout.php">Sign Out</a></li>
                    </ul>
                </div>
            </ul>
            <form class="navbar-form" role="search" method="post" action="?page=Search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle btn-lg" type="button" data-toggle="dropdown" style="background-color: purple;">Sort By:
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="?page=SortD">Date</a></li>
                        <li><a href="?page=SortT">Title</a></li>
                    </ul>
                </div>
        </div>
</nav>

<?php } else {?>

            <nav class="navbar navbar-inverse" style="font-family: 'Indie Flower', cursive; ">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">The Wall</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="?page=Register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="?page=Login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                        <form class="navbar-form" role="search" method="post" action="?page=Search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
            </nav>


<?php } ?>