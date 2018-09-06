<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        $active = null;
        include_once 'assets/layouts/header.php';
        ?>
        <div class="container">
            <div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-contact100">
                    <form class="contact100-form validate-form">
                        <span class="contact100-form-title">
                            Get in Touch
                        </span>

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">Tell us your name *</span>
                            <input class="input100" type="text" name="name" placeholder="Enter your name">
                        </div>

                        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <span class="label-input100">Enter your email *</span>
                            <input class="input100" type="text" name="email" placeholder="Enter your email">
                        </div>

                        <div class="wrap-input100">
                            <span class="label-input100">Your Website</span>
                            <input class="input100" type="text" name="web" placeholder="http://">
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Message is required">
                            <span class="label-input100">Message</span>
                            <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
                        </div>

                        <div class="container-contact100-form-btn">
                            <div class="wrap-contact100-form-btn">
                                <div class="contact100-form-bgbtn"></div>
                                <button class="contact100-form-btn">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <span class="contact100-more">
                    Call us on +001 345 6178
                </span>
            </div>
        </div>
    </body>


