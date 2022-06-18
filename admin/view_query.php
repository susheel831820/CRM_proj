<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style1.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<?php
   include('../session.php');
?>
<script>
function send_token(id){
          //  console.log(no); 
   
  </script>
<body>
                 <div class="main-bar">
                 <nav>
               
                     <input type="checkbox" id="check">
                    
                     <label for="check" class="checkbtn">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                     </label>
               <div class="logo-header">
                 <h1 style="color:white;">CRM</h1>
               </div>
               <div id="namebar">
               <h2><?php echo strtoupper($name);?></h2>
               </div>
               
                <ul style="height: 734px;">
                    <!-- <span  id="nameShown"style="color:white; margin-right:20px; font-size:25px;"><h2><?php echo strtoupper($name);?></h2></span> -->
                    <li class="active"><a href="Dashboard_admin.php">Admin</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="../logout.php">Logout</a></li>

</ul>
</nav>
</div>
<div class="container" style="height:552px;">
<?php
  // if($_SERVER["REQUEST_METHOD"] == "POST") {
  //   $serviceman_id = $_POST['service_man'];
  //   $token = $_POST['token_no'];
  //   echo $serviceman_id;
  //   echo $token;
  // }
$token = $_POST['id'];
 $query= "SELECT * FROM `Request_table` WHERE `token_no`= $token;";
 $query2 = "SELECT * FROM `login` WHERE `Ac_type`='service';";
 $result1 = mysqli_query($db,$query2);
 $result = mysqli_query($db,$query);
 $resultcheck = mysqli_num_rows($result);
 $resultcheck1 = mysqli_num_rows($result1);
 if ($resultcheck > 0){
     while($row=mysqli_fetch_array($result)){
?>

 <div class="view-card">
        <div class="card-heading"><h1>Request Detailes:</h1></div>
        <div class="card-body">
        <div class="name"> <h1><b> Name :</b> <?php echo $row['Name'];?></h1></div>
        <div class="email"><h3><b> Token No :</b> <?php echo $row['token_no'];?></h3></div>
        <div class="email"><h3><b> Email:</b> <?php echo $row['Email'];?></h3></div>
        <div class="email"><h3><b> Phone No :</b> <?php echo $row['Phone'];?></h3></div>
        <div class="email"><h3><b> Alternative Phone No : </b><?php echo $row['Alt-phone_no'];?></h3></div>
        <div class="email"><h3><b> Bill No :</b> <?php echo $row['Bill_no'];?></h3></div>
        <div class="email"><h3><b> Brand :</b> <?php echo $row['Brand'];?></h3></div>
        <div class="email"><h3><b> Model :</b> <?php echo $row['Model'];?></h3></div>
        <div class="email"><h3><b> Adress of client :</b> <?php echo $row['Address'];?></h3></div>
        <div class="email"><h3><b> Problem Description :</b> <?php echo $row['Description'];?></h3></div>
        
        </div>
        <div class="card-footer" style="position: relative;  margin-top: -480px;margin-left: 756px;    width: 200px;">
        <div class="email"><h3><b> Status :</b> <?php echo $row['Status'];?></h3></div>
        <?Php
        if( $row['Status'] == "pending"){

        
        ?>
        <div> <form action="allocate.php" method="post">
        <select name="service_man" class="form-control" id="service_man">
        <option value="serviceman_list">Select Service Man</option>
        <?php
      
        if($resultcheck1>0){
            while($row= mysqli_fetch_array($result1)){

        
        ?>
        <option value="<?php echo $row['Sno']?>"><?php echo $row['name'];?></option>
       <?php
           }
        }
       ?>
        </select></div>
        <button class="btn btn-primary" name="token_no" value="<?php echo $token?>"style="margin-top:20px;">Allocate Sevice_man</button>
        </form>
        <?php
          }
          ?>
        </div>
 </div>
</div>
            <footer>
                     <h4><i>&copy;Copyright Reserved.</i></h4>
            </footer>
                   
</body>

</html>






<?php






        
     }
 }
 
?>
