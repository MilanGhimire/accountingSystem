<?php
session_start();
$title = 'Register';
$path = '../../';
$active = null;
include_once '../../assets/layouts/header.php';
?>
<div class="container">
    <div>
        <p>
            <?php
            if (isset($_SESSION['showMessage'])) {
                echo $_SESSION['showMessage'];
                unset($_SESSION['showMessage']);
            }
            ?>
        </p>
    </div>
    <!--  -->
    <form onsubmit="return validateForm()" name="registerForm" class="well form-horizontal" action="../../Controller/Action/user_register.php" method="post">
        <fieldset>

            <!-- Form Name -->
            <legend><center><h2><b>Registration Form</b></h2></center></legend><br>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Full name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="full_name"  name="full_name" placeholder="Full Name" class="form-control" type="text" pattern="[A-Za-z]{5,}" title="Alphabets of 5 characters only" autofocus required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Address</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="address" placeholder="Address" class="form-control"  type="text" pattern="[A-Za-z]{5,}" title="Alphabets of 5 characters only" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Contact</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="contact" placeholder="Contact" class="form-control"  type="text" pattern="[0-9]{6,}" title="At least 6 character long." required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Email</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="email" placeholder="Email" class="form-control"  type="text" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Username</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="userName" name="username" placeholder="Username" class="form-control" type="text" onblur="checkName()" required>
                    </div>
                    <div id="uname_response" class="response"></div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Password</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
                        <input  name="password" placeholder="Password" class="form-control"  type="password" required>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4"><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="signup" id="submit_button" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span id="submitBtn" class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                </div>
            </div>

        </fieldset>
    </form>
</div>
</div><!-- /.container -->
</body>
<script type="text/javascript">

    function checkName() {
        var uname = $('#userName').val();

        if (uname != '') {

            $("#uname_response").show();

            $.ajax({
                url: '../../Controller/Action/uname_check.php',
                type: 'post',
                data: {uname: uname},
                success: function (response) {
                    if (response > 0) {
                        $("#uname_response").html("<span class='not-exists' style='color:red'>* Username Already in use.</span>");
                        $("#submit_button").prop("disabled", true);

                    } else {
                        $("#uname_response").html("<span class='exists' style='color:green'>Available.</span>");
                        $("#submit_button").prop("disabled", false);
                    }

                }
            });
        } else {
            $("#uname_response").hide();
        }
    }
</script>
</html>
