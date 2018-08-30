<?php
include_once ('../../action/Account.php');
?>

<html>
<head>
    <title>Register page</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
            <div class="panel-heading">
                <h3 class="panel-title">Sign In</h3>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="../../Controller/Action/register.php">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" name="username" placeholder="Username" type="text" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password" placeholder="Password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <button type="submit" name="signup" class="btn btn-sm btn-success">Signup</button>
                    </fieldset>
                </form>
                <a type="submit" name="login" class="btn btn-sm btn-success" href="login.php">Back to Login</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
