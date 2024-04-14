<?php
require 'config.php';
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $username=$_POST["username"];
    $email=$_POST ["email"];
    $password=$_POST ["password"];
    $confirmpassword=$_POST ["confirmpassword"];
    $duplicate=mysqli_query($conn,"SELECT * FROM community_users WHERE username='$username' OR email='$email' ");
    if(mysqli_num_rows($duplicate) > 0){
        echo "<script>
        alert('username or email has already taken');
        </script>";
    }
    else{
        if($password==$confirmpassword){
            $query=mysqli_query($conn,"INSERT INTO community_users VALUES('','$email','$password','$name','$username')");
            echo 
            "<script>
            alert('Registration successful');</script>";
        }else{
            echo "<script>
            alert('password does not match');
            </script>";
        }
    
    }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="../img/logob.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styled2.css" />
    <link rel="stylesheet" href="register.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap"
      rel="stylesheet"
    />
    
    <title>DeleteHunger Community</title>
  </head>
  
  <body>
    <div class="container">
      <div class="banner-container">
        <div class="text-box">
          <div class="text">
            <div class="text1">Team</div>
            <img src="./dexImage/Delete-Hunger.png"width="125" height="85" alt="logo" class="text-logo" />
            <div>Community</div>
            <div class="tag-line"> Unleashing the Power of Samadhan </div>
            <div class="tag-line1"> Join the DeleteHunger Community, Where Participation and Collaboration Thrive! </div>
          </div>
        </div>
      </div>
      <div class="sign-up-container">
        <div class="sign-up-box">
        <form class="" action="" method="post" autocomplete="off">
            <div class="abc">
        <label class="rbc" for="name">name :</label>
           
        <input class="ipc" type="text" name="name" id="name" required value=""> <br>
            </div>
            <div class="abc">
        <label class="rbc" for="username">username :</label>
        <input class="ipc" type="text" name="username" id="username" required value=""> <br>
            </div>
            <div class="abc">
        <label class="rbc" for="email">email :</label>
        <input class="ipc" type="email" name="email" id="email" required value=""> <br>
            </div>
            <div class="abc">
        <label class="rbc" for="password">password :</label>
        <input class="ipc" type="password" name="password" id="password" required value=""> <br>
            </div>
            <div class="abc">
        <label class="rbc" for="confirmpassword">Confirm password :</label>
        
        <input class="ipc" type="password" name="confirmpassword" id="confirmpassword" required value=""> <br>
            </div>
        <button type="submit" name="submit">Register</button><a class="aa" href="index.php">Log-in</a>
        

    </form> 
         
        </div>
      </div>
    </div>
    </div>
   
  </body>
</html>
