<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style1.css">
</head>

<script>
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "samsung"){
		var optionArray = ["Model|Model","m11|m11","a51|a51","a31|a31"];
	} else if(s1.value == "realmi"){
		var optionArray = ["Model|Model","realmi 2 pro|realmi 2 pro","realme GT Neo 3|realme GT Neo 3","realmi 9|realmi 9"];
	} else if(s1.value == "oppo"){
		var optionArray = ["Model|Model","A54|A54","A31|A31"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>
<?php
   include('../session.php');
?>
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
                 <h1>CRM</h1>
               </div>
               <div id="namebar">
               <h2><?php echo strtoupper($name);?></h2>
               </div>
                <ul style="height: 100vh;">
                    <li class="active"><a href="dashboard_user.php">Dhashboard</a></li>
                    <li><a href="history_user.php">All Ticket</a></li>
                    <li><a href="request.php"> New Request</a></li>
                    <li><a href="search_ticket.php"> Search Tickets</a></li>
                    <li><a href="../logout.php">Logout</a></li>
</ul>
</nav>
</div>
<div class="container">
    <div class="welcome-box">
        <h1 style=""> Welcome <?php echo strtoupper($name)?></h1>

    </div>
    <?php
    $sql = "SELECT * FROM `request_table` WHERE 1";
    $result = mysqli_query($db,$sql);
    $no_of_request =  mysqli_num_rows($result);
    $sql2 = "SELECT * FROM `request_table` WHERE `status`='pending'";
    $result2 = mysqli_query($db,$sql2);
    $no_new_request =  mysqli_num_rows($result2);
    
    ?>
    <div style="display:flex ;width:655px;">
    <div class="dash-card">
      <h3 style="margin-left:20px;">Total Request : <?php echo $no_of_request;?></h3>
      <button class="btn btn-default" style="margin-left:210px; margin-top:10px;"><a href="history_user.php">View</a></button>
    </div>
     <div class="dash-card" style="margin-left:40px;">
     <h3 style="margin-left:20px;">New Request : <?php echo $no_new_request;?></h3>
      <button class="btn btn-default" style="margin-left:210px; margin-top:10px;"><a href="pending.php">View</a></button>
      </div>

    </div>
    

     
</div>
            <footer> 
                     <h4><i>&copy;Copyright Reserved.</i></h4>
                    </footer>
                   
</body>
</html>