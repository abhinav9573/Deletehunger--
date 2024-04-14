<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="../img/logob.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styled2.css" />
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
          <form action="login.php" method="post">
            <div class="sign-up-text">Log-In</div>
            <?php if(isset($_GET['error'])) { ?>
              <p class="error"> <?php echo $_GET['error']; ?> </p>
            <?php } ?>
            <div class="input-box">
              <input type="email"  name="email" required />
              <label>Email <span><img src="./dexImage/mail.svg" class="span-img"></span></label>
            </div>
            <div class="input-box">
              <input type="password" name="password" required />
              <label>Password <span><img src="./dexImage/lock.svg" class="span-img"></span></label>
            </div>
            <button type="submit">Submit</button><a class="aa" href="register.php">Register</a>
          </form>
        </div>
      </div>
    </div>
    </div>
   
  </body>
</html>
