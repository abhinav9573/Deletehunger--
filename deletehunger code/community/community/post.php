<?php
session_start();

if(isset($_SESSION['id'])&& isset($_SESSION['username'])){
  $name=$_SESSION['username'];
    ?>
<!DOCTYPE html>
<html>
<head>
<title>Community Post</title>
<link href="../img/logob.png" rel="icon">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="form.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="../img/logo.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Post</b></h4>
    <p class="w3-text-grey"><?php echo $name ?></p>
  </div>
  <div class="w3-bar-block">
   
    <a href="index.php"  class="w3-bar-item w3-button w3-padding "><i class="fa fa-align-justify fa-fw w3-margin-right"></i>Home</a> 
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
    <h1><b>Post</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      
    </div>
    </div>
  </header>


  
  <!-- Contact Section -->
   
  <div class="container">
  <form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="row">
      <div class="col-25">
  <label>Select Image File:</label>
      </div>
      <div class="col-75">
    <input type="file" name="image">
    <div class="row">
      <div class="col-25">
        <label for="caption">caption</label>
      </div>
      <div class="col-75">
        <input type="text" id="caption" name="caption" placeholder="caption" required>
      </div>
    </div>
    <input type="hidden" name="name" id="name" value="<?php echo $_SESSION['username'] ; ?>">
    <input type="submit" name="submit" value="Upload">
    </div>
    </div>
    
  
    
		   
           

   
       </div>
    </div>

   
  </form>
</div>
  

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
<?php
}
else{
    header("Location: ../index.php");
    exit();
}
?>