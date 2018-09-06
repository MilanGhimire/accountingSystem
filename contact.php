<?php
$title = 'Contact';
$path = '';
$active = 'contact';
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<?php include_once 'assets/layouts/header.php'; ?>
<div class="container">
    <div class="row">
        <div> <!-- Google maps -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2526300.5251948414!2d172.6738426935582!3d-42.50764149391143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d2c200e17779687%3A0xb1d618e2756a4733!2sNew+Zealand!5e0!3m2!1sen!2snp!4v1536240231208" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div> <!-- end Google maps -->
    </div>
    <div>
        <h2 class="text-center">Contact Form</h2>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <p><?php
                    if (isset($_SESSION['showMessage'])) {
                        echo $_SESSION['showMessage'];
                        unset($_SESSION['showMessage']);
                    }
                    ?></p>
            </div>
            <div class="col-12 col-md-8 col-lg-6 pb-5">


                <!--Form with header-->

                <form action="Controller/Action/feedback_request.php" method="post">
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Contact Us</h3>
                                <p class="m-0">We will gladly help you<p>
                            </div>
                        </div>
                        <div class="card-body p-3">

                            <!--Body-->
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="nombre" name="fullName" placeholder="Full Name" pattern="[A-Za-z ]{2,}" title="Only Alphabetical" required>
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
                                    <textarea name="message" class="form-control" placeholder="Send us your message" required></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" name="feedbackSubmit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>

                    </div>
                </form>
                <!--Form with header-->
            </div>
        </div>
    </div>
</div>
<?php include_once 'assets/layouts/footer.php'; ?>
<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(-38.136848, 176.249741),
            zoom: 10,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
</script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
</body>
</html>