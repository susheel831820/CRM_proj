<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../costomer/css/style.css">


</head>
<body>
<!-- code for admin layout -->
<div class="container">
    <!-- <h1>Log in<br></h1> -->
<form>
<h1>Admin Log in<br></h1>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Username">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="btn">
      <button class="btn btn-primary">Log in</button>
      <a id="admin_btn" href="../costomer/login.php"><button class="btn btn-primary">costomer Login </button></a>
  </div>
  <div class="btn">
  <a href="#" id="forg">forgotten password</a>
 </div>
</form>
</div>

</body>
</html>