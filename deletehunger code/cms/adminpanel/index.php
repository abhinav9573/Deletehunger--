<!DOCTYPE html>
<html lang="en">
<head>
<link href="img/logob.png" rel="icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpanel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <img src="img/logob.png" style="margin-left:29%;" width="100px">
        <h2>adminpanel </h2>
        <?php if(isset($_GET['error'])) { ?>
          <p class="error"> <?php echo $_GET['error']; ?> </p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="kname" placeholder="Enter Your Name"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="PassKey"><br>

        <button type="submit">adminpanel</button><a href="../catererpanel/caterers/index.php">cms</a>
    </form>
    
</body>
</html>