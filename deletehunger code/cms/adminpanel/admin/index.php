<?php
session_start();

if(isset($_SESSION['id'])&& isset($_SESSION['use_name'])){
  $name=$_SESSION['use_name'];
    ?>


<!DOCTYPE html>
<html>
<head>
<title>Caterer Management System</title>
<meta charset="UTF-8">
<link href="../img/logob.png" rel="icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="table.css">
<link rel="stylesheet" href="cms.css">
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
    <a  class="w3-bar-item w3-button w3-padding w3-text-teal "><i class="fa fa-user fa-fw w3-margin-right"></i>Log</a> 
    <a href="order-entry.php"  class="w3-bar-item w3-button w3-padding "><i class="fa fa-th-large fa-fw w3-margin-right"></i>Order_entry</a>
    <a href="new-register.php"  class="w3-bar-item w3-button w3-padding "><i class="fa fa-pencil-square-o fa-fw w3-margin-right"></i>New_register</a>
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
    <h1><b>Logs</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      
    </div>
    </div>
  </header>

  <div style="overflow-x:auto;">
  <table>
    
    <tr>
      <th>id</th>
      <td>name</td>
      <th>Venue</th>
      <th>Date</th>
      <th>time</th>
      <th>Food for number of people</th>
      <th>comments</th>
      <th>Status</th>
      <th>Edit</th>
      <th>Cancel</th>
      <th>Completed</th>
     
    </tr>
    <?php
                $servername="127.0.0.1:3306";
                $username="u130083126_deletehunger";
                $password="Deletehunger@2024";
                $databse="u130083126_deletehunger";
                // create connection
                $connection=new mysqli($servername,$username,$password,$databse);

                // check connection
                if($connection->connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }
                    //  read all row from database table
                $sql= "SELECT * FROM details";

                 $result=$connection->query($sql);
                 if(!$result){
                        die("Invalid query: " . $connection->error);
                    }

                while($row= $result->fetch_assoc()){
                    echo " 
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[venue]</td>
                    <td>$row[date]</td>
                    <td>$row[time]</td>
                    <td>$row[people]</td>
                    <td>$row[comments]</td>
                    <td>$row[status]</td>
                    
                   
                    <td>
                    <a class='button1 button4' href='edit.php?id=$row[id]'>Edit</a>
                        
                    </td>
                   
                    <td>
                    <a class='button button4' href='cancel.php?id=$row[id]'>Cancel</a>
                        
                    </td>
                    <td>
                    <a class='button2 button4' href='completed.php?id=$row[id]'>Complete</a>
                        
                    </td>
                </tr>
                    ";

                }
                ?>
   
  </table>
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