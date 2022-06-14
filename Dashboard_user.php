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
  <link rel="stylesheet" href="css/style1.css">
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
   include('session.php');
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
                <ul style="height: 971px;">
                    <li class="active"><a href="dashboard_user.php">User</a></li>

                    <li><a href="history_user.php">History</a></li>

                    <li><a href="#">History</a></li>

                    <li><a href="#">Setting</a></li>
                    <li><a href="logout.php">Logout</a></li>
</ul>
</nav>
</div>
<div class="container">
 

           <form action="action_request.php"  class="form" onsubmit="success:alert('compleated data submition')" method ="post" >
            <h1> New Request form: </h1>
            <div class="form-group">
    <label for="name ">Name:</label>
    <input type="name" class="form-control" name="name" placeholder="Full Name"   id="fname" required >
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" id="email" required>
  </div>

  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="phone" class="form-control" name="phone"placeholder="Phone" id="phone" required>
  </div>

  <div class="form-group">
    <label for="altphone">Alternative Phone:</label>
    <input type="altphone" class="form-control" name="alt-phone" placeholder="Alternative Phone" id="altphone">
  </div>

  <div class="form-group">
    <label for="billno">Bill Number:</label>
    <input type="billno" class="form-control"  name="bill_No"placeholder="Bill Number" id="billno" required>
  </div>
 
    <div class="form-group">
      <label for="brand">Brand Name</label>
      <select id="slct1" name="slct1" class="form-control"  onchange="populate(this.id,'slct2')" required>
        <option value=" " >Brand</option>
            <option value="samsung">samsung</option>
            <option value="oppo">oppo</option>
            <option value="realmi">realmi</option>
            <option value="lava">lava</option>
            </select>
      

            </div>
            <div class="form-group">
            <label for="model-name">Model Name</label>
            <select id="slct2" class="form-control" name="slct2" style="margin-top:0px;" required>
            <option value=" " >model</option>
          </select><br>
          </div>
         
          <div class="form-outline mb-4"><label>Address</label>
            <textarea class="form-control"  name="Address" id="form7Example7" rows="4"></textarea required>
           
          </div>
  <div class="form-outline mb-4">
  <label class="form-label" for="form7Example7">Description</label>
            <textarea class="form-control" name ="discription" id="form7Example7" rows="4"></textarea required>
           
          </div>
          
  <button type="submit" class="btn btn-primary submit-btn" >Submit</button>
  <button type="reset" class="btn btn-default submit-btn">clear</button>
</form>
</div>
            <footer> 
                     <h4><i>&copy;Copyright Reserved.</i></h4>
                    </footer>
                   
</body>
</html>