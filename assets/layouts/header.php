
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
                        <li <?php if($active== null){echo 'class="active"';}  ?>><a href="index.php">Home</a></li>
                        <li <?php //if($active=='aboutUs'){echo 'class="active"';}  ?>><a href="#">About Us</a></li>
                        <li <?php //if($active=='acServices'){echo 'class="active"';}  ?>><a href="#">Accounting Services</a></li>
                        <li <?php if ($active == 'contact') { echo 'class="active"'; } ?>><a href="contact.php">Contact Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="user/view/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="user/view/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                    
                    <ul style="color: #9d9d9d;" class="nav navbar-nav navbar-right">
                        <li style="margin-top: 17px; margin-right: 10px;" class="photos"></li>
                        <li style="margin-top: 17px; margin-right: 10px;" class="city"></li>
                        <li style="margin-top: 17px; margin-right: 10px;" class="text"></li>
                        <li style="margin-top: 17px; margin-right: 10px;" class="temp"></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="photos">
            
        </div>
        <div class="city">
            
        </div>
        <div class="text">

        </div>
        <div class="temp">
            
        </div>

        <script>
            $(document).ready(function () {

                var cities = ['Dunedin', 'Christchurch', 'Wellington', 'Nelson', 'Auckland'];

                $.get("https://api.apixu.com/v1/current.json?key=533920d31cc44af491660306182603&q=" + cities[0], function (data, status) {
                    $("li.city").text(cities[0]);
                    $("li.text").html('<img style="width: 40px;height:30px;" src="http:' + data.current.condition.icon + '"/>' + data.current.condition.text)
                    $("li.temp").html(data.current.temp_c + "<sup>o</sup>C");
                })

                var count = 1;
                setInterval(() => {

                    $.get("https://api.apixu.com/v1/current.json?key=533920d31cc44af491660306182603&q=" + cities[count], function (data, status) {
                        $("li.city").text(cities[count]);
                        $("li.text").html('<img style="width: 40px;height:30px;" src="http:' + data.current.condition.icon + '"/>' + data.current.condition.text)
                        $("li.temp").html(data.current.temp_c + "<sup>o</sup>C");
                    })
                    count++;

                    if (count == cities.length) {
                        count = 0;
                    }

                }, 10000);
            });

        </script>