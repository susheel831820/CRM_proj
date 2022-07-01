<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page </title>
  <style>
   *{
    margin:0px;
    padding:0px;

   }
   header{
    width:100%;
    display:flex;
    /* background:linear-gradient(to right, #262f73 , white) ; */
    background: #262f73;
        height: 90px;

     
   }
   #logo{
     height:50px;
     background-color: #b5d9d1;
     width: 225px;
    margin-top: 20px;
        border-top-right-radius: 25px;
    padding: 24px;


   }
   #name-bar{
    margin-left: 644px;
    margin-top: 23px;
    position: relative;
    color: white;
   }
   #nav-bar{
    display: inline-block;
    /* background:linear-gradient(to right, #262f73 , white) ; */
    background: #262f73;
    height: 100vh;
    width: 243px;
    margin-top: 30px;
   }
   #nav-bar a:link{
    color: white;
    font-size:20px;
    
   }
   .footer{
    width:100%;
    height:10vh;
    background-color:#262f73;

   }
  
   
  </style>
</head>
<body>
  <header>
    <div id="logo">
          <h1>CRM Project</h1>
    </div>
    <div id="name-bar">
      <h1>SUSHEEL VERMA</h1>
    </div>
    
  </header>
  <nav id="nav-bar">
    <div><a href="#">Dashboard</a></div>
    <div>
    <a href="#">History</a>

    </div>
    <div>
    <a href="#">New Requests</a>

    </div>
    <div>
    <a href="#">Logout</a>

    </div>
    
  </nav>
  <div class="container">

  </div>
  <footer class="footer">

  </footer>
</body>
</html>