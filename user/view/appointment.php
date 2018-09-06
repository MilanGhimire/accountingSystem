<?php
//https://stackoverflow.com/questions/33969783/phpubuntu-send-email-using-gmail-form-localhost
session_start();
$title = 'Appointment';
$active = 'acServices';
$path = '../../';
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
                                <input class="form-control" name="fullname" placeholder="Full Name" type="text" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" placeholder="E-mail" type="email" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="phone_number" placeholder="Phome Number" type="text" pattern="[0-9]{10}" title="Length should be 10 numbers." required>
                            </div>
                            <div class="form-group">
                                <input type="date" name="datePicker" class="form-control" required/>
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