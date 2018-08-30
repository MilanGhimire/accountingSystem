
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </head>

    <body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Account</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li <?php //if($active== null){echo 'class="active"';} ?>><a href="#">Home</a></li>
                    <li <?php //if($active=='aboutUs'){echo 'class="active"';} ?>><a href="#">About Us</a></li>
                    <li <?php //if($active=='acServices'){echo 'class="active"';} ?>><a href="#">Accounting Services</a></li>
                    <li <?php //if($active=='contact'){echo 'class="active"';} ?> class='active'><a href="contact.php">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="user/view/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="user/view/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>