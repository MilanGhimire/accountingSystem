<html>
<head>
    <title>Register page</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
  <div class="container">

<form class="well form-horizontal" action="../../Controller/Action/user_register.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Full name</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="full_name" placeholder="FUll Name" class="form-control"  type="text">
      </div>
    </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Address</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="address" placeholder="Address" class="form-control"  type="text">
      </div>
    </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Contact</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="contact" placeholder="Contact" class="form-control"  type="text">
      </div>
    </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Email</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="email" placeholder="Email" class="form-control"  type="text">
      </div>
    </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="username" placeholder="Username" class="form-control"  type="text">
      </div>
    </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Password</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-eye-close"></i></span>
        <input  name="password" placeholder="Password" class="form-control"  type="password">
      </div>
    </div>
</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="signup" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->
</body>
</html>
