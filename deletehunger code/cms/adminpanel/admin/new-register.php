<?php
session_start();

if(isset($_SESSION['id'])&& isset($_SESSION['use_name'])){
    ?>

<?php
$servername="127.0.0.1:3306";
$username="u130083126_deletehunger";
$password="Deletehunger@2024";
$databse="u130083126_deletehunger";
// create connection
$connection=new mysqli($servername,$username,$password,$databse);


$user_name="";
$password="";
$site="";



if($_SERVER['REQUEST_METHOD']=='POST'){
    $user_name=$_POST["user_name"];
    $password=$_POST["password"];
    $site=$_POST["user"];
    

    $errorMessage="";
    $successMessage="";

    do{
        if(empty($user_name)|| empty($password)|| empty($site)){
            $errorMessage="All fields are Required";
            break;
        }
        
        // add new client to database
        $sql="INSERT INTO users(user_name,password,location) " . 
             "VALUES ('$user_name','$password','$site')";
        $result=$connection->query($sql);

        if(!$result){
            $errorMessage="Invalid query: ". $connection->error;
            break;
        }



        $user_name="";
        $password="";
        $site="";
        
        

        $successMessage="Client added correctly";
        header("location: register.php");
        exit;


    }while(false);
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Caterer Management system</title>
<link href="../img/logob.png" rel="icon">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="table.css">
 <link rel="script" href="main. js">
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="../img/logo.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Admin Panel</b></h4>
    <p class="w3-text-grey"><?php echo $_SESSION['user_name'] ?></p>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" class="w3-bar-item w3-button w3-padding  "><i class="fa fa-user fa-fw w3-margin-right"></i>Log</a> 
    <a  href="order-entry.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-th-large fa-fw w3-margin-right"></i>Order_entry</a>
    <a  class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-pencil-square-o fa-fw w3-margin-right"></i>New_register</a>
    <a href="register.php"  class="w3-bar-item w3-button w3-padding "><i class="fa fa-align-justify fa-fw w3-margin-right"></i>Register</a> 
    <a href="../logout.php"  class="w3-bar-item w3-button w3-padding"><i class="fa fa-lock fa-fw w3-margin-right"></i>Logout</a>
  </div>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="../img/logo.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Register new Caterers</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      
    </div>
    </div>
  </header>


  
  <!-- Contact Section -->
   
  <div class="container">
  <form method="post">
    <div class="row">
      <div class="col-25">
        <label for="user_name">user</label>
      </div>
      <div class="col-75">
        <input type="text" id="user_name" name="user_name" placeholder="user_name" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password">password</label>
      </div>
      <div class="col-75">
        <input type="text" id="password" name="password" placeholder="password" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
    <label for="user">User</label>
      </div>
      <div class="col-75">
   	<select id="user" name="user">
		  
           <option value="caterers/index.php" selected>Caterer</option>
		   
           

   		<!-- Add more options as needed -->
   	</select>
       </div>
    </div>

    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
  

<!-- End page content -->
</div>



</body>
</html>
<?php
}
else{
    header("Location: ../index.php");
    exit();
}
?>