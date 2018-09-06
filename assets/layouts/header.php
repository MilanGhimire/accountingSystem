<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>assets/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo $path; ?>assets/js/bootstrap.min.js"></script>
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
        <style>
            .footer-bs {
                background-color: #3c3d41;
                padding: 60px 40px;
                color: rgba(255,255,255,1.00);
                margin-bottom: 20px;
                border-bottom-right-radius: 6px;
                border-top-left-radius: 0px;
                border-bottom-left-radius: 6px;
            }
            .footer-bs .footer-brand, .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { padding:10px 25px; }
            .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-color: transparent; }
            .footer-bs .footer-brand h2 { margin:0px 0px 10px; }
            .footer-bs .footer-brand p { font-size:12px; color:rgba(255,255,255,0.70); }

            .footer-bs .footer-nav ul.pages { list-style:none; padding:0px; }
            .footer-bs .footer-nav ul.pages li { padding:5px 0px;}
            .footer-bs .footer-nav ul.pages a { color:rgba(255,255,255,1.00); font-weight:bold; text-transform:uppercase; }
            .footer-bs .footer-nav ul.pages a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }
            .footer-bs .footer-nav h4 {
                font-size: 11px;
                text-transform: uppercase;
                letter-spacing: 3px;
                margin-bottom:10px;
            }

            .footer-bs .footer-nav ul.list { list-style:none; padding:0px; }
            .footer-bs .footer-nav ul.list li { padding:5px 0px;}
            .footer-bs .footer-nav ul.list a { color:rgba(255,255,255,0.80); }
            .footer-bs .footer-nav ul.list a:hover { color:rgba(255,255,255,0.60); text-decoration:none; }

            .footer-bs .footer-social ul { list-style:none; padding:0px; }
            .footer-bs .footer-social h4 {
                font-size: 11px;
                text-transform: uppercase;
                letter-spacing: 3px;
            }
            .footer-bs .footer-social li { padding:5px 4px;}
            .footer-bs .footer-social a { color:rgba(255,255,255,1.00);}
            .footer-bs .footer-social a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }

            .footer-bs .footer-ns h4 {
                font-size: 11px;
                text-transform: uppercase;
                letter-spacing: 3px;
                margin-bottom:10px;
            }
            .footer-bs .footer-ns p { font-size:12px; color:rgba(255,255,255,0.70); }

            @media (min-width: 768px) {
                .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-left:solid 1px rgba(255,255,255,0.10); }
            }
            footer {
                right: 0;
                bottom: 0;
                left: 0;
                padding: 1rem;
                background-color: #efefef;
                text-align: center;
                margin: 0 !important;
            }
        </style>
    </head>
    <body>    
        <!-- Navigation Bar -->
        <?php
        if (!isset($path)) {
            $path = '';
        }
        ?>
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
                        <li <?php
                        if ($active == 'home') {
                            echo 'class="active"';
                        }
                        ?>><a href="<?php echo $path; ?>index.php">Home</a></li>
                        <li <?php if($active=='aboutUs'){ echo 'class="active"';} ?>><a href="<?php echo $path; ?>aboutUs.php">About Us</a></li>
                        <li <?php
                        if ($active == 'acServices') {
                            echo 'class="active"';
                        }
                        ?>><a href="<?php echo $path; ?>user/view/appointment.php">Accounting Services</a></li>
                        <li <?php
                        if ($active == 'contact') {
                            echo 'class="active"';
                        }
                        ?>><a href="<?php echo $path; ?>contact.php">Contact Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $path; ?>user/view/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="<?php echo $path; ?>user/view/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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