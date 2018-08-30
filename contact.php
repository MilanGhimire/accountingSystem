<?php
$active = 'contact';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div id="googleMap" style="width:100%;height:400px;"></div>
            </div>
            <div>
                <h2 class="text-center">Contact Form</h2>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 pb-5">


                        <!--Form with header-->

                        <form action="mail.php" method="post">
                            <div class="card border-primary rounded-0">
                                <div class="card-header p-0">
                                    <div class="bg-info text-white text-center py-2">
                                        <h3><i class="fa fa-envelope"></i> Contactanos</h3>
                                        <p class="m-0">Con gusto te ayudaremos</p>
                                    </div>
                                </div>
                                <div class="card-body p-3">

                                    <!--Body-->
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                            </div>
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                            </div>
                                            <input type="email" class="form-control" id="nombre" name="email" placeholder="ejemplo@gmail.com" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                            </div>
                                            <textarea class="form-control" placeholder="Envianos tu Mensaje" required></textarea>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!--Form with header-->
                    </div>
                </div>
            </div>
        </div>
        <script>
            function myMap() {
                var mapProp = {
                    center: new google.maps.LatLng(-38.136848, 176.249741),
                    zoom: 10,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
        <!--
        To use this code on your website, get a free API key from Google.
        Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
        -->
    </body>
</html>