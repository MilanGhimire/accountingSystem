<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../../assets/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="col-md-12">
        <div class="modal-dialog" style="margin-bottom:0">
            <div class="modal-content">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="../../Controller/Action/user_login.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" name="username" placeholder="Username" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" placeholder="Password" type="password" value="">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" name="login" class="btn btn-sm btn-success">Login</button>

                        </fieldset>
                    </form>
                    <a type="submit" name="login" class="btn btn-sm btn-success" href="register.php">Signup</a>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
