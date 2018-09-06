<?php
include_once '../../Controller/call.php';
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        $active = 'home';
        include_once '../../assets/layouts/header.php';
        ?>
        <!-- Navigation Bar Ends-->
        <div class="container">
            <div class="col-md-12">
                <p><?php
                    if (isset($_SESSION['showMessage'])) {
                        echo $_SESSION['showMessage'];
                        unset($_SESSION['showMessage']);
                    }
                    ?></p>
            </div>
            <div class="col-md-12">
                <div class="modal-dialog" style="margin-bottom:0">
                    <div class="modal-content">
                        <div class="panel-heading">
                            <h3 class="panel-title">Appointment Request Form</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="../../Controller/Action/appointment_request.php">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" name="fullname" placeholder="Full Name" type="text" autofocus="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="email" placeholder="E-mail" type="email" value="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="phone_number" placeholder="Phome Number" type="number" value="">
                                    </div>
                                    <div class="form-group">
                                        <select name="app_date">
                                            <option value="SUN" selected>Sunday</option>
                                            <option value="MON">Monday</option>
                                            <option value="TUE">Tuesday</option>
                                            <option value="WED">Wednesday</option>
                                            <option value="THU">Thursday</option>
                                            <option value="FRI">Friday</option>
                                            <option value="SAT">Saturday</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" name="datePicker" class="form-control"/>
                                    </div>

                                    <!-- Change this to a button or input when using this as a form -->     
                                    <button type="submit" name="app_submit" class="btn btn-sm btn-success">Submit</button>
                                    <input type="reset" name="reset" class="btn btn-sm btn-danger" value="Reset" />
                                </fieldset>
                            </form>
                            <a type="submit" name="back" class="btn btn-sm btn-success" href="../../index.php">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>