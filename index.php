
<?php
   include("config.php");
   session_start();
   $error='';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $myac_type = mysqli_real_escape_string($db,$_POST['type']); 

      $sql = "SELECT Sno FROM login WHERE usr_id = '$myusername' and pass = '$mypassword' and Ac_type ='$myac_type'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //   $active = $row['active'];
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
        //  session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";

      }
   }
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>College_crmProgject.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">


</head>
<body>

<div class="container">
<!-- this  is select for user type -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
<h1>Log in<br></h1>
<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
<div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
      <select class="form-control" name="type">
      <option value="">Select login type</option>
      <option value="admin">Admin</option>
      <option value="service">Service</option>
      <option value="user">User</option>
      </select>
    </div>  
    <!-- this is for user id  -->
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="username" type="text" class="form-control" name="username" placeholder="Username">
  </div>
  <!-- this  is for the password  -->
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="btn">
      <button type="submit" class="btn btn-primary" name="login">Log in</button>
  </div>
  <div class="btn">

  </div>
  <div class="btn">
    <section id="sec1"><a href="#">forgotten password</a></section>
  <section id="sec2"><a href="create_usr.php">create new user</a></section>

  </div>
</form>


</div>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>
</html>
